﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="Description" content="">
<title></title>
<link rel="stylesheet" href="style/scrollbar.css" />
<link rel="stylesheet" href="style/style.css" />
<link rel="stylesheet" href="style/player.css" />
<link rel="stylesheet" href="style/phoneTemplate.css" />
<script src="javascript/jquery-1.9.1.min.js"></script>
</head>	
<body>
<script src="javascript/config.js"></script>
<script src="javascript/LoadingJS.js"></script>
	
<script src="javascript/main.js"></script>
<script src="javascript/editor.js"></script>
<script src="files/search/book_config.js"></script>
<link rel="stylesheet" href="style/template.css" />
<script type="text/javascript">
	var sendvisitinfo = function(type,page){};
</script>

<script src="javascript/MovingBackgrounds.min.js"></script>
<link rel="stylesheet" href="style/MovingBackgrounds.min.css" />
<script src="javascript/FlipBookPlugins.min.js"></script>
<link rel="stylesheet" href="style/FlipBookPlugins.min.css" />
<script src="javascript/flip.hiSlider2.min.js"></script>
<link rel="stylesheet" href="style/hiSlider2.min.css" />
<script src="slide_javascript/slideJS.js"></script>

<script type="text/javascript">

var language = [{language : "portuguese",btnFirstPage : "Primeiro",btnNextPage : "Próximo",btnLastPage : "último",btnPrePage : "Anterior",btnGoToHome : "Casa",btnDownload : "Baixar",btnSoundOn : "Som ligado",btnSoundOff : "Som desligado",btnPrint : "Impressão",btnThumb : "Miniaturas",btnBookMark : "marcador de livros",frmBookMark : "marcador de livros",btnZoomIn : "Mais Zoom",btnZoomOut : "Reduzir",btnAutoFlip : "Flip automático",btnStopAutoFlip : "Pare Auto Flip",btnSocialShare : "Ação",btnHelp : "Ajudar",btnAbout : "Sobre",btnSearch : "Pesquisa",btnFullscreen : "Ecrã Inteiro",btnExitFullscreen : "Sair da tela inteira",btnMore : "Mais",frmPrintCaption : "impressão",frmPrintall : "Imprimir todas as páginas",frmPrintcurrent : "Imprimir página atual",frmPrintRange : "Intervalo de impressão",frmPrintexample : "Exemplo: 2,3,5-10",frmPrintbtn : "impressão",frmShareCaption : "ação",frmShareLabel : "ação",frmShareInfo : "Você pode facilmente compartilhar esta publicação para o desenvolvimento social networks.Just clique no botão apropriado abaixo",frminsertLabel : "Inserir para o site",frminsertInfo : "Use o código abaixo para incorporar esta publicação em seu site.",frmaboutcaption : "contato",frmaboutcontactinformation : "Informações para contato",frmaboutADDRESS : "ENDEREÇO",frmaboutEMAIL : "EMAIL",frmaboutWEBSITE : "WEBSITE",frmaboutMOBILE : "MOBILE",frmaboutAUTHOR : "AUTOR",frmaboutDESCRIPTION : "DESCRIÇÃO",frmSearch : "Pesquisa",frmToc : "Crescer em sabedoria<br>História - 9º ano - Livro 1",btnTableOfContent : "Mostrar tabela de conteúdo",btnNote : "anotação",lblLast : "Esta é a última página.",lblFirst : "Esta é a primeira página.",lblFullscreen : "Clique para ver em tela cheia",lblName : "nome",lblPassword : "Senha",lblLogin : "Conecte-se",lblCancel : "cancelar",lblNoName : "Nome de usuário não pode ser vazio.",lblNoPassword : "A senha não pode estar vazio.",lblNoCorrectLogin : "Digite o nome de usuário ea senha correta.",btnVideo : "Galeria de Vídeo",btnSlideShow : "slide Show",pnlSearchInputInvalid : "O texto de pesquisa é muito curto.",btnDragToMove : "Jogada de arrastar do mouse",btnPositionToMove : "Jogada de posição do mouse",lblHelp1 : "Arraste o canto da página para visualizar",lblHelp2 : "Clique duas vezes para aumentar o zoom, para fora",lblCopy : "cópia",lblAddToPage : "adicionar a página",lblPage : "Página",lblTitle : "título",lblEdit : "editar",lblDelete : "excluir",lblRemoveAll : "Deletar tudo",tltCursor : "cursor",tltAddHighlight : "adicionar destaque",tltAddTexts : "adicionar textos",tltAddShapes : "adicionar formas",tltAddNotes : "adicionar notas",tltAddImageFile : "adicionar arquivo de imagem",tltAddSignature : "adicionar assinatura",tltAddLine : "adicionar linha",tltAddArrow : "adicionar seta",tltAddRect : "adicionar rect",tltAddEllipse : "adicionar elipse",lblDoubleClickToZoomIn : "Dê um duplo clique para ampliar.",lblPages : "Páginas",infCopyToClipboard : "Seu navegador não suporta dose de prancheta, por favor, fazê-lo sozinho.",lblTitle : "Título",frmLinkLabel : "Ligação",infNotSupportHtml5 : "Seu navegador não suporta HTML5.",frmHowToUse : "Como usar",lblHelpPage1 : "Mova o dedo para virar a página do livro.",lblHelpPage2 : "Amplie usando o gesto ou clique duas vezes na página.",lblHelpPage3 : "Clique no logotipo para acessar o site oficial da empresa.",lblHelpPage4 : "Adicionar favoritos, usar a função de pesquisa e auto flip o livro.",lblHelpPage5 : "Mude a visão horizontal e vertical em dispositivos móveis.",frmQrcodeCaption : "Digitalize o código bidimensional inferior para visualizar com o telemóvel.",btnPageBack : "Para trás",btnPageForward : "Encaminhar",btnLanguage : "Mudar idioma",msgConfigMissing : "O arquivo de configuração está faltando, não é possível abrir o livro.",btnPhoneNumber : "Telefone",frmTelephone : "Telefone",btnDialing : "Ligar",lblSelectMessage : "Copie o conteúdo do texto na caixa de texto.",btnSelectText : "Selecionar texto"}];


