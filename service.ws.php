<?php

$contentXML = null;

$contentXML .= '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:web="http://webservice.ws.snrhos.id2.inf.br/">';
$contentXML .= '<soapenv:Header/>';
$contentXML .= '<soapenv:Body>';
$contentXML .= '<web:fnrhInserir>';
$contentXML .= '<chaveAcesso>4BC62EDC-DEF9-4D32-B358-BE789DA63B13</chaveAcesso>';
$contentXML .= '<fnrh>';
$contentXML .= '<snnumcpf>021.424.769-45</snnumcpf>';
$contentXML .= '<sntipdoc>-</sntipdoc>';
$contentXML .= '<snnumdoc>46415817</snnumdoc>';
$contentXML .= '<snorgexp>SSP/PR</snorgexp>';
$contentXML .= '<snnomecompleto>ALEXANDRE YAMAUE TESTE</snnomecompleto>';
$contentXML .= '<snemail>alexandre.yamaue@gmail.com</snemail>';
$contentXML .= '<snocupacao>ADMINISTRADOR</snocupacao>';
$contentXML .= '<snnacionalidade>BRASIL</snnacionalidade>';
$contentXML .= '<sndtnascimento>1974-10-25</sndtnascimento>';
$contentXML .= '<snsexo>M</snsexo>';
$contentXML .= '<sncelularddd>43</sncelularddd>';
$contentXML .= '<sncelularddi>55</sncelularddi>';
$contentXML .= '<sncelularnum>999190819</sncelularnum>';
$contentXML .= '<sntelefoneddd>33</sntelefoneddd>';
$contentXML .= '<sntelefoneddi>22</sntelefoneddi>';
$contentXML .= '<sntelefonenum>2222223</sntelefonenum>';
$contentXML .= '<snresidencia>23543543</snresidencia>';
$contentXML .= '<snpaisres>1058 - BRASIL</snpaisres>';
$contentXML .= '<snestadores>1058 - PARANA</snestadores>';
$contentXML .= '<sncidaderes>1058 - LONDRINA</sncidaderes>';
$contentXML .= '<bgstdscpais>BRASIL</bgstdscpais>';
$contentXML .= '<bgstdscpaisdest>BRASIL</bgstdscpaisdest>';
$contentXML .= '<bgstdscestado>PARANA</bgstdscestado>';
$contentXML .= '<bgstdscestadodest>PARANA</bgstdscestadodest>';
$contentXML .= '<bgstdsccidade>LONDRINA</bgstdsccidade>';
$contentXML .= '<bgstdsccidadedest>LONDRINA</bgstdsccidadedest>';
$contentXML .= '<snmotvia>01</snmotvia>';
$contentXML .= '<sntiptran>01</sntiptran>';
$contentXML .= '<snprevent>2019-11-22</snprevent>';
$contentXML .= '<snprevsai>2019-11-24</snprevsai>';
$contentXML .= '<snobs></snobs>';
$contentXML .= '<snregimp></snregimp>';
$contentXML .= '<snnumhosp>2</snnumhosp>';
$contentXML .= '<snuhnum>1</snuhnum>';
$contentXML .= '<snidcidadeibgeres>4113700</snidcidadeibgeres>';
$contentXML .= '<snidcidadeibge>4113700</snidcidadeibge>';
$contentXML .= '<snidcidadeibgedest>4113700</snidcidadeibgedest>';
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