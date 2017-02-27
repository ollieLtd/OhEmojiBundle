<?php

namespace Oh\EmojiBundle\Extension;

use Oh\EmojiBundle\Service\EmojiConverter;

class EmojiExtension extends \Twig_Extension 
{

    protected $converter;

    public function __construct(EmojiConverter $converter) {

        $this->converter = $converter;
    }

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('iphone_emoji', array($this, 'iPhoneToHtml')),
            new \Twig_SimpleFilter('google_emoji', array($this, 'googleToHtml')),
        );
    }

    public function iPhoneToHtml($sentence) {
        return $this->converter->iPhoneToHtml($sentence);
    }

    public function googleToHtml($sentence) {
        return $this->converter->googleToHtml($sentence);
    }

    public function getName() {
        return 'emoji';
    }

}
