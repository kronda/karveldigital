<?php
/*
 * This file is part of the ManageWP Worker plugin.
 *
 * (c) ManageWP LLC <contact@managewp.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class MWP_IncrementalBackup_Database_MysqlConnection implements MWP_IncrementalBackup_Database_ConnectionInterface
{

    /**
     * @var resource
     */
    private $connection;

    /**
     * @var
     */
    private $configuration;

    public function __construct(MWP_IncrementalBackup_Database_Configuration $configuration)
    {
        $this->configuration = $configuration;

        if (!extension_loaded('mysql')) {
            throw new MWP_IncrementalBackup_Database_Exception_ConnectionException("Mysql extension is not loaded.");
        }

        if ($configuration->isSocket()) {
            $this->connection = @mysql_connect(':'.$configuration->getSocketPath(), $configuration->getUsername(), $configuration->getPassword());
        } else {
            $host = $configuration->getHost();
            if ($configuration->getPort() !== null) {
                $host .= ':'.$configuration->getPort();
            }
            $this->connection = @mysql_connect($host, $configuration->getUsername(), $configuration->getPassword());
        }

        if (!is_resource($this->connection)) {
            throw new MWP_IncrementalBackup_Database_Exception_ConnectionException(mysql_error(), mysql_errno());
        }

        @mysql_set_charset($configuration->getCharset(), $this->connection);
        mysql_select_db($configuration->getDatabase(), $this->connection);
    }

    /**
     * @param string $query
     *
     * @throws MWP_IncrementalBackup_Database_Exception_ConnectionException
     *
     * @return MWP_IncrementalBackup_Database_StatementInterface
     */
    public function query($query)
    {
        $result = mysql_query($query, $this->connection);

        if ($result === false) {
            throw new MWP_IncrementalBackup_Database_Exception_ConnectionException(mysql_error($this->connection), mysql_errno($this->connection));
        }

        return new MWP_IncrementalBackup_Database_MysqlStatement($result);
    }

    /**
     * @param mixed $value any primitive value
     *
     * @return string
     */
    public function quote($value)
    {
        return "'".mysql_real_escape_string($value, $this->connection)."'";
    }
}