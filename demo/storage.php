<?
$bodyClass = '';

$testData = include('./testdata.php');
$user = null;
if($_GET['user']){
	$username = $_GET['user'];
	if(isset($testData[$username])){
		$user = $testData[$username];
	}
}
?>
<? include('./layoutHeader.php');?>
<!-- Output the breadcrumb if it's set -->
<div class="container">
	<nav aria-label="breadcrumb" role="navigation">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item" aria-current="page"><a href="/settings">Settings</a></li>
			<li class="breadcrumb-item active" aria-current="page">Storage</li>
		</ol>
	</nav>
</div>
<main>
	<div class="container">
		<div class="row">
			<div class="col-lg-2 d-none d-lg-block">
				<nav id="settings-nav-side" class="nav flex-column nav-pills">
					<a class="nav-item nav-link" href="/settings/account">Account</a>
					<a class="nav-item nav-link" href="/settings/profile">Profile</a>
					<a class="nav-item nav-link" href="/settings/cv">C.V.</a>
					<a class="nav-item nav-link" href="/settings/privacy">Privacy</a>
					<a class="nav-item nav-link" href="/settings/notifications">Email</a>
					<a class="nav-item nav-link" href="/settings/keys">Feeds/API</a>
					<a class="nav-item nav-link active" href="/settings/storage">Storage</a>
				</nav>
			</div>
			<div class="col-xs-12 col-lg-8 offset-lg-1 settings-form">
				<nav id="settings-nav-top" class="nav d-lg-none mb-4">
					<a class="nav-item nav-link" href="/settings/account">Account</a>
					<a class="nav-item nav-link" href="/settings/profile">Profile</a>
					<a class="nav-item nav-link" href="/settings/cv">C.V.</a>
					<a class="nav-item nav-link" href="/settings/privacy">Privacy</a>
					<a class="nav-item nav-link" href="/settings/notifications">Email</a>
					<a class="nav-item nav-link" href="/settings/keys">Feeds/API</a>
					<a class="nav-item nav-link active" href="/settings/storage">Storage</a>
				</nav>
				
				<p><a href="http://www.zotero.org/support/storage_faq">Frequently Asked Questions</a></p>
				<p class='mb-0'><a href="/settings/storage/invoice">View Payment Receipt</a></p>
				<p class="text-muted small">This is the receipt for your most recent payment. You can edit the contact information on the receipt if necessary.</p>

				<div id='react-storage'></div>

				<p>Subscriptions are billed annually<br />
				By using Zotero, you agree to be bound by its <a href="">Terms of Service</a>.</p>

				<hr />
				<div class='purge-storage'>
					<button class='btn btn-danger'>Purge Storage</button>
				</div>
				<script type="text/javascript" charset="utf-8">
					window.zoteroData={};
					ZoteroWebComponents.pageReady(function() {
						window.storageElement = ReactDOM.render(
							React.createElement(ZoteroWebComponents.Storage, null),
							document.getElementById('react-storage')
						);
						let now = Date.now() / 1000;

						let testStates = {
							test1: {"userSubscription":{"userID":10150,"storageLevel":3,"quota":"6000","expirationDate":"1515741243","recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
								"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
								"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
								"stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},
								"operationPending":false,
								"notificationClass":"",
								"notification":""},
							test2: {"userSubscription":{"userID":10150,"storageLevel":2,"quota":"2000","expirationDate":"1454741243","recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},"stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},"operationPending":false,"notificationClass":"","notification":""},
							test3: {"userSubscription":{"userID":10150,"storageLevel":2,"quota":"2000","expirationDate":"1515741243","recur":1,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"500.4","library":"406.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":true},"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},"stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},"operationPending":false,"notificationClass":"","notification":""},
							unused: {"userSubscription":{"userID":10150,"storageLevel":1,"quota":"300","expirationDate":0,"recur":false,"paymentType":"","orderID":"","usage":{"total":"55","library":"55","groups":{}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
								"storageGroups":[],
								"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
								"stripeCustomer":null,
								"operationPending":false,
								"notificationClass":"",
								"notification":""},
							overQuota: {"userSubscription":{"userID":10150,"storageLevel":2,"quota":"2000","expirationDate":"1515741243","recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
								"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
								"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
								"stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},
								"operationPending":false,
								"notificationClass":"",
								"notification":""},
							expiringSoon: {"userSubscription":{"userID":10150,"storageLevel":3,"quota":"6000","expirationDate":`${now+150000}`,"recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
								"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
								"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
								"stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},
								"operationPending":false,
								"notificationClass":"",
								"notification":""},
							unlimited: {"userSubscription":{"userID":10150,"storageLevel":6,"quota":"1000000","expirationDate":`${now+1500000}`,"recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
								"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
								"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
								"stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},
								"operationPending":false,
								"notificationClass":"",
								"notification":""},
							autoRenew: {"userSubscription":{"userID":10150,"storageLevel":3,"quota":"6000","expirationDate":`${now+150000}`,"recur":1,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
								"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
								"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
								"stripeCustomer":{"id":"cus_9vs2nvCwQF4AVg","object":"customer","account_balance":0,"created":1484434018,"currency":null,"default_source":{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"-","address_country":"United States","address_line1":"-","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22030","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null},"delinquent":false,"description":"fcheslack","discount":null,"email":"fcheslack@gmail.com","livemode":false,"metadata":[],"shipping":null,"sources":{"object":"list","data":[{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"Falls Church","address_country":"United States","address_line1":"Covewood","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22042","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null}],"has_more":false,"total_count":1,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/sources"},"subscriptions":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/subscriptions"}},
								"operationPending":false,
								"notificationClass":"",
								"notification":""},
							recurOnExpired: {"userSubscription":{"userID":10150,"storageLevel":3,"quota":"6000","expirationDate":`${now-150000}`,"recur":1,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
								"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
								"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
								"stripeCustomer":{"id":"cus_9vs2nvCwQF4AVg","object":"customer","account_balance":0,"created":1484434018,"currency":null,"default_source":{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"-","address_country":"United States","address_line1":"-","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22030","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null},"delinquent":false,"description":"fcheslack","discount":null,"email":"fcheslack@gmail.com","livemode":false,"metadata":[],"shipping":null,"sources":{"object":"list","data":[{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"Falls Church","address_country":"United States","address_line1":"Covewood","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22042","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null}],"has_more":false,"total_count":1,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/sources"},"subscriptions":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/subscriptions"}},
								"operationPending":false,
								"notificationClass":"",
								"notification":""},
							expired: {"userSubscription":{"userID":10150,"storageLevel":3,"quota":"6000","expirationDate":`${now-150000}`,"recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
								"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
								"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
								"stripeCustomer":{"id":"cus_9vs2nvCwQF4AVg","object":"customer","account_balance":0,"created":1484434018,"currency":null,"default_source":{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"-","address_country":"United States","address_line1":"-","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22030","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null},"delinquent":false,"description":"fcheslack","discount":null,"email":"fcheslack@gmail.com","livemode":false,"metadata":[],"shipping":null,"sources":{"object":"list","data":[{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"Falls Church","address_country":"United States","address_line1":"Covewood","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22042","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null}],"has_more":false,"total_count":1,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/sources"},"subscriptions":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/subscriptions"}},
								"operationPending":false,
								"notificationClass":"",
								"notification":""},
						};

						let testCase = testStates['test1'];
						if(window.location.hash.length > 0){
							let testLabel = window.location.hash.substr(1);
							testCase = testStates[testLabel];
						}
						window.storageElement.setState(testCase);

						ZoteroWebComponents.cycleTestCases(window.storageElement, testStates);
					});
				</script>
			</div>
		</div>
	</div>
</main>
<? include('./layoutFooter.php')?>