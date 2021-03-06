<?php

namespace q\report\core;

use q\report\core\core as core;
use q\report\core\helper as helper;

/**
 * XML template for excel file format
 *
 * @since 0.7.7
 **/

// load it up ##
#\q\report\core\core::run();

class excel2003 extends \q_export_user_data {

  public static function begin()
  {

    /*
$xml_string = <<<XML
<xml version="1.0">
<mso-application progid="Excel.Sheet">
<Workbook
   xmlns="urn:schemas-microsoft-com:office:spreadsheet"
   xmlns:o="urn:schemas-microsoft-com:office:office"
   xmlns:x="urn:schemas-microsoft-com:office:excel"
   xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
   xmlns:html="http://www.w3.org/TR/REC-html40">
  <Worksheet ss:Name="Exported Users">
    <Table>
XML;
$xml_object = new \SimpleXMLElement($xml_string);
return $xml_object->asXML();
  #Changed by Benny to PHP XML syntax to clear 500 
  */
  $xml_doc_begin  =
  '<?xml version="1.0"?>
    <?mso-application progid="Excel.Sheet"?>
    <Workbook
        xmlns="urn:schemas-microsoft-com:office:spreadsheet"
        xmlns:o="urn:schemas-microsoft-com:office:office"
        xmlns:x="urn:schemas-microsoft-com:office:excel"
        xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
        xmlns:html="http://www.w3.org/TR/REC-html40">
        <Worksheet ss:Name="Exported Users">
            <Table>';

    return $xml_doc_begin;

}




  public static function pre()
  {

    $xml_pre = 
        '<Row>
            <Cell>
                <Data ss:Type="String">';

    return $xml_pre;

  }



  public static function seperator()
  {

    $xml_seperator = 
                '</Data>
            </Cell>
            <Cell>
                <Data ss:Type="String">';

    return $xml_seperator;

  }



  public static function breaker()
  {

    $xml_breaker = 
                '</Data>
            </Cell>
        </Row>';

    return $xml_breaker;

  }


  public static function end()
  {

    $xml_doc_end = '
        </Table>
    </Worksheet>
</Workbook>';

    return $xml_doc_end;

    }

}