var bookConfig={DownloadButtonVisible: "Hide",BookmarkButtonVisible : "Show",searchColor : "#00ffff", searchAlpha : 0.3, leastSearchChar : 0,CreatedBy:"",BookTemplateName:"Metro",loadingBackground:"#392059",searchPositionJS:"files/search/text_position[%d].js",loadingCaption:"Carregando",loadingCaptionColor:"#000000",loadingBackground:"#cc081b",loadingPicture:"",bgBeginColor:"#000000",bgEndColor:"#000000",bgMRotation:90,backGroundImgURL:"",backgroundPosition:"Stretch",backgroundOpacity:100,backgroundScene:"None",LeftShadowWidth:100,LeftShadowAlpha:1,RightShadowWidth:40,RightShadowAlpha:1,ShowTopLeftShadow:"Yes",FlipStyle:"Flip",FlipDirection:"0",autoDoublePage:"Yes",showMirrorSide:"Show",retainBookCenter:"Yes",isTheBookOpen:"No",RightToLeft:"No",pageBackgroundColor:"#FFFFFF",OriginPageIndex:1,flipshortcutbutton:"Show",QRCode:"Hide",thicknessWidthType:"thick",thicknessColor:"#FFFFFF",BindingType:"side",HardPageEnable:"No",hardCoverBorderWidth:8,cornerRound:8,borderColor:"#572F0D",outerCoverBorder:"Yes",coverTexture:"none",HardInnerPageEnable:"No",totalPagesCaption:"",pageNumberCaption:"",leftMargin:10,topMargin:10,rightMargin:10,bottomMargin:10,leftMarginOnMobile:0,topMarginOnMobile:0,rightMarginOnMobile:0,bottomMarginOnMobile:0,bleedAreaLeft:"0%",bleedAreaTop:"0%",bleedAreaRight:"0%",bleedAreaBottom:"0%",maxWidthToSmallMode:"400",maxHeightToSmallMode:"300",appLogoIcon:"files/extfile/logo.png",appLogoLinkURL:"",appLogoOpenWindow:"Blank",bookTitle:"Triolet",bookDescription:"",toolbarColor:"#ee2630",iconColor:"#FFFFFF",iconFontColor:"#EEEEEE",pageNumColor:"#111111",formBackgroundColor:"#000000",formFontColor:"#ffffff",logoHeight:"42",logoPadding:"5",logoTop:"8",FirstButtonIcon:"",PreviousButtonIcon:"",NextButtonIcon:"",LastButtonIcon:"",enablePageBack:"Hide",BackwardButtonIcon:"",ForwardButtonIcon:"",HomeButtonVisible:"Hide",HomeURL:"%first page%",HomeButtonIcon:"",AnnotationButtonVisible:"Show",AnnotationButtonIcon:"",ShareButtonVisible:"Hide",ShareButtonIcon:"",ThumbnailsButtonVisible:"Show",thumbnailAlpha:100,ThumbnailButtonIcon:"",ZoomButtonVisible:"Show",ZoomInButtonIcon:"",ZoomOutButtonIcon:"",FullscreenButtonVisible:"Show",FullscreenButtonIcon:"",ExitFullscreenButtonIcon:"",BookMarkButtonVisible:"Hide",BookmarkButtonIcon:"",TableOfContentButtonVisible:"Show",TableOfContentButtonIcon:"",SearchButtonVisible:"Show",leastSearchChar:3,searchKeywordFontColor:"#FFFFFF",SearchButtonIcon:"",SelectTextButtonVisible:"Show",SelectTextButtonIcon:"",PrintButtonVisible:"Hide",PrintButtonIcon:"",printWatermarkFile:"",BackgroundSoundButtonVisible:"Hide",BackgroundSoundURL:"",BackgroundSoundLoop:-1,BackgroundSoundButtonOnIcon:"",BackgroundSoundButtonOffIcon:"",HelpButtonVisible:"Hide",helpContentFileURL:"",helpWidth:400,helpHeight:450,showHelpContentAtFirst:"No",HelpButtonIcon:"",InstructionsButtonVisible:"Show",showInstructionOnStart:"No",aboutButtonVisible:"Hide",CompanyLogoFile:"",AboutButtonIcon:"",AutoPlayButtonVisible:"No",autoPlayAutoStart:"No",autoPlayDuration:3,autoPlayLoopCount:1,AutoPlayStartButtonIcon:"",AutoPlayStopButtonIcon:"",minZoomWidth:403,minZoomHeight:518,DownloadButtonVisible:"Hide",DownloadButtonIcon:"",DownloadURL:"",VideoButtonVisible:"Hide",VideoButtonIcon:"",SlideshowButtonVisible:"Hide",SlideshowButtonIcon:"",PhoneButtonVisible:"Hide",PhoneButtonIcon:"",FlipSound:"Yes",flippingTime:0.6,mouseWheelFlip:"Yes",CurlingPageCorner:"Yes",updateURLForPage:"Yes",OpenWindow:"Blank",showLinkHint:"No",haveAdSense:"No",adSenseWidth:200,adSenseHeight:200,adSenseLeft:50,adSenseTop:50,adSenseClientId:"",googleAnalyticsID:"",language: "Portuguese",AboutAddress: "",AboutEmail: "support@triolet.com.br",AboutMobile: "",AboutWebsite: "",AboutDescription: "",AboutAuthor: "",SlideshowAutoPlay: false,SlideshowPlayInterval: 5,totalPageCount: 5,largePageWidth:2098,largePageHeight:2815,normalPath:"files/page/",largePath:"files/large/",thumbPath:"files/thumb/"}

