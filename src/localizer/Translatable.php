<?php
namespace localizer;

class Translatable {
  
  /**
   * ISO-639-1 language code
   * @type string 
   */
  public $locale;
   
  /** @type array */
  public $params;
  
  /** @type string|null */
  public $default;
    
   /** @type string */
  public $key;
  
  public function __construct(string $key, array $params = [], string $default = null, string $locale = Localizer::DEFAULT_LANGUAGE) : Translatable {
    $this->key = $key;
    $this->params = $params;
    $this->default = $default;
    $this->locale = $locale;
    return $this;
  }
  
  /*
   * ------------------------------------------------------------
   * FLUENT SETTERS
   * -----------------------------------------------------------
   *
   */
  
  public function setLocale(string $locale) : Translatable {
    $this->locale = $locale;
    return $this;
  }
  
  public function setParams(array $params) : Translatable {
    $this->params = $params; 
    return $this;
  }
  
  public function setParam(string $name, $value) :Translatable {
    $this->params[$name] = $value;
    return $this;
  }
  
  public function setDefault($default) : Translatable {
    $this->default = $default; 
    return $this;
  }
  
  /*
   * ------------------------------------------------------------
   * TRANSLATE
   * -----------------------------------------------------------
   *
   */
  
  public function get(string $locale = null) {
    $locale = $locale ?? $this->locale;
    return Localizer::{$locale}($this->params, $this->default);
  }
  
  public function __toString() {
    return $this->get(); 
  }
  
}
