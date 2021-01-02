<?php
namespace chronos;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class JobData
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'url',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'requestMethod',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $url = null;
    /**
     * @var int
     */
    public $requestMethod = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['url'])) {
                $this->url = $vals['url'];
            }
            if (isset($vals['requestMethod'])) {
                $this->requestMethod = $vals['requestMethod'];
            }
        }
    }

    public function getName()
    {
        return 'JobData';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->url);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->requestMethod);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('JobData');
        if ($this->url !== null) {
            $xfer += $output->writeFieldBegin('url', TType::STRING, 1);
            $xfer += $output->writeString($this->url);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->requestMethod !== null) {
            $xfer += $output->writeFieldBegin('requestMethod', TType::I32, 2);
            $xfer += $output->writeI32($this->requestMethod);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
