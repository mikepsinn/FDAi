<?php /** @var \App\Menus\QMMenu $model */ ?>
<?php
/** @var \App\Menus\QMMenu $model */
use App\Models\User;
$model = $model ?? $correlation ?? $aggregateCorrelation ?? $variable ?? $connector ?? $connection ??
                                                                                       $connectorImport ??
                                                                                       $userVariable ?? $user ??
                                                                                                        $aggregateCorrelation
                                                                                                        ??
                                                                                                        $application ??
                                                                                                        $bshafferOauthAccessToken
                                                                                                        ??
                                                                                                        $bshafferOauthAuthorizationCode
                                                                                                        ??
                                                                                                        $bshafferOauthClient
                                                                                                        ??
                                                                                                        $bshafferOauthRefreshToken
                                                                                                        ??
                                                                                                        $buttonClick ??
                                                                                                        $button ??
                                                                                                        $card ??
                                                                                                        $collaborator ??
                                                                                                        $commonTag ??
                                                                                                        $connection ??
                                                                                                        $connectorDevice
                                                                                                        ??
                                                                                                        $connectorImport
                                                                                                        ?? $connector ??
                                                                                                           $correlation
                                                                                                           ??
                                                                                                           $credential
                                                                                                           ??
                                                                                                           $cryptoTrade
                                                                                                           ??
                                                                                                           $ctCause ??
                                                                                                           $ctConditionCause
                                                                                                           ??
                                                                                                           $ctConditionSymptom
                                                                                                           ??
                                                                                                           $ctConditionTreatment
                                                                                                           ??
                                                                                                           $ctCondition
                                                                                                           ??
                                                                                                           $ctCorrelation
                                                                                                           ??
                                                                                                           $ctSideeffect
                                                                                                           ??
                                                                                                           $ctSymptom ??
                                                                                                           $ctTreatmentSideeffect
                                                                                                           ??
                                                                                                           $ctTreatment
                                                                                                           ??
                                                                                                           $deviceToken
                                                                                                           ??
                                                                                                           $failedJob ??
                                                                                                           $follower ??
                                                                                                           $healthCheck
                                                                                                           ??
                                                                                                           $measurementExport
                                                                                                           ??
                                                                                                           $measurementImport
                                                                                                           ??
                                                                                                           $measurement
                                                                                                           ??
                                                                                                           $meddraAllIndication
                                                                                                           ?? $medium ??
                                                                                                              $migration
                                                                                                              ??
                                                                                                              $notification
                                                                                                              ??
                                                                                                              $oAhmadfatoniApigeneratorDatum
                                                                                                              ??
                                                                                                              $oBackendAccessLog
                                                                                                              ??
                                                                                                              $oBackendUserGroup
                                                                                                              ??
                                                                                                              $oBackendUserPreference
                                                                                                              ??
                                                                                                              $oBackendUserRole
                                                                                                              ??
                                                                                                              $oBackendUserThrottle
                                                                                                              ??
                                                                                                              $oBackendUser
                                                                                                              ??
                                                                                                              $oBackendUsersGroup
                                                                                                              ??
                                                                                                              $oCache ??
                                                                                                              $oCmsThemeDatum
                                                                                                              ??
                                                                                                              $oCmsThemeLog
                                                                                                              ??
                                                                                                              $oCmsThemeTemplate
                                                                                                              ??
                                                                                                              $oDeferredBinding
                                                                                                              ??
                                                                                                              $oFailedJob
                                                                                                              ??
                                                                                                              $oFlynsarmySocialloginUserProvider
                                                                                                              ??
                                                                                                              $oJob ??
                                                                                                              $oKurtjensenPassageGroupsKey
                                                                                                              ??
                                                                                                              $oKurtjensenPassageKey
                                                                                                              ??
                                                                                                              $oKurtjensenPassageVariance
                                                                                                              ??
                                                                                                              $oMeysamEventcounterEventLog
                                                                                                              ??
                                                                                                              $oMeysamEventcounterEvent
                                                                                                              ??
                                                                                                              $oMigration
                                                                                                              ??
                                                                                                              $oRainlabBlogCategory
                                                                                                              ??
                                                                                                              $oRainlabBlogPost
                                                                                                              ??
                                                                                                              $oRainlabBlogPostsCategory
                                                                                                              ??
                                                                                                              $oRainlabNotifyNotificationRule
                                                                                                              ??
                                                                                                              $oRainlabNotifyNotification
                                                                                                              ??
                                                                                                              $oRainlabNotifyRuleAction
                                                                                                              ??
                                                                                                              $oRainlabNotifyRuleCondition
                                                                                                              ??
                                                                                                              $oRainlabUserMailBlocker
                                                                                                              ??
                                                                                                              $oRenatioDynamicpdfPdfLayout
                                                                                                              ??
                                                                                                              $oRenatioDynamicpdfPdfTemplate
                                                                                                              ??
                                                                                                              $oSession
                                                                                                              ??
                                                                                                              $oSuresoftwareMaillogLog
                                                                                                              ??
                                                                                                              $oSystemEventLog
                                                                                                              ??
                                                                                                              $oSystemFile
                                                                                                              ??
                                                                                                              $oSystemMailLayout
                                                                                                              ??
                                                                                                              $oSystemMailPartial
                                                                                                              ??
                                                                                                              $oSystemMailTemplate
                                                                                                              ??
                                                                                                              $oSystemParameter
                                                                                                              ??
                                                                                                              $oSystemPluginHistory
                                                                                                              ??
                                                                                                              $oSystemPluginVersion
                                                                                                              ??
                                                                                                              $oSystemRequestLog
                                                                                                              ??
                                                                                                              $oSystemRevision
                                                                                                              ??
                                                                                                              $oSystemSetting
                                                                                                              ??
                                                                                                              $oUserGroup
                                                                                                              ??
                                                                                                              $oUserThrottle
                                                                                                              ??
                                                                                                              $oUser ??
                                                                                                              $oUsersGroup
                                                                                                              ??
                                                                                                              $passwordReset
                                                                                                              ??
                                                                                                              $phrase ??
                                                                                                              $purchase
                                                                                                              ??
                                                                                                              $sentEmail
                                                                                                              ??
                                                                                                              $sourcePlatform
                                                                                                              ??
                                                                                                              $source ??
                                                                                                              $study ??
                                                                                                              $subscription
                                                                                                              ??
                                                                                                              $telescopeEntry
                                                                                                              ??
                                                                                                              $telescopeEntriesTag
                                                                                                              ??
                                                                                                              $telescopeMonitoring
                                                                                                              ??
                                                                                                              $thirdPartyCorrelation
                                                                                                              ??
                                                                                                              $trackerLog
                                                                                                              ??
                                                                                                              $trackerSession
                                                                                                              ??
                                                                                                              $trackingReminderNotification
                                                                                                              ??
                                                                                                              $trackingReminder
                                                                                                              ??
                                                                                                              $unitCategory
                                                                                                              ??
                                                                                                              $unitConversion
                                                                                                              ??
                                                                                                              $unit ??
                                                                                                              $userClient
                                                                                                              ??
                                                                                                              $userTag
                                                                                                              ??
                                                                                                              $userVariableClient
                                                                                                              ??
                                                                                                              $userVariable
                                                                                                              ??
                                                                                                              $variableCategory
                                                                                                              ??
                                                                                                              $variableUserSource
                                                                                                              ??
                                                                                                              $variable
                                                                                                              ??
                                                                                                              $vote ??
                                                                                                              $wpActionschedulerAction
                                                                                                              ??
                                                                                                              $wpActionschedulerClaim
                                                                                                              ??
                                                                                                              $wpActionschedulerGroup
                                                                                                              ??
                                                                                                              $wpActionschedulerLog
                                                                                                              ??
                                                                                                              $wpAreteWpSmileySetting
                                                                                                              ??
                                                                                                              $wpAreteWpSmiley
                                                                                                              ??
                                                                                                              $wpAreteWpSmileysManage
                                                                                                              ??
                                                                                                              $wpAs3cfItem
                                                                                                              ??
                                                                                                              $wpBlogVersion
                                                                                                              ??
                                                                                                              $wpBlog ??
                                                                                                              $wpBpActivity
                                                                                                              ??
                                                                                                              $wpBpActivityMetum
                                                                                                              ??
                                                                                                              $wpBpFriend
                                                                                                              ??
                                                                                                              $wpBpGroup
                                                                                                              ??
                                                                                                              $wpBpGroupsGroupmetum
                                                                                                              ??
                                                                                                              $wpBpGroupsMember
                                                                                                              ??
                                                                                                              $wpBpInvitation
                                                                                                              ??
                                                                                                              $wpBpMessagesMessage
                                                                                                              ??
                                                                                                              $wpBpMessagesMetum
                                                                                                              ??
                                                                                                              $wpBpMessagesNotice
                                                                                                              ??
                                                                                                              $wpBpMessagesRecipient
                                                                                                              ??
                                                                                                              $wpBpNotification
                                                                                                              ??
                                                                                                              $wpBpNotificationsMetum
                                                                                                              ??
                                                                                                              $wpBpUserBlog
                                                                                                              ??
                                                                                                              $wpBpUserBlogsBlogmetum
                                                                                                              ??
                                                                                                              $wpBpXprofileDatum
                                                                                                              ??
                                                                                                              $wpBpXprofileField
                                                                                                              ??
                                                                                                              $wpBpXprofileGroup
                                                                                                              ??
                                                                                                              $wpBpXprofileMetum
                                                                                                              ??
                                                                                                              $wpCommentmetum
                                                                                                              ??
                                                                                                              $wpComment
                                                                                                              ??
                                                                                                              $wpDaRReaction
                                                                                                              ??
                                                                                                              $wpDaRVote
                                                                                                              ??
                                                                                                              $wpEffecto
                                                                                                              ??
                                                                                                              $wpLink ??
                                                                                                              $wpMailchimpCart
                                                                                                              ??
                                                                                                              $wpMailchimpJob
                                                                                                              ??
                                                                                                              $wpOption
                                                                                                              ??
                                                                                                              $wpPostmetum
                                                                                                              ??
                                                                                                              $wpPost ??
                                                                                                              $wpRegistrationLog
                                                                                                              ??
                                                                                                              $wpSignup
                                                                                                              ??
                                                                                                              $wpSimplyStaticPage
                                                                                                              ??
                                                                                                              $wpSirvImage
                                                                                                              ??
                                                                                                              $wpSirvShortcode
                                                                                                              ??
                                                                                                              $wpSite ??
                                                                                                              $wpSitemetum
                                                                                                              ??
                                                                                                              $wpTermRelationship
                                                                                                              ??
                                                                                                              $wpTermTaxonomy
                                                                                                              ??
                                                                                                              $wpTermmetum
                                                                                                              ??
                                                                                                              $wpTerm ??
                                                                                                              $wpUsermetum
                                                                                                              ??
                                                                                                              $wpUser ??
                                                                                                              $wpWcAdminNoteAction
                                                                                                              ??
                                                                                                              $wpWcAdminNote
                                                                                                              ??
                                                                                                              $wpWcCategoryLookup
                                                                                                              ??
                                                                                                              $wpWcCustomerLookup
                                                                                                              ??
                                                                                                              $wpWcDownloadLog
                                                                                                              ??
                                                                                                              $wpWcOrderCouponLookup
                                                                                                              ??
                                                                                                              $wpWcOrderProductLookup
                                                                                                              ??
                                                                                                              $wpWcOrderStat
                                                                                                              ??
                                                                                                              $wpWcOrderTaxLookup
                                                                                                              ??
                                                                                                              $wpWcProductMetaLookup
                                                                                                              ??
                                                                                                              $wpWcTaxRateClass
                                                                                                              ??
                                                                                                              $wpWcWebhook
                                                                                                              ??
                                                                                                              $wpWoocommerceApiKey
                                                                                                              ??
                                                                                                              $wpWoocommerceAttributeTaxonomy
                                                                                                              ??
                                                                                                              $wpWoocommerceDownloadableProductPermission
                                                                                                              ??
                                                                                                              $wpWoocommerceLog
                                                                                                              ??
                                                                                                              $wpWoocommerceOrderItemmetum
                                                                                                              ??
                                                                                                              $wpWoocommerceOrderItem
                                                                                                              ??
                                                                                                              $wpWoocommercePaymentTokenmetum
                                                                                                              ??
                                                                                                              $wpWoocommercePaymentToken
                                                                                                              ??
                                                                                                              $wpWoocommerceSession
                                                                                                              ??
                                                                                                              $wpWoocommerceShippingZoneLocation
                                                                                                              ??
                                                                                                              $wpWoocommerceShippingZoneMethod
                                                                                                              ??
                                                                                                              $wpWoocommerceShippingZone
                                                                                                              ??
                                                                                                              $wpWoocommerceTaxRateLocation
                                                                                                              ??
                                                                                                              $wpWoocommerceTaxRate
                                                                                                              ??
                                                                                                              $wpWpreactionsReactedUser
                                                                                                              ??
                                                                                                              qm_request()->getModelInstance();
$route = $route ?? qm_request()->getDataLabRouteName();
if(!isset($table)){
	$viewPath = $table = qm_request()->getTable();
	if($table === User::TABLE){
		$viewPath = "users";
	}
}
?>
<div class="row">
    <div class="col-md-4">
        {!! $model->getAvatarBadgesRelationshipListBoxHtml() !!}
    </div>
    <!-- /.col -->
    <div class="col-md-8">
    @include('model-tabs')
    <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
