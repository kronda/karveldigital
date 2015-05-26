<?php

/**
 * Created by PhpStorm.
 * User: radu
 * Date: 02.04.2015
 * Time: 15:33
 */
class Thrive_List_Connection_Mailchimp extends Thrive_List_Connection_Abstract
{
    /**
     * @return string
     */
    public function getTitle()
    {
        return 'Mailchimp';
    }

    /**
     * output the setup form html
     *
     * @return void
     */
    public function outputSetupForm()
    {
        $this->_directFormHtml('mailchimp');
    }

    /**
     * just save the key in the database
     *
     * @return mixed|void
     */
    public function readCredentials()
    {
        $key = !empty($_POST['connection']['key']) ? $_POST['connection']['key'] : '';

        if (empty($key)) {
            return $this->error('You must provide a valid Mailchimp key');
        }

        $this->setCredentials($_POST['connection']);

        $result = $this->testConnection();

        if ($result !== true) {
            return $this->error('Could not connect to Mailchimp using the provided key (<strong>' . $result . '</strong>)');
        }

        /**
         * finally, save the connection details
         */
        $this->save();
        $this->success('Mailchimp connected successfully');
    }

    /**
     * test if a connection can be made to the service using the stored credentials
     *
     * @return bool|string true for success or error message for failure
     */
    public function testConnection()
    {
        $mc = $this->getApi();
        /**
         * just try getting a list as a connection test
         */

        try {
            $mc->lists->getList();
        } catch (Thrive_Api_Mailchimp_Error $e) {
            return $e->getMessage();
        }

        return true;
    }

    /**
     * instantiate the API code required for this connection
     *
     * @return mixed
     */
    protected function _apiInstance()
    {
        return new Thrive_Api_Mailchimp($this->param('key'));
    }

    /**
     * get all Subscriber Lists from this API service
     *
     * @return array
     */
    protected function _getLists()
    {
        /** @var Thrive_Api_Mailchimp $api */
        $api = $this->getApi();

        try {
            $lists = array();

            $raw = $api->lists->getList(array(), 0, 100);
            if (empty($raw['total']) || empty($raw['data'])) {
                return array();
            }
            foreach ($raw['data'] as $item) {
                $lists [] = array(
                    'id' => $item['id'],
                    'name' => $item['name']
                );
            }
            return $lists;
        } catch (Exception $e) {
            $this->_error = $e->getMessage() . ' Please re-check your API connection details.';
            return false;
        }
    }

    /**
     * add a contact to a list
     *
     * @param mixed $list_identifier
     * @param array $arguments
     * @return bool|string true for success or string error message for failure
     */
    public function addSubscriber($list_identifier, $arguments)
    {
        list($first_name, $last_name) = $this->_getNameParts($arguments['name']);

        /** @var Thrive_Api_Mailchimp $api */
        $api = $this->getApi();

        try {
            $api->lists->subscribe(
                $list_identifier,
                array('email' => $arguments['email']),
                array(
                    'FNAME' => $first_name,
                    'LNAME' => $last_name
                ),
                'html',
                true,
                true
            );
            return true;
        } catch (Thrive_Api_Mailchimp_Error $e) {
            return $e->getMessage() ? $e->getMessage() : 'Unknown Mailchimp Error';
        } catch (Exception $e) {
            return $e->getMessage() ? $e->getMessage() : 'Unknown Error';
        }

    }

} 