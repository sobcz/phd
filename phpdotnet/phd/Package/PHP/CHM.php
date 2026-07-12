<?php
namespace phpdotnet\phd;

class Package_PHP_CHM extends Package_PHP_ChunkedXHTML
{
    const DEFAULT_FONT = "Arial,10,0";
    const DEFAULT_TITLE = "PHP Manual";

    // Array to manual code -> HTML Help Code conversion
    // Code list: http://www.helpware.net/htmlhelp/hh_info.htm
    // Charset list: http://msdn.microsoft.com/en-us/goglobal/bb896001.aspx
    // Language code: http://www.unicode.org/unicode/onlinedat/languages.html
    // MIME preferred charset list: http://www.iana.org/assignments/character-sets
    // Font list: http://www.microsoft.com/office/ork/xp/three/inte03.htm
    private $LANGUAGES = array(
        "hk"    => array(
            "langcode" => "0xc04 Hong Kong Cantonese",
            "preferred_charset" => "CP950",
            "mime_charset_name" => "Big5",
            "preferred_font" => "MingLiu,10,0"
        ),
        "tw"    => array(
            "langcode" => "0x404 Traditional Chinese",
            "preferred_charset" => "CP950",
            "mime_charset_name" => "Big5",
            "preferred_font" => "MingLiu,10,0"
        ),
        "cs"    => array(
            "langcode" => "0x405 Czech",
            "preferred_charset" => "Windows-1250",
            "mime_charset_name" => "Windows-1250",
            "preferred_font" => self::DEFAULT_FONT,
        ),
        "da"    => array(
            "langcode" => "0x406 Danish",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT,
            "title" => "PHP Manualen"
        ),
        "de"    => array(
            "langcode" => "0x407 German (Germany)",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT,
            "title" => "PHP Handbuch",
        ),
        "el"    => array(
            "langcode" => "0x408 Greek",
            "preferred_charset" => "Windows-1253",
            "mime_charset_name" => "Windows-1253",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "en"    => array(
            "langcode" => "0x809 English (United Kingdom)",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT,
            "title" => "PHP Manual",
        ),
        "es"    => array(
            "langcode" => "0xc0a Spanish (International Sort)",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "fa"    => array(
            "langcode" => "0x429 Persian",
            "preferred_charset" => "Windows-1254",
            "mime_charset_name" => "Windows-1254",
            "preferred_font" => "Sylfaen,10,0",
        ),
        "fr"    => array(
            "langcode" => "0x40c French (France)",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT,
            "title" => "Manuel PHP"
        ),
        "fi"    => array(
            "langcode" => "0x40b Finnish",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "he"    => array(
            "langcode" => "0x40d Hebrew",
            "preferred_charset" => "Windows-1255",
            "mime_charset_name" => "Windows-1255",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "hu"    => array(
            "langcode" => "0x40e Hungarian",
            "preferred_charset" => "Windows-1250",
            "mime_charset_name" => "Windows-1250",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "it"    => array(
            "langcode" => "0x410 Italian (Italy)",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT,
            "title" => "Manuale PHP",
        ),
        "ja"    => array(
            "langcode" => "0x411 Japanese",
            "preferred_charset" => "CP932",
            "mime_charset_name" => "csWindows31J",
            "preferred_font" => "MS PGothic,10,0"
        ),
        "kr"    => array(
            "langcode" => "0x412 Korean",
            "preferred_charset" => "CP949",
            "mime_charset_name" => "EUC-KR",
            "preferred_font" => "Gulim,10,0"
        ),
        "nl"    => array(
            "langcode" => "0x413 Dutch (Netherlands)",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "no"    => array(
            "langcode" => "0x414 Norwegian (Bokmal)",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "pl"    => array(
            "langcode" => "0x415 Polish",
            "preferred_charset" => "Windows-1250",
            "mime_charset_name" => "Windows-1250",
            "preferred_font" => self::DEFAULT_FONT,
            "title" => "Podręcznik PHP",
        ),
        "pt_BR" => array(
            "langcode" => "0x416 Portuguese (Brazil)",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT,
            "title" => "Manual do PHP",
        ),
        "ro"    => array(
            "langcode" => "0x418 Romanian",
            "preferred_charset" => "ASCII//TRANSLIT//IGNORE",
            "mime_charset_name" => "Windows-1250",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "ru"    => array(
            "langcode" => "0x419 Russian",
            "preferred_charset" => "Windows-1251",
            "mime_charset_name" => "Windows-1251",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "sk"    => array(
            "langcode" => "0x41b Slovak",
            "preferred_charset" => "Windows-1250",
            "mime_charset_name" => "Windows-1250",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "sl"    => array(
            "langcode" => "0x424 Slovenian",
            "preferred_charset" => "Windows-1250",
            "mime_charset_name" => "Windows-1250",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "sv"    => array(
            "langcode" => "0x41d Swedish",
            "preferred_charset" => "Windows-1252",
            "mime_charset_name" => "Windows-1252",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "tr"    => array(
            "langcode" => "0x41f Turkish",
            "preferred_charset" => "Windows-1254",
            "mime_charset_name" => "Windows-1254",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "uk"    => array(
            "langcode" => "0x422 Ukrainian",
            "preferred_charset" => "Windows-1251",
            "mime_charset_name" => "Windows-1251",
            "preferred_font" => self::DEFAULT_FONT
        ),
        "zh"    => array(
            "langcode" => "0x804 Simplified Chinese",
            "preferred_charset" => "CP936",
            "mime_charset_name" => "gb2312",
            "preferred_font" => "simsun,10,0"
        )
    );

    // HTML Help Workshop project file
    protected $hhpStream;
    // CHM Table of contents
    protected $hhcStream;
    protected $currentTocDepth = 0;
    protected $lastContent = null;
    protected $toc;
    // CHM Index Map
    protected $hhkStream;
    // Project files Output directory
    protected $chmdir;
    protected $supportedCharacters = array();


    public function __construct(
        Config $config,
        OutputHandler $outputHandler
    ) {
        parent::__construct($config, $outputHandler);
        $this->registerFormatName("PHP-CHM");
        $this->exampleCounterIsPerPage = false;
    }

    public function __destruct() {
        self::footerChm();

        fclose($this->hhpStream);
        fclose($this->hhcStream);
        fclose($this->hhkStream);

        parent::__destruct();
    }

    public function update($event, $value = null) {
        switch($event) {
        case Render::CHUNK:
            parent::update($event, $value);
            break;

        case Render::STANDALONE:
            parent::update($event, $value);
            break;

        case Render::INIT:
            $this->loadVersionAcronymInfo();
            $this->chmdir = $this->config->outputDir . strtolower($this->getFormatName()) . DIRECTORY_SEPARATOR;
            if(!file_exists($this->chmdir) || is_file($this->chmdir)) {
                mkdir($this->chmdir, 0777, true) or die("Can't create the CHM project directory");
            }
            $this->outputdir = $this->config->outputDir . strtolower($this->getFormatName()) . DIRECTORY_SEPARATOR . "res" . DIRECTORY_SEPARATOR;
            $this->postConstruct();
            if(!file_exists($this->outputdir) || is_file($this->outputdir)) {
                mkdir($this->outputdir, 0777, true) or die("Can't create the cache directory");
            }
            $lang = $this->config->language;
            $this->hhpStream = fopen($this->chmdir . "php_manual_{$lang}.hhp", "w");
            $this->hhcStream = fopen($this->chmdir . "php_manual_{$lang}.hhc", "w");
            $this->hhkStream = fopen($this->chmdir . "php_manual_{$lang}.hhk", "w");

            $stylesheet	= $this->fetchStylesheet();
            $this->headerChm();

            // Save the stylesheet.
            file_put_contents($this->outputdir . "style.css", $stylesheet .
				'#usernotes {margin-left : inherit;}' . PHP_EOL .
				// Fix responsive layout
				'#layout-content { width: 100% !important; }' . PHP_EOL
			);
            break;
        case Render::VERBOSE:
            parent::update($event, $value);
            break;
        }
    }

    protected function appendChm($name, $ref, $hasChild) {
        if ($this->flags & Render::OPEN) {
            $charset = $this->LANGUAGES[$this->config->language]["preferred_charset"];
            $name = htmlspecialchars(iconv('UTF-8', $charset, html_entity_decode($name, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, $charset);

            $this->currentTocDepth++;
            fwrite($this->hhpStream, "{$ref}\n");
            fwrite($this->hhcStream, "{$this->offset(1)}<LI><OBJECT type=\"text/sitemap\">\n" .
                "{$this->offset(3)}<param name=\"Name\" value=\"" . $name . "\">\n" .
                "{$this->offset(3)}<param name=\"Local\" value=\"{$ref}\">\n" .
                "{$this->offset(2)}</OBJECT>\n");
            if ($hasChild) fwrite($this->hhcStream, "{$this->offset(2)}<ul>\n");
            fwrite($this->hhkStream,
                "      <LI><OBJECT type=\"text/sitemap\">\n" .
                "        <param name=\"Local\" value=\"{$ref}\">\n" .
                "        <param name=\"Name\" value=\"" . self::cleanIndexName($name) . "\">\n" .
                "      </OBJECT>\n");
        } elseif ($this->flags & Render::CLOSE) {
            if ($hasChild) {
                fwrite($this->hhcStream, "{$this->offset(2)}</ul>\n");
            }
            $this->currentTocDepth--;
        }
    }

    /**
    * Clean up the index name.
    * Newlines and double spaces don't look that good in some chm viewer apps.
    *
    * @param string $value Value to fix
    *
    * @return string Fixed/cleaned value
    */
    protected static function cleanIndexName($value)
    {
        return str_replace(
            array("\n", "\r", '  '),
            array('', '', ' '),
            $value
        );
    }


    protected function headerChm() {
        $lang = $this->config->language;
        fwrite($this->hhpStream, '[OPTIONS]
Binary TOC=Yes
Compatibility=1.1 or later
Compiled file=php_manual_' . $lang . '.chm
Contents file=php_manual_' . $lang . '.hhc
Default Font=' . ($this->LANGUAGES[$lang]["preferred_font"] ? $this->LANGUAGES[$lang]["preferred_font"] : self::DEFAULT_FONT). '
Default topic=res' . DIRECTORY_SEPARATOR . 'index.html
Default Window=doc
Display compile progress=Yes
Enhanced decompilation=Yes
Full-text search=Yes
Index file=php_manual_' . $lang . '.hhk
Language=' . $this->LANGUAGES[$lang]["langcode"] . '
Title=' . (isset($this->LANGUAGES[$lang]["title"]) ? $this->LANGUAGES[$lang]["title"] : self::DEFAULT_TITLE) . '

[WINDOWS]
doc="' . (isset($this->LANGUAGES[$lang]["title"]) ? $this->LANGUAGES[$lang]["title"] : self::DEFAULT_TITLE) . '","php_manual_' . $lang . '.hhc","php_manual_' . $lang . '.hhk","res/index.html","res/index.html",,,,,0x33520,,0x70386e,,,,,,,,0

[FILES]
res' . DIRECTORY_SEPARATOR . 'style.css
');
        fwrite($this->hhcStream, '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
  <head>
    <meta name="generator" content="PhD">
    <!-- Sitemap 1.0 -->
  </head>
  <body>
    <object type="text/site properties">
      <param name="Window Styles" value="0x800227">
    </object>
    <ul>
');
        fwrite($this->hhkStream, '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
  <head>
    <meta name="generator" content="PhD">
    <!-- Sitemap 1.0 -->
  </head>
  <body>
    <object type="text/site properties">
      <param name="Window Styles" value="0x800227">
    </object>
    <ul>
');
    }

    protected function footerChm() {
        fwrite($this->hhcStream, "    </ul>\n" .
            "  </body>\n" .
            "</html>\n");
        fwrite($this->hhkStream, "    </ul>\n" .
            "  </body>\n" .
            "</html>\n");
    }

    public function appendData($data) {
        if ($this->lastContent) {
            $this->appendChm($this->lastContent["name"], $this->lastContent["reference"], $this->lastContent["hasChild"]);
        }
        $this->lastContent = null;
        return parent::appendData($data);
    }

    public function format_chunk($open, $name, $attrs, $props) {
        $this->collectContent($attrs);
        return parent::format_chunk($open, $name, $attrs, $props);
    }

    public function format_container_chunk($open, $name, $attrs, $props) {
        $this->collectContent($attrs);
        return parent::format_container_chunk($open, $name, $attrs, $props);
    }

    public function format_root_chunk($open, $name, $attrs) {
        $this->collectContent($attrs);
        return parent::format_root_chunk($open, $name, $attrs);
    }

    public function format_varlistentry($open, $name, $attrs) {
        if ($open) {
            $this->collectContent($attrs);
            $charset = $this->LANGUAGES[$this->config->language]["preferred_charset"];
            $content = htmlspecialchars(iconv('UTF-8', $charset, $this->lastContent["name"] ?? ""), ENT_QUOTES);

            if ($content) {
                fwrite($this->hhkStream,
                    "      <LI><OBJECT type=\"text/sitemap\">\n" .
                    "        <param name=\"Local\" value=\"{$this->lastContent["reference"]}\">\n" .
                    "        <param name=\"Name\" value=\"{$content}\">\n" .
                    "      </OBJECT>\n");
            }
        }
        return parent::format_varlistentry($open, $name, $attrs);
    }

    public function header($id) {
        $header = parent::header($id);

        $patterns = array(
            '/charset=UTF-8/',                     // Replace charset
            '/(.*)(\r|\n|\r\n|\n\r)(.*)<\/head>/', // Add CSS link and <meta http-equiv="X-UA-Compatible" content="IE=edge" /> to <head>.
            '/(<body)/',                           // Add 'docs' class to body - the new CSS styling requires a parent of class 'docs'.
        );

        $mime_charset = $this->LANGUAGES[$this->config->language]["mime_charset_name"];

        $replacements = array(
            'charset='.$mime_charset,
            '$1  <meta http-equiv="X-UA-Compatible" content="IE=edge" />$2  <link media="all" rel="stylesheet" type="text/css" href="style.css"/>$2$3</head>',
            '$1 class="docs"',
        );

        $header = preg_replace($patterns, $replacements, $header);

        return $header;
    }

    private function collectContent($attrs) {
        if (isset($attrs[Reader::XMLNS_XML]["id"])) {
            $id = $attrs[Reader::XMLNS_XML]["id"];
            $this->lastContent = array(
                "name" => Format::getShortDescription($id),
                "reference" => "res" . DIRECTORY_SEPARATOR .
                    (Format::getFilename($id) ? Format::getFilename($id) : $id) . $this->ext,
                "hasChild" => (count(Format::getChildren($id)) > 0)
            );
        }
    }

    private function offset($offset) {
        $spaces = "";
        for ($i = 0; $i < $offset + 2 * $this->currentTocDepth; $i++)
            $spaces .= "  ";
        return $spaces;
    }

    public function format_link($open, $name, $attrs, $props) {
        $link = parent::format_link($open, $name, $attrs, $props);
        // Add title attribute to external links so address can be seen in CHM files.
        $search = '`<a href="([^#"][^"]++)" class="link external">`';
        $replacement = '<a href="\1" class="link external" title="Link : \1">';
        $link = preg_replace($search, $replacement, $link);
        return $link;
    }

    protected function headerNav($id): string
    {
        return '';
    }

    protected function footerSearch(): string
    {
        return '';
    }

    public function writeChunk($id, $fp) {
        $this->onNewPage();
        $filename = $this->getOutputDir() . $id . $this->getExt();
        $charset = $this->LANGUAGES[$this->config->language]["preferred_charset"];

        rewind($fp);

        $content = $this->header($id).stream_get_contents($fp).$this->footer($id);

        // Replacements based (mostly) on DBCSFix
        $replacements = array(
            '00A0' => '&nbsp;',  // No-Break Space (NBSP)
            '00A9' => '&copy;',  // Copyright Sign
            '00AE' => '&reg;',   // Registered Sign
            '2011' => '-',       // Non-Breaking Hyphen
            '2013' => '-',       // En Dash
            '2014' => '&mdash;', // Em Dash
            '2018' => '\'',      // Left Single Quotation Mark
            '2019' => '\'',      // Right Single Quotation Mark
            '201C' => '"',       // Left Double Quotation Mark
            '201D' => '"',       // Right Double Quotation Mark
            '2026' => '...',     // Horizontal Ellipsis
            '2122' => '&trade;', // Trade Mark Sign
            '2212' => '&minus;', // Minus Sign
            '2264' => '<=',      // Less-Than or Equal To
            '2265' => '>='       // Greater-Than or Equal To
        );
        if ($charset == 'CP932') {
            $replacements['00A0'] = ' '; // No-Break Space (NBSP)
        }
        if ($charset == 'Windows-1252') {
            $replacements['2014'] = '-'; // Em Dash
        }
        $search = array();
        $replace = array();
        foreach ($replacements as $codepoint => $replacement) {
            $search[] = '/\x{'.$codepoint.'}/u';
            $replace[] = $replacement;
        }

        if (!isset($this->supportedCharacters[$charset])) {
            $mapping = __INSTALLDIR__ . "/mappings/" . $charset . ".txt";

            if (is_readable($mapping)) {
                $this->supportedCharacters[$charset] = array();

                foreach(file($mapping) as $line) {
                    if(preg_match("/^0x([0-9A-F]{2,4})\t0x([0-9A-F]{4})/", $line, $matches)) {
                        $this->supportedCharacters[$charset][] = hexdec($matches[2]);
                    }
                }
            } else {
                $this->outputHandler->v("Unable to load character set mapping for " . $charset . ", exiting", VERBOSE_MESSAGES);
                die;
            }
        }

        $content = preg_replace($search, $replace, $content);
        $content = preg_replace_callback("/[\x{0080}-\x{10FFFF}]/u", [$this, 'callbackEncodeUnsupportedCharacters'], $content);

        if (in_array($charset, mb_list_encodings())) {
            $content = mb_convert_encoding($content, $charset, 'UTF-8');
        } else {
            $content = iconv('UTF-8', $charset, $content);
        }

        file_put_contents($filename, $content);
    }

    private function callbackEncodeUnsupportedCharacters($matches) {
        $charset = $this->LANGUAGES[$this->config->language]["preferred_charset"];
        $code = mb_ord($matches[0]);

        if (in_array($code, $this->supportedCharacters[$charset])) {
            return $matches[0];
        } else {
            return '&#x'.sprintf('%04x', $code).';';
        }
    }

    public function fetchStylesheet($name = null) {
        parent::fetchStylesheet($name);

        // HTML Help viewer (at least the standard one in Windows) does not support css variables, replace them with their values
        $stylesDir = $this->getOutputDir().'styles/';
        $search = array();
        $replace = array();
        $css = array();

        foreach ($this->stylesheets as $style) {
            $css[$style] = file_get_contents($stylesDir.$style);
            if (preg_match_all("/\ \ (--[a-z\-]+):\ (.+);/", $css[$style], $matches)) {
                foreach ($matches[1] as $idx => $var) {
                    $search[] = 'var('.$var.')';
                    $replace[] = $matches[2][$idx];
                }
            }
        }
        for ($i = 0; $i < count($this->stylesheets); $i++) { // Variables from one file can be used as value for variables in another, use multiple passes to remove all
            foreach ($css as $style => $content) {
                $css[$style] = str_replace($search, $replace, $content);
            }
        }
        foreach ($css as $style => $content) {
            $css[$style] = preg_replace("/:root\ {[^}]+}/", '', $content);
        }
        foreach ($css as $style => $content) {
            file_put_contents($stylesDir.$style, $content);
        }
    }
}
