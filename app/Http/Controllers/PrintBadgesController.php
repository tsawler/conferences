<?php namespace App\Http\Controllers;

use App\ConferenceRegistrant;
use Illuminate\Support\Facades\View;
use TCPDF;

/**
 * Class PrintBadgesController
 * @package App\Http\Controllers
 */
class PrintBadgesController extends Controller {

    /**
     * @return mixed
     */
    public function getPrintBadges()
    {
        return View::make('vcms5::custom.print-badges');
    }

    /**
     * Print the badges to PDF and download
     */
    public function getPrintpdf()
    {
        // get all conference registrants
        $registrants = ConferenceRegistrant::orderBy('last_name')->get();

        $fpdf = new \fpdi\FPDI('P', 'mm', 'Letter');
        $fpdf->setSourceFile(base_path() . "/resources/pdf/badges.pdf");
        $tplIdx = $fpdf->importPage(1);

        $s = $fpdf->getTemplatesize($tplIdx);
        $fpdf->AddPage($s['h'] > $s['w'] ? 'P' : 'L', array($s['w'], $s['h'])); // This gets it the right dimensions

        $fpdf->useTemplate($tplIdx, 0, 0, 0, 0, true);
        $x = 55;
        $y = 60;

        $x_array = [55, 155, 55, 155, 55, 155];
        $y_array = [65, 65, 140, 140, 215, 215];
        $fpdf->SetTextColor(0, 0, 0);
        $index = 0;
        foreach ($registrants as $registrant)
        {
            if ($index == 6)
            {
                $fpdf->setSourceFile(base_path() . "/resources/pdf/badges.pdf");
                $tplIdx = $fpdf->importPage(1);
                $s = $fpdf->getTemplatesize($tplIdx);
                $fpdf->AddPage($s['h'] > $s['w'] ? 'P' : 'L', array($s['w'], $s['h']));
                $fpdf->useTemplate($tplIdx, 0, 0, 0, 0, true);
                $index = 0;
            }

            $fpdf->SetFont('Helvetica', '', 18);
            $name = strtoupper($registrant->first_name . " " . $registrant->last_name);
            $width = $fpdf->GetStringWidth($name);
            $width = $width / 2;
            $fpdf->SetXY($x_array[$index] - $width, $y_array[$index]);
            $fpdf->Write(0, $name);

            $fpdf->SetFont('Helvetica', '', 14);
            $width = $fpdf->GetStringWidth($registrant->title);
            $width = $width / 2;
            $fpdf->setXY($x_array[$index] - $width, $y_array[$index] + 15);
            $fpdf->Write(0, strtoupper($registrant->title));
            $index = $index + 1;
        }

        $text = $fpdf->output('test.pdf', 'D');

    }

}
