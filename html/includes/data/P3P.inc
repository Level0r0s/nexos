<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |
  +-------------------------------------------------------------------+
*/

$P3P_opt_no = 'Users cannot opt-in or opt-out of this usage';
$P3P_opt_in = 'Prior consent must be provided by users';
$P3P_opt_out = 'Users may opt-out of the data being used for this purpose.';
$P3P_CP = array (
	0 => 'Access',
	'NOI' => 'Web Site does not collect identified data.',
	'ALL' => 'All Identified Data:<br />access is given to all identified data.',
	'CAO' => 'Identified Contact Information and Other Identified Data:<br />access is given to identified online and physical contact information as well as to certain other identified data.',
	'IDC' => 'Identifiable Contact Information:<br />access is given to identified online and physical contact information (e.g., users can access things such as a postal address).',
	'OTI' => 'Other Identified Data:<br />access is given to certain other identified data (e.g., users can access things such as their online account charges).',
	'NON' => 'None:<br />no access to identified data is given.',
	1 => 'Disputes',
	'DSP' => 'The policy contains at least one dispute-resolution mechanism.',
	2 => 'Remedies',
	'COR' => 'Errors or wrongful actions arising in connection with the privacy policy will be remedied by the service.',
	'MON' => 'If the service provider violates its privacy policy it will pay the individual an amount specified in the human readable privacy policy or the amount of damages.',
	'LAW' => 'Remedies for breaches of the policy statement will be determined based on the law referenced in the human readable description.',
	3 => 'Non-Identifiable',
	'NID' => 'Non-Identifiable:<br />No data is collected (including Web logs), or that the organization collecting the data will anonymize the data referenced.<br />In order to consider the data "anonymized", there must be no reasonable way for the entity or a third party to attach the collected data to the identity of a natural person. Some types of data are inherently anonymous, such as randomly-generated session IDs. Data which might identify natural people in some circumstances, such as IP addresses, names, or addresses, must have a non-reversible transformation applied in order be considered "anonymized".',
	4 => 'Purpose',
	'CUR' => 'Completion and Support of Activity For Which Data Was Provided:<br />Information may be used by the service provider to complete the activity for which it was provided, whether a one-time activity such as returning the results from a Web search, forwarding an email message, or placing an order; or a recurring activity such as providing a subscription service, or allowing access to an online address book or electronic wallet.',
	'ADM' => 'Web Site and System Administration:<br />Information may be used for the technical support of the Web site and its computer system. This would include processing computer account information, information used in the course of securing and maintaining the site, and verification of Web site activity by the site or its agents.',
	'DEV' => 'Research and Development:<br />Information may be used to enhance, evaluate, or otherwise review the site, service, product, or market. This does not include personal information used to tailor or modify the content to the specific individual nor information used to evaluate, target, profile or contact the individual.',
	'TAI' => 'One-time Tailoring:<br />Information may be used to tailor or modify content or design of the site where the information is used only for a single visit to the site and not used for any kind of future customization. For example, an online store might suggest other items a visitor may wish to purchase based on the items he has already placed in his shopping basket.',
	'PSA' => 'Pseudonymous Analysis:<br />Information may be used to create or build a record of a particular individual or computer that is tied to a pseudonymous identifier, without tying identified data (such as name, address, phone number, or email address) to the record. This profile will be used to determine the habits, interests, or other characteristics of individuals for purpose of research, analysis and reporting, but it will not be used to attempt to identify specific individuals. For example, a marketer may wish to understand the interests of visitors to different portions of a Web site.',
	'PSD' => 'Pseudonymous Decision:<br />Information may be used to create or build a record of a particular individual or computer that is tied to a pseudonymous identifier, without tying identified data (such as name, address, phone number, or email address) to the record. This profile will be used to determine the habits, interests, or other characteristics of individuals to make a decision that directly affects that individual, but it will not be used to attempt to identify specific individuals. For example, a marketer may tailor or modify content displayed to the browser based on pages viewed during previous visits.',
	'IVA' => 'Individual Analysis:<br />Information may be used to determine the habits, interests, or other characteristics of individuals and combine it with identified data for the purpose of research, analysis and reporting. For example, an online Web site for a physical store may wish to analyze how online shoppers make offline purchases.',
	'IVD' => 'Individual Decision:<br />Information may be used to determine the habits, interests, or other characteristics of individuals and combine it with identified data to make a decision that directly affects that individual.  For example, an online store suggests items a visitor may wish to purchase based on items he has purchased during previous visits to the Web site.',
	'CON' => 'Contacting Visitors for Marketing of Services or Products:<br />Information may be used to contact the individual, through a communications channel other than voice telephone, for the promotion of a product or service. This includes notifying visitors about updates to the Web site. This does not include a direct reply to a question or comment or customer service for a single transaction -- in those cases, <current/> would be used. In addition, this does not include marketing via customized Web content or banner advertisements embedded in sites the user is visiting -- these cases would be covered by the TAI, PSA and PSD, or IVA and IVD purposes.',
	'HIS' => 'Historical Preservation:<br />Information may be archived or stored for the purpose of preserving social history as governed by an existing law or policy. This law or policy MUST be referenced in the <DISPUTES> element and MUST include a specific definition of the type of qualified researcher who can access the information, where this information will be stored and specifically how this collection advances the preservation of history.',
	'TEL' => 'Contacting Visitors for Marketing of Services or Products Via Telephone:<br />Information may be used to contact the individual via a voice telephone call for promotion of a product or service. This does not include a direct reply to a question or comment or customer service for a single transaction -- in those cases, CUR would be used.',
	'OTP' => 'Other Uses:<br />Information may be used in other ways not captured by the above definitions. (A human readable explanation MUST be provided in these instances).',
	5 => 'Recipient',
	'OUR' => 'Ourselves and/or entities acting as our agents or entities for whom we are acting as an agent:<br />An agent in this instance is defined as a third party that processes data only on behalf of the service provider for the completion of the stated purposes. (e.g., the service provider and its printing bureau which prints address labels and does nothing further with the information.)',
	'DEL' => 'Delivery services possibly following different practices:<br />Legal entities performing delivery services  that may use data for purposes other than completion of the stated purpose. This should also be used for delivery services whose data practices are unknown.',
	'SAM' => 'Legal entities following our practices:<br />Legal entities who use the data on their own behalf under equable practices. (e.g., consider a service provider that grants the user access to collected personal information, and also provides it to a partner who uses it once but discards it. Since the recipient, who has otherwise similar practices, cannot grant the user access to information that it discarded, they are considered to have equable practices.)',
	'UNR' => 'Unrelated third parties:<br />Legal entities whose data usage practices are not known by the original service provider.',
	'PUB' => 'Public fora:<br />Public fora such as bulletin boards, public directories, or commercial CD-ROM directories.',
	'OTR' => 'Legal entities following different practices:<br />Legal entities that are constrained by and accountable to the original service provider, but may use the data in a way not specified in the service provider\'s practices (e.g., the service provider collects data that is shared with a partner who may use it for other purposes. However, it is in the service provider\'s interest to ensure that the data is not used in a way that would be considered abusive to the users\' and its own interests.)',
	6 => 'Retention',
	'NOR' => 'No Retention:<br />Information is not retained for more than a brief period of time necessary to make use of it during the course of a single online interaction. Information MUST be destroyed following this interaction and MUST NOT be logged, archived, or otherwise stored. This type of retention policy would apply, for example, to services that keep no Web server logs, set cookies only for use during a single session, or collect information to perform a search but do not keep logs of searches performed.',
	'STP' => 'For the stated purpose:<br />Information is retained to meet the stated purpose. This requires information to be discarded at the earliest time possible. Sites MUST have a retention policy that establishes a destruction time table. The retention policy MUST be included in or linked from the site\'s human-readable privacy policy.',
	'LEG' => 'As required by law or liability under applicable law:<br />Information is retained to meet a stated purpose, but the retention period is longer because of a legal requirement or liability. For example, a law may allow consumers to dispute transactions for a certain time period; therefore a business may for liability reasons decide to maintain records of transactions, or a law may affirmatively require a certain business to maintain records for auditing or other soundness purposes. Sites MUST have a retention policy that establishes a destruction time table. The retention policy MUST be included in or linked from the site\'s human-readable privacy policy.',
	'BUS' => 'Determined by service provider\'s business practice:<br />Information is retained under a service provider\'s stated business practices. Sites MUST have a retention policy that establishes a destruction time table. The retention policy MUST be included in or linked from the site\'s human-readable privacy policy.',
	'IND' => 'Indefinitely:<br />Information is retained for an indeterminate period of time. The absence of a retention policy would be reflected under this option. Where the recipient is a public fora, this is the appropriate retention policy.',
	7 => 'Categories',
	'PHY' => 'Physical Contact Information:<br />Information that allows an individual to be contacted or located in the physical world -- such as telephone number or address.',
	'ONL' => 'Online Contact Information:<br />Information that allows an individual to be contacted or located on the Internet -- such as email. Often, this information is independent of the specific computer used to access the network. (See the category "Computer Information")',
	'UNI' => 'Unique Identifiers:<br />Non-financial identifiers, excluding government-issued identifiers, issued for purposes of consistently identifying or recognizing the individual. These include identifiers issued by a Web site or service.',
	'PUR' => 'Purchase Information:<br />Information actively generated by the purchase of a product or service, including information about the method of payment.',
	'FIN' => 'Financial Information:<br />Information about an individual\'s finances including account status and activity information such as account balance, payment or overdraft history, and information about an individual\'s purchase or use of financial instruments including credit or debit card information. Information about a discrete purchase by an individual, as described in "Purchase Information," alone does not come under the definition of "Financial Information."',
	'COM' => 'Computer Information:<br />Information about the computer system that the individual is using to access the network -- such as the IP number, domain name, browser type or operating system.',
	'NAV' => 'Navigation and Click-stream Data:<br />Data passively generated by browsing the Web site -- such as which pages are visited, and how long users stay on each page.',
	'INT' => 'Interactive Data:<br />Data actively generated from or reflecting explicit interactions with a service provider through its site -- such as queries to a search engine, or logs of account activity.',
	'DEM' => 'Demographic and Socioeconomic Data:<br />Data about an individual\'s characteristics -- such as gender, age, and income.',
	'CNT' => 'Content:<br />The words and expressions contained in the body of a communication -- such as the text of email, bulletin board postings, or chat room communications.',
	'STA' => 'State Management Mechanisms:<br />Mechanisms for maintaining a stateful session with a user or automatically recognizing users who have visited a particular site or accessed particular content previously -- such as HTTP cookies.',
	'POL' => 'Political Information:<br />Membership in or affiliation with groups such as religious organizations, trade unions, professional associations, political parties, etc.',
	'HEA' => 'Health Information:<br />information about an individual\'s physical or mental health, sexual orientation, use or inquiry into health care services or products, and purchase of health care services or products.',
	'PRE' => 'Preference Data:<br />Data about an individual\'s likes and dislikes -- such as favorite color or musical tastes.',
	'LOC' => 'Location Data:<br />Information that can be used to identify an individual\'s current physical location and track them as their location changes -- such as GPS position data.',
	'GOV' => 'Government-issued Identifiers:<br />Identifiers issued by a government for purposes of consistently identifying the individual.',
	'OTC' => 'Other types of data not captured by the above definitions.',
);
