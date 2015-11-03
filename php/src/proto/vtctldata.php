<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vtctldata.proto
//   Date: 2015-10-27 20:47:10

namespace vtctldata {

  class ExecuteVtctlCommandRequest extends \DrSlump\Protobuf\Message {

    /**  @var string[]  */
    public $args = array();
    
    /**  @var int */
    public $action_timeout = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'vtctldata.ExecuteVtctlCommandRequest');

      // REPEATED STRING args = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "args";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL INT64 action_timeout = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "action_timeout";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <args> has a value
     *
     * @return boolean
     */
    public function hasArgs(){
      return $this->_has(1);
    }
    
    /**
     * Clear <args> value
     *
     * @return \vtctldata\ExecuteVtctlCommandRequest
     */
    public function clearArgs(){
      return $this->_clear(1);
    }
    
    /**
     * Get <args> value
     *
     * @param int $idx
     * @return string
     */
    public function getArgs($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <args> value
     *
     * @param string $value
     * @return \vtctldata\ExecuteVtctlCommandRequest
     */
    public function setArgs( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <args>
     *
     * @return string[]
     */
    public function getArgsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <args>
     *
     * @param string $value
     * @return \vtctldata\ExecuteVtctlCommandRequest
     */
    public function addArgs( $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <action_timeout> has a value
     *
     * @return boolean
     */
    public function hasActionTimeout(){
      return $this->_has(2);
    }
    
    /**
     * Clear <action_timeout> value
     *
     * @return \vtctldata\ExecuteVtctlCommandRequest
     */
    public function clearActionTimeout(){
      return $this->_clear(2);
    }
    
    /**
     * Get <action_timeout> value
     *
     * @return int
     */
    public function getActionTimeout(){
      return $this->_get(2);
    }
    
    /**
     * Set <action_timeout> value
     *
     * @param int $value
     * @return \vtctldata\ExecuteVtctlCommandRequest
     */
    public function setActionTimeout( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace vtctldata {

  class ExecuteVtctlCommandResponse extends \DrSlump\Protobuf\Message {

    /**  @var \logutil\Event */
    public $event = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'vtctldata.ExecuteVtctlCommandResponse');

      // OPTIONAL MESSAGE event = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "event";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\logutil\Event';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <event> has a value
     *
     * @return boolean
     */
    public function hasEvent(){
      return $this->_has(1);
    }
    
    /**
     * Clear <event> value
     *
     * @return \vtctldata\ExecuteVtctlCommandResponse
     */
    public function clearEvent(){
      return $this->_clear(1);
    }
    
    /**
     * Get <event> value
     *
     * @return \logutil\Event
     */
    public function getEvent(){
      return $this->_get(1);
    }
    
    /**
     * Set <event> value
     *
     * @param \logutil\Event $value
     * @return \vtctldata\ExecuteVtctlCommandResponse
     */
    public function setEvent(\logutil\Event $value){
      return $this->_set(1, $value);
    }
  }
}

