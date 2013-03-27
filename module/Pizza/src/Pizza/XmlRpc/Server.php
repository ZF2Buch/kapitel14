<?php
/**
 * ZF2 Buch Kapitel 14
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
 */

/**
 * namespace definition and usage
 */
namespace Pizza\XmlRpc;

/**
 * XML-RPC server class
 * 
 * Handles the XML-RPC server requests
 * 
 * @package    Pizza
 */
class Server
{
    protected $pizzaList = array(
        '1' => 'Salami',
        '2' => 'Hawaii',
        '3' => 'Melone',
    );
    
    /**
     * @param integer $id
     * @param string $name
     * @return string
     */
    public function deliverPizza($id, $name)
    {
        $text = 'Lieber ' . $name . ', deine Pizza ';
        $text.= isset($this->pizzaList[$id]) ? $this->pizzaList[$id] : 'XXX';
        $text.= ' wurde gebacken und ausgeliefert!';
        
        return $text;
    }
    
    /**
     * @return array
     */
    public function showPizzas()
    {
        return $this->pizzaList;
    }
}
