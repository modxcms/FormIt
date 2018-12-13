<?php
/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Properties Lexicon Topic
 *
 * @package formit
 * @subpackage lexicon
 * @language sv
 */
/* FormIt properties */
$_lang['prop_formit.hooks_desc'] = 'Vilka skript som ska anropas, om några alls, efter att formuläret har validerats med godkänt resultat. Det här kan vara en kommaseparerad lista med hooks, och om den första misslyckas, kommer de efterföljande inte att anropas. En hook kan också vara ett namn på en Snippet som då kommer att anropas.';
$_lang['prop_formit.prehooks_desc'] = 'Vilka skript som ska anropas, om några alls, när formuläret laddas. Du kan förifylla formulärfält via $scriptProperties[`hook`]->fields[`fieldname`]. Det här kan vara en kommaseparerad lista med hooks, och om den första misslyckas, kommer de efterföljande inte att anropas. En hook kan också vara ett namn på en Snippet som då kommer att anropas.';
$_lang['prop_formit.submitvar_desc'] = 'Om värdet är satt kommer formuläret bara att processas om den angivna POST-variabeln är satt.';
$_lang['prop_formit.validate_desc'] = 'En kommaseparerad lista med fält att validera, med varje fältnamn angivet som name:validator (tex: username:required,email:required). Validatorer kan också efterfölja varandra, så som email:email:required. Den här egenskapen kan anges på flera rader.';
$_lang['prop_formit.errtpl_desc'] = 'Den mall som ska omsluta felmeddelanden.';
$_lang['prop_formit.validationerrormessage_desc'] = 'Ett generellt felmeddelande som sätts till en platshållare om valideringen misslyckas. Kan innehålla [[+errors]] om du vill visa en lista med alla fel.';
$_lang['prop_formit.validationerrorbulktpl_desc'] = 'HTML-mall som används för varje individuellt fel i det generella felmeddelandet.';
$_lang['prop_formit.customvalidators_desc'] = 'En kommaseparerad lista med anpassade valideringar (snippets) som du planerar att använda i formuläret. Om de inte anges här, kommer de inte att köras.';
$_lang['prop_formit.trimvaluesdeforevalidation_desc'] = 'Anger om blanktecken ska tas bort från början och slutet av värdet innan valideringen görs. Defaultvärdet är true.';
$_lang['prop_formit.clearfieldsonsuccess_desc'] = 'Om satt till true, kommer formulärfälten att rensas när ett formulär som inte omdirigeras skickats.';
$_lang['prop_formit.successmessage_desc'] = 'Om satt, kommer värdet här att sättas till en platshållare med namn enligt inställningen &successMessagePlaceholder, som i sin tur har defaultvärdet `fi.successMessage`.';
$_lang['prop_formit.successmessageplaceholder_desc'] = 'Nammnet på den platshållare som ska användas för meddelandet om godkänd sändning av formuläret.';
$_lang['prop_formit.store_desc'] = 'Om satt till true, kommer datan från formuläret att sparas i cachen för att senare hämtas med hjälp av FormItRetriever snippeten.';
$_lang['prop_formit.storetime_desc'] = 'Om `store` är satt till true, anger den här inställningen antalet sekunder som datan från formuläret kommer att sparas. Defaultvärdet motsvarar fem minuter.';
$_lang['prop_formit.storelocation_desc'] = 'Om `store` är satt till true, anger den här inställningen vilket cacheminne som ska användas för att spara datan. Defaultvärdet är MODX cache.';
$_lang['prop_formit.allowfiles_desc'] = 'Om satt till 0, kommer inga filer att kunna bifogas formuläret.';
$_lang['prop_formit.placeholderprefix_desc'] = 'Det prefix som ska användas för alla platshållare som sätts av FormIt för formulärfälten. Defaultvärdet är `fi.`';
$_lang['prop_formit.redirectto_desc'] = 'Om `redirect` är angiven som en hook, måste det resurs-id som användaren ska vidarebefodras till anges här.';
$_lang['prop_formit.redirectparams_desc'] = 'En JSON-array med parametrar som ska skickas med till hooken redirect när användaren vidarebefodras.';
$_lang['prop_formit.recaptchajs_desc'] = 'Om `recaptcha` är angiven some en hook, kan du här ange ett JSON-objekt som ska användas för att konfigurera reCaptcha via variabeln JS RecaptchaOptions.';
$_lang['prop_formit.recaptchaheight_desc'] = 'Om `recaptcha` är angiven some en hook, anges höjden för reCaptcha-widgeten här.';
$_lang['prop_formit.recaptchatheme_desc'] = 'Om `recaptcha` är angiven some en hook, anges ett tema att använda för reCaptcha-widgeten här.';
$_lang['prop_formit.recaptchawidth_desc'] = 'Om `recaptcha` är angiven some en hook, anges bredden för reCaptcha-widgeten här.';
$_lang['prop_formit.spamemailfields_desc'] = 'Om `spam` är angiven some en hook, anges en kommaseparerad lista med fält som innehåller en e-postadress och som ska kontrolleras för spam här.';
$_lang['prop_formit.spamcheckip_desc'] = 'Om `spam` är angiven some en hook, och den här inställningen är satt till true, kommer IP-adressen också att kontrolleras för spam.';
$_lang['prop_formit.emailbcc_desc'] = 'Om `email` är angiven som en hook, anges den/de e-postadress(er) dit e-postmeddelandet ska skickas som dold kopia (BCC). Kan anges som en kommaseparerad lista med e-postadresser.';
$_lang['prop_formit.emailbccname_desc'] = 'Valfri. Om `email` är angiven som en hook, anges en matchande lista med kommaseparerade namn till listan med e-postadresser som angetts i inställningen `emailBCC`.';
$_lang['prop_formit.emailcc_desc'] = 'Om `email` är angiven som en hook, anges den/de e-postadress(er) dit e-postmeddelandet ska skickas som kopia (CC). Kan anges som en kommaseparerad lista med e-postadresser.';
$_lang['prop_formit.emailccname_desc'] = 'Valfri. Om `email` är angiven som en hook, anges en matchande lista med kommaseparerade namn till listan med e-postadresser som angetts i inställningen `emailCC`.';
$_lang['prop_formit.emailto_desc'] = 'Om `email` är angiven som en hook, anges den/de e-postadress(er) dit e-postmeddelandet ska skickas. Kan anges som en kommaseparerad lista med e-postadresser.';
$_lang['prop_formit.emailtoname_desc'] = 'Valfri. Om `email` är angiven som en hook, anges matchande lista med kommaseparerade namn till listan med e-postadresser som angetts i inställningen `emailTo`.';
$_lang['prop_formit.emailfrom_desc'] = 'Valfri. Om `email` är angiven som en hook, och inställningen är satt kommer värdet att användas som Från: (From:) adress for e-mailet. Om den inte är satt används i första hand ett `email`-fält i formuläret och i andra hand systeminställningen `emailsender`.';
$_lang['prop_formit.emailfromname_desc'] = 'Valfri. Om `email` är angiven som en hook, och inställningen är satt kommer värdet att användas som Från: (From:) namn för e-mailet.';
$_lang['prop_formit.emailreplyto_desc'] = 'Valfri. Om `email` är angiven som en hook, och intställningen är satt kommer värdet att använda som Svart-Till: (Reply-To:) adress for e-mailet.';
$_lang['prop_formit.emailreplytoname_desc'] = 'Valfri. Om `email` är angiven som en hook, och inställningen är satt kommer värdet att användas som Svar-Till: (Reply-To:) namn för e-mailet.';
$_lang['prop_formit.emailreturnpath_desc'] = 'Valfri. Om `email` är angiven som en hook, och inställningen är satt kommer värdet att använda som Return-path: adress for e-mailet. Om den inte är satt kommer `emailFrom` att användas.';
$_lang['prop_formit.emailsubject_desc'] = 'Om `email` är angiven som en hook är den här inställningen obligatorisk och används som ämnesrad för meddelandet.';
$_lang['prop_formit.emailusefieldforsubject_desc'] = 'Om fältet `subject` används i formuläret, och den här inställningen är satt till, kommer fältets värde att användas som ämnesrad för meddelandet.';
$_lang['prop_formit.emailhtml_desc'] = 'Valfri. Om `email` är angiven som en hook, styr den här inställningen om meddelandet ska skickas som HTML eller inte. Defaultvärdet är true.';
$_lang['prop_formit.emailconvertnewlines_desc'] = 'Om satt till true och `emailHtml` är satt till 1, kommer kommer radbrytningar att konverteras till BR-taggar i meddelandet.';
$_lang['prop_formit.emailmultiseparator_desc'] = 'De(t) tecken som ska användas som avgränsare för samlingar av värden som har skickats genom checkboxar/multi-selects. Defaultvärdet är radbrytning.';
$_lang['prop_formit.emailmultiwrapper_desc'] = 'Kommer att omsluta varje värde i en samling av fält som har skickats via checkboxar/multi-selects. Defaultvärdet är bara själva värdet.';

