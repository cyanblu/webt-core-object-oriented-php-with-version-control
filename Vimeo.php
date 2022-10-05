<?php

class Vimeo implements InterfaceVideo
{
    private string $name;
    private string $source;
    private string $htmlCode;

    /**
     * @param string $name
     * @param string $source
     * @param string $htmlCode
     */
    public function __construct(string $name, string $source, string $htmlCode)
    {
        $this->name = $name;
        $this->source = $source;
        $this->htmlCode = $htmlCode;
    }


    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function getSource()
    {
        // TODO: Implement getSource() method.
    }

    public function getHtmlCode()
    {
        // TODO: Implement getHtmlCode() method.
    }
}