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
  
  public function __construct(string $key, array $params = [], string $default = null, string $locale = Localizer::DEFAULT_LANGUAGE) {
    $this->key = $key;
    $this->params = $params;
    $this->default = $default;
    $this->locale = $locale;
  }
  
  public function get(string $locale = null) {
    $locale = $locale ?? $this->locale;
    return Localizer::{$locale}($this->params, $this->default);
  }
  
}
