<?php

$contentXML = null;

$contentXML .= '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:web="http://webservice.ws.snrhos.id2.inf.br/">';
$contentXML .= '<soapenv:Header/>';
$contentXML .= '<soapenv:Body>';
$contentXML .= '<web:fnrhInserir>';
$contentXML .= '<chaveAcesso>XXXXX</chaveAcesso>';
$contentXML .= '<fnrh>';
$contentXML .= '<snnumcpf>XXXXX</snnumcpf>';
$contentXML .= '<sntipdoc>XXXXX</sntipdoc>';
$contentXML .= '<snnumdoc>XXXXX</snnumdoc>';
$contentXML .= '<snorgexp>XXXXX</snorgexp>';
$contentXML .= '<snnomecompleto>XXXXX</snnomecompleto>';
$contentXML .= '<snemail>XXXXX</snemail>';
$contentXML .= '<snocupacao>XXXXX</snocupacao>';
$contentXML .= '<snnacionalidade>XXXXX</snnacionalidade>';
$contentXML .= '<sndtnascimento>XXXXX</sndtnascimento>';
$contentXML .= '<snsexo>XXXXX</snsexo>';
$contentXML .= '<sncelularddd>XXXXX</sncelularddd>';
$contentXML .= '<sncelularddi>XXXXX</sncelularddi>';
$contentXML .= '<sncelularnum>XXXXX</sncelularnum>';
$contentXML .= '<sntelefoneddd>XXXXX</sntelefoneddd>';
$contentXML .= '<sntelefoneddi>XXXXX</sntelefoneddi>';
$contentXML .= '<sntelefonenum>XXXXX</sntelefonenum>';
$contentXML .= '<snresidencia>XXXXX</snresidencia>';
$contentXML .= '<snpaisres>XXXXX</snpaisres>';
$contentXML .= '<snestadores>XXXXX</snestadores>';
$contentXML .= '<sncidaderes>XXXXX</sncidaderes>';
$contentXML .= '<bgstdscpais>XXXXX</bgstdscpais>';
$contentXML .= '<bgstdscpaisdest>XXXXX</bgstdscpaisdest>';
$contentXML .= '<bgstdscestado>XXXXX</bgstdscestado>';
$contentXML .= '<bgstdscestadodest>XXXXX</bgstdscestadodest>';
$contentXML .= '<bgstdsccidade>XXXXX</bgstdsccidade>';
$contentXML .= '<bgstdsccidadedest>XXXXX</bgstdsccidadedest>';
$contentXML .= '<snmotvia>XXXXX</snmotvia>';
$contentXML .= '<sntiptran>XXXXX</sntiptran>';
$contentXML .= '<snprevent>XXXXX</snprevent>';
$contentXML .= '<snprevsai>XXXXX</snprevsai>';
$contentXML .= '<snobs>XXXXX</snobs>';
$contentXML .= '<snregimp>XXXXX</snregimp>';
$contentXML .= '<snnumhosp>XXXXX</snnumhosp>';
$contentXML .= '<snuhnum>XXXXX</snuhnum>';
$contentXML .= '<snidcidadeibgeres>XXXXX</snidcidadeibgeres>';
$contentXML .= '<snidcidadeibge>XXXXX</snidcidadeibge>';
$contentXML .= '<snidcidadeibgedest>XXXXX</snidcidadeibgedest>';
$contentXML .= '</fnrh>';
$contentXML .= '</web:fnrhInserir>';
$contentXML .= '</soapenv:Body>';
$contentXML .= '</soapenv:Envelope>';

$url = "http://fnrhws.hospedagem.turismo.gov.br/FnrhWs/FnrhWs?wsdl";

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_VERBOSE, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: text/xml',
    'Content-Type: text/x-www-form-urlencoded',
));

curl_setopt($curl, CURLOPT_POSTFIELDS, $contentXML);

if (curl_errno($curl)){
    
    echo "<pre>";
    print_r(array(
        'errno' => curl_errno($curl),
        'error' => curl_error($curl)
    ));
    echo "</pre>";
    
}else{
    $response = curl_exec($curl);
   
    echo "<pre>";
    print_r($response);
    echo "</pre>";

    curl_close($curl);
}