/* FormIt Auto-Responder properties */
$_lang['prop_fiar.fiartpl_desc'] = 'Om `FormItAutoResponder` är angiven som en hook anges den mall som ska användas som automatiskt svar skickat via e-post.';
$_lang['prop_fiar.fiartofield_desc'] = 'Om `FormItAutoResponder` är angiven som en hook anges det formulärfält som ska användas som Till: (To:) adress för det automatiska svaret.';
$_lang['prop_fiar.fiarbcc_desc'] = 'Om `FormItAutoResponder` är angiven som en hook, anges den/de e-postadress(er) dit e-postmeddelandet ska skickas som dold kopia (BCC). Kan anges som en kommaseparerad lista med e-postadresser.';
$_lang['prop_fiar.fiarbccname_desc'] = 'Valfri. Om `FormItAutoResponder` är angiven som en hook, anges en matchande lista med kommaseparerade namn till listan med e-postadresser som angetts i inställningen `fiarBCC`.';
$_lang['prop_fiar.fiarcc_desc'] = 'Om `FormItAutoResponder` är angiven som en hook, anges den/de e-postadress(er) dit e-postmeddelandet ska skickas som dold kopia (CC). Kan anges som en kommaseparerad lista med e-postadresser.';
$_lang['prop_fiar.fiarccname_desc'] = 'Valfri. Om `FormItAutoResponder` är angiven som en hook, anges en matchande lista med kommaseparerade namn till listan med e-postadresser som angetts i inställningen `fiarCC`.';
$_lang['prop_fiar.fiarfrom_desc'] = 'Valfri. Om `FormItAutoResponder` är angiven som en hook, och inställningen är satt kommer värdet att användas som Från: (From:) adress for e-mailet. Om den inte är satt används i första hand ett `email`-fält i formuläret och i andra hand systeminställningen `emailsender`.';
$_lang['prop_fiar.fiarfromname_desc'] = 'Valfri. Om `FormItAutoResponder` är angiven som en hook, och inställningen är satt kommer värdet att användas som Från: (From:) namn för e-mailet.';
$_lang['prop_fiar.fiarreplyto_desc'] = 'Valfri. Om `FormItAutoResponder` är angiven som en hook, och inställningen är satt kommer värdet att användas som Svar-Till: (Reply-To:) namn för e-mailet.';
$_lang['prop_fiar.fiarreplytoname_desc'] = 'Valfri. Om `FormItAutoResponder` är angiven som en hook, och inställningen är satt kommer värdet att använda som Return-path: adress for e-mailet.';
$_lang['prop_fiar.fiarsubject_desc'] = 'Om `FormItAutoResponder` är angiven som en hook är den här inställningen obligatorisk och används som ämnesrad för meddelandet.';
$_lang['prop_fiar.fiarhtml_desc'] = 'Valfri. Om `FormItAutoResponder` är angiven som en hook, styr den här inställningen om meddelandet ska skickas som HTML eller inte. Defaultvärdet är true.';

