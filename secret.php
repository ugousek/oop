<?php

class Clovek
{
  public $jmeno;
  public $prijmeni;

  public function __construct($jmeno, $prijmeni)
  {
    $this->jmeno    = $jmeno;
    $this->prijmeni = $prijmeni;
  }
  public function pozdrav()
  {
    echo "Ahoj, já jsem " . $this->jmeno . " " . $this->prijmeni . " a mám před někým tajemství.";
  }
  public function __toString()
  {
    return "Kdo štve Vlastimila Greše: " . $this->jmeno . " " . $this->prijmeni;
  }
}
if (class_exists("Clovek"))
{
  $lucie = new Clovek("Lucie", "Gajzlerova");

  $lucie->pozdrav();
}
echo "<br/>";
if (method_exists("Clovek", "pozdrav"))
{
  //$lucie->pozdrav();
}
echo "<br/>";
echo $lucie;
echo "<br/>";
echo "_______________________________________________________________________";

echo "<br/>";
class domain
{
  protected static function getWebsiteName()
  {
    return "W3Schools.com";
  }
}

class domainW3 extends domain
{
  public $websiteName;
  public function __construct()
  {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3();
echo $domainW3->websiteName;
?>