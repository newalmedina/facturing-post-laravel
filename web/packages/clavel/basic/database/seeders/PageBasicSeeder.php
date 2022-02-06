<?php

namespace Database\Seeders;

use App\Models\User;
use Clavel\Basic\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Clavel\Basic\Models\PageTranslation;

class PageBasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::delete('delete from pages');
        DB::delete('delete from page_translations');

        $pages = array(
            array(
                "id" => 1,
                "active" => 1,
                "css" => null,
                "javascript" => null,
                "permission" => 0,
                "permission_name" => "front-pages-aviso-legal",
                "created_id" => 1,
                "modified_id" => 1,
                "created_at" => "2019-06-05 15:05:06",
                "updated_at" => "2019-06-05 15:05:12",
            ),
            array(
                "id" => 2,
                "active" => 1,
                "css" => null,
                "javascript" => null,
                "permission" => 0,
                "permission_name" => "front-pages-politica-de-privacidad",
                "created_id" => 1,
                "modified_id" => 1,
                "created_at" => "2019-06-05 15:10:53",
                "updated_at" => "2019-06-05 15:12:49",
            ),
            array(
                "id" => 3,
                "active" => 1,
                "css" => null,
                "javascript" => null,
                "permission" => 0,
                "permission_name" => "front-pages-politica-de-cookies",
                "created_id" => 1,
                "modified_id" => 1,
                "created_at" => "2019-06-05 16:11:38",
                "updated_at" => "2019-06-05 16:17:28",
            ),
        );

        $page_translations = array(
            array(
                "id" => 1,
                "page_id" => 1,
                "locale" => "es",
                "title" => "Aviso legal",
                "url_seo" => "aviso-legal",
                "body" => "<p><strong>Limitaci&oacute;n de responsabilidad</strong></p>\r\n<p>PULSO no se responsabiliza de las interrupciones de disponibilidad del Sitio Web, ya sea por mal funcionamiento del servidor Web o de aplicaciones, de las infraestructuras de comunicaciones, o del software y hardware utilizados para la navegaci&oacute;n. Asimismo, tampoco asume ninguna responsabilidad por da&ntilde;os u acciones u omisiones causados por terceros de manera ileg&iacute;tima y sin conocimiento de PULSO. En ninguna circunstancia PULSO ser&aacute; responsable de da&ntilde;os emergentes o especiales que se deriven de la utilizaci&oacute;n del sitio Web por parte de los usuarios.</p>\r\n<p><strong>Propiedad intelectual e industrial</strong></p>\r\n<p>La totalidad de los contenidos de este sitio web incluyendo, entre otros, marcas; nombres comerciales; im&aacute;genes; logotipos; animaciones; textos o aplicaciones inform&aacute;ticas, cualquiera que sea su formato, lenguaje de programaci&oacute;n y forma de representaci&oacute;n, as&iacute; como el nombre de dominio, y el dise&ntilde;o del sitio Web son propiedad de PULSO y se encuentran protegidos por las leyes espa&ntilde;olas e internacionales sobre propiedad Intelectual e Industrial, sin perjuicio de otras posibles protecciones. Salvo que no se indique lo contrario, los derechos de propiedad intelectual sobre estos contenidos corresponden en exclusiva a PULSO. En consecuencia, el usuario reconoce que el uso de los contenidos queda estrictamente limitado a su uso personal y que la reproducci&oacute;n, distribuci&oacute;n, comunicaci&oacute;n o transformaci&oacute;n no expresamente autorizada de tales obras constituye una infracci&oacute;n de los derechos de propiedad intelectual.</p>\r\n<p><strong>Ley aplicable y jurisdicci&oacute;n</strong></p>\r\n<p>Las condiciones de uso del sitio Web se regir&aacute;n por la Legislaci&oacute;n Espa&ntilde;ola. Las partes, con renuncia expresa a cualquier otro fuero que pudiera corresponderles, acuerdan someterse a la jurisdicci&oacute;n de los Juzgados y Tribunales de Barcelona.</p>",
                "meta_title" => null,
                "meta_content" => null,
            ),
            array(
                "id" => 4,
                "page_id" => 2,
                "locale" => "es",
                "title" => "Política de privacidad",
                "url_seo" => "politica-de-privacidad",
                "body" => "<p>Declaraci&oacute;n de privacidad de PULSO EDICIONES SL</p>\r\n<p>&Uacute;ltima actualizaci&oacute;n: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mayo de 2018</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Novedades</strong></p>\r\n<p>Esta versi&oacute;n 1.0 de la pol&iacute;tica de privacidad es consecuencia de la adaptaci&oacute;n de las empresas del grupo Pulso ediciones SL al nuevo REGLAMENTO (UE) 2016/679 DEL PARLAMENTO EUROPEO Y DEL CONSEJO de 27 de abril de 2016 relativo a la protecci&oacute;n de las personas f&iacute;sicas en lo que respecta al tratamiento de datos personales y a la libre circulaci&oacute;n de estos datos.</p>\r\n<p>Su privacidad es importante para nosotros. Pulso ediciones SL (en adelante PULSO) estamos en Rambla de Celler, 117-119 08172 &ndash; Sant Cugat del Vall&egrave;s (Barcelona), tel&eacute;fono de contacto 93 589 62 64 y cuenta de correo electr&oacute;nico info@pulso.com.&nbsp; En esta declaraci&oacute;n de privacidad se explica qu&eacute; datos personales recopilamos a trav&eacute;s de nuestras diferentes acciones con usted y a trav&eacute;s de nuestros servicios adem&aacute;s de explicarle c&oacute;mo usamos esos datos.</p>\r\n<p>Los datos de contacto nuestro DPO son:</p>\r\n<p>C/ Rambla de Celler, 117-119.<br />08172 &ndash; Sant Cugat del Vall&egrave;s<br />Barcelona<br />e-mail: <a href=\"mailto:dpo@pulso.com\">dpo@pulso.com</a></p>\r\n<p>Podr&aacute; contactar con el DPO designado para cualquier duda en materia de protecci&oacute;n de datos. Se le contestar&aacute; lo antes posible dentro de un tiempo razonable, y siempre atendiendo a los plazos si su requerimiento estuviera sujeto a ellos.</p>\r\n<p>PULSO ofrece una amplia gama de servicios, en el &aacute;mbito de la salud, en los campos de formaci&oacute;n, como de seguimiento a pacientes y eventos m&eacute;dicos. Las referencias a los servicios de esta declaraci&oacute;n incluyen sitios web, aplicaciones, servidores, dispositivos y dem&aacute;s servicios todos ellos en el &aacute;mbito de PULSO.</p>\r\n<p>En la mayor&iacute;a de los supuestos, la legitimaci&oacute;n de estos tratamientos se materializa sobre el contrato mantenido con organizaciones sobre todo en materia formativa y servicios a congresos. En el caso de programas de seguimiento a pacientes se basa en el consentimiento expreso del titular de los datos.</p>\r\n<p>Consulte los detalles de cada servicio en las paginas Web y aplicaciones desarrolladas espec&iacute;ficamente para cada servicio.</p>\r\n<ul>\r\n<li>Datos personales que recopilamos,</li>\r\n<li>C&oacute;mo usamos datos personales</li>\r\n<li>Razones por las que compartimos los datos personales</li>\r\n<li>C&oacute;mo controlar sus datos personales y acceder a ellos</li>\r\n<li>Cookies y tecnolog&iacute;as Similares.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Datos personales que recopilamos</strong></p>\r\n<p>PULSO recopila datos para operar con eficacia y proporcionarle las mejores experiencias con nuestros servicios. Algunos de estos datos los facilita directamente el titular de los datos, o su organizaci&oacute;n en relaci&oacute;n a los contactos derivados de visitas comerciales, o cuando se registra en plataformas de formaci&oacute;n o cuando sean facilitados por las organizaciones, as&iacute; como cuando se ponen en contacto con nosotros para obtener soporte t&eacute;cnico, o informaci&oacute;n sobre nuestros servicios.</p>\r\n<p>Todos aquellos tratamientos de datos personales que impliquen una atenci&oacute;n continuada o seguimiento a pacientes en temas de salud, se obtienen previa firma del titular de los datos personales o su representante legal de un formulario de consentimiento informado por el cual nos autoriza al citado tratamiento.</p>\r\n<p>Los datos que recopilamos, en los actos citados anteriormente, son:</p>\r\n<ul>\r\n<li>Datos identificativos (nombre, apellidos, direcci&oacute;n de correo electr&oacute;nico, tel&eacute;fono).</li>\r\n<li>Su cargo o funci&oacute;n (puesto que ocupa en su empresa)</li>\r\n<li>Datos bancarios, para pago o cobro de servicios.</li>\r\n<li>Datos que facilita cuando rellena formularios cuando asiste a eventos</li>\r\n<li>Datos de participaci&oacute;n en programas de seguimiento a pacientes (datos de salud).</li>\r\n<li>Informaci&oacute;n sobre interacciones que mantenga usted con PULSO ediciones SL.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>C&oacute;mo usamos datos personales, con que fin y la justificaci&oacute;n del tratamiento.</strong></p>\r\n<p>PULSO usa los datos que recopilamos para administrar nuestro negocio y proporcionarle los servicios que ofrecemos. Tambi&eacute;n podemos usar los datos para comunicarnos con usted, por ejemplo, para informarle sobre su cuenta, las actualizaciones de seguridad e informaci&oacute;n sobre servicios formativos.</p>\r\n<p>El fundamento legal del tratamiento, es aquella ley que nos autoriza a tratamientos espec&iacute;ficos de sus datos personales.</p>\r\n<p>Otro fundamento para el tratamiento de sus datos personales es la ejecuci&oacute;n de un contrato en que el interesado es parte o para la aplicaci&oacute;n, a petici&oacute;n de &eacute;ste, de medidas precontractuales.</p>\r\n<p>Consentimiento para el tratamiento de sus datos personales para uno o mas fines espec&iacute;ficos.</p>\r\n<p>El consentimiento tendr&aacute; que darlo en una clara acci&oacute;n positiva por su parte para que sea acorde&nbsp; a la ley, por un canal (escrito, verbal, o electr&oacute;nico) que nosotros podamos acreditar su otorgamiento.</p>\r\n<p>Siempre que se solicite el consentimiento para varias finalidades diferenciadas, se tendr&aacute; que &nbsp;&nbsp; otorgar uno para cada finalidad.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>En todo momento nuestra compa&ntilde;&iacute;a le solicitar&aacute; un consentimiento libre, especifico e informado acorde a lo establecido en el nuevo REGLAMENTO (UE) 2016/679 DEL PARLAMENTO EUROPEO Y DEL CONSEJO de 27 de abril de 2016 relativo a la protecci&oacute;n de las personas f&iacute;sicas en lo que respecta al tratamiento de datos personales y a la libre circulaci&oacute;n de estos datos.</p>\r\n<p>Si no prestara el consentimiento para el tratamiento cuyo consentimiento se le solicita, no ser&aacute; posible iniciar su tratamiento de datos.</p>\r\n<p>Las personas f&iacute;sicas que otorguen su consentimiento expreso, podr&aacute;n en cualquier momento y forma desistir del mismo.</p>\r\n<p><strong>Los fines del tratamiento</strong></p>\r\n<p>Los fines del tratamiento ser&aacute;n aquellos que se asignen para cada servicio que se nos solicite. Son fines l&iacute;citos en el marco de &aacute;mbito sanitario desde varias perspectivas, formaci&oacute;n, asistencia t&eacute;cnica, as&iacute; como facilitar servicios al paciente. Para cada uno de ellos se le asignar&aacute; el consentimiento informado necesario para el tratamiento de datos correspondiente.</p>\r\n<p>Estos tratamientos de datos tienen como objetivos mas gen&eacute;ricos:</p>\r\n<ul>\r\n<li>Gestionar nuestra relaci&oacute;n con usted.</li>\r\n<li>Proporcionarle informaci&oacute;n apropiada adecuada y actualizada sobre nuestros servicios (si usted nos autoriza a ello).</li>\r\n<li>Mejorar la calidad de nuestra relaci&oacute;n comercial y ofrecerle una asistencia eficaz.</li>\r\n<li>Enviarle comunicaciones relativas a los productos o servicios que promocionamos.</li>\r\n<li>Archivado y conservaci&oacute;n de registros e informes</li>\r\n<li>Cobro y facturaci&oacute;n</li>\r\n<li>Pagos y recibos</li>\r\n</ul>\r\n<p><strong>Cu&aacute;nto tiempo mantenemos sus datos personales</strong></p>\r\n<p>Los datos personales s&oacute;lo los mantenemos el tiempo necesario marcado por la Ley. En el caso de identificativos con una finalidad de gesti&oacute;n son cuatro a&ntilde;os. Para lo establecido seg&uacute;n la Ley Mercantil se establecer&iacute;an un m&aacute;ximo de 6 a&ntilde;os. Los datos de salud, seg&uacute;n la Ley de Farmacovigilancia y el c&oacute;digo de buenas pr&aacute;cticas farmacol&oacute;gicas se mantendr&aacute;n un plazo de 5 a&ntilde;os salvo condiciones especificadas en la ley para supuestos especiales.</p>\r\n<p>En el supuesto que el tratamiento de datos personales venga derivado de un contrato el tiempo de conservaci&oacute;n es el de la duraci&oacute;n del mismo, m&aacute;s los tiempos marcados por ley para la conservaci&oacute;n de los datos personales.</p>\r\n<p>Si tiene intenci&oacute;n de proporcionarnos datos personales de otras personas (como colegas profesionales o empleados) debe facilitarles una copia de esta pol&iacute;tica de privacidad o el enlace para que queden informados de la misma, la informaci&oacute;n debe ser canalizada directamente o a trav&eacute;s de un superior.</p>\r\n<p><strong>Razones por las que compartimos los datos personales</strong></p>\r\n<p>Compartimos sus datos personales con su consentimiento o cuando son necesarios para completar cualquier transacci&oacute;n o ejecuci&oacute;n contractual, o proporcionar cualquier servicio y/o programa que haya solicitado o autorizado. Tambi&eacute;n compartimos datos, cuando las leyes lo requieran o para responder a procesos legales, para proteger a nuestros clientes y para proteger los derechos o la propiedad de PULSO.</p>\r\n<p><strong>&iquest;Qui&eacute;n accede a sus datos personales?</strong></p>\r\n<ul>\r\n<li>Nuestros empleados con acceso a datos, que han firmado una cl&aacute;usula de confidencialidad y deber de secreto para con nuestra organizaci&oacute;n, en relaci&oacute;n a su acceso a los datos personales de nuestros clientes.</li>\r\n<li>Los encargados del tratamiento que nos proveen de servicios inform&aacute;ticos y de gesti&oacute;n, con los que tenemos regulada la prestaci&oacute;n de servicios mediante contratos acorde a lo establecido en el REGLAMENTO (UE) 2016/679 DEL PARLAMENTO EUROPEO Y DEL CONSEJO de 27 de abril de 2016 relativo a la protecci&oacute;n de las personas f&iacute;sicas en lo que respecta al tratamiento de datos personales y a la libre circulaci&oacute;n de estos datos.</li>\r\n<li>A aquellos terceros que nos obligue la ley a la cesi&oacute;n de datos personales, por motivos legamente tasados, judiciales y organismos reguladores.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Las empresas del grupo PULSO ediciones SL, con la finalidad de valoraci&oacute;n de la gesti&oacute;n el grupo:</li>\r\n</ul>\r\n<p style=\"padding-left: 40px;\">Pulso M&eacute;xico: Avda. Reforma 383-704 &ndash; Cuauht&eacute;moc (M&eacute;xico)<br />Pulso SL sucursal Colombia: c/ 90, n&uacute;mero 18-16 (Bogot&aacute;)</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p><strong>C&oacute;mo controlar sus datos personales y acceder a ellos</strong></p>\r\n<p>Puede acceder a sus datos personales mediante el ejercicio de derecho de acceso establecido en el reglamento europeo (UE) 2016/679 de 27 de abril de protecci&oacute;n a las personas f&iacute;sicas de sus datos personales, dentro de los l&iacute;mites y condiciones que este reglamento estipula, para derecho de acceso, deber&aacute; dirigirse a nuestro DPO o la direcci&oacute;n indicada en el encabezamiento de nuestra pol&iacute;tica de privacidad.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>Tambi&eacute;n puede ejercitar su derecho a rectificaci&oacute;n si los datos no son correctos o no est&aacute;n actualizados, as&iacute; como oponerse al tratamiento. En este supuesto se dejar&aacute;n de tratar acorde a lo especificado en el reglamento. Ejercitar el derecho de cancelaci&oacute;n, limitaci&oacute;n de tratamiento o de portabilidad, todo ello reflejado en el citado reglamento.</p>\r\n<p>Tambi&eacute;n tiene derecho a retirar su consentimiento en cualquier momento, sin que ello afecte a la validez del tratamiento antes de la retirada.</p>\r\n<p>Para el ejercicio de estos derechos de los que es titular, se puede poner en contacto con nuestro DPO para presentar las dudas u objeciones, en la cuenta <a href=\"mailto:dpo@pulso.com\">dpo@pulso.com</a>. Tambi&eacute;n lo puede hacer v&iacute;a correo postal a la direcci&oacute;n que consta en el encabezamiento de esta declaraci&oacute;n de privacidad, adjuntando v&iacute;a electr&oacute;nica o postal fotocopia de su DNI que le identifique y si no le satisface c&oacute;mo tratamos sus datos personales tambi&eacute;n puede poner una reclamaci&oacute;n ante la autoridad de control competente como as&iacute; lo manifiesta el citado reglamento.</p>\r\n<p><strong>Aviso para usuarios</strong></p>\r\n<p>Algunos servicios y programas de PULSO est&aacute;n pensados para su uso en diferentes organizaciones y congresos. El uso que haga de los servicios de PULSO puede estar sujeto a las directivas de su organizaci&oacute;n, si las hubiese. Si su organizaci&oacute;n administra el uso que usted hace de los servicios de PULSO, dirija sus consultas sobre privacidad a su administrador.</p>\r\n<p>Cuando use funciones de seguimiento o formaci&oacute;n, otros usuarios (facultativos, enfermer&iacute;a, pacientes) de la red pueden ser parte de su actividad. Para m&aacute;s informaci&oacute;n sobre las funciones de seguimiento y otras funcionalidades, revise la documentaci&oacute;n o el contenido de ayuda espec&iacute;ficos del programa. PULSO no se hace responsable de las pr&aacute;cticas de privacidad o de seguridad de nuestros clientes, que puedan diferir de las establecidas en esta declaraci&oacute;n de privacidad.</p>\r\n<p>Si usa una direcci&oacute;n de correo electr&oacute;nico proporcionada por una organizaci&oacute;n a la que est&aacute; afiliada, como, por ejemplo, un centro medico, para tener acceso a los servicios on line, el propietario del dominio (por ejemplo, su empleador) asociado a su direcci&oacute;n de correo electr&oacute;nico puede: (i) controlar y administrar su cuenta de servicios en l&iacute;nea de PULSO y (ii) tener acceso a sus datos y procesarlos, incluyendo el contenido de sus comunicaciones y archivos.</p>\r\n<p><strong>Medidas t&eacute;cnicas y organizativas de seguridad de sus datos personales</strong></p>\r\n<p>En PULSO Ediciones SL hemos adoptado las medidas t&eacute;cnicas y organizativas garantizadoras de un nivel de seguridad y confidencialidad suficiente para garantizar la privacidad de sus datos personales,</p>\r\n<p>Estas medidas est&aacute;n implantadas en base a los avances tecnol&oacute;gicos, sus costes de implementaci&oacute;n, la naturaleza de los datos y el riesgo del tratamiento. La finalidad de los sistemas es proteger sus datos personales de cualquier alteraci&oacute;n accidental o provocada, de accesos no consentidos, de su destrucci&oacute;n o p&eacute;rdida y otras posibles alteraciones indebidas de tratamiento.</p>\r\n<p>En relaci&oacute;n a medidas organizativas s&oacute;lo recabamos aquellos datos personales necesarios, adecuados y pertinentes para los fines propuestos.</p>\r\n<p><strong>Versi&oacute;n de esta pol&iacute;tica de privacidad</strong></p>\r\n<p>Esta pol&iacute;tica de privacidad est&aacute; desarrollada acorde a lo especificado en el REGLAMENTO (UE) 2016/679 DEL PARLAMENTO EUROPEO Y DEL CONSEJO de 27 de abril de 2016 relativo a la protecci&oacute;n de las personas f&iacute;sicas en lo que respecta al tratamiento de datos personales y a la libre circulaci&oacute;n de estos datos.</p>\r\n<p>Cualquier futuro cambio en materia legislativa tanto en el &aacute;mbito de la protecci&oacute;n de datos personales, como en el &aacute;mbito del f&aacute;rmaco vigilancia o aquellas legislaciones transversales que pudieran afectar a su tratamiento de datos se le comunicara de antemano atraves de nuestros canales habituales de comunicaci&oacute;n, as&iacute; como en la actualizaci&oacute;n de esta pol&iacute;tica de privacidad.</p>\r\n<p>La versi&oacute;n de esta pol&iacute;tica de privacidad como se indica es v.1&ordm; - 05/2018.</p>",
                "meta_title" => null,
                "meta_content" => null,
            ),
            array(
                "id" => 7,
                "page_id" => 3,
                "locale" => "es",
                "title" => "Política de cookies",
                "url_seo" => "politica-de-cookies",
                "body" => "<div class=\"text-contenido\">\r\n<p>Una Cookie es un fichero que se descarga en su ordenador al acceder a determinadas p&aacute;ginas web. Las cookies permiten a una p&aacute;gina web, entre otras cosas, almacenar y recuperar informaci&oacute;n sobre los h&aacute;bitos de navegaci&oacute;n de un usuario o de su equipo y, dependiendo de la informaci&oacute;n que contenga y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.</p>\r\n<p>Las cookies son esenciales para el funcionamiento de internet, aportando innumerables ventajas en la prestaci&oacute;n de servicios interactivos, facilit&aacute;ndole la navegaci&oacute;n y usabilidad de nuestra web.</p>\r\n<p style=\"margin-bottom: 0;\">PULSO utiliza en este sitio web las siguientes cookies que se detallan en el cuadro siguiente:</p>\r\n<ul class=\"normal\" style=\"margin-top: 0; padding-top: 0px;\">\r\n<li>cookies estrictamente necesarias para la prestaci&oacute;n de determinados servicios solicitados expresamente por el usuario: si se desactivan estas cookies, no podr&aacute; recibir correctamente nuestros contenidos y servicios; y</li>\r\n<li>Cookies usadas por complementos externos de contenidos</li>\r\n</ul>\r\n<br /><br />\r\n<table border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 200px; text-align: center;\"><strong>Cookies</strong></td>\r\n<td style=\"width: 300px; text-align: center;\"><strong>Informaci&oacute;n</strong></td>\r\n<td style=\"text-align: center;\"><strong>Finalidad</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: left;\" colspan=\"3\"><strong>&nbsp;&nbsp; COOKIES PROPIAS</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"text-align: center;\"><strong>Estrictamente necesarias</strong></td>\r\n<td style=\"text-align: center;\">Sesi&oacute;n, registro y navegaci&oacute;n en la web</td>\r\n<td style=\"width: 250px; text-align: center;\">Correcta navegaci&oacute;n por la web</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><span class=\"asterisco\">DESACTIVACI&Oacute;N DE COOKIES.</span> El usuario podr&aacute; -en cualquier momento- elegir qu&eacute; cookies quiere que funcionen en este sitio web mediante:</p>\r\n<ul class=\"normal\">\r\n<li>la configuraci&oacute;n del <strong>navegador</strong>; por ejemplo:<br /><br />\r\n<ul class=\"normal\">\r\n<li><strong>Chrome</strong>, desde <a href=\"http://support.google.com/chrome/bin/answer.py?hl=es&amp;answer=95647\" target=\"_blank\" rel=\"noopener\">http://support.google.com/chrome/bin/answer.py?hl=es&amp;answer=95647 </a></li>\r\n<li><strong>Explorer</strong>, desde <a href=\"http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9\" target=\"_blank\" rel=\"noopener\">http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9</a></li>\r\n<li><strong>Firefox</strong>, desde <a href=\"http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we\" target=\"_blank\" rel=\"noopener\">http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we</a></li>\r\n<li><strong>Safari</strong>, desde <a href=\"http://support.apple.com/kb/ph5042\" target=\"_blank\" rel=\"noopener\">http://support.apple.com/kb/ph5042</a><br /><br /></li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<br />\r\n<p>Si tiene dudas sobre esta pol&iacute;tica de cookies, puede contactar con Pulso Ediciones en <a href=\"mailto:info@pulso.com\">info@pulso.com</a>.</p>\r\n</div>",
                "meta_title" => null,
                "meta_content" => null,
            )
        );

        foreach ($pages as $p) {
            $page = new Page();

            $page->id = $p['id'];
            $page->active = $p['active'];
            $page->css = $p['css'];
            $page->javascript = $p['javascript'];
            $page->permission = $p['permission'];
            $page->permission_name = $p['permission_name'];
            $page->created_id = $p['created_id'];
            $page->modified_id = $p['modified_id'];

            $page->save();
        }



        foreach ($page_translations as $p) {
            $page = new PageTranslation();

            $page->id = $p['id'];
            $page->page_id = $p['page_id'];
            $page->locale = $p['locale'];
            $page->title = $p['title'];
            $page->url_seo = $p['url_seo'];
            $page->body = $p['body'];
            $page->meta_title = $p['meta_title'];
            $page->meta_content = $p['meta_content'];

            $page->save();
        }
    }
}
