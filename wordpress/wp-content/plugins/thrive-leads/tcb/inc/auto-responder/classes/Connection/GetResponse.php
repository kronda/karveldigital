<?php

/**
 * Created by PhpStorm.
 * User: radu
 * Date: 03.04.2015
 * Time: 19:44
 */
class Thrive_List_Connection_GetResponse extends Thrive_List_Connection_Abstract
{
    /**
     * Return the connection type
     * @return String
     */
    public static function getType()
    {
        return 'autoresponder';
    }

    /**
     * @return string the API connection title
     */
    public function getTitle()
    {
        return 'GetResponse';
    }

    /**
     * output the setup form html
     *
     * @return void
     */
    public function outputSetupForm()
    {
        $this->_directFormHtml('get-response');
    }

    /**
     * should handle: read data from post / get, test connection and save the details
     *
     * on error, it should register an error message (and redirect?)
     *
     * @return mixed
     */
    public function readCredentials()
    {
        $key = !empty($_POST['connection']['key']) ? $_POST['connection']['key'] : '';

        if (empty($key)) {
            return $this->error(__('You must provide a valid GetResponse key', 'thrive-cb'));
        }

        $this->setCredentials($_POST['connection']);

        $result = $this->testConnection();

        if ($result !== true) {
            return $this->error(sprintf(__('Could not connect to GetResponse using the provided key (<strong>%s</strong>)', 'thrive-cb'), $result));
        }

        /**
         * finally, save the connection details
         */
        $this->save();
        $this->success(__('GetResponse connected successfully', 'thrive-cb'));
    }

    /**
     * test if a connection can be made to the service using the stored credentials
     *
     * @return bool|string true for success or error message for failure
     */
    public function testConnection()
    {
        /** @var Thrive_Api_GetResponse $gr */
        $gr = $this->getApi();
        /**
         * just try getting a list as a connection test
         */

        try {
            $campaigns = $gr->getCampaigns();
        } catch (Thrive_Api_GetResponse_Exception $e) {
            return $e->getMessage();
        }

        return true;
    }

    /**
     * instantiate the API code required for this connection
     *
     * @return Thrive_Api_GetResponse
     */
    protected function _apiInstance()
    {
        return new Thrive_Api_GetResponse($this->param('key'));
    }

    /**
     * get all Subscriber Lists from this API service
     *
     * @return array
     */
    protected function _getLists()
    {
        /** @var Thrive_Api_GetResponse $gr */
        $gr = $this->getApi();

        try {
            $lists = array();
            $items = $gr->getCampaigns();
            foreach ($items as $key => $item) {
                $lists [] = array(
                    'id' => $key,
                    'name' => $item->name
                );
            }

            return $lists;
        } catch (Exception $e) {
            $this->_error = $e->getMessage();
            return false;
        }
    }

    /**
     * add a contact to a list
     *
     * @param array $list_identifier
     * @param array $arguments
     * @return mixed
     */
    public function addSubscriber($list_identifier, $arguments)
    {
        /** @var Thrive_Api_GetResponse $api */
        $api = $this->getApi();

        try {
            if (empty($arguments['name'])) {
                $arguments['name'] = ' ';
            }
            $api->addContact($list_identifier, $arguments['name'], $arguments['email']);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return true;
    }

} 