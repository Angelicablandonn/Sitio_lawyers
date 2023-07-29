<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	require_once FCPATH . '/vendor/autoload.php';
	

// application/libraries/DocumentProcessor.php

require_once 'vendor/autoload.php';

class DocumentProcessor {

    public function extractText($filePath, $fileType) {
        $text = '';

        switch ($fileType) {
            case 'doc':
            case 'docx':
                $phpWord = \PhpOffice\PhpWord\IOFactory::load($filePath);
                $text = '';
                foreach ($phpWord->getSections() as $section) {
                    $elements = $section->getElements();
                    foreach ($elements as $element) {
                        if (method_exists($element, 'getText')) {
                            $text .= $element->getText();
                        }
                    }
                }
                break;

            case 'pdf':
                $parser = new \Smalot\PdfParser\Parser();
                $pdf    = $parser->parseFile($filePath);
                $text = $pdf->getText();
                break;

            case 'txt':
                $text = file_get_contents($filePath);
                break;

            case 'ppt':
            case 'pptx':
                $presentation = \PhpOffice\PhpPresentation\IOFactory::load($filePath);
                $text = '';
                foreach ($presentation->getAllSlides() as $slide) {
                    foreach ($slide->getShapeCollection() as $shape) {
                        if ($shape instanceof \PhpOffice\PhpPresentation\Shape\RichText) {
                            $text .= $shape->createTextRun()->getText();
                        }
                    }
                }
                break;

            default:
                throw new Exception('Tipo de archivo no soportado: ' . $fileType);
        }

        return $text;
    }
}