/* FormItRetriever properties */
$_lang['prop_fir.placeholderprefix_desc'] = 'Det prefix som ska användas för platshållarna med formulärdata.';
$_lang['prop_fir.redirecttoonnotfound_desc'] = 'Om datan in kan hittas, och inställningen är satt, kommer användaren att vidarebefodras till resursen med det här ID:t.';
$_lang['prop_fir.eraseonload_desc'] = 'Om satt till true, kommer den sparade formulärdatan att raderas när den har lästs in. Rekommendationen är att lämna den satt till false om du inte uttryckligen vill att datan bara ska kunna läsas en gång.';
$_lang['prop_fir.storelocation_desc'] = 'Om `store` är satt till true, anger den här inställningen vilket cacheminne som används för att spara datan. Defaultvärdet är MODX cache.';

/* FormIt Math hook properties */
$_lang['prop_math.mathminrange_desc'] = 'Om `math` är angiven som en hook anges det minimala värdet för varje nummer i ekvationen här.';
$_lang['prop_math.mathmaxrange_desc'] = 'Om `math` är angiven som en hook anges det maximala värdet för varje nummer i ekvationen här.';
$_lang['prop_math.mathfield_desc'] = 'Om `math` är angiven som en hook anges namnet på formulärfältet där svaret anges här.';
$_lang['prop_math.mathop1field_desc'] = 'Om `math` är angiven som en hook anges namnet på formulärfältet för det första numret i ekvationen här.';
$_lang['prop_math.mathop2field_desc'] = 'Om `math` är angiven som en hook anges namnet på formulärfältet för det andra numret i ekvationen här.';
$_lang['prop_math.mathoperatorfield_desc'] = 'Om `math` är angiven som en hook anges namnet på formulärfältet för operatorn i ekvationen här.';

