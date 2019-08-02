<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <title>RTGS_ENGLISH</title>
	</head>
<body>

<!--<button type="button" onclick="changeLang()">Change Language to Finish</button> -->

<!-- SNAPIN START -->
	<style type='text/css'>
	.embeddedServiceHelpButton .helpButton .uiButton {
		background-color: #005290;
		font-family: "Salesforce Sans", sans-serif;
	}
	.embeddedServiceHelpButton .helpButton .uiButton:focus {
		outline: 1px solid #005290;
	}
	@font-face {
		font-family: 'Salesforce Sans';
		src: url('https://www.sfdcstatic.com/system/shared/common/assets/fonts/SalesforceSans/SalesforceSans-Regular.woff') format('woff'),
		url('https://www.sfdcstatic.com/system/shared/common/assets/fonts/SalesforceSans/SalesforceSans-Regular.ttf') format('truetype');
	}

  button.submitButton.uiButton--default.uiButton.embeddedServiceSidebarButton {
	    display: none;
	}

	input#Agent_is_not_avaiable_at_this_time__c {
    	display: none;
	}

	label.uiLabel-left.form-element__label.uiLabel span {
  		display:none;
	}


	label.uiLabel-left.form-element__label.uiLabel:after {
   		font-size: 20px;
   		content: 'Agents are busy or offline.\A Chat opening time is 8-16';
	}

	.backgroundImg {
        height: 270px !important;
    }

</style>

	<script type='text/javascript' src='https://service.force.com/embeddedservice/5.0/esw.min.js'></script>
	<script type='text/javascript'>

	var initESW = function(gslbBaseURL, lang) {
  console.log('initESW');
		embedded_svc.settings.displayHelpButton = true; //Or false
		embedded_svc.settings.language = lang; //For example, enter 'en' or 'en-US'

		//Do not create Contact
		embedded_svc.settings.extraPrechatInfo = [{"entityFieldMaps":
		[{"doCreate":false,"doFind":false,"fieldName":"LastName","isExactMatch":true,"label":"Last Name"},
		{"doCreate":false,"doFind":false,"fieldName":"FirstName","isExactMatch":true,"label":"First Name"},
		{"doCreate":false,"doFind":true,"fieldName":"Email","isExactMatch":true,"label":"Email"}]
		,"entityName":"Contact","saveToTranscript":"Contact","showOnCreate":false},
		{"entityName":"Account","showOnCreate":false,"saveToTranscript":"Account","entityFieldMaps":[{"isExactMatch":true,
		"fieldName":"PersonEmail","doCreate":false,"doFind":true,"label":"Email"}]}];

		//Here you can set login values
		embedded_svc.settings.prepopulatedPrechatFields = {
            FirstName: 'Peter',
            LastName: 'Doe',
            Email: 'john.doe@salesforce.com',
            Subject: 'Hello'
		};

		embedded_svc.settings.enabledFeatures = ['LiveAgent'];
		embedded_svc.settings.entryFeature = 'LiveAgent';


		embedded_svc.init(
			'https://finnair--LiveAgent.cs101.my.salesforce.com',
			'https://liveagent-finnair.cs101.force.com/ChatDemo',
			'https://service.force.com',
			'00D1X0000008c1A',
			'RTGS_ENGLISH',
			{
				baseLiveAgentContentURL: 'https://c.la1-c1cs-fra.salesforceliveagent.com/content',
				deploymentId: '5721X000000003T',
				buttonId: '5731X00000000AT',
				baseLiveAgentURL: 'https://d.la1-c1cs-fra.salesforceliveagent.com/chat',
				eswLiveAgentDevName: 'EmbeddedServiceLiveAgent_Parent04I1X0000004CFQUA2_16a6df7d9bf',
				isOfflineSupportEnabled: true
			}
		);
	};

	if (!window.embedded_svc) {
		var s = document.createElement('script');
		s.setAttribute('src', 'https://finnair--LiveAgent.cs101.my.salesforce.com/embeddedservice/5.0/esw.min.js');
		s.onload = function() {
			initESW(null, 'en');
		};
		document.body.appendChild(s);
	} else {
		initESW('https://service.force.com', 'en');
	}
</script>
<!-- SNAPIN END -->




	</body>
</html>