<?php

namespace JBBCode;

require_once 'CodeDefinition.php';
require_once 'CodeDefinitionBuilder.php';
require_once 'CodeDefinitionSet.php';
require_once 'validators/CssColorValidator.php';
require_once 'validators/UrlValidator.php';

/**
 * Provides a default set of common bbcode definitions.
 *
 * @author jbowens
 */
class DefaultCodeDefinitionSet implements CodeDefinitionSet
{

    /* The default code definitions in this set. */
    protected $definitions = array();

    /**
     * Constructs the default code definitions.
     */
    public function __construct()
    {                                
        /* [hr] hr tag */
        $builder = new CodeDefinitionBuilder('hr', '<hr />');
        array_push($this->definitions, $builder->build());
        
        /* [b] bold tag */
        $builder = new CodeDefinitionBuilder('b', '<strong>{param}</strong>');
        array_push($this->definitions, $builder->build());

        /* [i] italics tag */
        $builder = new CodeDefinitionBuilder('i', '<em>{param}</em>');
        array_push($this->definitions, $builder->build());

        /* [u] italics tag */
        $builder = new CodeDefinitionBuilder('u', '<u>{param}</u>');
        array_push($this->definitions, $builder->build());
        
        /* [s] s tag */
        $builder = new CodeDefinitionBuilder('s', '<s>{param}</s>');
        array_push($this->definitions, $builder->build());
        
        /* [sub] sub tag */
        $builder = new CodeDefinitionBuilder('sub', '<sub>{param}</sub>');
        array_push($this->definitions, $builder->build());
        
        /* [sup] sup tag */
        $builder = new CodeDefinitionBuilder('sup', '<sup>{param}</sup>');
        array_push($this->definitions, $builder->build());
        
        /* [left] left tag */
        $builder = new CodeDefinitionBuilder('left', '<div align="left">{param}</div>');
        array_push($this->definitions, $builder->build());
        
        /* [right] right tag */
        $builder = new CodeDefinitionBuilder('right', '<div align="right">{param}</div>');
        array_push($this->definitions, $builder->build());
        
        
        $urlValidator = new \JBBCode\validators\UrlValidator();

        /* [url] link tag */
        $builder = new CodeDefinitionBuilder('url', '<a href="{param}">{param}</a>');
        $builder->setParseContent(false)->setBodyValidator($urlValidator);
        array_push($this->definitions, $builder->build());

        /* [url=http://example.com] link tag */
        $builder = new CodeDefinitionBuilder('url', '<a href="{option}">{param}</a>');
        $builder->setUseOption(true)->setParseContent(true)->setOptionValidator($urlValidator);
        array_push($this->definitions, $builder->build());

        /* [img] image tag */
        $builder = new CodeDefinitionBuilder('img', '<img src="{param}" />');
        $builder->setUseOption(false)->setParseContent(false)->setBodyValidator($urlValidator);
        array_push($this->definitions, $builder->build());
        
        $builder = new CodeDefinitionBuilder('email', '<a href="mailto:{option}">{param}</a>');
        $builder->setUseOption(true)->setParseContent(true)->setBodyValidator($urlValidator);
        array_push($this->definitions, $builder->build());

        /* [img=alt text] image tag */
        $builder = new CodeDefinitionBuilder('img', '<img src="{param} alt="{option}" />');
        $builder->setUseOption(true);
        array_push($this->definitions, $builder->build());
        
        /* [img=alt text] image tag */
        $builder = new CodeDefinitionBuilder('img', '<img width="{option}" height="{option}" src="{param} alt="{option}" />');
        $builder->setUseOption(true);
        array_push($this->definitions, $builder->build());

        /* [color] color tag */
        $builder = new CodeDefinitionBuilder('color', '<span style="color: {option}">{param}</span>');
        $builder->setUseOption(true)->setOptionValidator(new \JBBCode\validators\CssColorValidator());
        array_push($this->definitions, $builder->build());
        
        /* [center] center tag */
        $builder = new CodeDefinitionBuilder('center', '<center>{param}</center>');
        array_push($this->definitions, $builder->build());
        
        /* [justify] justify tag */
        $builder = new CodeDefinitionBuilder('justify', '<div align="justify">{param}</div>');
        array_push($this->definitions, $builder->build());
        
        /* [font] font tag */
        $builder = new CodeDefinitionBuilder('font', '<font face="{option}">{param}</font>');
        $builder->setUseOption(true);
        array_push($this->definitions, $builder->build());
        
        /* [size] size tag */
        $builder = new CodeDefinitionBuilder('size', '<font size="{option}">{param}</font>');
        $builder->setUseOption(true);
        array_push($this->definitions, $builder->build());
        
        /* [ol][li] tag */
        $builder = new CodeDefinitionBuilder('ol', '<ol>{param}</ol>');
        array_push($this->definitions, $builder->build());
        
        /* [ul][li] tag */
        $builder = new CodeDefinitionBuilder('ul', '<ul>{param}</ul>');
        array_push($this->definitions, $builder->build());
        
        /* [ol][li] tag */
        $builder = new CodeDefinitionBuilder('li', '<li>{param}</li>');
        array_push($this->definitions, $builder->build());
        
        /* [youtube] youtube tag */
        $builder = new CodeDefinitionBuilder('youtube', '<iframe width="560" height="315" src="http://www.youtube.com/embed/{param}?wmode=opaque" data-youtube-id="{param}" frameborder="0" allowfullscreen=""></iframe>');
        array_push($this->definitions, $builder->build());
        
        /*[code]*/
        $builder = new CodeDefinitionBuilder('code', '<div align="justify"><pre>{param}</pre></div>');
        array_push($this->definitions, $builder->build());
        
    }

    /**
     * Returns an array of the default code definitions.
     */
    public function getCodeDefinitions()
    {
        return $this->definitions;
    }

}