/* FormItCountryOptions properties */
$_lang['prop_fico.allgrouptext_desc'] = 'Valfri. Om satt och &prioritized används kommer värdet att användas som rubrik för alla andra länder som inte är prioriterade.';
$_lang['prop_fico.optgrouptpl_desc'] = 'Valfri. Om satt och &prioritized används kommer värdet att betraktas som namn på den chunk som ska användas som mall för koden till option group.';
$_lang['prop_fico.limited_desc'] = 'Valfri. En kommaseparerad lista med ISO-koder för länder som listan ska begränsas till.';
$_lang['prop_fico.prioritized_desc'] = 'Valfri. En kommaseparerad lista med ISO-koder för länder som ska visas i en grupp för "Vanliga besökare" längst upp i rullistan. Den här funktionen kan användas för förenkla valet av de vanligast använda länderna.';
$_lang['prop_fico.prioritizedgrouptext_desc'] = 'Valfri. Om satt och &prioritized används kommer värdet att användas som rubrik för de prioriterade länderna.';
$_lang['prop_fico.selected_desc'] = 'Det land som ska vara förvalt.';
$_lang['prop_fico.selectedattribute_desc'] = 'Valfri. HTML-attributed som ska läggas till det valda landet.';
$_lang['prop_fico.toplaceholder_desc'] = 'Valfri. Använde den här inställningen för att sätta resultatet till en platshållare istället för att skriva ut det direkt.';
$_lang['prop_fico.tpl_desc'] = 'Valfri. Den chunk som ska använas för varje land i rullistan.';
$_lang['prop_fico.useisocode_desc'] = 'Om satt till 1 kommer ISO-landskoden att användas som värde. Om satt till 0 kommer landets namn att användas istället.';
$_lang['prop_fico.country_desc'] = 'Valfri. Använd inställningen för att använda en annan fil med länder när listan med länder ska läsas in.';

/* FormItStateOptions properties */
$_lang['prop_fiso.country_desc'] = 'Valfri. Använd inställningen för att använda en annan fil med regioner när listan med regioner ska läsas in.';
$_lang['prop_fiso.selected_desc'] = 'Det region som ska vara förvald.';
$_lang['prop_fiso.selectedattribute_desc'] = 'Valfri. HTML-attributed som ska läggas till den valda regionen.';
$_lang['prop_fiso.toplaceholder_desc'] = 'Valfri. Använde den här inställningen för att sätta resultatet till en platshållare istället för att skriva ut det direkt.';
$_lang['prop_fiso.tpl_desc'] = 'Valfri. Den chunk som ska använas för varje region i rullistan.';
$_lang['prop_fiso.useabbr_desc'] = 'Om satt till 1 kommer regionens förkortning att användas som värde. Om satt till 0 kommer hela regionens namn att användas istället.';

/* FormIt Options */
$_lang['formit.opt_blackglass'] = 'Black Glass';
$_lang['formit.opt_clean'] = 'Clean';
$_lang['formit.opt_red'] = 'Red';
$_lang['formit.opt_white'] = 'White';
$_lang['formit.opt_cache'] = 'MODX Cache';
$_lang['formit.opt_session'] = 'Session';
$_lang['prop_formit.savetmpfiles_desc'] = 'Om satt till 1, kommer FormIt att spara bifogade filer i en temporär katalog.';
$_lang['prop_formit.attachfiles_desc'] = 'Om satt till true, kommer FormIt att lägga till alla fil-fält som bilagor i e-mailet.';
