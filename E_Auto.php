<?php
require_once 'Auto.php';
class E_Auto extends Auto
{
  public int $reichweite;

    /**
     * @param int $reichweite
     */
    public function __construct(int $reichweite)
    {
        parent::__construct();
        $this->reichweite = $reichweite;
    }


}