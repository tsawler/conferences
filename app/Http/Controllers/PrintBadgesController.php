<?php namespace App\Http\Controllers;

use App\ConferenceRegistrant;
use Illuminate\Support\Facades\Log;
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
        $fpdf->AddPage($s['h'] > $s['w'] ? 'P' : 'L', array($s['w'], $s['h']));
        $fpdf->useTemplate($tplIdx, 0, 0, 0, 0, true);

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
            $name = $registrant->first_name . " " . $registrant->last_name;
            $width = $fpdf->GetStringWidth(iconv('UTF-8', 'windows-1252', $name));
            $width = $width / 2;
            $fpdf->SetXY($x_array[$index] - $width, $y_array[$index]);
            $fpdf->Write(0, iconv('UTF-8', 'windows-1252', $name));

            $fpdf->SetFont('Helvetica', '', 12);
            $newwidth = $fpdf->GetStringWidth(iconv('UTF-8', 'windows-1252', $registrant->company));
            $newwidth = $newwidth / 2;
            $fpdf->setXY($x_array[$index] - $newwidth, $y_array[$index] + 15);
            $fpdf->Write(0, iconv('UTF-8', 'windows-1252', $registrant->company));
            $index = $index + 1;
            Log::info('index -> '. $index);
            Log::info('registrant -> ' . $registrant->first_name . " " . $registrant->last_name);
            Log::info('company -> ' . $registrant->company);
        }

        $fpdf->output('test.pdf', 'D');

    }

}
