<?php
/**
 * Created by PhpStorm.
 * User: patricia
 * Date: 06/11/18
 * Time: 13:19
 */
namespace Filter;

class Text implements FilterInterface
{
    /**
     * @var array
     */
    private $texts;
    /**
     * @return array
     */
    public function getTexts(): array
    {
        return $this->texts;
    }
    /**
     * @param array $texts
     * @return Text
     */
    public function setTexts(array $texts): Text
    {
        $this->texts = $texts;
        return $this;
    }
    /**
     * @return array
     */
    public function filter(): array
    {
        foreach ($this->texts as $key => $text) {
            $this->texts[$key] = strip_tags(stripslashes(trim($text)));
        }
        return $this->texts;
    }
}
