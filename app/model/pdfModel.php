<?php


use Mpdf\Mpdf;

class pdfModel extends baseModel {


    const PDF_VIEW = 'view',
          PDF_DOWNLAND = 'downland';

    public $factureModel;

    public function __construct(\Nette\Database\Context $database, \Nette\DI\Container $container, \Nette\Bridges\ApplicationLatte\ILatteFactory $lf)
    {
        parent::__construct($database, $container, $lf);
        $this->factureModel = $this->container->createInstance('factureModel');

    }

    public function preparePdf(array $params) {
      $mpdf = new Mpdf(['orientacion' => 'L']);
      $latte = $this->lf->create();
      $style = file_get_contents(__DIR__.'/../pdf/styl.css');

      $html = $latte->renderToString(__DIR__.'/../pdf/facture.latte', $params);
      $mpdf->WriteHTML($style,1);
      $mpdf->WriteHTML($html);

      return $mpdf;
    }

    public function generatePdfView(array $params) {
      $mpdf = $this->preparePdf($params);
      $mpdf->output();
    }

  public function generatePdfDownland(array $params) {
    $mpdf = $this->preparePdf($params);
    $mpdf->output( $params['factureName'].'.pdf', 'D' );
  }
}