</script>

	<? /*		
		$url = 'webservice/index.php';
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(

			'Content-Type: application/json',
			'Content-Length: ' . strlen($json))
		);
		
		$jsonRet = curl_exec($ch); 
		curl_close($ch);
		var_dump($jsonRet); */
	?>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Button trigger modal -->
<button style="position:absolute; top: 25%; left: 85%; z-index: 2;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Jogo
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php include "files/game1.htm"; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<style>   
@keyframes flickerAnimation {   
0%   { opacity:1; }   
50%  { opacity:0.5; }  
 100% { opacity:1; } 
 } 
 @-o-keyframes flickerAnimation{   0%   { opacity:1; }   50%  { opacity:0.5; }   100% { opacity:1; } } @-moz-keyframes flickerAnimation{   0%   { opacity:1; }   50%  { opacity:0.5; }   100% { opacity:1; } } 
 @-webkit-keyframes flickerAnimation{  
 0%   { opacity:1; }   
 50%  { opacity:0.5; }   
 100% { opacity:1; } 
 } 
 
 @keyframes flickerAnimation2 {   
0%   { opacity:1; }   
50%  { opacity:0.5; }  
 100% { opacity:1; } 
 } 
 @-o-keyframes flickerAnimation2 {   0%   { opacity:1; }   50%  { opacity:0.5; }   100% { opacity:1; } } @-moz-keyframes flickerAnimation2{   0%   { opacity:1; }   50%  { opacity:0.5; }   100% { opacity:1; } } 
 @-webkit-keyframes flickerAnimation2{  
 0%   { opacity:1; }   
 50%  { opacity:0.5; }   
 100% { opacity:1; } 
 } 

 .leo-comp img{    
-webkit-animation: flickerAnimation 2s infinite;    
-moz-animation: flickerAnimation 2s infinite;    
-o-animation: flickerAnimation 2s infinite;     
animation: flickerAnimation 2s infinite; 
}   
.leo-lightbox--website
{
	border: none;
}


#Image_1 img{
	animation: none; 
}
   #logoBar img{
	top: 0px;
   }
   
   .tableofcontent_form .searchButton
   {
	   display: none;
   }
   .tableofcontent_form{
	   font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
   }
   
   .arrow{
    z-index: 9999;
    padding: 18px 229px 22px 9px;
}
   
   </style>
</body>

</html>