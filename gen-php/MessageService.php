<?php
namespace Line;
/**
 * Autogenerated by Thrift Compiler (0.9.1)
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


interface MessageServiceIf {
  public function fetchMessageOperations($localRevision, $lastOpTimestamp, $count);
  public function getLastReadMessageIds($chatId);
  public function multiGetLastReadMessageIds($chatIds);
}

class MessageServiceClient implements \MessageServiceIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output=null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function fetchMessageOperations($localRevision, $lastOpTimestamp, $count)
  {
    $this->send_fetchMessageOperations($localRevision, $lastOpTimestamp, $count);
    return $this->recv_fetchMessageOperations();
  }

  public function send_fetchMessageOperations($localRevision, $lastOpTimestamp, $count)
  {
    $args = new \MessageService_fetchMessageOperations_args();
    $args->localRevision = $localRevision;
    $args->lastOpTimestamp = $lastOpTimestamp;
    $args->count = $count;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'fetchMessageOperations', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('fetchMessageOperations', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_fetchMessageOperations()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\MessageService_fetchMessageOperations_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \MessageService_fetchMessageOperations_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("fetchMessageOperations failed: unknown result");
  }

  public function getLastReadMessageIds($chatId)
  {
    $this->send_getLastReadMessageIds($chatId);
    return $this->recv_getLastReadMessageIds();
  }

  public function send_getLastReadMessageIds($chatId)
  {
    $args = new \MessageService_getLastReadMessageIds_args();
    $args->chatId = $chatId;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'getLastReadMessageIds', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('getLastReadMessageIds', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getLastReadMessageIds()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\MessageService_getLastReadMessageIds_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \MessageService_getLastReadMessageIds_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("getLastReadMessageIds failed: unknown result");
  }

  public function multiGetLastReadMessageIds($chatIds)
  {
    $this->send_multiGetLastReadMessageIds($chatIds);
    return $this->recv_multiGetLastReadMessageIds();
  }

  public function send_multiGetLastReadMessageIds($chatIds)
  {
    $args = new \MessageService_multiGetLastReadMessageIds_args();
    $args->chatIds = $chatIds;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'multiGetLastReadMessageIds', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('multiGetLastReadMessageIds', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_multiGetLastReadMessageIds()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\MessageService_multiGetLastReadMessageIds_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \MessageService_multiGetLastReadMessageIds_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->e !== null) {
      throw $result->e;
    }
    throw new \Exception("multiGetLastReadMessageIds failed: unknown result");
  }

}

// HELPER FUNCTIONS AND STRUCTURES

class MessageService_fetchMessageOperations_args {
  static $_TSPEC;

  public $localRevision = null;
  public $lastOpTimestamp = null;
  public $count = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        2 => array(
          'var' => 'localRevision',
          'type' => TType::I64,
          ),
        3 => array(
          'var' => 'lastOpTimestamp',
          'type' => TType::I64,
          ),
        4 => array(
          'var' => 'count',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['localRevision'])) {
        $this->localRevision = $vals['localRevision'];
      }
      if (isset($vals['lastOpTimestamp'])) {
        $this->lastOpTimestamp = $vals['lastOpTimestamp'];
      }
      if (isset($vals['count'])) {
        $this->count = $vals['count'];
      }
    }
  }

  public function getName() {
    return 'MessageService_fetchMessageOperations_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->localRevision);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->lastOpTimestamp);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->count);
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MessageService_fetchMessageOperations_args');
    if ($this->localRevision !== null) {
      $xfer += $output->writeFieldBegin('localRevision', TType::I64, 2);
      $xfer += $output->writeI64($this->localRevision);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->lastOpTimestamp !== null) {
      $xfer += $output->writeFieldBegin('lastOpTimestamp', TType::I64, 3);
      $xfer += $output->writeI64($this->lastOpTimestamp);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->count !== null) {
      $xfer += $output->writeFieldBegin('count', TType::I32, 4);
      $xfer += $output->writeI32($this->count);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class MessageService_fetchMessageOperations_result {
  static $_TSPEC;

  public $success = null;
  public $e = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\MessageOperations',
          ),
        1 => array(
          'var' => 'e',
          'type' => TType::STRUCT,
          'class' => '\TalkException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['e'])) {
        $this->e = $vals['e'];
      }
    }
  }

  public function getName() {
    return 'MessageService_fetchMessageOperations_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \MessageOperations();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->e = new \TalkException();
            $xfer += $this->e->read($input);
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MessageService_fetchMessageOperations_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->e !== null) {
      $xfer += $output->writeFieldBegin('e', TType::STRUCT, 1);
      $xfer += $this->e->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class MessageService_getLastReadMessageIds_args {
  static $_TSPEC;

  public $chatId = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        2 => array(
          'var' => 'chatId',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['chatId'])) {
        $this->chatId = $vals['chatId'];
      }
    }
  }

  public function getName() {
    return 'MessageService_getLastReadMessageIds_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->chatId);
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MessageService_getLastReadMessageIds_args');
    if ($this->chatId !== null) {
      $xfer += $output->writeFieldBegin('chatId', TType::STRING, 2);
      $xfer += $output->writeString($this->chatId);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class MessageService_getLastReadMessageIds_result {
  static $_TSPEC;

  public $success = null;
  public $e = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\LastReadMessageIds',
          ),
        1 => array(
          'var' => 'e',
          'type' => TType::STRUCT,
          'class' => '\TalkException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['e'])) {
        $this->e = $vals['e'];
      }
    }
  }

  public function getName() {
    return 'MessageService_getLastReadMessageIds_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \LastReadMessageIds();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->e = new \TalkException();
            $xfer += $this->e->read($input);
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MessageService_getLastReadMessageIds_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->e !== null) {
      $xfer += $output->writeFieldBegin('e', TType::STRUCT, 1);
      $xfer += $this->e->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class MessageService_multiGetLastReadMessageIds_args {
  static $_TSPEC;

  public $chatIds = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        2 => array(
          'var' => 'chatIds',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['chatIds'])) {
        $this->chatIds = $vals['chatIds'];
      }
    }
  }

  public function getName() {
    return 'MessageService_multiGetLastReadMessageIds_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 2:
          if ($ftype == TType::LST) {
            $this->chatIds = array();
            $_size664 = 0;
            $_etype667 = 0;
            $xfer += $input->readListBegin($_etype667, $_size664);
            for ($_i668 = 0; $_i668 < $_size664; ++$_i668)
            {
              $elem669 = null;
              $xfer += $input->readString($elem669);
              $this->chatIds []= $elem669;
            }
            $xfer += $input->readListEnd();
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MessageService_multiGetLastReadMessageIds_args');
    if ($this->chatIds !== null) {
      if (!is_array($this->chatIds)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('chatIds', TType::LST, 2);
      {
        $output->writeListBegin(TType::STRING, count($this->chatIds));
        {
          foreach ($this->chatIds as $iter670)
          {
            $xfer += $output->writeString($iter670);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class MessageService_multiGetLastReadMessageIds_result {
  static $_TSPEC;

  public $success = null;
  public $e = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\LastReadMessageIds',
            ),
          ),
        1 => array(
          'var' => 'e',
          'type' => TType::STRUCT,
          'class' => '\TalkException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['e'])) {
        $this->e = $vals['e'];
      }
    }
  }

  public function getName() {
    return 'MessageService_multiGetLastReadMessageIds_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::LST) {
            $this->success = array();
            $_size671 = 0;
            $_etype674 = 0;
            $xfer += $input->readListBegin($_etype674, $_size671);
            for ($_i675 = 0; $_i675 < $_size671; ++$_i675)
            {
              $elem676 = null;
              $elem676 = new \LastReadMessageIds();
              $xfer += $elem676->read($input);
              $this->success []= $elem676;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->e = new \TalkException();
            $xfer += $this->e->read($input);
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MessageService_multiGetLastReadMessageIds_result');
    if ($this->success !== null) {
      if (!is_array($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::LST, 0);
      {
        $output->writeListBegin(TType::STRUCT, count($this->success));
        {
          foreach ($this->success as $iter677)
          {
            $xfer += $iter677->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->e !== null) {
      $xfer += $output->writeFieldBegin('e', TType::STRUCT, 1);
      $xfer += $this->e->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


