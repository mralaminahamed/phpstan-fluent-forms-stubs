<?php
/**
 * Generated stub declarations for Fluent Forms.
 * @see https://fluentforms.com/
 * @see https://github.com/mralaminahamed/phpstan-fluent-forms-stubs
 */

namespace FluentForm\App\Api {
    class Entry
    {
        private $form;
        public function __construct($form)
        {
        }
        public function entries($atts = [], $includeFormats = false)
        {
        }
        public function entry($entryId, $includeFormats = false)
        {
        }
        public function report($statuses = [])
        {
        }
    }
    class Form
    {
        public function forms($atts = [], $withFields = false)
        {
        }
        public function find($formId)
        {
        }
        /**
         * Get Form Properties instance
         *
         * @param int|object $form
         *
         * @return \FluentForm\App\Api\FormProperties
         */
        public function form($form)
        {
        }
        public function entryInstance($form)
        {
        }
    }
    class FormProperties
    {
        private $form;
        public function __construct($form)
        {
        }
        /**
         * Get Form formatted inputs
         *
         * @param string[] $with
         *
         * @return array
         */
        public function inputs($with = ['admin_label', 'raw'])
        {
        }
        /**
         * Get Form Input labels
         *
         * @return array
         */
        public function labels()
        {
        }
        /**
         * Get Form Fields
         *
         * @return array
         */
        public function fields()
        {
        }
        /**
         * Get Form Settings
         *
         * @return array
         */
        public function settings()
        {
        }
        /**
         * Get Email Notifications as an array
         *
         * @return array
         */
        public function emailNotifications()
        {
        }
        /**
         * Get Form metas
         *
         * @param $metaName
         * @param false $default
         *
         * @return mixed|string
         */
        public function meta($metaName, $default = false)
        {
        }
        /**
         * Get form renerable pass settings as an array
         *
         * @return array
         */
        public function renderable()
        {
        }
        public function conversionRate()
        {
        }
        public function submissionCount()
        {
        }
        public function viewCount()
        {
        }
        public function unreadCount()
        {
        }
        public function __get($name)
        {
        }
    }
    class Submission
    {
        public function get($args = [])
        {
        }
        public function find($submissionId)
        {
        }
        public function transactions($columnValue, $column = 'submission_id')
        {
        }
        public function transaction($columnValue, $column = 'id')
        {
        }
        public function subscriptions($submissionId, $withTransactions = false)
        {
        }
        public function getSubscription($subscriptionId, $withTransactions = false)
        {
        }
        public function transactionsByUserId($userId = false, $args = [])
        {
        }
        public function transactionsBySubscriptionId($subscriptionId)
        {
        }
        public function transactionsBySubmissionId($submissionId)
        {
        }
        public function subscriptionsByUserId($userId = false, $args = [])
        {
        }
    }
}
namespace FluentForm\Framework\Foundation {
    class App
    {
        protected static $instance = null;
        public static function setInstance($app)
        {
        }
        public static function getInstance($module = null)
        {
        }
        public static function make($module = null)
        {
        }
        public static function __callStatic($method, $params)
        {
        }
    }
}
namespace FluentForm\App {
    class App extends \FluentForm\Framework\Foundation\App
    {
        // ...
    }
    class ComposerScript
    {
        public static function postInstall(\Composer\Script\Event $event)
        {
        }
        public static function postUpdate(\Composer\Script\Event $event)
        {
        }
    }
}
namespace FluentForm\App\Helpers {
    class Helper
    {
        public static $tabIndex = 0;
        public static $formInstance = 0;
        public static $loadedForms = [];
        public static $tabIndexStatus = 'na';
        /**
         * Sanitize form inputs recursively.
         *
         * @param $input
         *
         * @return string $input
         */
        public static function sanitizer($input, $attribute = null, $fields = [])
        {
        }
        public static function makeMenuUrl($page = 'fluent_forms_settings', $component = null)
        {
        }
        public static function getHtmlElementClass($value1, $value2, $class = 'active', $default = '')
        {
        }
        /**
         * Determines if the given string is a valid json.
         *
         * @param $string
         *
         * @return bool
         */
        public static function isJson($string)
        {
        }
        public static function isSlackEnabled()
        {
        }
        public static function getEntryStatuses($form_id = false)
        {
        }
        public static function getReportableInputs()
        {
        }
        public static function getSubFieldReportableInputs()
        {
        }
        public static function getFormMeta($formId, $metaKey, $default = '')
        {
        }
        public static function setFormMeta($formId, $metaKey, $value)
        {
        }
        public static function getSubmissionMeta($submissionId, $metaKey, $default = false)
        {
        }
        public static function setSubmissionMeta($submissionId, $metaKey, $value, $formId = false)
        {
        }
        public static function isEntryAutoDeleteEnabled($formId)
        {
        }
        public static function formExtraCssClass($form)
        {
        }
        public static function getNextTabIndex($increment = 1)
        {
        }
        public static function getFormInstaceClass($formId)
        {
        }
        public static function resetTabIndex()
        {
        }
        public static function isFluentAdminPage()
        {
        }
        public static function getShortCodeIds($content, $tag = 'fluentform', $selector = 'id')
        {
        }
        public static function getFormsIdsFromBlocks($content)
        {
        }
        public static function isTabIndexEnabled()
        {
        }
        public static function isMultiStepForm($formId)
        {
        }
        public static function hasFormElement($formId, $elementName)
        {
        }
        public static function isUniqueValidation($validation, $field, $formData, $fields, $form)
        {
        }
        public static function hasPartialEntries($formId)
        {
        }
        public static function getNumericFormatters()
        {
        }
        public static function getNumericValue($input, $formatterName)
        {
        }
        public static function getNumericFormatted($input, $formatterName)
        {
        }
        public static function getDuplicateFieldNames($fields)
        {
        }
        protected static function getFieldNamesStatuses($fields)
        {
        }
        public static function isConversionForm($formId)
        {
        }
        public static function getPreviewUrl($formId, $type = '')
        {
        }
        public static function getFormAdminPermalink($route, $form)
        {
        }
        public static function getFormSettingsUrl($form)
        {
        }
        private static function getConversionUrl($formId)
        {
        }
        public static function fileUploadLocations()
        {
        }
        public static function unreadCount($formId)
        {
        }
        public static function getForms()
        {
        }
        public static function replaceBrTag($content, $with = '')
        {
        }
        public static function hasBrTag($content)
        {
        }
        public static function sanitizeForCSV($content)
        {
        }
        public static function sanitizeOrderValue($orderType = '')
        {
        }
        public static function getForm($id)
        {
        }
        public static function shouldHidePassword($formId)
        {
        }
        // make tabular-grid value markdown format
        public static function getTabularGridFormatValue($girdData, $field, $rowJoiner = '<br />', $colJoiner = ', ', $type = '')
        {
        }
        public static function getInputNameFromShortCode($value)
        {
        }
        public static function getRestInfo()
        {
        }
        public static function getLogInitiator($action, $type = 'log')
        {
        }
    }
    class IntegrationManagerHelper
    {
        protected $settingsKey;
        protected $formId;
        protected $isMultiple;
        protected $integrationService;
        public function __construct($settingsKey = '', $form_id = false, $isMultiple = false)
        {
        }
        public function get($settingsId)
        {
        }
        public function save($settings)
        {
        }
        public function update($settingsId, $settings)
        {
        }
        public function delete($settingsId)
        {
        }
        public function getAll()
        {
        }
        protected function logResponse($response, $feed, $data, $form, $entryId, $status)
        {
        }
        protected function getApiResponseMessage($response, $status)
        {
        }
        public function getFormattedValue($setting)
        {
        }
    }
    class Protector
    {
        /**
         * Get the salt for the encryption and decryption.
         */
        public static function getSalt()
        {
        }
        /**
         * Encryp a text using a predefined salt.
         *
         * @param string $text
         *
         * @return string $text
         */
        public static function encrypt($text)
        {
        }
        /**
         * Decrypt a text using a predefined salt.
         *
         * @param string $text
         *
         * @return string $text
         */
        public static function decrypt($text)
        {
        }
    }
    class Str
    {
        /**
         * Determine if a given string starts with a given substring.
         *
         * @param string       $haystack
         * @param string|array $needles
         *
         * @return bool
         */
        public static function startsWith($haystack, $needles)
        {
        }
        /**
         * Determine if a given string ends with a given substring.
         *
         * @param string       $haystack
         * @param string|array $needles
         *
         * @return bool
         */
        public static function endsWith($haystack, $needles)
        {
        }
        /**
         * Determine if a given string contains a given substring.
         *
         * @param string       $haystack
         * @param string|array $needles
         *
         * @return bool
         */
        public static function contains($haystack, $needles)
        {
        }
        /**
         * Determine if a given string does not contain a given substring.
         *
         * @param string       $haystack
         * @param string|array $needles
         *
         * @return bool
         */
        public static function doNotContains($haystack, $needles)
        {
        }
        /**
         * Split string as array of string on given substring.
         *
         * @param string       $haystack
         * @param string|array $needles
         *
         * @return array
         */
        public static function separateString($haystack, $needles)
        {
        }
    }
}
namespace FluentForm\App\Hooks\Handlers {
    class ActivationHandler
    {
        public function handle($network_wide = false)
        {
        }
        public function migrate()
        {
        }
        private function setDefaultGlobalSettings()
        {
        }
        private function setCurrentVersion()
        {
        }
        public function maybeMigrateDB()
        {
        }
        public function migrateGlobalAddOns()
        {
        }
        public function maybeMigrateDefaultForms()
        {
        }
        public function setCronSchedule()
        {
        }
    }
    class DeactivationHandler
    {
        public function handle()
        {
        }
        private function disableCronSchedule()
        {
        }
    }
    class GlobalNotificationHandler
    {
        /**
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        protected $app;
        /**
         * @var GlobalNotificationService
         */
        private $globalNotificationService;
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function globalNotify($insertId, $formData, $form)
        {
        }
    }
}
namespace FluentForm\Framework\Http {
    abstract class Controller
    {
        /**
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app = null;
        /**
         * @var \FluentForm\Framework\Request\Request
         */
        protected $request = null;
        /**
         * @var \FluentForm\Framework\Response\Response
         */
        protected $response = null;
        public function __construct()
        {
        }
        public function validate($data, $rules, $messages = [])
        {
        }
        public function json($data = null, $code = 200)
        {
        }
        public function send($data = null, $code = 200)
        {
        }
        public function sendSuccess($data = null, $code = 200)
        {
        }
        public function sendError($data = null, $code = null)
        {
        }
        public function __get($key)
        {
        }
        public function response($data, $code = 200)
        {
        }
    }
}
namespace FluentForm\App\Http\Controllers {
    abstract class Controller extends \FluentForm\Framework\Http\Controller
    {
        //
    }
    class AdminNoticeController extends \FluentForm\App\Http\Controllers\Controller
    {
        private $notice = false;
        private $noticeDisabledTime = 60 * 60 * 24 * 15;
        // 15 days
        private $noticePrefKey = '_fluentform_notice_pref';
        private $pref = false;
        public function showNotice()
        {
        }
        public function addNotice($notice)
        {
        }
        public function noticeActions()
        {
        }
        public function renderNotice($notice, $notice_key = false)
        {
        }
        public function hasNotice()
        {
        }
        private function disableNotice($notice_key, $type = 'temp')
        {
        }
        public function getNoticePref()
        {
        }
        public function shouldShowNotice($noticeName)
        {
        }
        private function haveTempHideNotice($noticeName)
        {
        }
        private function hasPermission()
        {
        }
    }
    class AnalyticsController extends \FluentForm\App\Http\Controllers\Controller
    {
        /**
         * Store Form Analytics data
         *
         * @param  \FluentForm\App\Services\Form\FormService $formService
         * @return \WP_REST_Response
         */
        public function store($formId)
        {
        }
        public function reset(\FluentForm\App\Services\Analytics\AnalyticsService $analyticsService, $formId)
        {
        }
    }
    class FormController extends \FluentForm\App\Http\Controllers\Controller
    {
        /**
         * Get the paginated forms matching search criteria.
         *
         * @param  \FluentForm\App\Services\Form\FormService $formService
         * @return \WP_REST_Response
         */
        public function index(\FluentForm\App\Services\Form\FormService $formService)
        {
        }
        /**
         * Create a form from backend/editor
         *
         * @param  \FluentForm\App\Services\Form\FormService $formService
         * @return \WP_REST_Response
         */
        public function store(\FluentForm\App\Services\Form\FormService $formService)
        {
        }
        public function duplicate(\FluentForm\App\Services\Form\FormService $formService)
        {
        }
        public function find(\FluentForm\App\Services\Form\FormService $formService)
        {
        }
        public function delete(\FluentForm\App\Services\Form\FormService $formService)
        {
        }
        public function update(\FluentForm\App\Services\Form\FormService $formService)
        {
        }
        public function convert(\FluentForm\App\Services\Form\FormService $formService)
        {
        }
        public function templates(\FluentForm\App\Services\Form\FormService $formService)
        {
        }
        public function resources(\FluentForm\App\Services\Form\FormService $formService, $formId)
        {
        }
        public function fields(\FluentForm\App\Services\Form\FormService $formService, $formId)
        {
        }
        public function shortcodes(\FluentForm\App\Services\Form\FormService $formService, $formId)
        {
        }
        public function pages(\FluentForm\App\Services\Form\FormService $formService)
        {
        }
        public function findShortCodePage(\FluentForm\App\Services\Form\FormService $formService, $formId)
        {
        }
    }
    class FormIntegrationController extends \FluentForm\App\Http\Controllers\Controller
    {
        public function index(\FluentForm\App\Services\Integrations\FormIntegrationService $integrationService)
        {
        }
        public function find(\FluentForm\App\Services\Integrations\FormIntegrationService $integrationService)
        {
        }
        public function update(\FluentForm\App\Services\Integrations\FormIntegrationService $integrationService)
        {
        }
        public function delete(\FluentForm\App\Services\Integrations\FormIntegrationService $integrationService)
        {
        }
        public function integrationListComponent()
        {
        }
    }
    class FormSettingsController extends \FluentForm\App\Http\Controllers\Controller
    {
        public function index(\FluentForm\App\Services\Settings\SettingsService $settingsService)
        {
        }
        public function general(\FluentForm\App\Services\Settings\SettingsService $settingsService, $formId)
        {
        }
        public function saveGeneral(\FluentForm\App\Services\Settings\SettingsService $settingsService)
        {
        }
        public function store(\FluentForm\App\Services\Settings\SettingsService $settingsService)
        {
        }
        public function remove(\FluentForm\App\Services\Settings\SettingsService $settingsService)
        {
        }
        public function customizer(\FluentForm\App\Services\Settings\Customizer $customizer, $id)
        {
        }
        public function storeCustomizer(\FluentForm\App\Services\Settings\Customizer $customizer, $id)
        {
        }
        public function storeEntryColumns(\FluentForm\App\Services\Submission\SubmissionService $submissionService, $id)
        {
        }
        public function conversationalDesign(\FluentForm\App\Services\Settings\SettingsService $settingsService, $formId)
        {
        }
        public function storeConversationalDesign(\FluentForm\App\Services\Settings\SettingsService $settingsService, $formId)
        {
        }
    }
    class GlobalIntegrationController extends \FluentForm\App\Http\Controllers\Controller
    {
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        public function index(\FluentForm\App\Services\Integrations\GlobalIntegrationService $globalIntegrationService)
        {
        }
        public function update()
        {
        }
        public function updateModuleStatus(\FluentForm\App\Services\Integrations\GlobalIntegrationService $globalIntegrationService)
        {
        }
    }
    class GlobalSettingsController extends \FluentForm\App\Http\Controllers\Controller
    {
        public function index(\FluentForm\App\Services\GlobalSettings\GlobalSettingsService $globalSettingsService)
        {
        }
        public function store(\FluentForm\App\Services\GlobalSettings\GlobalSettingsService $globalSettingsService)
        {
        }
    }
    abstract class IntegrationManagerController extends \FluentForm\App\Helpers\IntegrationManagerHelper
    {
        protected $app = null;
        protected $subscriber = null;
        protected $title = '';
        protected $description = '';
        protected $integrationKey = '';
        protected $optionKey = '';
        protected $settingsKey = '';
        protected $priority = 11;
        public $logo = '';
        public $hasGlobalMenu = true;
        public $category = 'crm';
        public $disableGlobalSettings = 'no';
        public function __construct($app, $title, $integrationKey, $optionKey, $settingsKey, $priority = 11)
        {
        }
        public function registerAdminHooks()
        {
        }
        public function registerNotificationHooks()
        {
        }
        public function notify($feed, $formData, $entry, $form)
        {
        }
        public function addGlobalMenu($setting)
        {
        }
        public function addNotificationType($types)
        {
        }
        public function addActiveNotificationType($types)
        {
        }
        public function getGlobalSettings($settings)
        {
        }
        public function saveGlobalSettings($settings)
        {
        }
        public function getGlobalFields($fields)
        {
        }
        public function setMetaKey($data)
        {
        }
        public function prepareIntegrationFeed($setting, $feed, $formId)
        {
        }
        public abstract function getIntegrationDefaults($settings, $formId);
        public abstract function pushIntegration($integrations, $formId);
        public abstract function getSettingsFields($settings, $formId);
        public abstract function getMergeFields($list, $listId, $formId);
        public function setFeedAttributes($feed, $formId)
        {
        }
        public function isConfigured()
        {
        }
        public function isEnabled()
        {
        }
        public function getApiSettings()
        {
        }
        protected function getSelectedTagIds($data, $inputData, $simpleKey = 'tag_ids', $routingId = 'tag_ids_selection_type', $routersKey = 'tag_routers')
        {
        }
        protected function evaluateRoutings($routings, $inputData)
        {
        }
    }
    class LogController extends \FluentForm\App\Http\Controllers\Controller
    {
        public function get(\FluentForm\App\Services\Logger\Logger $logger)
        {
        }
        public function getFilters(\FluentForm\App\Services\Logger\Logger $logger)
        {
        }
        public function remove(\FluentForm\App\Services\Logger\Logger $logger)
        {
        }
    }
    class ManagersController extends \FluentForm\App\Http\Controllers\Controller
    {
        public function index(\FluentForm\App\Services\Manager\ManagerService $managerService)
        {
        }
        public function addManager(\FluentForm\App\Services\Manager\ManagerService $managerService)
        {
        }
        public function removeManager(\FluentForm\App\Services\Manager\ManagerService $managerService)
        {
        }
    }
    class ReportController extends \FluentForm\App\Http\Controllers\Controller
    {
        public function form(\FluentForm\App\Services\Report\ReportService $reportService)
        {
        }
        /**
         * Get Submission Report
         * @return \WP_REST_Response
         */
        public function submissions(\FluentForm\App\Services\Report\ReportService $reportService)
        {
        }
    }
    class RolesController extends \FluentForm\App\Http\Controllers\Controller
    {
        public function index(\FluentForm\App\Services\Roles\RolesService $rolesService)
        {
        }
        public function addCapability(\FluentForm\App\Services\Roles\RolesService $rolesService)
        {
        }
    }
    class SubmissionController extends \FluentForm\App\Http\Controllers\Controller
    {
        public function index(\FluentForm\App\Services\Submission\SubmissionService $submissionService)
        {
        }
        public function find(\FluentForm\App\Services\Submission\SubmissionService $submissionService, $submissionId)
        {
        }
        public function resources(\FluentForm\App\Services\Submission\SubmissionService $submissionService)
        {
        }
        public function updateStatus(\FluentForm\App\Services\Submission\SubmissionService $submissionService)
        {
        }
        public function toggleIsFavorite(\FluentForm\App\Services\Submission\SubmissionService $submissionService)
        {
        }
        public function handleBulkActions(\FluentForm\App\Services\Submission\SubmissionService $submissionService)
        {
        }
        public function remove(\FluentForm\App\Models\Submission $submission, $submissionId)
        {
        }
        /**
         * Get user list for submission page
         * @return \WP_REST_Response
         */
        public function submissionUsers()
        {
        }
        /**
         * Update User of a submission
         * @param SubmissionService $submissionService
         * @return \WP_REST_Response
         */
        public function updateSubmissionUser(\FluentForm\App\Services\Submission\SubmissionService $submissionService)
        {
        }
        /**
         * Get All Submissions
         * @param Submission $submission
         * @return \WP_REST_Response
         */
        public function all(\FluentForm\App\Models\Submission $submission)
        {
        }
    }
    class SubmissionHandlerController extends \FluentForm\App\Http\Controllers\Controller
    {
        /**
         * Handle form submission
         */
        public function submit()
        {
        }
    }
    class SubmissionLogController extends \FluentForm\App\Http\Controllers\Controller
    {
        public function get(\FluentForm\App\Services\Logger\Logger $logger, $submissionId)
        {
        }
        public function remove(\FluentForm\App\Services\Logger\Logger $logger)
        {
        }
    }
    class SubmissionNoteController extends \FluentForm\App\Http\Controllers\Controller
    {
        public function get(\FluentForm\App\Services\Submission\SubmissionService $submissionService, $submissionId)
        {
        }
        public function store(\FluentForm\App\Services\Submission\SubmissionService $submissionService, $submissionId)
        {
        }
    }
    class TransferController extends \FluentForm\App\Http\Controllers\Controller
    {
        /**
         * Export forms as JSON.
         */
        public function exportForms()
        {
        }
        /**
         * Import forms from a previously exported JSON file.
         */
        public function importForms()
        {
        }
        public function exportEntries()
        {
        }
    }
}
namespace FluentForm\Framework\Foundation {
    abstract class Policy
    {
        /**
         * Fallback method even if verifyRequest is not implemented.
         * @return bool true
         */
        public function __returnTrue()
        {
        }
    }
}
namespace FluentForm\App\Http\Policies {
    class FormPolicy extends \FluentForm\Framework\Foundation\Policy
    {
        /**
         * Check permission for any method
         *
         * @param  \FluentForm\Framework\Request\Request $request
         * @return bool
         */
        public function verifyRequest(\FluentForm\Framework\Request\Request $request)
        {
        }
        public function index()
        {
        }
        public function templates()
        {
        }
        public function updateModuleStatus()
        {
        }
    }
    class GlobalSettingsPolicy extends \FluentForm\Framework\Foundation\Policy
    {
        public function index()
        {
        }
    }
    class PublicPolicy extends \FluentForm\Framework\Foundation\Policy
    {
        /**
         * Check permission for any method
         *
         * @param \FluentForm\Framework\Request\Request $request
         * @return bool
         */
        public function verifyRequest(\FluentForm\Framework\Request\Request $request)
        {
        }
    }
    class ReportPolicy extends \FluentForm\Framework\Foundation\Policy
    {
        /**
         * Check permission for any method
         *
         * @param  \FluentForm\Framework\Request\Request $request
         * @return bool
         */
        public function verifyRequest(\FluentForm\Framework\Request\Request $request)
        {
        }
        public function form(\FluentForm\Framework\Request\Request $request)
        {
        }
        public function submissions()
        {
        }
    }
    class RoleManagerPolicy extends \FluentForm\Framework\Foundation\Policy
    {
        public function index()
        {
        }
    }
    class SubmissionPolicy extends \FluentForm\Framework\Foundation\Policy
    {
        /**
         * Check permission for any method
         *
         * @param  \FluentForm\Framework\Request\Request $request
         * @return bool
         */
        public function verifyRequest(\FluentForm\Framework\Request\Request $request)
        {
        }
        public function handleBulkActions()
        {
        }
        public function updateStatus()
        {
        }
        public function toggleIsFavorite()
        {
        }
        public function remove()
        {
        }
    }
}
namespace FluentForm\Framework\Foundation {
    abstract class RequestGuard
    {
        public function rules()
        {
        }
        public function messages()
        {
        }
        public function beforeValidation()
        {
        }
        public function afterValidation()
        {
        }
        public function validate(\FluentForm\Framework\Validator\Validator $validator)
        {
        }
        /**
         * Get an input element from the request.
         *
         * @param  string $key
         * @return mixed
         */
        public function __get($key)
        {
        }
        public function __call($method, $params)
        {
        }
    }
}
namespace FluentForm\App\Http\Requests {
    class UserRequest extends \FluentForm\Framework\Foundation\RequestGuard
    {
        /**
         * @return array
         */
        public function rules()
        {
        }
        /**
         * @return array
         */
        public function messages()
        {
        }
        /**
         * @return array
         */
        public function sanitize()
        {
        }
    }
}
namespace FluentForm\Framework\Support {
    interface ArrayableInterface
    {
        /**
         * Get the instance as an array.
         *
         * @return array
         */
        public function toArray();
    }
    interface JsonableInterface
    {
        /**
         * Convert the object to its JSON representation.
         *
         * @param  int  $options
         * @return string
         */
        public function toJson($options = 0);
    }
    interface QueueableEntity
    {
        /**
         * Get the queueable identity for the entity.
         *
         * @return mixed
         */
        public function getQueueableId();
    }
    interface UrlRoutable
    {
        /**
         * Get the value of the model's route key.
         *
         * @return mixed
         */
        public function getRouteKey();
        /**
         * Get the route key for the model.
         *
         * @return string
         */
        public function getRouteKeyName();
    }
}
namespace FluentForm\Framework\Database\Orm {
    trait ModelHelperTrait
    {
        public static function classBasename($class)
        {
        }
        public static function classUsesRecursive($class)
        {
        }
        public static function traitUsesRecursive($trait)
        {
        }
        #[\ReturnTypeWillChange]
        public function getTimezone()
        {
        }
        protected function getDateFormat()
        {
        }
        #[\ReturnTypeWillChange]
        public static function createFromFormat($format, $datetime, $timezone = null)
        {
        }
    }
    abstract class Model implements \ArrayAccess, \FluentForm\Framework\Support\ArrayableInterface, \FluentForm\Framework\Support\JsonableInterface, \JsonSerializable, \FluentForm\Framework\Support\QueueableEntity, \FluentForm\Framework\Support\UrlRoutable
    {
        use \FluentForm\Framework\Database\Orm\ModelHelperTrait;
        /**
         * The connection name for the model.
         *
         * @var string
         */
        protected $connection;
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table;
        /**
         * The primary key for the model.
         *
         * @var string
         */
        protected $primaryKey = 'id';
        /**
         * The "type" of the auto-incrementing ID.
         *
         * @var string
         */
        protected $keyType = 'int';
        /**
         * The number of models to return for pagination.
         *
         * @var int
         */
        protected $perPage = 15;
        /**
         * Indicates if the IDs are auto-incrementing.
         *
         * @var bool
         */
        public $incrementing = true;
        /**
         * Indicates if the model should be timestamped.
         *
         * @var bool
         */
        public $timestamps = true;
        /**
         * The model's attributes.
         *
         * @var array
         */
        protected $attributes = [];
        /**
         * The model attribute's original state.
         *
         * @var array
         */
        protected $original = [];
        /**
         * The loaded relationships for the model.
         *
         * @var array
         */
        protected $relations = [];
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [];
        /**
         * The attributes that should be visible in arrays.
         *
         * @var array
         */
        protected $visible = [];
        /**
         * The accessors to append to the model's array form.
         *
         * @var array
         */
        protected $appends = [];
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [];
        /**
         * The attributes that aren't mass assignable.
         *
         * @var array
         */
        protected $guarded = ['*'];
        /**
         * The attributes that should be mutated to dates.
         *
         * @var array
         */
        protected $dates = [];
        /**
         * The storage format of the model's date columns.
         *
         * @var string
         */
        protected $dateFormat;
        /**
         * The attributes that should be cast to native types.
         *
         * @var array
         */
        protected $casts = [];
        /**
         * The relationships that should be touched on save.
         *
         * @var array
         */
        protected $touches = [];
        /**
         * User exposed observable events
         *
         * @var array
         */
        protected $observables = [];
        /**
         * The relations to eager load on every query.
         *
         * @var array
         */
        protected $with = [];
        /**
         * The class name to be used in polymorphic relations.
         *
         * @var string
         */
        protected $morphClass;
        /**
         * Indicates if the model exists.
         *
         * @var bool
         */
        public $exists = false;
        /**
         * Indicates if the model was inserted during the current request lifecycle.
         *
         * @var bool
         */
        public $wasRecentlyCreated = false;
        /**
         * Indicates whether attributes are snake cased on arrays.
         *
         * @var bool
         */
        public static $snakeAttributes = true;
        /**
         * The connection resolver instance.
         *
         * @var \FluentForm\Framework\Database\ConnectionResolverInterface
         */
        protected static $resolver;
        /**
         * The event dispatcher instance.
         *
         * @var \FluentForm\Framework\Foundation\Dispatcher
         */
        protected static $dispatcher;
        /**
         * The array of booted models.
         *
         * @var array
         */
        protected static $booted = [];
        /**
         * The array of global scopes on the model.
         *
         * @var array
         */
        protected static $globalScopes = [];
        /**
         * Indicates if all mass assignment is enabled.
         *
         * @var bool
         */
        protected static $unguarded = false;
        /**
         * The cache of the mutated attributes for each class.
         *
         * @var array
         */
        protected static $mutatorCache = [];
        /**
         * The many to many relationship methods.
         *
         * @var array
         */
        public static $manyMethods = ['belongsToMany', 'morphToMany', 'morphedByMany'];
        /**
         * The name of the "created at" column.
         *
         * @var string
         */
        const CREATED_AT = 'created_at';
        /**
         * The name of the "updated at" column.
         *
         * @var string
         */
        const UPDATED_AT = 'updated_at';
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
         */
        public function __construct(array $attributes = array())
        {
        }
        /**
         * Check if the model needs to be booted and if so, do it.
         *
         * @return void
         */
        protected function bootIfNotBooted()
        {
        }
        /**
         * The "booting" method of the model.
         *
         * @return void
         */
        protected static function boot()
        {
        }
        /**
         * Boot all of the bootable traits on the model.
         *
         * @return void
         */
        protected static function bootTraits()
        {
        }
        /**
         * Clear the list of booted models so they will be re-booted.
         *
         * @return void
         */
        public static function clearBootedModels()
        {
        }
        /**
         * Register a new global scope on the model.
         *
         * @param  \FluentForm\Framework\Database\Orm\Scope|\Closure|string  $scope
         * @param  \Closure|null  $implementation
         * @return mixed
         *
         * @throws \InvalidArgumentException
         */
        public static function addGlobalScope($scope, \Closure $implementation = null)
        {
        }
        /**
         * Determine if a model has a global scope.
         *
         * @param  \FluentForm\Framework\Database\Orm\Scope|string  $scope
         * @return bool
         */
        public static function hasGlobalScope($scope)
        {
        }
        /**
         * Get a global scope registered with the model.
         *
         * @param  \FluentForm\Framework\Database\Orm\Scope|string  $scope
         * @return \FluentForm\Framework\Database\Orm\Scope|\Closure|null
         */
        public static function getGlobalScope($scope)
        {
        }
        /**
         * Get the global scopes for this class instance.
         *
         * @return array
         */
        public function getGlobalScopes()
        {
        }
        /**
         * Register an observer with the Model.
         *
         * @param  object|string  $class
         * @param  int  $priority
         * @return void
         */
        public static function observe($class, $priority = 0)
        {
        }
        /**
         * Fill the model with an array of attributes.
         *
         * @param  array  $attributes
         * @return $this
         *
         * @throws \FluentForm\Framework\Database\Orm\MassAssignmentException
         */
        public function fill(array $attributes)
        {
        }
        /**
         * Fill the model with an array of attributes. Force mass assignment.
         *
         * @param  array  $attributes
         * @return $this
         */
        public function forceFill(array $attributes)
        {
        }
        /**
         * Get the fillable attributes of a given array.
         *
         * @param  array  $attributes
         * @return array
         */
        protected function fillableFromArray(array $attributes)
        {
        }
        /**
         * Create a new instance of the given model.
         *
         * @param  array  $attributes
         * @param  bool  $exists
         * @return static
         */
        public function newInstance($attributes = [], $exists = false)
        {
        }
        /**
         * Create a new model instance that is existing.
         *
         * @param  array  $attributes
         * @param  string|null  $connection
         * @return static
         */
        public function newFromBuilder($attributes = [], $connection = null)
        {
        }
        /**
         * Create a collection of models from plain arrays.
         *
         * @param  array  $items
         * @param  string|null  $connection
         * @return \FluentForm\Framework\Database\Orm\Collection
         */
        public static function hydrate(array $items, $connection = null)
        {
        }
        /**
         * Create a collection of models from a raw query.
         *
         * @param  string  $query
         * @param  array  $bindings
         * @param  string|null  $connection
         * @return \FluentForm\Framework\Database\Orm\Collection
         */
        public static function hydrateRaw($query, $bindings = [], $connection = null)
        {
        }
        /**
         * Save a new model and return the instance.
         *
         * @param  array  $attributes
         * @return static
         */
        public static function create(array $attributes = [])
        {
        }
        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param  array  $attributes
         * @return static
         */
        public static function forceCreate(array $attributes)
        {
        }
        /**
         * Begin querying the model.
         *
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public static function query()
        {
        }
        /**
         * Begin querying the model on a given connection.
         *
         * @param  string|null  $connection
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public static function on($connection = null)
        {
        }
        /**
         * Begin querying the model on the write connection.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public static function onWriteConnection()
        {
        }
        /**
         * Get all of the models from the database.
         *
         * @param  array|mixed  $columns
         * @return \FluentForm\Framework\Database\Orm\Collection|static[]
         */
        public static function all($columns = ['*'])
        {
        }
        /**
         * Reload a fresh model instance from the database.
         *
         * @param  array|string  $with
         * @return $this|null
         */
        public function fresh($with = [])
        {
        }
        /**
         * Eager load relations on the model.
         *
         * @param  array|string  $relations
         * @return $this
         */
        public function load($relations)
        {
        }
        /**
         * Begin querying a model with eager loading.
         *
         * @param  array|string  $relations
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public static function with($relations)
        {
        }
        /**
         * Append attributes to query when building a query.
         *
         * @param  array|string  $attributes
         * @return $this
         */
        public function append($attributes)
        {
        }
        /**
         * Define a one-to-one relationship.
         *
         * @param  string  $related
         * @param  string  $foreignKey
         * @param  string  $localKey
         * @return \FluentForm\Framework\Database\Orm\Relations\HasOne
         */
        public function hasOne($related, $foreignKey = null, $localKey = null)
        {
        }
        /**
         * Define a polymorphic one-to-one relationship.
         *
         * @param  string  $related
         * @param  string  $name
         * @param  string  $type
         * @param  string  $id
         * @param  string  $localKey
         * @return \FluentForm\Framework\Database\Orm\Relations\MorphOne
         */
        public function morphOne($related, $name, $type = null, $id = null, $localKey = null)
        {
        }
        /**
         * Define an inverse one-to-one or many relationship.
         *
         * @param  string  $related
         * @param  string  $foreignKey
         * @param  string  $otherKey
         * @param  string  $relation
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function belongsTo($related, $foreignKey = null, $otherKey = null, $relation = null)
        {
        }
        /**
         * Define a polymorphic, inverse one-to-one or many relationship.
         *
         * @param  string  $name
         * @param  string  $type
         * @param  string  $id
         * @return \FluentForm\Framework\Database\Orm\Relations\MorphTo
         */
        public function morphTo($name = null, $type = null, $id = null)
        {
        }
        /**
         * Retrieve the fully qualified class name from a slug.
         *
         * @param  string  $class
         * @return string
         */
        public function getActualClassNameForMorph($class)
        {
        }
        /**
         * Define a one-to-many relationship.
         *
         * @param  string  $related
         * @param  string  $foreignKey
         * @param  string  $localKey
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function hasMany($related, $foreignKey = null, $localKey = null)
        {
        }
        /**
         * Define a has-many-through relationship.
         *
         * @param  string  $related
         * @param  string  $through
         * @param  string|null  $firstKey
         * @param  string|null  $secondKey
         * @param  string|null  $localKey
         * @return \FluentForm\Framework\Database\Orm\Relations\HasManyThrough
         */
        public function hasManyThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null)
        {
        }
        /**
         * Define a polymorphic one-to-many relationship.
         *
         * @param  string  $related
         * @param  string  $name
         * @param  string  $type
         * @param  string  $id
         * @param  string  $localKey
         * @return \FluentForm\Framework\Database\Orm\Relations\MorphMany
         */
        public function morphMany($related, $name, $type = null, $id = null, $localKey = null)
        {
        }
        /**
         * Define a many-to-many relationship.
         *
         * @param  string  $related
         * @param  string  $table
         * @param  string  $foreignKey
         * @param  string  $otherKey
         * @param  string  $relation
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsToMany
         */
        public function belongsToMany($related, $table = null, $foreignKey = null, $otherKey = null, $relation = null)
        {
        }
        /**
         * Define a polymorphic many-to-many relationship.
         *
         * @param  string  $related
         * @param  string  $name
         * @param  string  $table
         * @param  string  $foreignKey
         * @param  string  $otherKey
         * @param  bool  $inverse
         * @return \FluentForm\Framework\Database\Orm\Relations\MorphToMany
         */
        public function morphToMany($related, $name, $table = null, $foreignKey = null, $otherKey = null, $inverse = false)
        {
        }
        /**
         * Define a polymorphic, inverse many-to-many relationship.
         *
         * @param  string  $related
         * @param  string  $name
         * @param  string  $table
         * @param  string  $foreignKey
         * @param  string  $otherKey
         * @return \FluentForm\Framework\Database\Orm\Relations\MorphToMany
         */
        public function morphedByMany($related, $name, $table = null, $foreignKey = null, $otherKey = null)
        {
        }
        /**
         * Get the relationship name of the belongs to many.
         *
         * @return string
         */
        protected function getBelongsToManyCaller()
        {
        }
        /**
         * Get the joining table name for a many-to-many relation.
         *
         * @param  string  $related
         * @return string
         */
        public function joiningTable($related)
        {
        }
        /**
         * Destroy the models for the given IDs.
         *
         * @param  array|int  $ids
         * @return int
         */
        public static function destroy($ids)
        {
        }
        /**
         * Delete the model from the database.
         *
         * @return bool|null
         *
         * @throws \Exception
         */
        public function delete()
        {
        }
        /**
         * Force a hard delete on a soft deleted model.
         *
         * This method protects developers from running forceDelete when trait is missing.
         *
         * @return bool|null
         */
        public function forceDelete()
        {
        }
        /**
         * Perform the actual delete query on this model instance.
         *
         * @return void
         */
        protected function performDeleteOnModel()
        {
        }
        /**
         * Register a saving model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @param  int  $priority
         * @return void
         */
        public static function saving($callback, $priority = 0)
        {
        }
        /**
         * Register a saved model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @param  int  $priority
         * @return void
         */
        public static function saved($callback, $priority = 0)
        {
        }
        /**
         * Register an updating model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @param  int  $priority
         * @return void
         */
        public static function updating($callback, $priority = 0)
        {
        }
        /**
         * Register an updated model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @param  int  $priority
         * @return void
         */
        public static function updated($callback, $priority = 0)
        {
        }
        /**
         * Register a creating model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @param  int  $priority
         * @return void
         */
        public static function creating($callback, $priority = 0)
        {
        }
        /**
         * Register a created model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @param  int  $priority
         * @return void
         */
        public static function created($callback, $priority = 0)
        {
        }
        /**
         * Register a deleting model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @param  int  $priority
         * @return void
         */
        public static function deleting($callback, $priority = 0)
        {
        }
        /**
         * Register a deleted model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @param  int  $priority
         * @return void
         */
        public static function deleted($callback, $priority = 0)
        {
        }
        /**
         * Remove all of the event listeners for the model.
         *
         * @return void
         */
        public static function flushEventListeners()
        {
        }
        /**
         * Register a model event with the dispatcher.
         *
         * @param  string  $event
         * @param  \Closure|string  $callback
         * @param  int  $priority
         * @return void
         */
        protected static function registerModelEvent($event, $callback, $priority = 0)
        {
        }
        /**
         * Get the observable event names.
         *
         * @return array
         */
        public function getObservableEvents()
        {
        }
        /**
         * Set the observable event names.
         *
         * @param  array  $observables
         * @return $this
         */
        public function setObservableEvents(array $observables)
        {
        }
        /**
         * Add an observable event name.
         *
         * @param  array|mixed  $observables
         * @return void
         */
        public function addObservableEvents($observables)
        {
        }
        /**
         * Remove an observable event name.
         *
         * @param  array|mixed  $observables
         * @return void
         */
        public function removeObservableEvents($observables)
        {
        }
        /**
         * Increment a column's value by a given amount.
         *
         * @param  string  $column
         * @param  int  $amount
         * @param  array  $extra
         * @return int
         */
        protected function increment($column, $amount = 1, array $extra = [])
        {
        }
        /**
         * Decrement a column's value by a given amount.
         *
         * @param  string  $column
         * @param  int  $amount
         * @param  array  $extra
         * @return int
         */
        protected function decrement($column, $amount = 1, array $extra = [])
        {
        }
        /**
         * Run the increment or decrement method on the model.
         *
         * @param  string  $column
         * @param  int  $amount
         * @param  array  $extra
         * @param  string  $method
         * @return int
         */
        protected function incrementOrDecrement($column, $amount, $extra, $method)
        {
        }
        /**
         * Increment the underlying attribute value and sync with original.
         *
         * @param  string  $column
         * @param  int  $amount
         * @param  string  $method
         * @return void
         */
        protected function incrementOrDecrementAttributeValue($column, $amount, $method)
        {
        }
        /**
         * Update the model in the database.
         *
         * @param  array  $attributes
         * @param  array  $options
         * @return bool|int
         */
        public function update(array $attributes = [], array $options = [])
        {
        }
        /**
         * Save the model and all of its relationships.
         *
         * @return bool
         */
        public function push()
        {
        }
        /**
         * Save the model to the database.
         *
         * @param  array  $options
         * @return bool
         */
        public function save(array $options = [])
        {
        }
        /**
         * Save the model to the database using transaction.
         *
         * @param  array  $options
         * @return bool
         *
         * @throws \Throwable
         */
        public function saveOrFail(array $options = [])
        {
        }
        /**
         * Finish processing on a successful save operation.
         *
         * @param  array  $options
         * @return void
         */
        protected function finishSave(array $options)
        {
        }
        /**
         * Perform a model update operation.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  array  $options
         * @return bool
         */
        protected function performUpdate(\FluentForm\Framework\Database\Orm\Builder $query, array $options = [])
        {
        }
        /**
         * Perform a model insert operation.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  array  $options
         * @return bool
         */
        protected function performInsert(\FluentForm\Framework\Database\Orm\Builder $query, array $options = [])
        {
        }
        /**
         * Insert the given attributes and set the ID on the model.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  array  $attributes
         * @return void
         */
        protected function insertAndSetId(\FluentForm\Framework\Database\Orm\Builder $query, $attributes)
        {
        }
        /**
         * Touch the owning relations of the model.
         *
         * @return void
         */
        public function touchOwners()
        {
        }
        /**
         * Determine if the model touches a given relation.
         *
         * @param  string  $relation
         * @return bool
         */
        public function touches($relation)
        {
        }
        /**
         * Fire the given event for the model.
         *
         * @param  string  $event
         * @param  bool  $halt
         * @return mixed
         */
        protected function fireModelEvent($event, $halt = true)
        {
        }
        /**
         * Set the keys for a save update query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        protected function setKeysForSaveQuery(\FluentForm\Framework\Database\Orm\Builder $query)
        {
        }
        /**
         * Get the primary key value for a save query.
         *
         * @return mixed
         */
        protected function getKeyForSaveQuery()
        {
        }
        /**
         * Update the model's update timestamp.
         *
         * @return bool
         */
        public function touch()
        {
        }
        /**
         * Update the creation and update timestamps.
         *
         * @return void
         */
        protected function updateTimestamps()
        {
        }
        /**
         * Set the value of the "created at" attribute.
         *
         * @param  mixed  $value
         * @return $this
         */
        public function setCreatedAt($value)
        {
        }
        /**
         * Set the value of the "updated at" attribute.
         *
         * @param  mixed  $value
         * @return $this
         */
        public function setUpdatedAt($value)
        {
        }
        /**
         * Get the name of the "created at" column.
         *
         * @return string
         */
        public function getCreatedAtColumn()
        {
        }
        /**
         * Get the name of the "updated at" column.
         *
         * @return string
         */
        public function getUpdatedAtColumn()
        {
        }
        /**
         * Get a fresh timestamp for the model.
         *
         * @return \FluentForm\Framework\Database\Orm\DateTime
         */
        public function freshTimestamp()
        {
        }
        /**
         * Get a fresh timestamp for the model.
         *
         * @return string
         */
        public function freshTimestampString()
        {
        }
        /**
         * Get a new query builder for the model's table.
         *
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function newQuery()
        {
        }
        /**
         * Get a new query instance without a given scope.
         *
         * @param  \FluentForm\Framework\Database\Orm\Scope|string  $scope
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function newQueryWithoutScope($scope)
        {
        }
        /**
         * Get a new query builder that doesn't have any global scopes.
         *
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function newQueryWithoutScopes()
        {
        }
        /**
         * Create a new Eloquent query builder for the model.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function newEloquentBuilder($query)
        {
        }
        /**
         * Get a new query builder instance for the connection.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        protected function newBaseQueryBuilder()
        {
        }
        /**
         * Create a new Eloquent Collection instance.
         *
         * @param  array  $models
         * @return \FluentForm\Framework\Database\Orm\Collection
         */
        public function newCollection(array $models = [])
        {
        }
        /**
         * Create a new pivot model instance.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @param  array  $attributes
         * @param  string  $table
         * @param  bool  $exists
         * @return \FluentForm\Framework\Database\Orm\Relations\Pivot
         */
        public function newPivot(\FluentForm\Framework\Database\Orm\Model $parent, array $attributes, $table, $exists)
        {
        }
        /**
         * Get the table associated with the model.
         *
         * @return string
         */
        public function getTable()
        {
        }
        /**
         * Set the table associated with the model.
         *
         * @param  string  $table
         * @return $this
         */
        public function setTable($table)
        {
        }
        /**
         * Get the value of the model's primary key.
         *
         * @return mixed
         */
        public function getKey()
        {
        }
        /**
         * Get the queueable identity for the entity.
         *
         * @return mixed
         */
        public function getQueueableId()
        {
        }
        /**
         * Get the primary key for the model.
         *
         * @return string
         */
        public function getKeyName()
        {
        }
        /**
         * Set the primary key for the model.
         *
         * @param  string  $key
         * @return $this
         */
        public function setKeyName($key)
        {
        }
        /**
         * Get the table qualified key name.
         *
         * @return string
         */
        public function getQualifiedKeyName()
        {
        }
        /**
         * Get the value of the model's route key.
         *
         * @return mixed
         */
        public function getRouteKey()
        {
        }
        /**
         * Get the route key for the model.
         *
         * @return string
         */
        public function getRouteKeyName()
        {
        }
        /**
         * Determine if the model uses timestamps.
         *
         * @return bool
         */
        public function usesTimestamps()
        {
        }
        /**
         * Get the polymorphic relationship columns.
         *
         * @param  string  $name
         * @param  string  $type
         * @param  string  $id
         * @return array
         */
        protected function getMorphs($name, $type, $id)
        {
        }
        /**
         * Get the class name for polymorphic relations.
         *
         * @return string
         */
        public function getMorphClass()
        {
        }
        /**
         * Get the number of models to return per page.
         *
         * @return int
         */
        public function getPerPage()
        {
        }
        /**
         * Set the number of models to return per page.
         *
         * @param  int  $perPage
         * @return $this
         */
        public function setPerPage($perPage)
        {
        }
        /**
         * Get the default foreign key name for the model.
         *
         * @return string
         */
        public function getForeignKey()
        {
        }
        /**
         * Get the hidden attributes for the model.
         *
         * @return array
         */
        public function getHidden()
        {
        }
        /**
         * Set the hidden attributes for the model.
         *
         * @param  array  $hidden
         * @return $this
         */
        public function setHidden(array $hidden)
        {
        }
        /**
         * Add hidden attributes for the model.
         *
         * @param  array|string|null  $attributes
         * @return void
         */
        public function addHidden($attributes = null)
        {
        }
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param  array|string  $attributes
         * @return $this
         */
        public function makeVisible($attributes)
        {
        }
        /**
         * Make the given, typically visible, attributes hidden.
         *
         * @param  array|string  $attributes
         * @return $this
         */
        public function makeHidden($attributes)
        {
        }
        /**
         * Make the given, typically hidden, attributes visible.
         *
         * @param  array|string  $attributes
         * @return $this
         *
         * @deprecated since version 5.2. Use the "makeVisible" method directly.
         */
        public function withHidden($attributes)
        {
        }
        /**
         * Get the visible attributes for the model.
         *
         * @return array
         */
        public function getVisible()
        {
        }
        /**
         * Set the visible attributes for the model.
         *
         * @param  array  $visible
         * @return $this
         */
        public function setVisible(array $visible)
        {
        }
        /**
         * Add visible attributes for the model.
         *
         * @param  array|string|null  $attributes
         * @return void
         */
        public function addVisible($attributes = null)
        {
        }
        /**
         * Set the accessors to append to model arrays.
         *
         * @param  array  $appends
         * @return $this
         */
        public function setAppends(array $appends)
        {
        }
        /**
         * Get the fillable attributes for the model.
         *
         * @return array
         */
        public function getFillable()
        {
        }
        /**
         * Set the fillable attributes for the model.
         *
         * @param  array  $fillable
         * @return $this
         */
        public function fillable(array $fillable)
        {
        }
        /**
         * Get the guarded attributes for the model.
         *
         * @return array
         */
        public function getGuarded()
        {
        }
        /**
         * Set the guarded attributes for the model.
         *
         * @param  array  $guarded
         * @return $this
         */
        public function guard(array $guarded)
        {
        }
        /**
         * Disable all mass assignable restrictions.
         *
         * @param  bool  $state
         * @return void
         */
        public static function unguard($state = true)
        {
        }
        /**
         * Enable the mass assignment restrictions.
         *
         * @return void
         */
        public static function reguard()
        {
        }
        /**
         * Determine if current state is "unguarded".
         *
         * @return bool
         */
        public static function isUnguarded()
        {
        }
        /**
         * Run the given callable while being unguarded.
         *
         * @param  callable  $callback
         * @return mixed
         */
        public static function unguarded(callable $callback)
        {
        }
        /**
         * Determine if the given attribute may be mass assigned.
         *
         * @param  string  $key
         * @return bool
         */
        public function isFillable($key)
        {
        }
        /**
         * Determine if the given key is guarded.
         *
         * @param  string  $key
         * @return bool
         */
        public function isGuarded($key)
        {
        }
        /**
         * Determine if the model is totally guarded.
         *
         * @return bool
         */
        public function totallyGuarded()
        {
        }
        /**
         * Remove the table name from a given key.
         *
         * @param  string  $key
         * @return string
         */
        protected function removeTableFromKey($key)
        {
        }
        /**
         * Get the relationships that are touched on save.
         *
         * @return array
         */
        public function getTouchedRelations()
        {
        }
        /**
         * Set the relationships that are touched on save.
         *
         * @param  array  $touches
         * @return $this
         */
        public function setTouchedRelations(array $touches)
        {
        }
        /**
         * Get the value indicating whether the IDs are incrementing.
         *
         * @return bool
         */
        public function getIncrementing()
        {
        }
        /**
         * Set whether IDs are incrementing.
         *
         * @param  bool  $value
         * @return $this
         */
        public function setIncrementing($value)
        {
        }
        /**
         * Convert the model instance to JSON.
         *
         * @param  int  $options
         * @return string
         */
        public function toJson($options = 0)
        {
        }
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array
         */
        #[\ReturnTypeWillChange]
        public function jsonSerialize()
        {
        }
        /**
         * Convert the model instance to an array.
         *
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Convert the model's attributes to an array.
         *
         * @return array
         */
        public function attributesToArray()
        {
        }
        /**
         * Get an attribute array of all arrayable attributes.
         *
         * @return array
         */
        protected function getArrayableAttributes()
        {
        }
        /**
         * Get all of the appendable values that are arrayable.
         *
         * @return array
         */
        protected function getArrayableAppends()
        {
        }
        /**
         * Get the model's relationships in array form.
         *
         * @return array
         */
        public function relationsToArray()
        {
        }
        /**
         * Get an attribute array of all arrayable relations.
         *
         * @return array
         */
        protected function getArrayableRelations()
        {
        }
        /**
         * Get an attribute array of all arrayable values.
         *
         * @param  array  $values
         * @return array
         */
        protected function getArrayableItems(array $values)
        {
        }
        /**
         * Get an attribute from the model.
         *
         * @param  string  $key
         * @return mixed
         */
        public function getAttribute($key)
        {
        }
        /**
         * Get a plain attribute (not a relationship).
         *
         * @param  string  $key
         * @return mixed
         */
        public function getAttributeValue($key)
        {
        }
        /**
         * Get a relationship.
         *
         * @param  string  $key
         * @return mixed
         */
        public function getRelationValue($key)
        {
        }
        /**
         * Get an attribute from the $attributes array.
         *
         * @param  string  $key
         * @return mixed
         */
        protected function getAttributeFromArray($key)
        {
        }
        /**
         * Get a relationship value from a method.
         *
         * @param  string  $method
         * @return mixed
         *
         * @throws \LogicException
         */
        protected function getRelationshipFromMethod($method)
        {
        }
        /**
         * Determine if a get mutator exists for an attribute.
         *
         * @param  string  $key
         * @return bool
         */
        public function hasGetMutator($key)
        {
        }
        /**
         * Get the value of an attribute using its mutator.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return mixed
         */
        protected function mutateAttribute($key, $value)
        {
        }
        /**
         * Get the value of an attribute using its mutator for array conversion.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return mixed
         */
        protected function mutateAttributeForArray($key, $value)
        {
        }
        /**
         * Determine whether an attribute should be cast to a native type.
         *
         * @param  string  $key
         * @param  array|string|null  $types
         * @return bool
         */
        public function hasCast($key, $types = null)
        {
        }
        /**
         * Get the casts array.
         *
         * @return array
         */
        public function getCasts()
        {
        }
        /**
         * Determine whether a value is Date / DateTime castable for inbound manipulation.
         *
         * @param  string  $key
         * @return bool
         */
        protected function isDateCastable($key)
        {
        }
        /**
         * Determine whether a value is JSON castable for inbound manipulation.
         *
         * @param  string  $key
         * @return bool
         */
        protected function isJsonCastable($key)
        {
        }
        /**
         * Get the type of cast for a model attribute.
         *
         * @param  string  $key
         * @return string
         */
        protected function getCastType($key)
        {
        }
        /**
         * Cast an attribute to a native PHP type.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return mixed
         */
        protected function castAttribute($key, $value)
        {
        }
        /**
         * Set a given attribute on the model.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return $this
         */
        public function setAttribute($key, $value)
        {
        }
        /**
         * Determine if a set mutator exists for an attribute.
         *
         * @param  string  $key
         * @return bool
         */
        public function hasSetMutator($key)
        {
        }
        /**
         * Get the attributes that should be converted to dates.
         *
         * @return array
         */
        public function getDates()
        {
        }
        /**
         * Convert a DateTime to a storable string.
         *
         * @param  \DateTime|int  $value
         * @return string
         */
        public function fromDateTime($value)
        {
        }
        /**
         * Return a timestamp as DateTime object.
         *
         * @param  mixed  $value
         * @return \DateTime
         */
        protected function asDateTime($value)
        {
        }
        /**
         * Return a timestamp as unix timestamp.
         *
         * @param  mixed  $value
         * @return int
         */
        protected function asTimeStamp($value)
        {
        }
        /**
         * Prepare a date for array / JSON serialization.
         *
         * @param  \DateTime  $date
         * @return string
         */
        protected function serializeDate(\FluentForm\Framework\Database\Orm\DateTime $date)
        {
        }
        /**
         * Set the date format used by the model.
         *
         * @param  string  $format
         * @return $this
         */
        public function setDateFormat($format)
        {
        }
        /**
         * Encode the given value as JSON.
         *
         * @param  mixed  $value
         * @return string
         */
        protected function asJson($value)
        {
        }
        /**
         * Decode the given JSON back into an array or object.
         *
         * @param  string  $value
         * @param  bool  $asObject
         * @return mixed
         */
        public function fromJson($value, $asObject = false)
        {
        }
        /**
         * Clone the model into a new, non-existing instance.
         *
         * @param  array|null  $except
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function replicate(array $except = null)
        {
        }
        /**
         * Get all of the current attributes on the model.
         *
         * @return array
         */
        public function getAttributes()
        {
        }
        /**
         * Set the array of model attributes. No checking is done.
         *
         * @param  array  $attributes
         * @param  bool  $sync
         * @return $this
         */
        public function setRawAttributes(array $attributes, $sync = false)
        {
        }
        /**
         * Get the model's original attribute values.
         *
         * @param  string|null  $key
         * @param  mixed  $default
         * @return mixed|array
         */
        public function getOriginal($key = null, $default = null)
        {
        }
        /**
         * Sync the original attributes with the current.
         *
         * @return $this
         */
        public function syncOriginal()
        {
        }
        /**
         * Sync a single original attribute with its current value.
         *
         * @param  string  $attribute
         * @return $this
         */
        public function syncOriginalAttribute($attribute)
        {
        }
        /**
         * Determine if the model or given attribute(s) have been modified.
         *
         * @param  array|string|null  $attributes
         * @return bool
         */
        public function isDirty($attributes = null)
        {
        }
        /**
         * Get the attributes that have been changed since last sync.
         *
         * @return array
         */
        public function getDirty()
        {
        }
        /**
         * Determine if the new and old values for a given key are numerically equivalent.
         *
         * @param  string  $key
         * @return bool
         */
        protected function originalIsNumericallyEquivalent($key)
        {
        }
        /**
         * Get all the loaded relations for the instance.
         *
         * @return array
         */
        public function getRelations()
        {
        }
        /**
         * Get a specified relationship.
         *
         * @param  string  $relation
         * @return mixed
         */
        public function getRelation($relation)
        {
        }
        /**
         * Determine if the given relation is loaded.
         *
         * @param  string  $key
         * @return bool
         */
        public function relationLoaded($key)
        {
        }
        /**
         * Set the specific relationship in the model.
         *
         * @param  string  $relation
         * @param  mixed  $value
         * @return $this
         */
        public function setRelation($relation, $value)
        {
        }
        /**
         * Set the entire relations array on the model.
         *
         * @param  array  $relations
         * @return $this
         */
        public function setRelations(array $relations)
        {
        }
        /**
         * Get the database connection for the model.
         *
         * @return \FluentForm\Framework\Database\Connection
         */
        public function getConnection()
        {
        }
        /**
         * Get the current connection name for the model.
         *
         * @return string
         */
        public function getConnectionName()
        {
        }
        /**
         * Set the connection associated with the model.
         *
         * @param  string  $name
         * @return $this
         */
        public function setConnection($name)
        {
        }
        /**
         * Resolve a connection instance.
         *
         * @param  string|null  $connection
         * @return \FluentForm\Framework\Database\Connection
         */
        public static function resolveConnection($connection = null)
        {
        }
        /**
         * Get the connection resolver instance.
         *
         * @return \FluentForm\Framework\Database\ConnectionResolverInterface
         */
        public static function getConnectionResolver()
        {
        }
        /**
         * Set the connection resolver instance.
         *
         * @param  \FluentForm\Framework\Database\ConnectionResolverInterface  $resolver
         * @return void
         */
        public static function setConnectionResolver(\FluentForm\Framework\Database\ConnectionResolverInterface $resolver)
        {
        }
        /**
         * Unset the connection resolver for models.
         *
         * @return void
         */
        public static function unsetConnectionResolver()
        {
        }
        /**
         * Get the event dispatcher instance.
         *
         * @return \FluentForm\Framework\Contracts\Events\Dispatcher
         */
        public static function getEventDispatcher()
        {
        }
        /**
         * Set the event dispatcher instance.
         *
         * @param  \FluentForm\Framework\Foundation\Dispatcher  $dispatcher
         * @return void
         */
        public static function setEventDispatcher(\FluentForm\Framework\Foundation\Dispatcher $dispatcher)
        {
        }
        /**
         * Unset the event dispatcher for models.
         *
         * @return void
         */
        public static function unsetEventDispatcher()
        {
        }
        /**
         * Get the mutated attributes for a given instance.
         *
         * @return array
         */
        public function getMutatedAttributes()
        {
        }
        /**
         * Extract and cache all the mutated attributes of a class.
         *
         * @param  string  $class
         * @return void
         */
        public static function cacheMutatedAttributes($class)
        {
        }
        /**
         * Dynamically retrieve attributes on the model.
         *
         * @param  string  $key
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Dynamically set attributes on the model.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return void
         */
        public function __set($key, $value)
        {
        }
        /**
         * Determine if the given attribute exists.
         *
         * @param  mixed  $offset
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function offsetExists($offset)
        {
        }
        /**
         * Get the value for a given offset.
         *
         * @param  mixed  $offset
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($offset)
        {
        }
        /**
         * Set the value for a given offset.
         *
         * @param  mixed  $offset
         * @param  mixed  $value
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($offset, $value)
        {
        }
        /**
         * Unset the value for a given offset.
         *
         * @param  mixed  $offset
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetUnset($offset)
        {
        }
        /**
         * Determine if an attribute or relation exists on the model.
         *
         * @param  string  $key
         * @return bool
         */
        public function __isset($key)
        {
        }
        /**
         * Unset an attribute on the model.
         *
         * @param  string  $key
         * @return void
         */
        public function __unset($key)
        {
        }
        /**
         * Handle dynamic method calls into the model.
         *
         * @param  string  $method
         * @param  array  $parameters
         * @return mixed
         */
        public function __call($method, $parameters)
        {
        }
        /**
         * Handle dynamic static method calls into the method.
         *
         * @param  string  $method
         * @param  array  $parameters
         * @return mixed
         */
        public static function __callStatic($method, $parameters)
        {
        }
        /**
         * Convert the model to its string representation.
         *
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * When a model is being unserialized, check if it needs to be booted.
         *
         * @return void
         */
        public function __wakeup()
        {
        }
    }
}
namespace FluentForm\App\Models {
    class Model extends \FluentForm\Framework\Database\Orm\Model
    {
        /**
         * The attributes that aren't mass assignable.
         *
         * @var array
         */
        protected $guarded = ['id', 'ID'];
        /**
         * Get the number of models to return per page.
         *
         * @return int
         */
        public function getPerPage()
        {
        }
    }
    class Entry extends \FluentForm\App\Models\Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'fluentform_submissions';
        /**
         * A formMeta is owned by a form.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function form()
        {
        }
        /**
         * An entry has many meta.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function entryMeta()
        {
        }
        /**
         * An entry has many logs.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function logs()
        {
        }
        /**
         * An entry has many entry details.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function entryDetails()
        {
        }
        public function paginateEntries($attributes = [])
        {
        }
        public function countByGroup($formId)
        {
        }
        public function amend($id, $data = [])
        {
        }
        public static function remove($entryIds)
        {
        }
    }
    class EntryDetails extends \FluentForm\App\Models\Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'fluentform_entry_details';
        /**
         * Indicates if the model should be timestamped.
         *
         * @var bool
         */
        public $timestamps = false;
        /**
         * A formMeta is owned by a form.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function form()
        {
        }
        /**
         * A submission detail is owned by a submission.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function submission()
        {
        }
    }
    class EntryMeta extends \FluentForm\App\Models\Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'fluentform_submission_meta';
        /**
         * A formMeta is owned by a form.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function form()
        {
        }
        /**
         * A formMeta is owned by an entry.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function entry()
        {
        }
    }
}
namespace FluentForm\App\Models\Traits {
    trait PredefinedForms
    {
        public static function resolvePredefinedForm($attributes = [])
        {
        }
        public static function findPredefinedForm($attributes = [])
        {
        }
        public static function getPredefinedForms()
        {
        }
        public static function getBlankConversationalForm()
        {
        }
    }
}
namespace FluentForm\App\Models {
    class Form extends \FluentForm\App\Models\Model
    {
        use \FluentForm\App\Models\Traits\PredefinedForms;
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'fluentform_forms';
        /**
         * A form has many form meta.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function formMeta()
        {
        }
        /**
         * A form may have one form meta to determine if
         * the form is a regular or conversational one.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasOne
         */
        public function conversationalMeta()
        {
        }
        /**
         * A form has many submissions.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function submissions()
        {
        }
        /**
         * A form has many submission meta.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function submissionMeta()
        {
        }
        /**
         * A form has many entry details.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function entryDetails()
        {
        }
        /**
         * A form has many form analytics.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function formAnalytics()
        {
        }
        /**
         * A form has many logs.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function logs()
        {
        }
        public static function prepare($attributes = [])
        {
        }
        public static function getFormMeta($metaKey, $formId = null)
        {
        }
        public static function getFormsDefaultSettings($formId = false)
        {
        }
        public static function getAdvancedValidationSettings($formId)
        {
        }
        public static function remove($formId)
        {
        }
    }
    class FormAnalytics extends \FluentForm\App\Models\Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'fluentform_form_analytics';
        /**
         * Indicates if the model should be timestamped.
         *
         * @var bool
         */
        public $timestamps = false;
        /**
         * A formMeta is owned by a form.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function form()
        {
        }
    }
    class FormMeta extends \FluentForm\App\Models\Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'fluentform_form_meta';
        /**
         * Indicates if the model should be timestamped.
         *
         * @var bool
         */
        public $timestamps = false;
        /**
         * A formMeta is owned by a form.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function form()
        {
        }
        public static function prepare($attributes, $predefinedForm)
        {
        }
        public static function retrieve($key, $formId = null, $default = null)
        {
        }
        public static function store(\FluentForm\App\Models\Form $form, $formMeta)
        {
        }
        public static function persist($formId, $metaKey, $metaValue)
        {
        }
        public static function remove($formId, $metaKey)
        {
        }
    }
    class Log extends \FluentForm\App\Models\Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'fluentform_logs';
        /**
         * Indicates if the model should be timestamped.
         *
         * @var bool
         */
        public $timestamps = false;
        /**
         * A formMeta is owned by a form.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function form()
        {
        }
    }
    class Scheduler extends \FluentForm\App\Models\Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'ff_scheduled_actions';
        /**
         * A formMeta is owned by a form.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function form()
        {
        }
        /**
         * A schedule action is owned by a submission.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function submission()
        {
        }
    }
    class Submission extends \FluentForm\App\Models\Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'fluentform_submissions';
        /**
         * A submission is owned by a User.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function user()
        {
        }
        /**
         * A submission is owned by a form.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function form()
        {
        }
        /**
         * A submission has many meta.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function submissionMeta()
        {
        }
        /**
         * A submission has many logs.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function logs()
        {
        }
        /**
         * A submission has many entry details.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\HasMany
         */
        public function entryDetails()
        {
        }
        public function customQuery($attributes = [])
        {
        }
        public function paginateEntries($attributes = [])
        {
        }
        public function findPreviousSubmission($attributes = [])
        {
        }
        public function findAdjacentSubmission($attributes = [])
        {
        }
        public function countByGroup($formId)
        {
        }
        public function amend($id, $data = [])
        {
        }
        public static function remove($submissionIds)
        {
        }
        public function allSubmissions($attributes = [])
        {
        }
        public function availableForms()
        {
        }
        public static function report($attributes)
        {
        }
    }
    class SubmissionMeta extends \FluentForm\App\Models\Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'fluentform_submission_meta';
        /**
         * A formMeta is owned by a form.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function form()
        {
        }
        /**
         * A formMeta is owned by a submission.
         *
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsTo
         */
        public function submission()
        {
        }
        public static function retrieve($key, $submissionId = null, $default = null)
        {
        }
        public static function persist($submissionId, $metaKey, $metaValue, $formId = null)
        {
        }
    }
    class User extends \FluentForm\App\Models\Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'users';
        /**
         * The accessors to append to the model's array form.
         *
         * @var array
         */
        protected $appends = ['id', 'name', 'email', 'permalink'];
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = ['ID', 'user_email', 'user_pass', 'display_name'];
        /**
         * Get the id of the user.
         *
         * @return bool
         */
        public function getIdAttribute()
        {
        }
        /**
         * Get the name of the user.
         *
         * @return string
         */
        public function getNameAttribute()
        {
        }
        /**
         * Get the email of the user.
         *
         * @return string
         */
        public function getEmailAttribute()
        {
        }
        /**
         * Get the permalink of the user.
         *
         * @return string
         */
        public function getPermalinkAttribute()
        {
        }
    }
}
namespace FluentForm\App\Modules\Acl {
    class Acl
    {
        public static $capability = '';
        public static $role = '';
        public static function getPermissionSet()
        {
        }
        /**
         * Fluentform access controll permissions assignment.
         */
        public static function setPermissions()
        {
        }
        /**
         * Verify if current user has a fluentform permission.
         *
         * @param $permission
         * @param null   $formId
         * @param string $message
         * @param bool   $json
         *
         * @throws \Exception
         */
        public static function verify($permission, $formId = null, $message = 'You do not have permission to perform this action.', $json = true)
        {
        }
        public static function hasPermission($permissions, $formId = false)
        {
        }
        public static function hasAnyFormPermission($form_id = false)
        {
        }
        public static function getCurrentUserCapability()
        {
        }
        public static function findUserCapability($user)
        {
        }
        public static function getCurrentUserRole()
        {
        }
        public static function verifyNonce($key = 'fluent_forms_admin_nonce')
        {
        }
        public static function getReadablePermissions()
        {
        }
        public static function getUserPermissions($user = false)
        {
        }
        public static function isSuperMan($user = false)
        {
        }
        public static function getCurrentUserPermissions()
        {
        }
        public static function attachPermissions($user, $permissions)
        {
        }
    }
    /**
     * @deprecated deprecated use FluentForm\App\Http\Controllers\RoleManagerController
     */
    class Managers
    {
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        public function __construct()
        {
        }
        public function get()
        {
        }
        public function store()
        {
        }
        public function remove()
        {
        }
        private function validate()
        {
        }
        private function sendError($data, $code = 423)
        {
        }
        public function dependencyValidate($permissions)
        {
        }
    }
    /**
     * @deprecated deprecated use FluentForm\App\Http\Controllers\RoleManagerController
     */
    class RoleManager
    {
        public function getRoles()
        {
        }
        public function setRoles()
        {
        }
        public function verifyPermissionSet()
        {
        }
        public function currentUserFormFormCapability()
        {
        }
    }
}
namespace FluentForm\App\Modules {
    class AddOnModule
    {
        /**
         * The number of days we'll cached the add-ons got from remote server.
         *
         * @var integer
         */
        protected $cacheDays = 1;
        /**
         * The URL to fetch the add-ons
         *
         * @var string
         */
        protected $addOnsFetchUrl = 'https://wpmanageninja.com/add-ons.json';
        /**
         * Render the add-ons list page.
         */
        public function render()
        {
        }
        /**
         * Show the add-ons list.
         */
        public function showFluentAddOns()
        {
        }
        public function updateAddOnsStatus()
        {
        }
        public function getPremiumAddOns()
        {
        }
    }
}
namespace FluentForm\App\Modules\CLI {
    class Commands
    {
        public function stats($args, $assoc_args)
        {
        }
        public function activate_license($args, $assoc_args)
        {
        }
        public function license_status()
        {
        }
    }
}
namespace FluentForm\App\Modules\Component {
    trait ComponentInitTrait
    {
        /**
         * Initialize the component and register the
         * component by registering actions/filters.
         */
        public function _init()
        {
        }
        /**
         * Validate certain required properties
         *
         * @return void
         */
        private function _fluentFormValidateComponent()
        {
        }
        /**
         * Add the component in fluentform editor's components array.
         *
         * @param array $components
         *
         * @return array $components
         */
        public function _fluentEditorComponenstCallback($components)
        {
        }
        /**
         * Add the keywords for the component to search in the editor.
         *
         * @param array $keywords
         *
         * @return array $keywords
         */
        public function _fluentEditorElementSearchTagsCallback($keywords)
        {
        }
        /**
         * Configure placements of input customization options in editor.
         *
         * @param array $placemenSettings
         *
         * @return array $placemenSettings
         */
        public function _fluentEditorElementSettingsPlacementCallback($placementSettings)
        {
        }
        /**
         * Configure input customization options/items in the editor.
         *
         * @param array $customizationSettings
         *
         * @return array $customizationSettings
         */
        public function _fluentEditorElementCustomizationSettingsCallback($customizationSettings)
        {
        }
        /**
         * Prepare the submission data for the element on Form Submission.
         *
         * @param array $formData
         * @param int   $formId
         * @param array $inputConfigs
         *
         * @return array $formData
         */
        public function _fluentformInsertResponseDataCallback($formData, $formId, $inputConfigs)
        {
        }
        /**
         * Add the component type in fluentform field
         * types to be available in FormFieldParser.
         *
         * @param array $types
         *
         * @return array $types
         */
        public function _fluentformFormInputTypesCallback($types)
        {
        }
        /**
         * Render the component.
         *
         * @param array    $data
         * @param \stdClass $form
         *
         * @return void
         */
        public function _elementRenderHookCallback($item, $form)
        {
        }
        /**
         * Element's entry value transformation.
         *
         * @param mixed  $value
         * @param string $field
         * @param int    $formId
         *
         * @return mixed $value
         */
        public function _elementEntryFormatCallback($value, $field, $formId)
        {
        }
    }
    abstract class BaseComponent
    {
        use \FluentForm\App\Modules\Component\ComponentInitTrait;
        /**
         * The unique name of the component.
         *
         * @return string
         */
        public abstract function name();
        /**
         * The label of the component.
         *
         * @return string
         */
        public abstract function label();
        /**
         * The element type of the component from already
         * available elements (input_text, textarea e.t.c).
         *
         * @return string
         */
        public abstract function element();
        /**
         * The template type of the component to display preview in editor dropzone from
         * already available templates (inputText, selectCountry, addressFields e.t.c).
         *
         * @return string
         */
        public abstract function template();
        /**
         * Render the element on frontend form.
         *
         * @param array  $component Element Config
         * @param object $form      The Form Object
         *
         * @return void
         */
        public abstract function render($component, $form);
        /**
         * Form submission callback.
         *
         * @param array $formData Submitted form data
         * @param int   $formId   Submitted form id
         * @param array $config   Form elements config
         *
         * @return array $formData
         */
        public abstract function onSubmit($formData, $formId, $config);
        /**
         * Component position in editor. If null is returned then
         * the element will be pushed at last but the derived class
         * will override this method if any customization is needed.
         *
         * @return int|null
         */
        public function index()
        {
        }
        /**
         * The group, where the component should be added. By default,
         * the element will be added in "general" group and the derived
         *  class will override this method if any customization is needed.
         *
         * @return string general|advanced|container
         */
        public function group()
        {
        }
        /**
         * The element icon class for the component to display in the button in
         * the editor element list which is mapped to editor_options.icon_class.
         *
         * @return string
         */
        public function elementIconClass()
        {
        }
        /**
         * Element editor/form attributes and the derived class will
         * override this method if any customization is needed.
         *
         * @param array $dafault
         *
         * @return array $default
         */
        public function attributes($default)
        {
        }
        /**
         * Element editor settings and the derived class will
         * override this method if any customization is needed.
         *
         * @param array $dafault
         *
         * @return array $default
         */
        public function settings($default)
        {
        }
        /**
         * Element editor options and the derived class will
         * override this method if any customization is needed.
         *
         * @param array $dafault
         *
         * @return array $default
         */
        public function options($default)
        {
        }
        /**
         * Element's form submission validation rules and the derived
         * class will override this method if needed any customization.
         *
         * @return array
         */
        public function validationRules()
        {
        }
        /**
         * Element editor placement settings and the derived class
         * will override this method if any customization is needed.
         *
         * @param array $placemenSettings
         *
         * @return array $placemenSettings
         */
        public function placementSettings($placemenSettings)
        {
        }
        /**
         * The customization for the component and derived class can
         * override this method if any customization is needed.
         *
         * @param array $customizationSettings
         *
         * @return array $customizationSettings
         */
        public function customizationSettings($customizationSettings)
        {
        }
        /**
         * Add the component type in fluentform field types to
         * be available in FormFieldParser and derived class can
         * override this method if any customization is needed.
         *
         * @param array $types
         *
         * @return array $types
         */
        public function addType($types)
        {
        }
        /**
         * The keywords to search the element in the editor and
         * the derived class will override this method if needed.
         *
         * @return array
         */
        public function searchBy()
        {
        }
        /**
         * Transform the element's submitted value saved in database
         * to show it properly/formatted in entry page if needed and
         * this method implementation optional so a default method is
         * implemented here and original value is returned. In any case
         * if any customization of the value is needed then the derived
         * class will override it and will format and return the the value.
         *
         * @param mixed  $value  [description]
         * @param string $field
         * @param int    $formId
         *
         * @return mixed $value
         */
        public function formatEntryValue($value, $field, $formId)
        {
        }
    }
    class Component
    {
        /**
         * FluentForm\Framework\Foundation\Application
         *
         * @var $app
         */
        protected $app = null;
        /**
         * Determine whether to register Elementor PopUp handler.
         *
         * @var bool
         */
        protected $elementorPopUpHandler = false;
        /**
         * Biuld the instance of this class
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function registerScripts()
        {
        }
        protected function maybeLoadFluentFormStyles()
        {
        }
        /**
         * Get all the available components
         * @deprecated Use \FluentForm\App\Http\Controllers\FormController::resources
         * @return void
         *
         * @throws \Exception
         * @throws \FluentForm\Framework\Exception\UnResolveableEntityException
         */
        public function index()
        {
        }
        /**
         * Get disabled components
         *
         * @return array
         */
        private function getDisabledComponents()
        {
        }
        /**
         * Get available shortcodes for editor
         *
         * @return void
         *
         * @throws \Exception
         */
        public function getEditorShortcodes()
        {
        }
        /**
         * @deprecated Use \FluentForm\App\Services\Form\FormService::shortcodes
         * Get all available shortcodes for editor
         *
         * @return void
         *
         * @throws \Exception
         */
        public function getAllEditorShortcodes()
        {
        }
        /**
         * Register the form renderer shortcode
         *
         * @return void
         */
        public function addFluentFormShortCode()
        {
        }
        public function renderForm($atts)
        {
        }
        /**
         * Process the output HTML to generate the default values.
         *
         * @param string    $output
         * @param \stdClass $form
         *
         * @return string
         */
        public function replaceEditorSmartCodes($output, $form)
        {
        }
        /**
         * Register renderer actions for compiling each element
         *
         * @return void
         */
        public function addRendererActions()
        {
        }
        /**
         * Register dynamic value shortcode parser (filter default value)
         *
         * @return void
         */
        public function addFluentFormDefaultValueParser()
        {
        }
        /**
         * Register filter to check whether the form is renderable
         *
         * @return mixed
         */
        public function addIsRenderableFilter()
        {
        }
        /**
         * Check if limit is set on form submits and it's valid yet
         *
         * @param array $restrictions
         *
         * @return bool
         */
        private function limitNumberOfEntries($restrictions, $form, &$isRenderable)
        {
        }
        /**
         * Check if form has scheduled date & weekdays and open for submission
         *
         * @param array $restrictions
         *
         * @return bool
         */
        private function scheduleForm($restrictions, $form, &$isRenderable)
        {
        }
        /**
         * * Check if form requires loged in user and user is logged in
         *
         * @param array $restrictions
         *
         * @return bool
         */
        private function requireLogin($restrictions, $form, &$isRenderable)
        {
        }
        /**
         * Register fluentform_submission_inserted actions
         *
         * @return void
         */
        public function addFluentformSubmissionInsertedFilter()
        {
        }
        /**
         * Add inline scripts [Add localized script using same var]
         *
         * @return void
         */
        private function addInlineVars()
        {
        }
        public static function getDatei18n()
        {
        }
        protected function maybeHasAdvandedFields($form, $formBuilder)
        {
        }
        public function registerInputSanitizers()
        {
        }
        public function getNumericInputValue($value, $field)
        {
        }
    }
}
namespace FluentForm\App\Modules {
    class DashboardWidgetModule
    {
        public function showStat()
        {
        }
        private function printStats($stats)
        {
        }
        private function getInstallUrl($plugin)
        {
        }
    }
    class DocumentationModule
    {
        public function render()
        {
        }
        private function getUserGuides()
        {
        }
    }
    class EditorButtonModule
    {
        public function addButton()
        {
        }
        private function addMceButtonAssets()
        {
        }
        private function pageSupportedMediaButtons()
        {
        }
        private function getMenuIcon()
        {
        }
    }
}
namespace FluentForm\App\Modules\Entries {
    class EntryQuery
    {
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        protected $formModel;
        protected $responseModel;
        protected $formId = false;
        protected $per_page = 10;
        protected $page_number = 1;
        protected $status = false;
        protected $is_favourite = null;
        protected $sort_by = 'ASC';
        protected $search = false;
        protected $wheres = [];
        protected $startDate;
        protected $endDate;
        public function __construct()
        {
        }
        public function getResponses()
        {
        }
        public function getResponse($entryId)
        {
        }
        public function getNextResponse($entryId)
        {
        }
        public function getPrevResponse($entryId)
        {
        }
        protected function getNextPrevEntryQuery()
        {
        }
        public function groupCount($form_id)
        {
        }
    }
    /**
     * @deprecated deprecated use FluentForm\App\Http\Controllers\SubmissionController
     */
    class Entries extends \FluentForm\App\Modules\Entries\EntryQuery
    {
        /**
         * The form response model.
         *
         * @var \WpFluent\QueryBuilder\QueryBuilderHandler $responseMetaModel
         */
        protected $responseMetaModel;
        /**
         * Entries constructor.
         *
         * @throws \Exception
         */
        public function __construct()
        {
        }
        public function getAllFormEntries()
        {
        }
        public function getEntriesReport()
        {
        }
        public function renderEntries($form_id)
        {
        }
        public function getEntriesGroup()
        {
        }
        public function _getEntries($formId, $currentPage, $perPage, $sortBy, $entryType, $search, $wheres = [])
        {
        }
        public function getEntries()
        {
        }
        public function _getEntry()
        {
        }
        public function getEntry()
        {
        }
        /**
         * @param       $form
         * @param array $with
         *
         * @return array
         *
         * @todo: Implement Caching mechanism so we don't have to parse these things for every request
         */
        public function getFormInputsAndLabels($form, $with = ['admin_label', 'raw'])
        {
        }
        public function getNotes()
        {
        }
        public function addNote()
        {
        }
        public function changeEntryStatus()
        {
        }
        public function deleteEntry()
        {
        }
        public function deleteEntryById($entryId, $formId = false)
        {
        }
        private function getSubmissionAttachments($submissionId, $form)
        {
        }
        public function favoriteChange()
        {
        }
        public function handleBulkAction()
        {
        }
        /**
         * @deprecated Use \FluentForm\App\Services\Submission\SubmissionService::recordEntryDetails
         * @param $entryId
         * @param $formId
         * @param $data
         * @return bool
         */
        public function recordEntryDetails($entryId, $formId, $data)
        {
        }
        public function updateEntryDiffs($entryId, $formId, $formData)
        {
        }
        public function getUsers()
        {
        }
        public function changeEntryUser()
        {
        }
        public function getAvailableForms()
        {
        }
    }
    class Export
    {
        /**
         * App instance
         *
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request
         */
        protected $request;
        /**
         * Table name
         *
         * @var String table/data source name
         */
        protected $tableName;
        /**
         * Export constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $application
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application, $tableName = 'fluentform_submissions')
        {
        }
        /**
         * Only used exports form partial entries
         *
         * @todo:: refactor.
         */
        public function index()
        {
        }
        private function downloadOfficeDoc($data, $type = 'csv', $fileName = null)
        {
        }
        private function exportAsJSON($form)
        {
        }
        private function getSubmissions($formId)
        {
        }
    }
    /**
     *
     * @deprecated  use FluentForm\App\Services\Report\ReportHelper
     * all used method reference updated with new ReportHelper, except Fluentformpro
     *
     */
    class Report
    {
        private $app;
        private $formModel;
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Get report
         *
         * @param bool $formId
         */
        public function getReport($formId = false)
        {
        }
        public function generateReport($form, $statuses = [])
        {
        }
        public function getInputReport($formId, $fieldNames, $whereClasuses)
        {
        }
        public function getSubFieldInputReport($formId, $fieldNames, $whereClasuses)
        {
        }
        protected function getFormattedReportsForSubInputs($reports, $formId, $whereClasuses)
        {
        }
        protected function setReportForSubInput($report, &$formattedReports)
        {
        }
        public function getEntryTotal($fieldName, $formId, $whereClasuses)
        {
        }
        private function maybeMigrateData($formId)
        {
        }
        private function getEntryCounts($formId, $statuses = false)
        {
        }
        private function getBrowserCounts($formId, $statuses)
        {
        }
        private function getDeviceCounts($formId, $statuses)
        {
        }
    }
}
namespace FluentForm\App\Modules\Form {
    class AkismetHandler
    {
        public static function isEnabled()
        {
        }
        public static function isPluginEnabled()
        {
        }
        public static function isSpamSubmission($formData, $form)
        {
        }
        protected static function getAkismetFields($data, $form)
        {
        }
    }
    class Analytics
    {
        /**
         * App instance
         *
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * Build the instance
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Save form view analytics data
         */
        public function record($formId)
        {
        }
        public function resetFormAnalytics()
        {
        }
        /**
         * Save form view analytics data
         */
        private function saveViewAnalytics($formId)
        {
        }
        /**
         * Store (create/update) total view of a form
         *
         * @param int $formId
         */
        private function increaseTotalViews($formId)
        {
        }
    }
    class Form
    {
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        /**
         * Set this value when we need predefined default settings.
         *
         * @var array $defaultSettings
         */
        protected $defaultSettings;
        /**
         * Set this value when we need predefined default notifications.
         *
         * @var array $defaultNotifications
         */
        protected $defaultNotifications;
        /**
         * Set this value when we need predefined form fields.
         *
         * @var array $formFields
         */
        protected $formFields;
        protected $metas = [];
        protected $formType = 'form';
        protected $hasPayment = 0;
        /**
         * @var \FluentForm\Framework\Database\Query\Builder
         */
        protected $model = null;
        /**
         * Form constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $application
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get all forms from database
         */
        public function index()
        {
        }
        /**
         * Create a form from backend/editor
         *
         * @return void|array
         */
        public function store($returnJSON = true)
        {
        }
        public function getFormsDefaultSettings($formId = false)
        {
        }
        public function getAdvancedValidationSettings($formId)
        {
        }
        public function getMeta($formId, $metaKey, $isJson = true)
        {
        }
        public function updateMeta($formId, $metaKey, $metaValue)
        {
        }
        public function deleteMeta($formId, $metaKey)
        {
        }
        /**
         * Find/Read a from from the database
         */
        public function find()
        {
        }
        /**
         * Fetch a from from the database
         * Note: required for ninja-tables
         *
         * @return mixed
         */
        public function fetchForm($formId)
        {
        }
        /**
         * Save/update a form from backend/editor
         */
        public function update()
        {
        }
        private function sanitizeFields($formFields)
        {
        }
        private function sanitizeFieldMaps($fields)
        {
        }
        /**
         * Delete a from from database
         */
        public function delete()
        {
        }
        protected function deleteFormAssests($formId)
        {
        }
        /**
         * Duplicate a from
         */
        public function duplicate()
        {
        }
        /**
         * Validate a form  by form title & for duplicate name attributes
         */
        private function validate()
        {
        }
        public function convertToConversational()
        {
        }
        private function getAdminPermalink($route, $form)
        {
        }
        private function getSettingsUrl($form)
        {
        }
        public function getAllForms()
        {
        }
        /**
         * Map pdf feed ID to replace with duplicated PDF feed ID when duplicating form
         *
         * @param array $extras
         * @param array $newFormId
         *
         * @return array
         */
        private function getPdfFeedMap($extras, $newFormId)
        {
        }
        /**
         * Map notification data with PDF feed map
         *
         * @param array $extras
         * @param array $pdfFeedMap
         *
         * @return array
         */
        private function notificationWithPdfMap($extras, $pdfFeedMap)
        {
        }
        public function findFormLocations()
        {
        }
        public static function getShortCodeIds($content)
        {
        }
    }
    class FormDataParser
    {
        protected static $data = null;
        public static function parseFormEntries($entries, $form, $fields = null)
        {
        }
        public static function parseFormEntry($entry, $form, $fields = null, $isHtml = false)
        {
        }
        public static function parseFormSubmission($submission, $form, $fields, $isHtml = false)
        {
        }
        public static function parseData($response, $fields, $formId, $isHtml = false)
        {
        }
        public static function formatValue($value)
        {
        }
        public static function formatFileValues($values, $isHtml, $form_id = null)
        {
        }
        public static function formatImageValues($values, $isHtml, $form_id = null)
        {
        }
        public static function formatRepeatFieldValue($value, $field, $form_id)
        {
        }
        public static function formatTabularGridFieldValue($value, $field, $form_id, $isHtml = false)
        {
        }
        public static function makeTabularData($data)
        {
        }
        /**
         * Format input_name field value by concatenating all name fields.
         *
         * @param array|object $value
         *
         * @return string $value
         */
        public static function formatName($value)
        {
        }
        public static function formatCheckBoxValues($values, $field, $isHtml = false)
        {
        }
        public static function resetData()
        {
        }
    }
    /**
     * Available methods
     *
     * @method static array      getShortCodeInputs(\stdClass $form, array $with = ['admin_label'])
     * @method static array      getValidations(\stdClass $form, array $inputs, array $fields = [])
     * @method static array      getElement(\stdClass $form, string|array $name, array $with = [])
     * @method static boolean    hasElement(\stdClass $form, string $name)
     * @method static boolean    hasPaymentFields(\stdClass $form)
     * @method static array      getPaymentFields(\stdClass $form, $with = [])
     * @method static array      getPaymentInputFields(\stdClass $form, $with = [])
     * @method static array      getAttachmentInputFields(\stdClass $form, $with = [])
     * @method static boolean    hasRequiredFields(\stdClass $form, array $fields)
     * @method static array      getInputsByElementTypes(\stdClass $form, array $elements, array $with = [])
     * @method static array|null getField(\stdClass $form, string|array $element, string|array $attribute, array $with = [])
     */
    class FormFieldsParser
    {
        protected static $forms = [];
        protected static $formsWith = [];
        public static function maybeResetForm($form, $with)
        {
        }
        public static function getFields($form, $asArray = false)
        {
        }
        public static function getInputs($form, $with = [])
        {
        }
        public static function getEntryInputs($form, $with = ['admin_label', 'raw'])
        {
        }
        public static function parse($key, $form, $with)
        {
        }
        public static function getAdminLabels($form, $fields = [])
        {
        }
        /**
         * Deligate dynamic static method calls to FormParser method.
         * And set the result to the store before returning to dev.
         *
         * @param string $method
         * @param array  $parameters
         *
         * @return mixed
         */
        public static function __callStatic($method, $parameters)
        {
        }
        public static function resetData()
        {
        }
    }
    /* @deprecated Use class \FluentForm\App\Http\Controllers\SubmissionHandlerController */
    class FormHandler
    {
        /**
         * App instance
         *
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request
         */
        protected $request;
        /**
         * Form Data
         *
         * @var array $formData
         */
        protected $formData;
        /**
         * The Fluent Forms object.
         *
         * @var \stdClass
         */
        protected $form;
        /**
         * Form Handler constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Set the form using it's ID.
         *
         * @param $formId
         *
         * @return $this
         */
        public function setForm($formId)
        {
        }
        /**
         * Handle form submition
         */
        public function onSubmit()
        {
        }
        public function processFormSubmissionData($insertId, $formData, $form)
        {
        }
        public function getReturnData($insertId, $form, $formData)
        {
        }
        /**
         * Validate form data.
         *
         * @param $fields
         *
         * @return bool
         */
        private function validate(&$fields)
        {
        }
        /**
         * Validate nonce.
         */
        protected function validateNonce()
        {
        }
        protected function handleSpamError()
        {
        }
        protected function isSpam($formData, $form)
        {
        }
        /**
         * Validate reCaptcha.
         */
        private function validateReCaptcha()
        {
        }
        /**
         * Validate hCaptcha.
         */
        private function validateHCaptcha()
        {
        }
        /**
         * Validate turnstile.
         */
        private function validateTurnstile()
        {
        }
        /**
         * Validate form data based on the form restrictions settings.
         *
         * @param $fields
         */
        private function validateRestrictions(&$fields)
        {
        }
        /**
         * Handle response when empty form submission is not allowed.
         *
         * @param array $settings
         * @param $fields
         */
        private function handleDenyEmptySubmission($settings, &$fields)
        {
        }
        /**
         * Prepare the data to be inserted to the database.
         *
         * @param boolean $formData
         *
         * @return array
         */
        public function prepareInsertData($formData = false)
        {
        }
        /**
         * Delegate the validation rules & messages to the
         * ones that the validation library recognizes.
         *
         * @param $rules
         * @param $messages
         *
         * @return array
         */
        protected function delegateValidations($rules, $messages, $search = [], $replace = [])
        {
        }
        /**
         * Prevents malicious attacks when the submission
         * count exceeds in an allowed interval.
         */
        public function preventMaliciousAttacks()
        {
        }
    }
    class HoneyPot
    {
        private $app;
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        public function renderHoneyPot($form)
        {
        }
        public function verify($insertData, $requestData, $formId)
        {
        }
        public function isEnabled($formId = false)
        {
        }
        private function getFieldName($formId)
        {
        }
    }
    class Inputs
    {
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request
         */
        private $request;
        /**
         * Build the class instance
         *
         * @throws \Exception
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get all the flatten form inputs for shortcode generation.
         */
        public function index()
        {
        }
        public function supportedConditionalFields()
        {
        }
        public function filterEditorFields($fields)
        {
        }
    }
    /* @deprecated  Use FluentForm\App\Services\Form\FormService*/
    class Predefined extends \FluentForm\App\Modules\Form\Form
    {
        /**
         * all JSON data will be stored here
         *
         * @return array
         */
        private function getPredefinedForms()
        {
        }
        private function getBlankConversationalForm()
        {
        }
        /**
         * Fetch simplified information for all predefined forms
         */
        public function all()
        {
        }
        /**
         * Create a predefined form
         *
         * @param $name
         */
        public function create()
        {
        }
        public function createForm($predefinedForm, $predefinedName = '')
        {
        }
        private function getRandomPhoto()
        {
        }
    }
}
namespace FluentForm\App\Modules\Form\Settings {
    class EntryColumnViewSettings
    {
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        public function __construct()
        {
        }
        /**
         * Save settings for visible entry columns
         *
         * @return void
         */
        public function saveVisibleColumnsAjax()
        {
        }
        /**
         * Save settings for entry column display order
         */
        public function saveEntryColumnsOrderAjax()
        {
        }
        /**
         * Reset column display order settings
         */
        public function resetEntryDisplaySettings()
        {
        }
        protected function store($formId, $metaKey, $metaValue)
        {
        }
    }
    class ExtraSettings
    {
        /**
         * Request Object
         *
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        /**
         * Query Builder Handler Object
         *
         * @var \WpFluent\QueryBuilder\QueryBuilderHandler
         */
        protected $form_model;
        /**
         * Construct the object
         *
         * @throws \Exception
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get extra settig navigations
         */
        public function getExtraSettingNavs()
        {
        }
        /**
         * Get extra settigs component
         */
        public function getExtraSettingsComponent()
        {
        }
        /**
         * Get trello settigs
         */
        public function getTrelloSettingsComponent($component, $formId)
        {
        }
    }
    class FormCssJs
    {
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        public function __construct()
        {
        }
        public function addCssJs($formId)
        {
        }
        public function getCss($formId)
        {
        }
        public function getJs($formId)
        {
        }
        public function addCss($formId, $css, $cssId = 'fluentform_custom_css')
        {
        }
        public function addJs($formId, $customJS)
        {
        }
        /**
         * Get settings for a particular form by id
         */
        public function getSettingsAjax()
        {
        }
        /**
         * Save settings for a particular form by id
         */
        public function saveSettingsAjax()
        {
        }
        protected function getData($formId, $metaKey)
        {
        }
        protected function store($formId, $metaKey, $metaValue)
        {
        }
    }
    class FormSettings
    {
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request
         */
        private $request;
        private $app;
        private $formId;
        /**
         * The settings (fluentform_form_meta) query builder.
         *
         * @var \WpFluent\QueryBuilder\QueryBuilderHandler
         */
        private $settingsQuery;
        /**
         * Construct the object
         *
         * @throws \Exception
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get settings for a particular form by id
         */
        public function index()
        {
        }
        public function getGeneralSettingsAjax()
        {
        }
        public function saveGeneralSettingsAjax()
        {
        }
        /**
         * Save settings/meta for a form in database
         */
        public function store()
        {
        }
        /**
         * Delete settings/meta from database for a given form
         */
        public function remove()
        {
        }
        private function sanitizeData($settings, $sanitizerMap)
        {
        }
    }
}
namespace FluentForm\App\Modules\Form\Settings\Validator {
    class Confirmations
    {
        /**
         * Validates confirmations settings data.
         *
         * @param array $data
         *
         * @return bool
         */
        public static function validate($data = [])
        {
        }
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param \FluentForm\Framework\Validator\Validator $validator
         *
         * @return \FluentForm\Framework\Validator\Validator
         */
        public static function conditionalValidations(\FluentForm\Framework\Validator\Validator $validator)
        {
        }
    }
    class MailChimps
    {
        /**
         * Validates mailchimp feed settings data.
         *
         * @param array $data
         *
         * @return bool
         */
        public static function validate($data = [])
        {
        }
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param \FluentForm\Framework\Validator\Validator $validator
         *
         * @return \FluentForm\Framework\Validator\Validator
         */
        public static function conditionalValidations(\FluentForm\Framework\Validator\Validator $validator)
        {
        }
    }
    class Notifications
    {
        /**
         * Validates notifications settings data.
         *
         * @param array $data
         *
         * @return bool
         */
        public static function validate($data = [])
        {
        }
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param \FluentForm\Framework\Validator\Validator $validator
         *
         * @return \FluentForm\Framework\Validator\Validator
         */
        public static function conditionalValidations(\FluentForm\Framework\Validator\Validator $validator)
        {
        }
    }
    class Pdfs
    {
        /**
         * Validates mailchimp feed settings data.
         *
         * @param array $data
         *
         * @return bool
         */
        public static function validate($data = [])
        {
        }
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param \FluentForm\Framework\Validator\Validator $validator
         *
         * @return \FluentForm\Framework\Validator\Validator
         */
        public static function conditionalValidations(\FluentForm\Framework\Validator\Validator $validator)
        {
        }
    }
    class Validator
    {
        /**
         * Centralized validator for all the settings data.
         *
         * @param $key
         * @param array $data
         */
        public static function validate($key, $data = [])
        {
        }
    }
}
namespace FluentForm\App\Modules\Form {
    /* @deprecated Current File FluentForm\App\Http\Controllers\TransferController */
    class Transfer
    {
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        /**
         * Transfer constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $application
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Export forms as JSON.
         */
        public function export()
        {
        }
        /**
         * Import forms from a previously exported JSON file.
         */
        public function import()
        {
        }
        public function getFormMetas($formId)
        {
        }
    }
}
namespace FluentForm\App\Modules\HCaptcha {
    class HCaptcha
    {
        /**
         * Verify hCaptcha response.
         *
         * @param string $token  response from the user.
         * @param null   $secret provided or already stored secret key.
         *
         * @return bool
         */
        public static function validate($token, $secret = null)
        {
        }
    }
}
namespace FluentForm\App\Modules\Logger {
    class DataLogger
    {
        public $app;
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function getLogFilters()
        {
        }
        public function log($data)
        {
        }
        public function getLogsByEntry($entry_id, $log_type = 'logs', $sourceType = 'submission_item')
        {
        }
        public function getAllLogs()
        {
        }
        public function getApiLogs()
        {
        }
        public function deleteLogsByIds($ids = [])
        {
        }
        public function deleteApiLogsByIds($ids = [])
        {
        }
        public function retryApiAction()
        {
        }
        private function getEntry($submission, $form)
        {
        }
        public function getApiLogFilters()
        {
        }
    }
}
namespace FluentForm\App\Modules {
    class ProcessExteriorModule
    {
        public function handleExteriorPages()
        {
        }
        public function renderFormPreview($form_id)
        {
        }
        private function loadDefaultPageTemplate()
        {
        }
        /**
         * Set the posts to one
         *
         * @param WP_Query $query
         *
         * @return void
         */
        public function pre_get_posts($query)
        {
        }
    }
}
namespace FluentForm\App\Modules\ReCaptcha {
    class ReCaptcha
    {
        /**
         * Verify reCaptcha response.
         *
         * @param string $token response from the user.
         * @param null $secret provided or already stored secret key.
         *
         * @return bool
         */
        public static function validate($token, $secret = null, $version = 'v2_visible')
        {
        }
    }
}
namespace FluentForm\App\Modules\Registerer {
    class AdminBar
    {
        public function register()
        {
        }
        public static function isDisabled()
        {
        }
        public function addMenuBar($wpAdminBar)
        {
        }
        private function getMenuItems()
        {
        }
    }
    class Menu
    {
        /**
         * App instance
         *
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * Menu constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $application
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        public function reisterScripts()
        {
        }
        public function isFluentPages()
        {
        }
        public function enqueuePageScripts()
        {
        }
        /**
         * Register menu and sub-menus.
         */
        public function register()
        {
        }
        private function getMenuIcon()
        {
        }
        public function renderFormAdminRoute()
        {
        }
        public function renderAllEntriesAdminRoute()
        {
        }
        public function renderFormInnerPages()
        {
        }
        public function renderSettings($form_id)
        {
        }
        /**
         * Remove the inactive addOn menu items
         *
         * @param string $addOn
         *
         * @return boolean
         */
        public function filterFormSettingsMenu($settingsMenus, $form_id)
        {
        }
        public function renderFormSettings($form_id)
        {
        }
        public function renderForms()
        {
        }
        public function renderEditor($form_id)
        {
        }
        public function renderDocs()
        {
        }
        public function renderAddOns()
        {
        }
        private function enqueueEditorAssets()
        {
        }
        /**
         * Render global settings page.
         *
         * @throws \Exception
         */
        public function renderGlobalSettings()
        {
        }
        public function renderTransfer()
        {
        }
        public function addPreviewButton($formId)
        {
        }
        public function addCopyShortcodeButton($formId)
        {
        }
        public function commonAction()
        {
        }
        public function renderGlobalMenu()
        {
        }
        public function renderPaymentEntries()
        {
        }
        public function renderSmtpPromo()
        {
        }
        private function usedNameAttributes($formId)
        {
        }
    }
    class ReviewQuery
    {
        public function register()
        {
        }
        public function show()
        {
        }
        private function getMessage()
        {
        }
    }
    class TranslationString
    {
        public static function getAdminI18n()
        {
        }
        public static function getSettingsI18n()
        {
        }
        public static function getGlobalSettingsI18n()
        {
        }
        public static function getEditorI18n()
        {
        }
        public static function getEntriesI18n()
        {
        }
        public static function getAddOnModuleI18n()
        {
        }
        public static function getTransferModuleI18n()
        {
        }
        public static function getPaymentsI18n()
        {
        }
    }
}
namespace FluentForm\App\Modules\Renderer\GlobalSettings {
    class Settings
    {
        /**
         * App instance
         *
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * GlobalSettings constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Render the page for native global settings components
         *
         * @throws \Exception
         */
        public function render()
        {
        }
        /**
         * Enqueue necessary resources.
         *
         * @throws \Exception
         */
        public function enqueue()
        {
        }
    }
}
namespace FluentForm\App\Modules\Settings {
    /**
     * Global Settings
     *
     * @package FluentForm\App\Modules\Settings
     */
    /**
     * @deprecated deprecated use FluentForm\App\Http\Controllers\GlobalSettingsController
     */
    class Settings
    {
        /**
         * Request Object
         *
         * @var \FluentForm\Framework\Request\Request
         */
        protected $request;
        /**
         * Settings constructor.
         *
         * @param \FluentForm\Framework\Request\Request $request
         */
        public function __construct(\FluentForm\Framework\Request\Request $request)
        {
        }
        /**
         * Get a global settings for an specified key.
         */
        public function get()
        {
        }
        public function store()
        {
        }
        public function storeReCaptcha()
        {
        }
        public function storeHCaptcha()
        {
        }
        public function storeTurnstile()
        {
        }
        public function storeSaveGlobalLayoutSettings()
        {
        }
        public function storeMailChimpSettings()
        {
        }
        public function storeEmailSummarySettings()
        {
        }
    }
}
namespace FluentForm\App\Modules\Track {
    class SetupModule
    {
        public function installPlugin($repoSlug)
        {
        }
        private function installFluentSMTP()
        {
        }
        private function backgroundInstaller($plugin_to_install, $plugin_id)
        {
        }
        private function associate_plugin_file($plugins, $key)
        {
        }
    }
    //Could not Find any Usage any where
    class TrackModule
    {
        private $apiUrl = 'https://fluentform.com';
        private $initialConsentKey = '_fluentform_notice_pref';
        private $newsletterDelayTimeStamp = 172800;
        // 7 days
        private $adminNotice;
        public function __construct()
        {
        }
        public function initTrack()
        {
        }
        public function showInitialConsent()
        {
        }
        public function rejectTrack()
        {
        }
        public function sendInitialInfo()
        {
        }
        private function getLogData()
        {
        }
        public function getInitialNotice()
        {
        }
        private function isLocalhost()
        {
        }
    }
}
namespace FluentForm\App\Modules\Turnstile {
    class Turnstile
    {
        /**
         * Verify turnstile response.
         *
         * @param string $token  response from the user.
         * @param null   $secret provided or already stored secret key.
         *
         * @return bool
         */
        public static function validate($token, $secret)
        {
        }
        public static function ensureSettings($values)
        {
        }
    }
}
namespace FluentForm\App\Modules\Widgets {
    class ElementorWidget
    {
        private $app = null;
        public function __construct($app)
        {
        }
        public function init_widgets()
        {
        }
        public function enqueueAssets()
        {
        }
    }
    // Exit if accessed directly
    class FluentFormWidget extends \Elementor\Widget_Base
    {
        public function get_name()
        {
        }
        public function get_title()
        {
        }
        public function get_icon()
        {
        }
        public function get_keywords()
        {
        }
        public function get_categories()
        {
        }
        public function get_style_depends()
        {
        }
        public function get_script_depends()
        {
        }
        protected function register_controls()
        {
        }
        protected function register_general_controls()
        {
        }
        protected function register_error_controls()
        {
        }
        protected function register_title_description_style_controls()
        {
        }
        protected function register_form_container_style_controls()
        {
        }
        protected function register_label_style_controls()
        {
        }
        protected function register_input_textarea_style_controls()
        {
        }
        protected function register_terms_gdpr_style_controls()
        {
        }
        protected function register_placeholder_style_controls()
        {
        }
        protected function register_radio_checkbox_style_controls()
        {
        }
        protected function register_section_break_style_controls()
        {
        }
        protected function register_checkbox_grid_style_controls()
        {
        }
        protected function register_address_line_style_controls()
        {
        }
        protected function register_image_upload_style_controls()
        {
        }
        protected function register_pagination_style_controls()
        {
        }
        protected function register_submit_button_style_controls()
        {
        }
        protected function register_success_message_style_controls()
        {
        }
        protected function register_errors_style_controls()
        {
        }
        /**
         * Render the widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function render()
        {
        }
        /**
         * Render the widget output in the editor.
         *
         * Written as a Backbone JavaScript template and used to generate the live preview.
         *
         * @since 1.0.0
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    class OxygenEl extends \OxyEl
    {
        public function init()
        {
        }
        public function class_names()
        {
        }
        public function button_place()
        {
        }
        public function button_priority()
        {
        }
        public function isBuilderEditorActive()
        {
        }
    }
    class OxyFluentFormWidget extends \FluentForm\App\Modules\Widgets\OxygenEl
    {
        public $css_added = false;
        public function name()
        {
        }
        public function slug()
        {
        }
        public function accordion_button_place()
        {
        }
        public function icon()
        {
        }
        public function controls()
        {
        }
        public function formContainerStyleControls()
        {
        }
        public function formInputLabelsStyle()
        {
        }
        public function formInputsStyle()
        {
        }
        public function checkboxGridStyle()
        {
        }
        public function gdprAndTermsConditionStyle()
        {
        }
        public function sectionBreakStyle()
        {
        }
        public function render($options, $defaults, $content)
        {
        }
        public function init()
        {
        }
        public function enablePresets()
        {
        }
        public function enableFullPresets()
        {
        }
        public function customCSS($options, $selector)
        {
        }
        public function checkboxAndRadioStyle()
        {
        }
        public function fileUploadStyle()
        {
        }
        public function progressBarStyle()
        {
        }
        public function submitBtnStyle()
        {
        }
        public function stepButtonStyle()
        {
        }
        public function successMessageStyle()
        {
        }
        public function errorMessageStyle()
        {
        }
    }
    class OxygenWidget
    {
        public function __construct()
        {
        }
        public function initOxygenEl()
        {
        }
        public function initWidgets()
        {
        }
        public function addAccordionSection()
        {
        }
        public function registerAddPlusSubsections()
        {
        }
    }
    class SidebarWidgets extends \WP_Widget
    {
        public function __construct()
        {
        }
        public function widget($args, $instance)
        {
        }
        public function form($instance)
        {
        }
        public function update($new_instance, $old_instance)
        {
        }
    }
}
namespace FluentForm\App\Services\Analytics {
    class AnalyticsService
    {
        public function reset($formId)
        {
        }
        public function store($data)
        {
        }
        /**
         * Store (create/update) total view of a form
         *
         * @param int $formId
         */
        private function increaseTotalViews($formId)
        {
        }
    }
}
namespace FluentForm\App\Services\Browser {
    /**
     * File: Browser.php
     * Author: Chris Schuld (http://chrisschuld.com/)
     * Last Modified: July 22nd, 2016
     * @version 2.0
     * @package PegasusPHP
     *
     * Copyright (C) 2008-2010 Chris Schuld  (chris@chrisschuld.com)
     *
     * This program is free software; you can redistribute it and/or
     * modify it under the terms of the GNU General Public License as
     * published by the Free Software Foundation; either version 2 of
     * the License, or (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     * GNU General Public License for more details at:
     * http://www.gnu.org/copyleft/gpl.html
     *
     *
     * Typical Usage:
     *
     *   $browser = new Browser();
     *   if( $browser->getBrowser() == Browser::BROWSER_FIREFOX && $browser->getVersion() >= 2 ) {
     *    echo 'You have FireFox version 2 or greater';
     *   }
     *
     * User Agents Sampled from: http://www.useragentstring.com/
     *
     * This implementation is based on the original work from Gary White
     * http://apptools.com/phptools/browser/
     *
     */
    class Browser
    {
        private $_agent = '';
        private $_browser_name = '';
        private $_version = '';
        private $_platform = '';
        private $_os = '';
        private $_is_aol = false;
        private $_is_mobile = false;
        private $_is_tablet = false;
        private $_is_robot = false;
        private $_is_facebook = false;
        private $_aol_version = '';
        const BROWSER_UNKNOWN = 'unknown';
        const VERSION_UNKNOWN = 'unknown';
        const BROWSER_OPERA = 'Opera';
        // http://www.opera.com/
        const BROWSER_OPERA_MINI = 'Opera Mini';
        // http://www.opera.com/mini/
        const BROWSER_WEBTV = 'WebTV';
        // http://www.webtv.net/pc/
        const BROWSER_EDGE = 'Edge';
        // https://www.microsoft.com/edge
        const BROWSER_IE = 'Internet Explorer';
        // http://www.microsoft.com/ie/
        const BROWSER_POCKET_IE = 'Pocket Internet Explorer';
        // http://en.wikipedia.org/wiki/Internet_Explorer_Mobile
        const BROWSER_KONQUEROR = 'Konqueror';
        // http://www.konqueror.org/
        const BROWSER_ICAB = 'iCab';
        // http://www.icab.de/
        const BROWSER_OMNIWEB = 'OmniWeb';
        // http://www.omnigroup.com/applications/omniweb/
        const BROWSER_FIREBIRD = 'Firebird';
        // http://www.ibphoenix.com/
        const BROWSER_FIREFOX = 'Firefox';
        // http://www.mozilla.com/en-US/firefox/firefox.html
        const BROWSER_ICEWEASEL = 'Iceweasel';
        // http://www.geticeweasel.org/
        const BROWSER_SHIRETOKO = 'Shiretoko';
        // http://wiki.mozilla.org/Projects/shiretoko
        const BROWSER_MOZILLA = 'Mozilla';
        // http://www.mozilla.com/en-US/
        const BROWSER_AMAYA = 'Amaya';
        // http://www.w3.org/Amaya/
        const BROWSER_LYNX = 'Lynx';
        // http://en.wikipedia.org/wiki/Lynx
        const BROWSER_SAFARI = 'Safari';
        // http://apple.com
        const BROWSER_IPHONE = 'iPhone';
        // http://apple.com
        const BROWSER_IPOD = 'iPod';
        // http://apple.com
        const BROWSER_IPAD = 'iPad';
        // http://apple.com
        const BROWSER_CHROME = 'Chrome';
        // http://www.google.com/chrome
        const BROWSER_ANDROID = 'Android';
        // http://www.android.com/
        const BROWSER_GOOGLEBOT = 'GoogleBot';
        // http://en.wikipedia.org/wiki/Googlebot
        const BROWSER_YANDEXBOT = 'YandexBot';
        // http://yandex.com/bots
        const BROWSER_YANDEXIMAGERESIZER_BOT = 'YandexImageResizer';
        // http://yandex.com/bots
        const BROWSER_YANDEXIMAGES_BOT = 'YandexImages';
        // http://yandex.com/bots
        const BROWSER_YANDEXVIDEO_BOT = 'YandexVideo';
        // http://yandex.com/bots
        const BROWSER_YANDEXMEDIA_BOT = 'YandexMedia';
        // http://yandex.com/bots
        const BROWSER_YANDEXBLOGS_BOT = 'YandexBlogs';
        // http://yandex.com/bots
        const BROWSER_YANDEXFAVICONS_BOT = 'YandexFavicons';
        // http://yandex.com/bots
        const BROWSER_YANDEXWEBMASTER_BOT = 'YandexWebmaster';
        // http://yandex.com/bots
        const BROWSER_YANDEXDIRECT_BOT = 'YandexDirect';
        // http://yandex.com/bots
        const BROWSER_YANDEXMETRIKA_BOT = 'YandexMetrika';
        // http://yandex.com/bots
        const BROWSER_YANDEXNEWS_BOT = 'YandexNews';
        // http://yandex.com/bots
        const BROWSER_YANDEXCATALOG_BOT = 'YandexCatalog';
        // http://yandex.com/bots
        const BROWSER_SLURP = 'Yahoo! Slurp';
        // http://en.wikipedia.org/wiki/Yahoo!_Slurp
        const BROWSER_W3CVALIDATOR = 'W3C Validator';
        // http://validator.w3.org/
        const BROWSER_BLACKBERRY = 'BlackBerry';
        // http://www.blackberry.com/
        const BROWSER_ICECAT = 'IceCat';
        // http://en.wikipedia.org/wiki/GNU_IceCat
        const BROWSER_NOKIA_S60 = 'Nokia S60 OSS Browser';
        // http://en.wikipedia.org/wiki/Web_Browser_for_S60
        const BROWSER_NOKIA = 'Nokia Browser';
        // * all other WAP-based browsers on the Nokia Platform
        const BROWSER_MSN = 'MSN Browser';
        // http://explorer.msn.com/
        const BROWSER_MSNBOT = 'MSN Bot';
        // http://search.msn.com/msnbot.htm
        const BROWSER_BINGBOT = 'Bing Bot';
        // http://en.wikipedia.org/wiki/Bingbot
        const BROWSER_VIVALDI = 'Vivalidi';
        // https://vivaldi.com/
        const BROWSER_YANDEX = 'Yandex';
        // https://browser.yandex.ua/
        const BROWSER_NETSCAPE_NAVIGATOR = 'Netscape Navigator';
        // http://browser.netscape.com/ (DEPRECATED)
        const BROWSER_GALEON = 'Galeon';
        // http://galeon.sourceforge.net/ (DEPRECATED)
        const BROWSER_NETPOSITIVE = 'NetPositive';
        // http://en.wikipedia.org/wiki/NetPositive (DEPRECATED)
        const BROWSER_PHOENIX = 'Phoenix';
        // http://en.wikipedia.org/wiki/History_of_Mozilla_Firefox (DEPRECATED)
        const BROWSER_PLAYSTATION = "PlayStation";
        const BROWSER_SAMSUNG = "SamsungBrowser";
        const BROWSER_SILK = "Silk";
        const BROWSER_I_FRAME = "Iframely";
        const BROWSER_COCOA = "CocoaRestClient";
        const PLATFORM_UNKNOWN = 'unknown';
        const PLATFORM_WINDOWS = 'Windows';
        const PLATFORM_WINDOWS_CE = 'Windows CE';
        const PLATFORM_APPLE = 'Apple';
        const PLATFORM_LINUX = 'Linux';
        const PLATFORM_OS2 = 'OS/2';
        const PLATFORM_BEOS = 'BeOS';
        const PLATFORM_IPHONE = 'iPhone';
        const PLATFORM_IPOD = 'iPod';
        const PLATFORM_IPAD = 'iPad';
        const PLATFORM_BLACKBERRY = 'BlackBerry';
        const PLATFORM_NOKIA = 'Nokia';
        const PLATFORM_FREEBSD = 'FreeBSD';
        const PLATFORM_OPENBSD = 'OpenBSD';
        const PLATFORM_NETBSD = 'NetBSD';
        const PLATFORM_SUNOS = 'SunOS';
        const PLATFORM_OPENSOLARIS = 'OpenSolaris';
        const PLATFORM_ANDROID = 'Android';
        const PLATFORM_PLAYSTATION = "Sony PlayStation";
        const PLATFORM_ROKU = "Roku";
        const PLATFORM_APPLE_TV = "Apple TV";
        const PLATFORM_TERMINAL = "Terminal";
        const PLATFORM_FIRE_OS = "Fire OS";
        const PLATFORM_SMART_TV = "SMART-TV";
        const PLATFORM_CHROME_OS = "Chrome OS";
        const PLATFORM_JAVA_ANDROID = "Java/Android";
        const PLATFORM_POSTMAN = "Postman";
        const PLATFORM_I_FRAME = "Iframely";
        const OPERATING_SYSTEM_UNKNOWN = 'unknown';
        /**
         * Class constructor
         */
        public function __construct($userAgent = "")
        {
        }
        /**
         * Reset all properties
         */
        public function reset()
        {
        }
        /**
         * Check to see if the specific browser is valid
         * @param string $browserName
         * @return bool True if the browser is the specified browser
         */
        function isBrowser($browserName)
        {
        }
        /**
         * The name of the browser.  All return types are from the class contants
         * @return string Name of the browser
         */
        public function getBrowser()
        {
        }
        /**
         * Set the name of the browser
         * @param $browser string The name of the Browser
         */
        public function setBrowser($browser)
        {
        }
        /**
         * The name of the platform.  All return types are from the class contants
         * @return string Name of the browser
         */
        public function getPlatform()
        {
        }
        /**
         * Set the name of the platform
         * @param string $platform The name of the Platform
         */
        public function setPlatform($platform)
        {
        }
        /**
         * The version of the browser.
         * @return string Version of the browser (will only contain alpha-numeric characters and a period)
         */
        public function getVersion()
        {
        }
        /**
         * Set the version of the browser
         * @param string $version The version of the Browser
         */
        public function setVersion($version)
        {
        }
        /**
         * The version of AOL.
         * @return string Version of AOL (will only contain alpha-numeric characters and a period)
         */
        public function getAolVersion()
        {
        }
        /**
         * Set the version of AOL
         * @param string $version The version of AOL
         */
        public function setAolVersion($version)
        {
        }
        /**
         * Is the browser from AOL?
         * @return boolean True if the browser is from AOL otherwise false
         */
        public function isAol()
        {
        }
        /**
         * Is the browser from a mobile device?
         * @return boolean True if the browser is from a mobile device otherwise false
         */
        public function isMobile()
        {
        }
        /**
         * Is the browser from a tablet device?
         * @return boolean True if the browser is from a tablet device otherwise false
         */
        public function isTablet()
        {
        }
        /**
         * Is the browser from a robot (ex Slurp,GoogleBot)?
         * @return boolean True if the browser is from a robot otherwise false
         */
        public function isRobot()
        {
        }
        /**
         * Is the browser from facebook?
         * @return boolean True if the browser is from facebook otherwise false
         */
        public function isFacebook()
        {
        }
        /**
         * Set the browser to be from AOL
         * @param $isAol
         */
        public function setAol($isAol)
        {
        }
        /**
         * Set the Browser to be mobile
         * @param boolean $value is the browser a mobile browser or not
         */
        protected function setMobile($value = true)
        {
        }
        /**
         * Set the Browser to be tablet
         * @param boolean $value is the browser a tablet browser or not
         */
        protected function setTablet($value = true)
        {
        }
        /**
         * Set the Browser to be a robot
         * @param boolean $value is the browser a robot or not
         */
        protected function setRobot($value = true)
        {
        }
        /**
         * Set the Browser to be a Facebook request
         * @param boolean $value is the browser a robot or not
         */
        protected function setFacebook($value = true)
        {
        }
        /**
         * Get the user agent value in use to determine the browser
         * @return string The user agent from the HTTP header
         */
        public function getUserAgent()
        {
        }
        /**
         * Set the user agent value (the construction will use the HTTP header value - this will overwrite it)
         * @param string $agent_string The value for the User Agent
         */
        public function setUserAgent($agent_string)
        {
        }
        /**
         * Used to determine if the browser is actually "chromeframe"
         * @since 1.7
         * @return boolean True if the browser is using chromeframe
         */
        public function isChromeFrame()
        {
        }
        /**
         * Returns a formatted string with a summary of the details of the browser.
         * @return string formatted string with a summary of the browser
         */
        public function __toString()
        {
        }
        /**
         * Protected routine to calculate and determine what the browser is in use (including platform)
         */
        protected function determine()
        {
        }
        /**
         * Protected routine to determine the browser type
         * @return boolean True if the browser was detected otherwise false
         */
        protected function checkBrowsers()
        {
        }
        /**
         * Determine if the user is using a BlackBerry (last updated 1.7)
         * @return boolean True if the browser is the BlackBerry browser otherwise false
         */
        protected function checkBrowserBlackBerry()
        {
        }
        /**
         * Determine if the user is using an AOL User Agent (last updated 1.7)
         * @return boolean True if the browser is from AOL otherwise false
         */
        protected function checkForAol()
        {
        }
        /**
         * Determine if the browser is the GoogleBot or not (last updated 1.7)
         * @return boolean True if the browser is the GoogletBot otherwise false
         */
        protected function checkBrowserGoogleBot()
        {
        }
        /**
         * Determine if the browser is the YandexBot or not
         * @return boolean True if the browser is the YandexBot otherwise false
         */
        protected function checkBrowserYandexBot()
        {
        }
        /**
         * Determine if the browser is the YandexImageResizer or not
         * @return boolean True if the browser is the YandexImageResizer otherwise false
         */
        protected function checkBrowserYandexImageResizerBot()
        {
        }
        /**
         * Determine if the browser is the YandexCatalog or not
         * @return boolean True if the browser is the YandexCatalog otherwise false
         */
        protected function checkBrowserYandexCatalogBot()
        {
        }
        /**
         * Determine if the browser is the YandexNews or not
         * @return boolean True if the browser is the YandexNews otherwise false
         */
        protected function checkBrowserYandexNewsBot()
        {
        }
        /**
         * Determine if the browser is the YandexMetrika or not
         * @return boolean True if the browser is the YandexMetrika otherwise false
         */
        protected function checkBrowserYandexMetrikaBot()
        {
        }
        /**
         * Determine if the browser is the YandexDirect or not
         * @return boolean True if the browser is the YandexDirect otherwise false
         */
        protected function checkBrowserYandexDirectBot()
        {
        }
        /**
         * Determine if the browser is the YandexWebmaster or not
         * @return boolean True if the browser is the YandexWebmaster otherwise false
         */
        protected function checkBrowserYandexWebmasterBot()
        {
        }
        /**
         * Determine if the browser is the YandexFavicons or not
         * @return boolean True if the browser is the YandexFavicons otherwise false
         */
        protected function checkBrowserYandexFaviconsBot()
        {
        }
        /**
         * Determine if the browser is the YandexBlogs or not
         * @return boolean True if the browser is the YandexBlogs otherwise false
         */
        protected function checkBrowserYandexBlogsBot()
        {
        }
        /**
         * Determine if the browser is the YandexMedia or not
         * @return boolean True if the browser is the YandexMedia otherwise false
         */
        protected function checkBrowserYandexMediaBot()
        {
        }
        /**
         * Determine if the browser is the YandexVideo or not
         * @return boolean True if the browser is the YandexVideo otherwise false
         */
        protected function checkBrowserYandexVideoBot()
        {
        }
        /**
         * Determine if the browser is the YandexImages or not
         * @return boolean True if the browser is the YandexImages otherwise false
         */
        protected function checkBrowserYandexImagesBot()
        {
        }
        /**
         * Determine if the browser is the MSNBot or not (last updated 1.9)
         * @return boolean True if the browser is the MSNBot otherwise false
         */
        protected function checkBrowserMSNBot()
        {
        }
        /**
         * Determine if the browser is the BingBot or not (last updated 1.9)
         * @return boolean True if the browser is the BingBot otherwise false
         */
        protected function checkBrowserBingBot()
        {
        }
        /**
         * Determine if the browser is the W3C Validator or not (last updated 1.7)
         * @return boolean True if the browser is the W3C Validator otherwise false
         */
        protected function checkBrowserW3CValidator()
        {
        }
        /**
         * Determine if the browser is the Yahoo! Slurp Robot or not (last updated 1.7)
         * @return boolean True if the browser is the Yahoo! Slurp Robot otherwise false
         */
        protected function checkBrowserSlurp()
        {
        }
        /**
         * Determine if the browser is Edge or not
         * @return boolean True if the browser is Edge otherwise false
         */
        protected function checkBrowserEdge()
        {
        }
        /**
         * Determine if the browser is Internet Explorer or not (last updated 1.7)
         * @return boolean True if the browser is Internet Explorer otherwise false
         */
        protected function checkBrowserInternetExplorer()
        {
        }
        /**
         * Determine if the browser is Opera or not (last updated 1.7)
         * @return boolean True if the browser is Opera otherwise false
         */
        protected function checkBrowserOpera()
        {
        }
        /**
         * Determine if the browser is Chrome or not (last updated 1.7)
         * @return boolean True if the browser is Chrome otherwise false
         */
        protected function checkBrowserChrome()
        {
        }
        /**
         * Determine if the browser is WebTv or not (last updated 1.7)
         * @return boolean True if the browser is WebTv otherwise false
         */
        protected function checkBrowserWebTv()
        {
        }
        /**
         * Determine if the browser is NetPositive or not (last updated 1.7)
         * @return boolean True if the browser is NetPositive otherwise false
         */
        protected function checkBrowserNetPositive()
        {
        }
        /**
         * Determine if the browser is Galeon or not (last updated 1.7)
         * @return boolean True if the browser is Galeon otherwise false
         */
        protected function checkBrowserGaleon()
        {
        }
        /**
         * Determine if the browser is Konqueror or not (last updated 1.7)
         * @return boolean True if the browser is Konqueror otherwise false
         */
        protected function checkBrowserKonqueror()
        {
        }
        /**
         * Determine if the browser is iCab or not (last updated 1.7)
         * @return boolean True if the browser is iCab otherwise false
         */
        protected function checkBrowserIcab()
        {
        }
        /**
         * Determine if the browser is OmniWeb or not (last updated 1.7)
         * @return boolean True if the browser is OmniWeb otherwise false
         */
        protected function checkBrowserOmniWeb()
        {
        }
        /**
         * Determine if the browser is Phoenix or not (last updated 1.7)
         * @return boolean True if the browser is Phoenix otherwise false
         */
        protected function checkBrowserPhoenix()
        {
        }
        /**
         * Determine if the browser is Firebird or not (last updated 1.7)
         * @return boolean True if the browser is Firebird otherwise false
         */
        protected function checkBrowserFirebird()
        {
        }
        /**
         * Determine if the browser is Netscape Navigator 9+ or not (last updated 1.7)
         * NOTE: (http://browser.netscape.com/ - Official support ended on March 1st, 2008)
         * @return boolean True if the browser is Netscape Navigator 9+ otherwise false
         */
        protected function checkBrowserNetscapeNavigator9Plus()
        {
        }
        /**
         * Determine if the browser is Shiretoko or not (https://wiki.mozilla.org/Projects/shiretoko) (last updated 1.7)
         * @return boolean True if the browser is Shiretoko otherwise false
         */
        protected function checkBrowserShiretoko()
        {
        }
        /**
         * Determine if the browser is Ice Cat or not (http://en.wikipedia.org/wiki/GNU_IceCat) (last updated 1.7)
         * @return boolean True if the browser is Ice Cat otherwise false
         */
        protected function checkBrowserIceCat()
        {
        }
        /**
         * Determine if the browser is Nokia or not (last updated 1.7)
         * @return boolean True if the browser is Nokia otherwise false
         */
        protected function checkBrowserNokia()
        {
        }
        /**
         * Determine if the browser is Firefox or not (last updated 1.7)
         * @return boolean True if the browser is Firefox otherwise false
         */
        protected function checkBrowserFirefox()
        {
        }
        /**
         * Determine if the browser is Firefox or not (last updated 1.7)
         * @return boolean True if the browser is Firefox otherwise false
         */
        protected function checkBrowserIceweasel()
        {
        }
        /**
         * Determine if the browser is Mozilla or not (last updated 1.7)
         * @return boolean True if the browser is Mozilla otherwise false
         */
        protected function checkBrowserMozilla()
        {
        }
        /**
         * Determine if the browser is Lynx or not (last updated 1.7)
         * @return boolean True if the browser is Lynx otherwise false
         */
        protected function checkBrowserLynx()
        {
        }
        /**
         * Determine if the browser is Amaya or not (last updated 1.7)
         * @return boolean True if the browser is Amaya otherwise false
         */
        protected function checkBrowserAmaya()
        {
        }
        /**
         * Determine if the browser is Safari or not (last updated 1.7)
         * @return boolean True if the browser is Safari otherwise false
         */
        protected function checkBrowserSafari()
        {
        }
        protected function checkBrowserSamsung()
        {
        }
        protected function checkBrowserSilk()
        {
        }
        protected function checkBrowserIframely()
        {
        }
        protected function checkBrowserCocoa()
        {
        }
        /**
         * Detect if URL is loaded from FacebookExternalHit
         * @return boolean True if it detects FacebookExternalHit otherwise false
         */
        protected function checkFacebookExternalHit()
        {
        }
        /**
         * Detect if URL is being loaded from internal Facebook browser
         * @return boolean True if it detects internal Facebook browser otherwise false
         */
        protected function checkForFacebookIos()
        {
        }
        /**
         * Detect Version for the Safari browser on iOS devices
         * @return boolean True if it detects the version correctly otherwise false
         */
        protected function getSafariVersionOnIos()
        {
        }
        /**
         * Detect Version for the Chrome browser on iOS devices
         * @return boolean True if it detects the version correctly otherwise false
         */
        protected function getChromeVersionOnIos()
        {
        }
        /**
         * Determine if the browser is iPhone or not (last updated 1.7)
         * @return boolean True if the browser is iPhone otherwise false
         */
        protected function checkBrowseriPhone()
        {
        }
        /**
         * Determine if the browser is iPad or not (last updated 1.7)
         * @return boolean True if the browser is iPad otherwise false
         */
        protected function checkBrowseriPad()
        {
        }
        /**
         * Determine if the browser is iPod or not (last updated 1.7)
         * @return boolean True if the browser is iPod otherwise false
         */
        protected function checkBrowseriPod()
        {
        }
        /**
         * Determine if the browser is Android or not (last updated 1.7)
         * @return boolean True if the browser is Android otherwise false
         */
        protected function checkBrowserAndroid()
        {
        }
        /**
         * Determine if the browser is Vivaldi
         * @return boolean True if the browser is Vivaldi otherwise false
         */
        protected function checkBrowserVivaldi()
        {
        }
        /**
         * Determine if the browser is Yandex
         * @return boolean True if the browser is Yandex otherwise false
         */
        protected function checkBrowserYandex()
        {
        }
        /**
         * Determine if the browser is a PlayStation
         * @return boolean True if the browser is PlayStation otherwise false
         */
        protected function checkBrowserPlayStation()
        {
        }
        /**
         * Determine the user's platform (last updated 2.0)
         */
        protected function checkPlatform()
        {
        }
    }
}
namespace FluentForm\App\Services {
    class ConditionAssesor
    {
        public static function evaluate(&$field, &$inputs)
        {
        }
        public static function assess(&$conditional, &$inputs)
        {
        }
    }
}
namespace FluentForm\App\Services\Emogrifier {
    /**
     * This class provides functions for converting CSS styles into inline style attributes in your HTML code.
     *
     * For more information, please see the README.md file.
     *
     * @version 2.0.0
     *
     * @author Cameron Brooks
     * @author Jaime Prado
     * @author Oliver Klee <github@oliverklee.de>
     * @author Roman Ožana <ozana@omdesign.cz>
     * @author Sander Kruger <s.kruger@invessel.com>
     * @author Zoli Szabó <zoli.szabo+github@gmail.com>
     */
    class Emogrifier
    {
        /**
         * @var int
         */
        const CACHE_KEY_CSS = 0;
        /**
         * @var int
         */
        const CACHE_KEY_SELECTOR = 1;
        /**
         * @var int
         */
        const CACHE_KEY_XPATH = 2;
        /**
         * @var int
         */
        const CACHE_KEY_CSS_DECLARATIONS_BLOCK = 3;
        /**
         * @var int
         */
        const CACHE_KEY_COMBINED_STYLES = 4;
        /**
         * for calculating nth-of-type and nth-child selectors
         *
         * @var int
         */
        const INDEX = 0;
        /**
         * for calculating nth-of-type and nth-child selectors
         *
         * @var int
         */
        const MULTIPLIER = 1;
        /**
         * @var string
         */
        const ID_ATTRIBUTE_MATCHER = '/(\\w+)?\\#([\\w\\-]+)/';
        /**
         * @var string
         */
        const CLASS_ATTRIBUTE_MATCHER = '/(\\w+|[\\*\\]])?((\\.[\\w\\-]+)+)/';
        /**
         * @var string
         */
        const CONTENT_TYPE_META_TAG = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
        /**
         * @var string
         */
        const DEFAULT_DOCUMENT_TYPE = '<!DOCTYPE html>';
        /**
         * @var string
         */
        private $html = '';
        /**
         * @var string
         */
        private $css = '';
        /**
         * @var bool[]
         */
        private $excludedSelectors = [];
        /**
         * @var string[]
         */
        private $unprocessableHtmlTags = ['wbr'];
        /**
         * @var bool[]
         */
        private $allowedMediaTypes = ['all' => true, 'screen' => true, 'print' => true];
        /**
         * @var mixed[]
         */
        private $caches = [self::CACHE_KEY_CSS => [], self::CACHE_KEY_SELECTOR => [], self::CACHE_KEY_XPATH => [], self::CACHE_KEY_CSS_DECLARATIONS_BLOCK => [], self::CACHE_KEY_COMBINED_STYLES => []];
        /**
         * the visited nodes with the XPath paths as array keys
         *
         * @var \DOMElement[]
         */
        private $visitedNodes = [];
        /**
         * the styles to apply to the nodes with the XPath paths as array keys for the outer array
         * and the attribute names/values as key/value pairs for the inner array
         *
         * @var string[][]
         */
        private $styleAttributesForNodes = [];
        /**
         * Determines whether the "style" attributes of tags in the the HTML passed to this class should be preserved.
         * If set to false, the value of the style attributes will be discarded.
         *
         * @var bool
         */
        private $isInlineStyleAttributesParsingEnabled = true;
        /**
         * Determines whether the <style> blocks in the HTML passed to this class should be parsed.
         *
         * If set to true, the <style> blocks will be removed from the HTML and their contents will be applied to the HTML
         * via inline styles.
         *
         * If set to false, the <style> blocks will be left as they are in the HTML.
         *
         * @var bool
         */
        private $isStyleBlocksParsingEnabled = true;
        /**
         * Determines whether elements with the `display: none` property are
         * removed from the DOM.
         *
         * @var bool
         */
        private $shouldKeepInvisibleNodes = true;
        /**
         * @var string[]
         */
        private $xPathRules = [
            // attribute presence
            '/^\\[(\\w+|\\w+\\=[\'"]?\\w+[\'"]?)\\]/' => '*[@\\1]',
            // type and attribute exact value
            '/(\\w)\\[(\\w+)\\=[\'"]?([\\w\\s]+)[\'"]?\\]/' => '\\1[@\\2="\\3"]',
            // type and attribute value with ~ (one word within a whitespace-separated list of words)
            '/([\\w\\*]+)\\[(\\w+)[\\s]*\\~\\=[\\s]*[\'"]?([\\w\\-_\\/]+)[\'"]?\\]/' => '\\1[contains(concat(" ", @\\2, " "), concat(" ", "\\3", " "))]',
            // type and attribute value with | (either exact value match or prefix followed by a hyphen)
            '/([\\w\\*]+)\\[(\\w+)[\\s]*\\|\\=[\\s]*[\'"]?([\\w\\-_\\s\\/]+)[\'"]?\\]/' => '\\1[@\\2="\\3" or starts-with(@\\2, concat("\\3", "-"))]',
            // type and attribute value with ^ (prefix match)
            '/([\\w\\*]+)\\[(\\w+)[\\s]*\\^\\=[\\s]*[\'"]?([\\w\\-_\\/]+)[\'"]?\\]/' => '\\1[starts-with(@\\2, "\\3")]',
            // type and attribute value with * (substring match)
            '/([\\w\\*]+)\\[(\\w+)[\\s]*\\*\\=[\\s]*[\'"]?([\\w\\-_\\s\\/:;]+)[\'"]?\\]/' => '\\1[contains(@\\2, "\\3")]',
            // adjacent sibling
            '/\\s+\\+\\s+/' => '/following-sibling::*[1]/self::',
            // child
            '/\\s*>\\s*/' => '/',
            // descendant
            '/\\s+(?=.*[^\\]]{1}$)/' => '//',
            // type and :first-child
            '/([^\\/]+):first-child/i' => '*[1]/self::\\1',
            // type and :last-child
            '/([^\\/]+):last-child/i' => '*[last()]/self::\\1',
            // The following matcher will break things if it is placed before the adjacent matcher.
            // So one of the matchers matches either too much or not enough.
            // type and attribute value with $ (suffix match)
            '/([\\w\\*]+)\\[(\\w+)[\\s]*\\$\\=[\\s]*[\'"]?([\\w\\-_\\s\\/]+)[\'"]?\\]/' => '\\1[substring(@\\2, string-length(@\\2) - string-length("\\3") + 1) = "\\3"]',
        ];
        /**
         * Determines whether CSS styles that have an equivalent HTML attribute
         * should be mapped and attached to those elements.
         *
         * @var bool
         */
        private $shouldMapCssToHtml = false;
        /**
         * This multi-level array contains simple mappings of CSS properties to
         * HTML attributes. If a mapping only applies to certain HTML nodes or
         * only for certain values, the mapping is an object with a whitelist
         * of nodes and values.
         *
         * @var mixed[][]
         */
        private $cssToHtmlMap = ['background-color' => ['attribute' => 'bgcolor'], 'text-align' => ['attribute' => 'align', 'nodes' => ['p', 'div', 'td'], 'values' => ['left', 'right', 'center', 'justify']], 'float' => ['attribute' => 'align', 'nodes' => ['table', 'img'], 'values' => ['left', 'right']], 'border-spacing' => ['attribute' => 'cellspacing', 'nodes' => ['table']]];
        /**
         * Emogrifier will throw Exceptions when it encounters an error instead of silently ignoring them.
         *
         * @var bool
         */
        private $debug = false;
        /**
         * The constructor.
         *
         * @param string $html the HTML to emogrify, must be UTF-8-encoded
         * @param string $css the CSS to merge, must be UTF-8-encoded
         */
        public function __construct($html = '', $css = '')
        {
        }
        /**
         * The destructor.
         */
        public function __destruct()
        {
        }
        /**
         * Sets the HTML to emogrify.
         *
         * @param string $html the HTML to emogrify, must be UTF-8-encoded
         *
         * @return void
         */
        public function setHtml($html)
        {
        }
        /**
         * Sets the CSS to merge with the HTML.
         *
         * @param string $css the CSS to merge, must be UTF-8-encoded
         *
         * @return void
         */
        public function setCss($css)
        {
        }
        /**
         * Applies $this->css to $this->html and returns the HTML with the CSS
         * applied.
         *
         * This method places the CSS inline.
         *
         * @return string
         *
         * @throws \BadMethodCallException
         */
        public function emogrify()
        {
        }
        /**
         * Applies $this->css to $this->html and returns only the HTML content
         * within the <body> tag.
         *
         * This method places the CSS inline.
         *
         * @return string
         *
         * @throws \BadMethodCallException
         */
        public function emogrifyBodyContent()
        {
        }
        /**
         * Creates an XML document from $this->html and emogrifies ist.
         *
         * @return \DOMDocument
         *
         * @throws \BadMethodCallException
         */
        private function createAndProcessXmlDocument()
        {
        }
        /**
         * Applies $this->css to $xmlDocument.
         *
         * This method places the CSS inline.
         *
         * @param \DOMDocument $xmlDocument
         *
         * @return void
         *
         * @throws \InvalidArgumentException
         */
        protected function process(\DOMDocument $xmlDocument)
        {
        }
        /**
         * Searches for all nodes with a style attribute, transforms the CSS found
         * to HTML attributes and adds those attributes to each node.
         *
         * @param \DOMXPath $xPath
         *
         * @return void
         */
        private function mapAllInlineStylesToHtmlAttributes(\DOMXPath $xPath)
        {
        }
        /**
         * Searches for all nodes with a style attribute and removes the "!important" annotations out of
         * the inline style declarations, eventually by rearranging declarations.
         *
         * @param \DOMXPath $xPath
         *
         * @return void
         */
        private function removeImportantAnnotationFromAllInlineStyles(\DOMXPath $xPath)
        {
        }
        /**
         * Removes the "!important" annotations out of the inline style declarations,
         * eventually by rearranging declarations.
         * Rearranging needed when !important shorthand properties are followed by some of their
         * not !important expanded-version properties.
         * For example "font: 12px serif !important; font-size: 13px;" must be reordered
         * to "font-size: 13px; font: 12px serif;" in order to remain correct.
         *
         * @param \DOMElement $node
         *
         * @return void
         */
        private function removeImportantAnnotationFromNodeInlineStyle(\DOMElement $node)
        {
        }
        /**
         * Returns a list with all DOM nodes that have a style attribute.
         *
         * @param \DOMXPath $xPath
         *
         * @return \DOMNodeList
         */
        private function getAllNodesWithStyleAttribute(\DOMXPath $xPath)
        {
        }
        /**
         * Applies $styles to $node.
         *
         * This method maps CSS styles to HTML attributes and adds those to the
         * node.
         *
         * @param string[] $styles the new CSS styles taken from the global styles to be applied to this node
         * @param \DOMElement $node node to apply styles to
         *
         * @return void
         */
        private function mapCssToHtmlAttributes(array $styles, \DOMElement $node)
        {
        }
        /**
         * Tries to apply the CSS style to $node as an attribute.
         *
         * This method maps a CSS rule to HTML attributes and adds those to the node.
         *
         * @param string $property the name of the CSS property to map
         * @param string $value the value of the style rule to map
         * @param \DOMElement $node node to apply styles to
         *
         * @return void
         */
        private function mapCssToHtmlAttribute($property, $value, \DOMElement $node)
        {
        }
        /**
         * Looks up the CSS property in the mapping table and maps it if it matches the conditions.
         *
         * @param string $property the name of the CSS property to map
         * @param string $value the value of the style rule to map
         * @param \DOMElement $node node to apply styles to
         *
         * @return bool true if the property cab be mapped using the simple mapping table
         */
        private function mapSimpleCssProperty($property, $value, \DOMElement $node)
        {
        }
        /**
         * Maps CSS properties that need special transformation to an HTML attribute.
         *
         * @param string $property the name of the CSS property to map
         * @param string $value the value of the style rule to map
         * @param \DOMElement $node node to apply styles to
         *
         * @return void
         */
        private function mapComplexCssProperty($property, $value, \DOMElement $node)
        {
        }
        /**
         * Parses a shorthand CSS value and splits it into individual values
         *
         * @param string $value a string of CSS value with 1, 2, 3 or 4 sizes
         *                      For example: padding: 0 auto;
         *                      '0 auto' is split into top: 0, left: auto, bottom: 0,
         *                      right: auto.
         *
         * @return string[] an array of values for top, right, bottom and left (using these as associative array keys)
         */
        private function parseCssShorthandValue($value)
        {
        }
        /**
         * Extracts and parses the individual rules from a CSS string.
         *
         * @param string $css a string of raw CSS code
         *
         * @return string[][] an array of string sub-arrays with the keys
         *         "selector" (the CSS selector(s), e.g., "*" or "h1"),
         *         "declarationsBLock" (the semicolon-separated CSS declarations for that selector(s),
         *         e.g., "color: red; height: 4px;"),
         *         and "line" (the line number e.g. 42)
         */
        private function parseCssRules($css)
        {
        }
        /**
         * Disables the parsing of inline styles.
         *
         * @return void
         */
        public function disableInlineStyleAttributesParsing()
        {
        }
        /**
         * Disables the parsing of <style> blocks.
         *
         * @return void
         */
        public function disableStyleBlocksParsing()
        {
        }
        /**
         * Disables the removal of elements with `display: none` properties.
         *
         * @return void
         */
        public function disableInvisibleNodeRemoval()
        {
        }
        /**
         * Enables the attachment/override of HTML attributes for which a
         * corresponding CSS property has been set.
         *
         * @return void
         */
        public function enableCssToHtmlMapping()
        {
        }
        /**
         * Clears all caches.
         *
         * @return void
         */
        private function clearAllCaches()
        {
        }
        /**
         * Clears a single cache by key.
         *
         * @param int $key the cache key, must be CACHE_KEY_CSS, CACHE_KEY_SELECTOR, CACHE_KEY_XPATH
         *                 or CACHE_KEY_CSS_DECLARATION_BLOCK
         *
         * @return void
         *
         * @throws \InvalidArgumentException
         */
        private function clearCache($key)
        {
        }
        /**
         * Purges the visited nodes.
         *
         * @return void
         */
        private function purgeVisitedNodes()
        {
        }
        /**
         * Marks a tag for removal.
         *
         * There are some HTML tags that DOMDocument cannot process, and it will throw an error if it encounters them.
         * In particular, DOMDocument will complain if you try to use HTML5 tags in an XHTML document.
         *
         * Note: The tags will not be removed if they have any content.
         *
         * @param string $tagName the tag name, e.g., "p"
         *
         * @return void
         */
        public function addUnprocessableHtmlTag($tagName)
        {
        }
        /**
         * Drops a tag from the removal list.
         *
         * @param string $tagName the tag name, e.g., "p"
         *
         * @return void
         */
        public function removeUnprocessableHtmlTag($tagName)
        {
        }
        /**
         * Marks a media query type to keep.
         *
         * @param string $mediaName the media type name, e.g., "braille"
         *
         * @return void
         */
        public function addAllowedMediaType($mediaName)
        {
        }
        /**
         * Drops a media query type from the allowed list.
         *
         * @param string $mediaName the tag name, e.g., "braille"
         *
         * @return void
         */
        public function removeAllowedMediaType($mediaName)
        {
        }
        /**
         * Adds a selector to exclude nodes from emogrification.
         *
         * Any nodes that match the selector will not have their style altered.
         *
         * @param string $selector the selector to exclude, e.g., ".editor"
         *
         * @return void
         */
        public function addExcludedSelector($selector)
        {
        }
        /**
         * No longer excludes the nodes matching this selector from emogrification.
         *
         * @param string $selector the selector to no longer exclude, e.g., ".editor"
         *
         * @return void
         */
        public function removeExcludedSelector($selector)
        {
        }
        /**
         * This removes styles from your email that contain display:none.
         * We need to look for display:none, but we need to do a case-insensitive search. Since DOMDocument only
         * supports XPath 1.0, lower-case() isn't available to us. We've thus far only set attributes to lowercase,
         * not attribute values. Consequently, we need to translate() the letters that would be in 'NONE' ("NOE")
         * to lowercase.
         *
         * @param \DOMXPath $xPath
         *
         * @return void
         */
        private function removeInvisibleNodes(\DOMXPath $xPath)
        {
        }
        /**
         * Parses the document and normalizes all existing CSS attributes.
         * This changes 'DISPLAY: none' to 'display: none'.
         * We wouldn't have to do this if DOMXPath supported XPath 2.0.
         * Also stores a reference of nodes with existing inline styles so we don't overwrite them.
         *
         * @param \DOMXPath $xPath
         *
         * @return void
         */
        private function normalizeStyleAttributesOfAllNodes(\DOMXPath $xPath)
        {
        }
        /**
         * Normalizes the value of the "style" attribute and saves it.
         *
         * @param \DOMElement $node
         *
         * @return void
         */
        private function normalizeStyleAttributes(\DOMElement $node)
        {
        }
        /**
         * Merges styles from styles attributes and style nodes and applies them to the attribute nodes
         *
         * @return void
         */
        private function fillStyleAttributesWithMergedStyles()
        {
        }
        /**
         * This method merges old or existing name/value array with new name/value array
         * and then generates a string of the combined style suitable for placing inline.
         * This becomes the single point for CSS string generation allowing for consistent
         * CSS output no matter where the CSS originally came from.
         *
         * @param string[] $oldStyles
         * @param string[] $newStyles
         *
         * @return string
         */
        private function generateStyleStringFromDeclarationsArrays(array $oldStyles, array $newStyles)
        {
        }
        /**
         * Generates a CSS style string suitable to be used inline from the $styleDeclarations property => value array.
         *
         * @param string[] $styleDeclarations
         *
         * @return string
         */
        private function generateStyleStringFromSingleDeclarationsArray(array $styleDeclarations)
        {
        }
        /**
         * Checks whether $attributeValue is marked as !important.
         *
         * @param string $attributeValue
         *
         * @return bool
         */
        private function attributeValueIsImportant($attributeValue)
        {
        }
        /**
         * Applies $css to $xmlDocument, limited to the media queries that actually apply to the document.
         *
         * @param \DOMDocument $xmlDocument the document to match against
         * @param \DOMXPath $xPath
         * @param string $css a string of CSS
         *
         * @return void
         */
        private function copyCssWithMediaToStyleNode(\DOMDocument $xmlDocument, \DOMXPath $xPath, $css)
        {
        }
        /**
         * Extracts the media queries from $css while skipping empty media queries.
         *
         * @param string $css
         *
         * @return string[][] numeric array with string sub-arrays with the keys "css" and "query"
         */
        private function extractMediaQueriesFromCss($css)
        {
        }
        /**
         * Checks whether there is at least one matching element for $cssSelector.
         * When not in debug mode, it returns true also for invalid selectors (because they may be valid,
         * just not implemented/recognized yet by Emogrifier).
         *
         * @param \DOMXPath $xPath
         * @param string $cssSelector
         *
         * @return bool
         *
         * @throws \InvalidArgumentException
         */
        private function existsMatchForCssSelector(\DOMXPath $xPath, $cssSelector)
        {
        }
        /**
         * Returns CSS content.
         *
         * @param \DOMXPath $xPath
         *
         * @return string
         */
        private function getCssFromAllStyleNodes(\DOMXPath $xPath)
        {
        }
        /**
         * Adds a style element with $css to $document.
         *
         * This method is protected to allow overriding.
         *
         * @see https://github.com/jjriv/emogrifier/issues/103
         *
         * @param \DOMDocument $document
         * @param string $css
         *
         * @return void
         */
        protected function addStyleElementToDocument(\DOMDocument $document, $css)
        {
        }
        /**
         * Checks that $document has a BODY element and adds it if it is missing.
         *
         * @param \DOMDocument $document
         */
        private function ensureExistenceOfBodyElement(\DOMDocument $document)
        {
        }
        /**
         * Returns the BODY element.
         *
         * This method assumes that there always is a BODY element.
         *
         * @param \DOMDocument $document
         *
         * @return \DOMElement
         *
         * @throws \BadMethodCallException
         */
        private function getBodyElement(\DOMDocument $document)
        {
        }
        /**
         * Splits input CSS code to an array where:
         *
         * - key "css" will be contains clean CSS code
         * - key "media" will be contains all valuable media queries
         *
         * Example:
         *
         * The CSS code
         *
         *   "@import "file.css"; h1 { color:red; } @media { h1 {}} @media tv { h1 {}}"
         *
         * will be parsed into the following array:
         *
         *   "css" => "h1 { color:red; }"
         *   "media" => "@media { h1 {}}"
         *
         * @param string $css
         *
         * @return string[]
         */
        private function splitCssAndMediaQuery($css)
        {
        }
        /**
         * Creates a DOMDocument instance with the current HTML.
         *
         * @return \DOMDocument
         */
        private function createRawXmlDocument()
        {
        }
        /**
         * Returns the HTML with the unprocessable HTML tags removed and
         * with added document type and Content-Type meta tag if needed.
         *
         * @return string the unified HTML
         *
         * @throws \BadMethodCallException
         */
        private function getUnifiedHtml()
        {
        }
        /**
         * Removes the unprocessable tags from $html (if this feature is enabled).
         *
         * @param string $html
         *
         * @return string the reworked HTML with the unprocessable tags removed
         */
        private function removeUnprocessableTags($html)
        {
        }
        /**
         * Makes sure that the passed HTML has a document type.
         *
         * @param string $html
         *
         * @return string HTML with document type
         */
        private function ensureDocumentType($html)
        {
        }
        /**
         * Adds a Content-Type meta tag for the charset.
         *
         * @param string $html
         *
         * @return string the HTML with the meta tag added
         */
        private function addContentTypeMetaTag($html)
        {
        }
        /**
         * @param string[] $a
         * @param string[] $b
         *
         * @return int
         */
        private function sortBySelectorPrecedence(array $a, array $b)
        {
        }
        /**
         * @param string $selector
         *
         * @return int
         */
        private function getCssSelectorPrecedence($selector)
        {
        }
        /**
         * Maps a CSS selector to an XPath query string.
         *
         * @see http://plasmasturm.org/log/444/
         *
         * @param string $cssSelector a CSS selector
         *
         * @return string the corresponding XPath selector
         */
        private function translateCssToXpath($cssSelector)
        {
        }
        /**
         * Flexibly translates the CSS selector $trimmedLowercaseSelector to an xPath selector.
         *
         * @param string $trimmedLowercaseSelector
         *
         * @return string
         */
        private function translateCssToXpathPass($trimmedLowercaseSelector)
        {
        }
        /**
         * Flexibly translates the CSS selector $trimmedLowercaseSelector to an xPath selector for inline usage.
         *
         * @param string $trimmedLowercaseSelector
         *
         * @return string
         */
        private function translateCssToXpathPassInline($trimmedLowercaseSelector)
        {
        }
        /**
         * Flexibly translates the CSS selector $trimmedLowercaseSelector to an xPath selector while using
         * $matchClassAttributesCallback as to match the class attributes.
         *
         * @param string $trimmedLowercaseSelector
         * @param callable $matchClassAttributesCallback
         *
         * @return string
         */
        private function translateCssToXpathPassWithMatchClassAttributesCallback($trimmedLowercaseSelector, callable $matchClassAttributesCallback)
        {
        }
        /**
         * @param string[] $match
         *
         * @return string
         */
        private function matchIdAttributes(array $match)
        {
        }
        /**
         * @param string[] $match
         *
         * @return string xPath class attribute query wrapped in element selector
         */
        private function matchClassAttributes(array $match)
        {
        }
        /**
         * @param string[] $match
         *
         * @return string xPath class attribute query
         */
        private function matchClassAttributesInline(array $match)
        {
        }
        /**
         * @param string[] $match
         *
         * @return string
         */
        private function translateNthChild(array $match)
        {
        }
        /**
         * @param string[] $match
         *
         * @return string
         */
        private function translateNthOfType(array $match)
        {
        }
        /**
         * @param string[] $match
         *
         * @return int[]
         */
        private function parseNth(array $match)
        {
        }
        /**
         * Parses a CSS declaration block into property name/value pairs.
         *
         * Example:
         *
         * The declaration block
         *
         *   "color: #000; font-weight: bold;"
         *
         * will be parsed into the following array:
         *
         *   "color" => "#000"
         *   "font-weight" => "bold"
         *
         * @param string $cssDeclarationsBlock the CSS declarations block without the curly braces, may be empty
         *
         * @return string[]
         *         the CSS declarations with the property names as array keys and the property values as array values
         */
        private function parseCssDeclarationsBlock($cssDeclarationsBlock)
        {
        }
        /**
         * Find the nodes that are not to be emogrified.
         *
         * @param \DOMXPath $xPath
         *
         * @return \DOMElement[]
         *
         * @throws \InvalidArgumentException
         */
        private function getNodesToExclude(\DOMXPath $xPath)
        {
        }
        /**
         * Handles invalid xPath expression warnings, generated during the process() method,
         * during querying \DOMDocument and trigger \InvalidArgumentException with invalid selector
         * or \RuntimeException, depending on the source of the warning.
         *
         * @param int $type
         * @param string $message
         * @param string $file
         * @param int $line
         * @param array $context
         *
         * @return bool always false
         *
         * @throws \InvalidArgumentException
         * @throws \RuntimeException
         */
        public function handleXpathQueryWarnings(
            // @codingStandardsIgnoreLine
            $type,
            $message,
            $file,
            $line,
            array $context = []
        )
        {
        }
        /**
         * Sets the debug mode.
         *
         * @param bool $debug set to true to enable debug mode
         *
         * @return void
         */
        public function setDebug($debug)
        {
        }
    }
}
namespace FluentForm\App\Services\FluentConversational\Classes\Converter {
    class Converter
    {
        public static function convert($form)
        {
        }
        public static function convertExistingForm($form)
        {
        }
        public static function fieldTypes()
        {
        }
        public static function hasPictureMode($field, $question)
        {
        }
        public static function hex2rgb($color, $opacity = 0.3)
        {
        }
        public static function getPhoneFieldSettings($data, $form)
        {
        }
        /**
         * Load country list from file
         *
         * @param array $data
         *
         * @return array
         */
        public static function loadCountries($data)
        {
        }
        public static function getSelectedCountries($keys = [])
        {
        }
        public static function setDefaultValue($value, $field, $form)
        {
        }
        private static function parseConditionalLogic($field)
        {
        }
        private static function getAdvancedOptions($field)
        {
        }
        private static function hasFormula($question)
        {
        }
    }
}
namespace FluentForm\App\Services\FormBuilder\Components {
    class BaseComponent
    {
        public $app;
        public function __construct($key = '', $title = '', $tags = [], $position = 'advanced')
        {
        }
        /**
         * Build unique ID concatenating form id and name attribute
         *
         * @param array $data $form
         *
         * @return string for id value
         */
        protected function makeElementId($data, $form)
        {
        }
        /**
         * Build attributes for any html element
         *
         * @param array $attributes
         *
         * @return string [Compiled key='value' attributes]
         */
        protected function buildAttributes($attributes, $form = null)
        {
        }
        /**
         * Extract value attribute from attribute list
         *
         * @param array &$element
         *
         * @return string
         */
        protected function extractValueFromAttributes(&$element)
        {
        }
        protected function extractDynamicValues($data, $form)
        {
        }
        /**
         * Determine if the given element has conditions bound
         *
         * @param array $element [Html element being compiled]
         *
         * @return boolean
         */
        protected function hasConditions($element)
        {
        }
        /**
         * Generate a unique id for an element
         *
         * @param string $str [preix]
         *
         * @return string [Unique id]
         */
        protected function getUniqueId($str)
        {
        }
        /**
         * Get a default class for each form element wrapper
         *
         * @return string
         */
        protected function getDefaultContainerClass()
        {
        }
        /**
         * Get required class for form element wrapper
         *
         * @param array $rules [Validation rules]
         *
         * @return mixed
         */
        protected function getRequiredClass($rules)
        {
        }
        /**
         * Get asterisk placement for the required form elements
         *
         * @return string
         */
        protected function getAsteriskPlacement($form)
        {
        }
        /**
         * Generate a label for any element
         *
         * @param array $data
         *
         * @return string [label Html element]
         */
        protected function buildElementLabel($data, $form)
        {
        }
        /**
         * Generate html/markup for any element
         *
         * @param string    $elMarkup [Predifined partial markup]
         * @param array     $data
         * @param \stdClass $form     [Form object]
         *
         * @return string [Compiled markup]
         */
        protected function buildElementMarkup($elMarkup, $data, $form)
        {
        }
        /**
         * Generate a help message for any element beside label
         *
         * @param array $data
         *
         * @return string [Html]
         */
        protected function getLabelHelpMessage($data)
        {
        }
        /**
         * Generate a help message for any element beside form element
         *
         * @param array $data
         *
         * @return string [Html]
         */
        protected function getInputHelpMessage($data, $hideClass = '')
        {
        }
        protected function parseEditorSmartCode($text, $form)
        {
        }
        protected function printContent($hook, $html, $data, $form)
        {
        }
    }
}
namespace FluentForm\App\Services\FormBuilder {
    abstract class BaseFieldManager extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        protected $key = '';
        protected $title = '';
        protected $tags = [];
        protected $position = 'advanced';
        public function __construct($key, $title, $tags = [], $position = 'advanced')
        {
        }
        public function register()
        {
        }
        public function pushConditionalSupport($conditonalItems)
        {
        }
        public function pushFormInputType($types)
        {
        }
        public function pushComponent($components)
        {
        }
        public function pushEditorElementPositions($placement_settings)
        {
        }
        public function generalEditorElement()
        {
        }
        public function advancedEditorElement()
        {
        }
        public function getGeneralEditorElements()
        {
        }
        public function getAdvancedEditorElements()
        {
        }
        public function getEditorCustomizationSettings()
        {
        }
        public function pushTags($tags, $form)
        {
        }
        public abstract function getComponent();
        public abstract function render($element, $form);
    }
}
namespace FluentForm\App\Services\FluentConversational\Classes\Elements {
    class WelcomeScreen extends \FluentForm\App\Services\FormBuilder\BaseFieldManager
    {
        public function __construct()
        {
        }
        public function getComponent()
        {
        }
        public function pushConversationalComponent($components)
        {
        }
        public function getGeneralEditorElements()
        {
        }
        public function getAdvancedEditorElements()
        {
        }
        public function pushFormInputType($types)
        {
        }
        public function render($data, $form)
        {
        }
    }
}
namespace FluentForm\App\Services\FluentConversational\Classes {
    class Fonts
    {
        public static function getFonts()
        {
        }
        public static function getAllFonts()
        {
        }
        public static function getSystemFonts()
        {
        }
        public static function getGoogleFonts()
        {
        }
    }
    class Form
    {
        protected $addOnKey = 'conversational_forms';
        protected $metaKey = 'ffc_form_settings';
        public function boot()
        {
        }
        public function pushDesignTab($menuItems, $formId)
        {
        }
        public function renderDesignSettings($formId)
        {
        }
        public function getDesignSettings($formId)
        {
        }
        public function getMetaSettings($formId)
        {
        }
        private function getGeneratedCss($formId)
        {
        }
        public function render()
        {
        }
        public function isEnabled()
        {
        }
        private function getSubmitBttnStyle($form)
        {
        }
        public function filterAcceptedFields($components, $formId)
        {
        }
        public function printLoadedScripts()
        {
        }
        private function getRegisteredScripts()
        {
        }
        private function getRegisteredStyles()
        {
        }
        public function renderShortcode($form)
        {
        }
        public function maybeAlterPlacement($placements, $form)
        {
        }
        private function getExtraHiddenInputs($formId)
        {
        }
        public function getRandomPhoto()
        {
        }
        private function renderFormHtml($formId, $providedKey = '')
        {
        }
        /**
         * Enqueue proper stylesheet based on rtl & JS script.
         */
        private function enqueueScripts()
        {
        }
        /**
         * Get the payment configuration of this form.
         *
         * @param $form
         */
        private function getPaymentConfig($form)
        {
        }
        protected function getAsteriskPlacement($formId)
        {
        }
    }
}
namespace FluentForm\App\Services\Form {
    class Duplicator
    {
        public function duplicateFormMeta(\FluentForm\App\Models\Form $form, \FluentForm\App\Models\Form $existingForm)
        {
        }
        public function maybeDuplicateFiles($form, $existingForm, $data)
        {
        }
        /**
         * Map pdf feed ID to replace with duplicated PDF feed ID when duplicating form
         *
         * @param  \FluentForm\App\Models\Form $form
         * @param  array                       $formMeta
         * @return array                       $pdfFeedMap
         */
        private function getPdfFeedMap(\FluentForm\App\Models\Form $form, $formMeta)
        {
        }
        /**
         * Map notification data with PDF feed map
         *
         * @param  array $formMeta
         * @param  array $pdfFeedMap
         * @return array $formMeta
         */
        private function notificationWithPdfMap($formMeta, $pdfFeedMap)
        {
        }
    }
    class Fields
    {
        public function get($formId)
        {
        }
        public function supportedConditionalFields()
        {
        }
        public function filterEditorFields($fields)
        {
        }
    }
    class FormService
    {
        /**
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * @var \FluentForm\App\Models\Form|\FluentForm\Framework\Database\Query\Builder
         */
        protected $model;
        /**
         * @var \FluentForm\App\Services\Form\Updater
         */
        protected $updater;
        /**
         * @var \FluentForm\App\Services\Form\Duplicator
         */
        protected $duplicator;
        /**
         * @var \FluentForm\App\Services\Form\Fields
         */
        protected $fields;
        public function __construct()
        {
        }
        /**
         * Get the paginated forms matching search criteria.
         *
         * @param  array $attributes
         * @return array
         */
        public function get($attributes = [])
        {
        }
        /**
         * Store a form with its associated meta.
         *
         * @param  array                       $attributes
         * @throws Exception
         * @return \FluentForm\App\Models\Form $form
         */
        public function store($attributes = [])
        {
        }
        /**
         * Duplicate a form with its associated meta.
         *
         * @param  array                       $attributes
         * @throws Exception
         * @return \FluentForm\App\Models\Form $form
         */
        public function duplicate($attributes = [])
        {
        }
        public function find($id)
        {
        }
        public function delete($id)
        {
        }
        /**
         * Update a form with its relevant fields.
         *
         * @param  array                       $attributes
         * @throws Exception
         * @return \FluentForm\App\Models\Form $form
         */
        public function update($attributes = [])
        {
        }
        /**
         * Duplicate a form with its associated meta.
         *
         * @param  int                         $id
         * @throws Exception
         * @return \FluentForm\App\Models\Form $form
         */
        public function convert($id)
        {
        }
        public function templates()
        {
        }
        public function components($formId)
        {
        }
        public function getDisabledComponents()
        {
        }
        public function fields($id)
        {
        }
        public function shortcodes($id)
        {
        }
        public function pages()
        {
        }
        public function getInputsAndLabels($formId, $with = ['admin_label', 'raw'])
        {
        }
        public function findShortCodePage($formId)
        {
        }
        public static function getShortCodeId($content, $shortcodeTag = 'fluentform')
        {
        }
    }
    class FormValidationService
    {
        protected $app;
        protected $form;
        protected $formData;
        public function __construct()
        {
        }
        public function setForm($form)
        {
        }
        public function setFormData($formData)
        {
        }
        /**
         * @param $fields
         * @return bool
         * @throws ValidationException
         */
        public function validateSubmission(&$fields, &$formData)
        {
        }
        /**
         * Prevents malicious attacks when the submission
         * count exceeds in an allowed interval.
         * @throws ValidationException
         */
        public function preventMaliciousAttacks()
        {
        }
        /**
         * Validate form data based on the form restrictions settings.
         *
         * @param $fields
         * @throws ValidationException
         */
        private function validateRestrictions(&$fields)
        {
        }
        /**
         * Handle response when empty form submission is not allowed.
         *
         * @param array $settings
         * @param $fields
         * @throws ValidationException
         */
        private function handleDenyEmptySubmission($settings, &$fields)
        {
        }
        /**
         * Validate nonce.
         * @throws ValidationException
         */
        protected function validateNonce()
        {
        }
        /** Validate Spam
         * @throws ValidationException
         */
        public function handleSpamError()
        {
        }
        public function isSpam($formData, $form)
        {
        }
        /**
         * Validate reCaptcha.
         * @throws ValidationException
         */
        private function validateReCaptcha()
        {
        }
        /**
         * Validate hCaptcha.
         * @throws ValidationException
         */
        private function validateHCaptcha()
        {
        }
        /**
         * Validate turnstile.
         * @throws ValidationException
         */
        private function validateTurnstile()
        {
        }
        /**
         * Delegate the validation rules & messages to the
         * ones that the validation library recognizes.
         *
         * @param $rules
         * @param $messages
         * @param array $search
         * @param array $replace
         * @return array
         */
        protected function delegateValidations($rules, $messages, $search = [], $replace = [])
        {
        }
    }
    class SubmissionHandlerService
    {
        protected $app;
        protected $form;
        protected $fields;
        protected $formData;
        protected $validationService;
        protected $submissionService;
        public function __construct()
        {
        }
        /**
         * Form Submission
         * @param $formDataRaw
         * @param $formId
         * @return array
         * @throws \FluentForm\Framework\Validator\ValidationException
         */
        public function handleSubmission($formDataRaw, $formId)
        {
        }
        /**
         * @throws ValidationException
         */
        protected function prepareHandler($formId, $formDataRaw)
        {
        }
        /**
         * Prepare the data to be inserted to the database.
         * @param boolean $formData
         * @return array
         */
        public function prepareInsertData($formData = false)
        {
        }
        public function processSubmissionData($insertId, $formData, $form)
        {
        }
        /**
         * Return Formatted Response Data
         * @param $insertId
         * @param $form
         * @param $formData
         * @return mixed
         */
        public function getReturnData($insertId, $form, $formData)
        {
        }
        /**
         * Validates Submission
         * @throws ValidationException
         */
        private function handleValidation()
        {
        }
        protected function insertSubmission($insertData, $formDataRaw, $formId)
        {
        }
    }
    class Updater
    {
        public function update($attributes = [])
        {
        }
        private function validate($attributes)
        {
        }
        private function sanitizeFields($formFields)
        {
        }
        private function sanitizeFieldMaps($fields)
        {
        }
        private function updatePrimaryEmail($form)
        {
        }
    }
}
namespace FluentForm\App\Services\FormBuilder {
    class Components implements \JsonSerializable
    {
        /**
         * $items [Components list]
         *
         * @var array
         */
        protected $items = [];
        /**
         * Build the object instance
         *
         * @param array $items
         */
        public function __construct(array $items)
        {
        }
        /**
         * Add a component into list [$items]
         *
         * @param string $name
         * @param array  $component
         * @param string $group     ['general'|'advanced']
         *
         * @return $this
         */
        public function add($name, array $component, $group)
        {
        }
        /**
         * Remove a component from the list [$items]
         *
         * @param string $name
         * @param string $group ['general'|'advanced']
         *
         * @return $this
         */
        public function remove($name, $group)
        {
        }
        /**
         * Modify an existing component
         *
         * @param string  $name
         * @param Closure $callback [to modify the component within]
         * @param string  $group
         *
         * @return $this
         */
        public function update($name, \Closure $callback, $group)
        {
        }
        /**
         * Sort the components in list [$items]
         *
         * @param string $sortBy [key to sort by]
         *
         * @return $this
         */
        public function sort($sortBy = 'index')
        {
        }
        /**
         * Return array [$items]
         *
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Return array [$items]
         *
         * @return array
         */
        #[\ReturnTypeWillChange]
        public function jsonSerialize()
        {
        }
        /**
         * Getter to hook proxy call
         *
         * @return mixed
         */
        public function __get($key)
        {
        }
    }
}
namespace FluentForm\App\Services\FormBuilder\Components {
    class Address extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Wrapper class for address element
         *
         * @var string
         */
        protected $wrapperClass = 'fluent-address';
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class Checkable extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class Container extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Max columns for container
         *
         * @var integer
         */
        protected $maxColumns = 12;
        /**
         * Container column class
         *
         * @var string
         */
        protected $columnClass = 'ff-t-cell';
        /**
         * Container wrapper class
         *
         * @var string
         */
        protected $wrapperClass = 'ff-t-container ff-column-container';
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class CustomHtml extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class CustomSubmitButton extends \FluentForm\App\Services\FormBuilder\BaseFieldManager
    {
        public function __construct()
        {
        }
        public function pushFormInputType($types)
        {
        }
        public function getComponent()
        {
        }
        public function pushConditionalSupport($conditonalItems)
        {
        }
        public function getGeneralEditorElements()
        {
        }
        public function getAdvancedEditorElements()
        {
        }
        public function render($data, $form)
        {
        }
    }
    class DateTime extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
        public function getAvailableDateFormats()
        {
        }
        public function getDateFormatConfigJSON($settings, $form)
        {
        }
        public function getCustomConfig($settings)
        {
        }
        private function loadToFooter($config, $customConfigObject, $form, $id)
        {
        }
        private function hasTime($string)
        {
        }
        private function hasDate($string)
        {
        }
    }
    class Hcaptcha extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class Select extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
        /**
         * Build options for select
         *
         * @param array $options
         *
         * @return string/html [compiled options]
         */
        protected function buildOptions($data, $defaultValues)
        {
        }
    }
    class Name extends \FluentForm\App\Services\FormBuilder\Components\Select
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class Rating extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class Recaptcha extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class SectionBreak extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class SelectCountry extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
        /**
         * Load countt list from file
         *
         * @param array $data
         *
         * @return array
         */
        public function loadCountries($data)
        {
        }
        /**
         * Build options for country list/select
         *
         * @param array $options
         *
         * @return string/html [compiled options]
         */
        protected function buildOptions($options, $defaultValues = [])
        {
        }
        public function getSelectedCountries($keys = [])
        {
        }
    }
    class SubmitButton extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class TabularGrid extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
        public function makeTabularData($data)
        {
        }
        protected function getElementHelpMessage($data, $form)
        {
        }
        protected function setClasses(&$data)
        {
        }
    }
    class TermsAndConditions extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class Text extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
        private function buildInputGroup($data, $form)
        {
        }
    }
    class TextArea extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
    class Turnstile extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         *
         * @param array     $data [element data]
         * @param \stdClass $form [Form Object]
         *
         * @return void
         */
        public function compile($data, $form)
        {
        }
    }
}
namespace FluentForm\App\Services\FormBuilder {
    class EditorShortCode
    {
        public static function getGeneralShortCodes()
        {
        }
        public static function getFormShortCodes($form)
        {
        }
        public static function getSubmissionShortcodes($form = false)
        {
        }
        public static function getPaymentShortcodes($form)
        {
        }
        public static function getShortCodes($form)
        {
        }
        public static function parse($string, $data, callable $arrayFormatter = null)
        {
        }
        public static function parseArray($string, $data, $arrayFormatter)
        {
        }
        public static function parseString($string, $data, callable $arrayFormatter = null)
        {
        }
        protected static function getForm($form)
        {
        }
    }
    class EditorShortcodeParser
    {
        /**
         * Available dynamic short codes
         *
         * @var null
         */
        private static $dynamicShortcodes = null;
        /**
         * mappings of methods to parse the shortcode
         *
         * @var array
         */
        private static $handlers = ['ip' => 'parseIp', 'date.m/d/Y' => 'parseDate', 'date.d/m/Y' => 'parseDate', 'embed_post.ID' => 'parsePostProperties', 'embed_post.post_title' => 'parsePostProperties', 'embed_post.permalink' => 'parsePostProperties', 'http_referer' => 'parseWPProperties', 'wp.admin_email' => 'parseWPProperties', 'wp.site_url' => 'parseWPProperties', 'wp.site_title' => 'parseWPProperties', 'user.ID' => 'parseUserProperties', 'user.display_name' => 'parseUserProperties', 'user.first_name' => 'parseUserProperties', 'user.last_name' => 'parseUserProperties', 'user.user_email' => 'parseUserProperties', 'user.user_login' => 'parseUserProperties', 'browser.name' => 'parseBrowserProperties', 'browser.platform' => 'parseBrowserProperties', 'get.param_name' => 'parseQueryParam', 'random_string.param_name' => 'parseRandomString'];
        /**
         * Filter dynamic shortcodes in input value
         *
         * @param string $value
         *
         * @return string
         */
        public static function filter($value, $form)
        {
        }
        /**
         * Parse the curly braced shortcode into array
         *
         * @param string $value
         *
         * @return mixed
         */
        public static function parseValue($value)
        {
        }
        /**
         * Declare all parsers and must be [private] static methods
         */
        /**
         * Parse loggedin user properties
         *
         * @param string $value
         *
         * @return string
         */
        private static function parseUserProperties($value, $form = null)
        {
        }
        /**
         * Parse embedded post properties
         *
         * @param string $value
         *
         * @return string
         */
        private static function parsePostProperties($value, $form = null)
        {
        }
        /**
         * Parse WP Properties
         *
         * @param string $value
         *
         * @return string
         */
        private static function parseWPProperties($value, $form = null)
        {
        }
        /**
         * Parse browser/user-agent properties
         *
         * @param string $value
         *
         * @return string
         */
        private static function parseBrowserProperties($value, $form = null)
        {
        }
        /**
         * Parse ip shortcode
         *
         * @param string $value
         *
         * @return string
         */
        private static function parseIp($value, $form = null)
        {
        }
        /**
         * Parse date shortcode
         *
         * @param string $value
         *
         * @return string
         */
        private static function parseDate($value, $form = null)
        {
        }
        /**
         * Parse request query param.
         *
         * @param string    $value
         * @param \stdClass $form
         *
         * @return string
         */
        public static function parseQueryParam($value)
        {
        }
        /**
         * Generate random a string with prefix
         *
         * @param $value
         *
         * @return string
         */
        public static function parseRandomString($value)
        {
        }
    }
    class FormBuilder
    {
        /**
         * The Applivcation instance
         *
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app = null;
        protected $form = null;
        /**
         * Conditional logic for elements
         *
         * @var array
         */
        public $conditions = [];
        /**
         * Validation rules for elements
         *
         * @var array
         */
        public $validationRules = [];
        public $tabIndex = 1;
        public $fieldLists = [];
        public $containerCounter;
        /**
         * Construct the form builder instance
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct($app)
        {
        }
        /**
         * Render the form
         *
         * @param \StdClass $form [Form entry from database]
         *
         * @return mixed
         */
        public function build($form, $extraCssClass = '', $instanceCssClass = '', $atts = [])
        {
        }
        /**
         * @param \stdClass $form
         *
         * @return string form body
         */
        public function buildFormBody($form)
        {
        }
        /**
         * Set unique name/data-name for an element
         *
         * @param array &$item
         *
         * @return void
         */
        protected function setUniqueIdentifier(&$item)
        {
        }
        /**
         * Recursively extract validation rules from a given element
         *
         * @param array $item
         *
         * @return void
         */
        protected function extractValidationRules($item)
        {
        }
        /**
         * Extract validation rules from a given element
         *
         * @param array $item
         *
         * @return void
         */
        protected function extractValidationRule($item)
        {
        }
        /**
         * Extract conditional logic from a given element
         *
         * @param array $item
         *
         * @return void
         */
        protected function extractConditionalLogic($item)
        {
        }
        /**
         * Build attributes for any html element
         *
         * @param array $attributes
         *
         * @return string [Compiled key='value' attributes]
         */
        protected function buildAttributes($attributes, $form = null)
        {
        }
        /**
         * Get hidden fieldset html
         *
         * @param $form
         *
         * @return string
         */
        private function fieldsetHtml($form)
        {
        }
    }
    class GroupSetterProxy
    {
        /**
         * Element group
         *
         * @var string
         */
        protected $group = null;
        /**
         * Form builder components collection
         *
         * @var \FluentForm\App\Services\FormBuilder\Components
         */
        protected $collection = null;
        public function __construct($collection, $group)
        {
        }
        /**
         * Dynamic call method
         *
         * @param string $method
         * @param array  $params
         *
         * @return \FluentForm\App\Services\FormBuilder\Components
         */
        public function __call($method, $params)
        {
        }
    }
    class NotificationParser
    {
        protected static $cache = null;
        /**
         * Parse Norifications
         *
         * @param array  $notifications
         * @param int    $insertId
         * @param array  $data
         * @param object $form
         *
         * @return bool $cache
         */
        public static function parse($notifications, $insertId, $data, $form, $cache = true)
        {
        }
        protected static function setRecepient(&$notification, $data)
        {
        }
    }
}
namespace FluentForm\App\Services\FormBuilder\Notifications {
    class EmailNotification
    {
        /**
         * FluentForm\Framework\Foundation\Application
         *
         * @var $app
         */
        protected $app = null;
        /**
         * Biuld the instance of this class
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         *
         * @return $this
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Send the email notification
         *
         * @param array     $notification  [Notification settings from form meta]
         * @param array     $submittedData [User submitted form data]
         * @param \StdClass $form          [The form object from database]
         *
         * @return bool
         */
        public function notify($notification, $submittedData, $form, $entryId = false)
        {
        }
        private function broadCast($data)
        {
        }
        private function getSendAddresses($notification, $submittedData)
        {
        }
        /**
         * @param $formId
         *
         * @return array
         *
         * @todo: Implement Caching mechanism so we don't have to parse these things for every request
         */
        private function getFormInputsAndLabels($form)
        {
        }
        public function getEmailWithTemplate($emailBody, $form, $notification)
        {
        }
        private function getFooterText($form, $notification)
        {
        }
        public function getHeaders($notification, $isSendAsPlain = false)
        {
        }
    }
    class EmailNotificationActions
    {
        protected $app = null;
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function register()
        {
        }
        public function notifyOnSubmitPaymentForm($submissionId, $submissionData, $form)
        {
        }
        public function notify($feed, $formData, $entry, $form)
        {
        }
        /**
         * @param $emailData
         * @param $formData
         * @param $entry
         * @param $form
         *
         * @return array
         */
        private function getAttachments($emailData, $formData, $entry, $form)
        {
        }
        public function getFormData($submissionId)
        {
        }
        public function getEntry($submissionId)
        {
        }
    }
}
namespace FluentForm\App\Services\FormBuilder {
    class ShortCodeParser
    {
        protected static $form = null;
        protected static $entry = null;
        protected static $browser = null;
        protected static $formFields = null;
        protected static $store = ['inputs' => null, 'original_inputs' => null, 'user' => null, 'post' => null, 'other' => null, 'submission' => null];
        public static function parse($parsable, $entryId, $data = [], $form = null, $isUrl = false, $providerOrIsHTML = false)
        {
        }
        protected static function setDependencies($entry, $data, $form)
        {
        }
        protected static function setEntry($entry)
        {
        }
        protected static function setdata($data)
        {
        }
        protected static function setForm($form)
        {
        }
        protected static function parseShortCodeFromArray($parsable, $isUrl = false, $provider = false)
        {
        }
        protected static function parseShortCodeFromString($parsable, $isUrl = false, $isHtml = false)
        {
        }
        protected static function getFormData($key, $isHtml = false)
        {
        }
        protected static function getUserData($key)
        {
        }
        protected static function getPostData($key)
        {
        }
        protected static function getWPData($key)
        {
        }
        protected static function getSubmissionData($key)
        {
        }
        protected static function getOtherData($key)
        {
        }
        public static function getForm()
        {
        }
        public static function getEntry()
        {
        }
        protected static function getRequest()
        {
        }
        protected static function getUserAgent()
        {
        }
        public static function getInstance()
        {
        }
        public static function getInputs()
        {
        }
        public static function resetData()
        {
        }
    }
}
namespace FluentForm\App\Services\GlobalSettings {
    class GlobalSettingsHelper
    {
        public function storeReCaptcha($attributes)
        {
        }
        public function storeHCaptcha($attributes)
        {
        }
        public function storeTurnstile($attributes)
        {
        }
        public function storeSaveGlobalLayoutSettings($attributes)
        {
        }
        public function storeMailChimpSettings($attributes)
        {
        }
        public function storeEmailSummarySettings($attributes)
        {
        }
    }
    class GlobalSettingsService
    {
        public function get($attributes = [])
        {
        }
        public function store($attributes = [])
        {
        }
    }
}
namespace FluentForm\App\Services\Integrations {
    /**
     * @deprecated deprecated use FluentForm\App\Http\Controllers\IntegrationManagerHelper;
     */
    class BaseIntegration
    {
        private $setting_key = '';
        private $isMultiple = false;
        private $formId = false;
        private $isJsonValue = true;
        public function __construct($settings_key = '', $form_id = false, $isMultiple = false)
        {
        }
        public function setSettingsKey($key)
        {
        }
        public function setIsMultiple($isMultiple)
        {
        }
        public function setFormId($formId)
        {
        }
        public function setJasonType($type)
        {
        }
        public function save($settings)
        {
        }
        public function update($settingsId, $settings)
        {
        }
        public function get($settingsId)
        {
        }
        public function getAll()
        {
        }
        public function delete($settingsId)
        {
        }
        protected function validate($notification)
        {
        }
        private function getFormattedValue($setting)
        {
        }
        public function deleteAll()
        {
        }
    }
    class FormIntegrationService
    {
        public function find($attr)
        {
        }
        public function update($attr)
        {
        }
        public function get($formId)
        {
        }
        public function delete($id)
        {
        }
    }
    /**
     * @deprecated deprecated use FluentForm\App\Http\Controllers\GlobalIntegrationController;
     */
    class GlobalIntegrationManager
    {
        /**
         * Request object
         *
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function getGlobalSettingsAjax()
        {
        }
        public function saveGlobalSettingsAjax()
        {
        }
        public function getAllFormIntegrations()
        {
        }
        public function getNotificationFeeds($formId)
        {
        }
        public function updateNotificationStatus()
        {
        }
        public function getIntegrationSettings()
        {
        }
        public function saveIntegrationSettings()
        {
        }
        public function deleteIntegrationFeed()
        {
        }
        public function getIntegrationList()
        {
        }
    }
    class GlobalIntegrationService
    {
        public function get($attr)
        {
        }
        public function isEnabled($integrationKey)
        {
        }
        /**
         * @param $args - key value pair array
         * @throws Exception
         * @return void
         */
        public function updateModuleStatus($args)
        {
        }
    }
    /**
     * @deprecated deprecated use  FluentForm\App\Hooks\Handlers\GlobalNotificationHandler;
     */
    class GlobalNotificationManager
    {
        private $app;
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function globalNotify($insertId, $formData, $form)
        {
        }
        public function checkCondition($parsedValue, $formData, $insertId)
        {
        }
        public function getEntry($id, $form)
        {
        }
        public function cleanUpPassword($entryId, $form)
        {
        }
        /**
         * @param $feeds
         * @param $formData
         * @param $insertId
         *
         * @return array
         */
        public function getEnabledFeeds($feeds, $formData, $insertId)
        {
        }
    }
    class GlobalNotificationService
    {
        public function checkCondition($parsedValue, $formData, $insertId)
        {
        }
        public function getEntry($id, $form)
        {
        }
        public function cleanUpPassword($insertId, $form)
        {
        }
        /**
         * @param $feeds
         * @param $formData
         * @param $insertId
         *
         * @return array
         */
        public function getEnabledFeeds($feeds, $formData, $insertId)
        {
        }
        public function getNotificationFeeds($form, $feedMetaKeys)
        {
        }
    }
    /**
     * @deprecated deprecated use  FluentForm\App\Http\Controllers\IntegrationManagerController;
     */
    abstract class IntegrationManager extends \FluentForm\App\Http\Controllers\IntegrationManagerController
    {
    }
    /**
     * @deprecated deprecated use FluentForm\App\Http\Controllers\GlobalIntegrationController;
     */
    trait LogResponseTrait
    {
        protected function logResponse($response, $feed, $data, $form, $entryId, $status)
        {
        }
        protected function getApiResponseMessage($response, $status)
        {
        }
    }
}
namespace FluentForm\App\Services\Integrations\MailChimp {
    /**
     * Super-simple, minimum abstraction MailChimp API v3 wrapper
     * MailChimp API v3: http://developer.mailchimp.com
     * This wrapper: https://github.com/drewm/mailchimp-api
     *
     * @author Drew McLellan <drew.mclellan@gmail.com>
     *
     * @version 2.4
     */
    class MailChimp
    {
        private $api_key;
        private $api_endpoint = 'https://<dc>.api.mailchimp.com/3.0';
        public const TIMEOUT = 10;
        /*  SSL Verification
                Read before disabling:
                http://snippets.webaware.com.au/howto/stop-turning-off-curlopt_ssl_verifypeer-and-fix-your-php-config/
            */
        public $verify_ssl = true;
        private $request_successful = false;
        private $last_error = '';
        private $last_response = [];
        private $last_request = [];
        /**
         * Create a new instance
         *
         * @param string $api_key      Your MailChimp API key
         * @param string $api_endpoint Optional custom API endpoint
         *
         * @throws \Exception
         */
        public function __construct($api_key, $api_endpoint = null)
        {
        }
        /**
         * @return string The url to the API endpoint
         */
        public function getApiEndpoint()
        {
        }
        /**
         * Convert an email address into a 'subscriber hash' for identifying the subscriber in a method URL
         *
         * @param string $email The subscriber's email address
         *
         * @return string Hashed version of the input
         */
        public function subscriberHash($email)
        {
        }
        /**
         * Was the last request successful?
         *
         * @return bool True for success, false for failure
         */
        public function success()
        {
        }
        /**
         * Get the last error returned by either the network transport, or by the API.
         * If something didn't work, this should contain the string describing the problem.
         *
         * @return string|false describing the error
         */
        public function getLastError()
        {
        }
        /**
         * Get an array containing the HTTP headers and the body of the API response.
         *
         * @return array Assoc array with keys 'headers' and 'body'
         */
        public function getLastResponse()
        {
        }
        /**
         * Get an array containing the HTTP headers and the body of the API request.
         *
         * @return array Assoc array
         */
        public function getLastRequest()
        {
        }
        /**
         * Make an HTTP DELETE request - for deleting data
         *
         * @param string $method  URL of the API request method
         * @param array  $args    Assoc array of arguments (if any)
         * @param int    $timeout Timeout limit for request in seconds
         *
         * @return array|false Assoc array of API response, decoded from JSON
         */
        public function delete($method, $args = [], $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP GET request - for retrieving data
         *
         * @param string $method  URL of the API request method
         * @param array  $args    Assoc array of arguments (usually your data)
         * @param int    $timeout Timeout limit for request in seconds
         *
         * @return array|false Assoc array of API response, decoded from JSON
         */
        public function get($method, $args = [], $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP PATCH request - for performing partial updates
         *
         * @param string $method  URL of the API request method
         * @param array  $args    Assoc array of arguments (usually your data)
         * @param int    $timeout Timeout limit for request in seconds
         *
         * @return array|false Assoc array of API response, decoded from JSON
         */
        public function patch($method, $args = [], $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP POST request - for creating and updating items
         *
         * @param string $method  URL of the API request method
         * @param array  $args    Assoc array of arguments (usually your data)
         * @param int    $timeout Timeout limit for request in seconds
         *
         * @return array|false Assoc array of API response, decoded from JSON
         */
        public function post($method, $args = [], $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP PUT request - for creating new items
         *
         * @param string $method  URL of the API request method
         * @param array  $args    Assoc array of arguments (usually your data)
         * @param int    $timeout Timeout limit for request in seconds
         *
         * @return array|false Assoc array of API response, decoded from JSON
         *
         * @throws \Exception
         */
        public function put($method, $args = [], $timeout = self::TIMEOUT)
        {
        }
        /**
         * Performs the underlying HTTP request. Not very exciting.
         *
         * @param string $http_verb The HTTP verb to use: get, post, put, patch, delete
         * @param string $method    The API method to be called
         * @param array  $args      Assoc array of parameters to be passed
         * @param int    $timeout
         *
         * @return array|false Assoc array of decoded result
         *
         * @throws \Exception
         */
        private function makeRequest($http_verb, $method, $args = [], $timeout = self::TIMEOUT)
        {
        }
        /**
         * @param string  $http_verb
         * @param string  $method
         * @param string  $url
         * @param integer $timeout
         */
        private function prepareStateForRequest($http_verb, $method, $url, $timeout)
        {
        }
        /**
         * Get the HTTP headers as an array of header-name => header-value pairs.
         *
         * The "Link" header is parsed into an associative array based on the
         * rel names it contains. The original value is available under
         * the "_raw" key.
         *
         * @param string $headersAsString
         *
         * @return array
         */
        private function getHeadersAsArray($headersAsString)
        {
        }
        /**
         * Extract all rel => URL pairs from the provided Link header value
         *
         * Mailchimp only implements the URI reference and relation type from
         * RFC 5988, so the value of the header is something like this:
         *
         * 'https://us13.api.mailchimp.com/schema/3.0/Lists/Instance.json; rel="describedBy", <https://us13.admin.mailchimp.com/lists/members/?id=XXXX>; rel="dashboard"'
         *
         * @param string $linkHeaderAsString
         *
         * @return array
         */
        private function getLinkHeaderAsArray($linkHeaderAsString)
        {
        }
        /**
         * Encode the data and attach it to the request
         *
         * @param resource $ch   cURL session handle, used by reference
         * @param array    $data Assoc array of data to attach
         */
        private function attachRequestPayload(&$ch, $data)
        {
        }
        /**
         * Decode the response and format any error messages for debugging
         *
         * @param array $response The response from the curl request
         *
         * @return array|false The JSON decoded into an array
         */
        private function formatResponse($response)
        {
        }
        /**
         * Do post-request formatting and setting state from the response
         *
         * @param array  $response        The response from the curl request
         * @param string $responseContent The body of the response from the curl request
         *
         * * @return array    The modified response
         */
        private function setResponseState($response, $responseContent, $ch)
        {
        }
        /**
         * Check if the response was successful or a failure. If it failed, store the error.
         *
         * @param array       $response          The response from the curl request
         * @param array|false $formattedResponse The response body payload from the curl request
         * @param int         $timeout           The timeout supplied to the curl request.
         *
         * @return bool If the request was successful
         */
        private function determineSuccess($response, $formattedResponse, $timeout)
        {
        }
        /**
         * Find the HTTP status code from the headers or API response body
         *
         * @param array       $response          The response from the curl request
         * @param array|false $formattedResponse The response body payload from the curl request
         *
         * @return int HTTP status code
         */
        private function findHTTPStatus($response, $formattedResponse)
        {
        }
    }
    trait MailChimpSubscriber
    {
        use \FluentForm\App\Services\Integrations\LogResponseTrait;
        /**
         * Enabled MailChimp feed settings.
         *
         * @var array $feeds
         */
        protected $feeds = [];
        /**
         * Required for api response logging
         *
         * @var string
         */
        protected $metaKey = 'fluentform_mailchimp_feed';
        /**
         * Form input data.
         *
         * @param array $formData
         */
        public function setApplicableFeeds($formData)
        {
        }
        /**
         * Determine if the feed is eligible to be applied.
         *
         * @param $feed
         * @param $formData
         *
         * @return bool
         */
        public function isApplicable(&$feed, &$formData)
        {
        }
        /**
         * Subscribe a user to the list on form submission.
         *
         * @param $feed
         * @param $formData
         * @param $entry
         * @param $form
         *
         * @return array|bool|false
         *
         * @throws \Exception
         */
        public function subscribe($feed, $formData, $entry, $form)
        {
        }
        /**
         * Get a specific MailChimp list member.
         *
         */
        public function getMemberByEmail($list_id, $email_address)
        {
        }
    }
    class MailChimpIntegration extends \FluentForm\App\Services\Integrations\IntegrationManager
    {
        /**
         * MailChimp Subscriber that handles & process all the subscribing logics.
         */
        use \FluentForm\App\Services\Integrations\MailChimp\MailChimpSubscriber;
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        public function getGlobalFields($fields)
        {
        }
        public function getGlobalSettings($settings)
        {
        }
        public function saveGlobalSettings($mailChimp)
        {
        }
        public function pushIntegration($integrations, $formId)
        {
        }
        public function getIntegrationDefaults($settings, $formId)
        {
        }
        public function getSettingsFields($settings, $formId)
        {
        }
        public function setFeedAtributes($feed, $formId)
        {
        }
        public function prepareIntegrationFeed($setting, $feed, $formId)
        {
        }
        private function getLists()
        {
        }
        public function getMergeFields($list, $listId, $formId)
        {
        }
        public function findMergeFields($listId)
        {
        }
        public function fetchInterestGroups()
        {
        }
        private function getInterestCategories($listId)
        {
        }
        private function getInterestSubCategories($listId, $categoryId)
        {
        }
        public function sanitizeSettings($integration, $integrationId, $formId)
        {
        }
        /*
         * For Handling Notifications broadcast
         */
        public function notify($feed, $formData, $entry, $form)
        {
        }
    }
}
namespace FluentForm\App\Services\Integrations\Slack {
    class Slack
    {
        use \FluentForm\App\Services\Integrations\LogResponseTrait;
        /**
         * The slack integration settings of the form.
         *
         * @var array $settings
         */
        protected $settings = [];
        /**
         * Handle slack notifier.
         *
         * @param $submissionId
         * @param $formData
         * @param $form
         */
        public static function handle($feed, $formData, $form, $entry)
        {
        }
    }
    class SlackNotificationActions
    {
        protected $app = null;
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function register()
        {
        }
        public function notify($feed, $formData, $entry, $form)
        {
        }
    }
}
namespace FluentForm\App\Services\Logger {
    class Logger
    {
        public function get($attributes = [])
        {
        }
        protected function getBases($type)
        {
        }
        public function getFilters($attributes = [])
        {
        }
        public function getSubmissionLogs($submissionId, $attributes = [])
        {
        }
        public function remove($attributes = [])
        {
        }
    }
}
namespace FluentForm\App\Services\Manager {
    class ManagerService
    {
        public function getManagers($attributes = [])
        {
        }
        public function addManager($attributes = [])
        {
        }
        public function removeManager($attributes = [])
        {
        }
        private function validate($manager)
        {
        }
        private function dependencyValidate($permissions)
        {
        }
        private function getUserRoles($roles)
        {
        }
    }
}
namespace FluentForm\App\Services\Migrator {
    class Bootstrap
    {
        protected $importer;
        public function boot()
        {
        }
        public function availableMigrations()
        {
        }
        public function setImporterType()
        {
        }
        public function getMigratorData()
        {
        }
        public function importForms()
        {
        }
        public function importEntries()
        {
        }
        public function hasOtherForms()
        {
        }
        public function getFormsByKey()
        {
        }
    }
}
namespace FluentForm\App\Services\Migrator\Classes {
    abstract class BaseMigrator
    {
        /** Constants used for default entry migrations max limit */
        const DEFAULT_ENTRY_MIGRATION_MAX_LIMIT = 1000;
        public $key;
        public $title;
        public $shortcode;
        public $submitBtn;
        public $unSupportFields = [];
        public function import_forms($selectedForms = [])
        {
        }
        protected abstract function getForms();
        protected abstract function getFields($form);
        protected abstract function getFormName($form);
        protected abstract function getFormMetas($form);
        protected abstract function getFormsFormatted();
        protected abstract function exist();
        public function getFluentClassicField($field, $args = [])
        {
        }
        public static function defaultFieldConfig($args)
        {
        }
        public function getSubmitBttn($args)
        {
        }
        protected abstract function getFormId($form);
        /**
         * @param $metas
         * @param $formId
         */
        protected function updateMetas($metas, $formId)
        {
        }
        /**
         * @param array $form
         * @param array $insertedForms
         * @param $formItem
         * @param array $refs
         * @return array
         */
        public function insertForm($form, $insertedForms, $formItem)
        {
        }
        protected function getFileTypes($field, $arg)
        {
        }
        public function isAlreadyImported($formItem)
        {
        }
        public function updateForm($formId, $formFields, $insertedForms)
        {
        }
        public function insertEntries($fluentFormId, $importFormId)
        {
        }
        private function resetEntries($formId)
        {
        }
        /**
         * @param array $urls
         *
         * @return array
         */
        public function migrateFilesAndGetUrls($urls)
        {
        }
    }
    class CalderaMigrator extends \FluentForm\App\Services\Migrator\Classes\BaseMigrator
    {
        public function __construct()
        {
        }
        /**
         * @return bool
         */
        public function exist()
        {
        }
        /**
         * @return array
         */
        public function getForms()
        {
        }
        public function getForm($id)
        {
        }
        public function getFormsFormatted()
        {
        }
        /**
         * @param $form
         * @return array
         */
        public function getFields($form)
        {
        }
        private function formatFieldData($field, $form)
        {
        }
        private function getLabelPlacement($field)
        {
        }
        // Function to convert shortcodes in numeric field calculations (todo)
        private function convertFormulas($calculationField, $form)
        {
        }
        /**
         * @param $field
         * @return int
         */
        private function getFileSize($field)
        {
        }
        /**
         * @return array
         */
        public function fieldPrefix()
        {
        }
        /**
         * @return array
         */
        public function fieldTypes()
        {
        }
        /**
         * @param $options
         * @return array
         */
        public function getOptions($options)
        {
        }
        /**
         * @param $form
         * @param $fluentFields
         * @return array
         */
        private function getContainer($form, $fluentFields)
        {
        }
        /**
         * @param null $array
         * @param int $depth
         * @return array
         */
        public static function arrayFlat($array = null, $depth = 1)
        {
        }
        /**
         * @return array
         */
        private function getStepWrapper()
        {
        }
        /**
         * @param $form
         * @return array default parsed form metas
         * @throws \Exception
         */
        public function getFormMetas($form)
        {
        }
        /**
         * @param $form
         * @return mixed
         */
        protected function getFormId($form)
        {
        }
        /**
         * @param $form
         * @return mixed
         */
        protected function getFormName($form)
        {
        }
        public function getEntries($formId)
        {
        }
        /**
         * Map Field key with its name to insert entry with input name
         *
         * @param array|null $form
         * @return array|mixed
         */
        public function getFieldsNameMap($form)
        {
        }
    }
    class GravityFormsMigrator extends \FluentForm\App\Services\Migrator\Classes\BaseMigrator
    {
        public function __construct()
        {
        }
        public function exist()
        {
        }
        /**
         * @param $form
         * @return array
         */
        public function getFields($form)
        {
        }
        private function formatFieldData(array $field)
        {
        }
        private function getInputName($field)
        {
        }
        private function getLabelPlacement($field)
        {
        }
        /**
         * @param $field
         * @return filesize in MB
         */
        private function getFileSize($field)
        {
        }
        /**
         * @return array
         */
        public function fieldTypes()
        {
        }
        /**
         * @param array $field
         * @return array[]
         */
        private function getAddressArgs(array $field)
        {
        }
        /**
         * @param $options
         * @return array
         */
        public function getOptions($options = [])
        {
        }
        /**
         * @param $repeaterFields
         * @param $label
         * @return array
         */
        protected function getRepeaterFields($repeaterFields, $label)
        {
        }
        private function getContainer($fields, $fluentFields)
        {
        }
        protected static function getLayout($fields, $id = '')
        {
        }
        public static function getInputIdsFromLayoutGrp($id, $array)
        {
        }
        /**
         * @param null $array
         * @param int $depth
         * @return array
         */
        public static function arrayFlat($array = null, $depth = 1)
        {
        }
        /**
         * @return array
         */
        private function getStepWrapper()
        {
        }
        /**
         * @param $form
         * @return array default parsed form metas
         * @throws \Exception
         */
        public function getFormMetas($form)
        {
        }
        public function getFormsFormatted()
        {
        }
        protected function getForms()
        {
        }
        protected function getForm($id)
        {
        }
        protected function getFormName($form)
        {
        }
        public function getEntries($formId)
        {
        }
        /**
         * @param $form
         * @return mixed
         */
        protected function getFormId($form)
        {
        }
        protected function getSubmissionArrayValue($type, $field, $inputs, $submission)
        {
        }
        protected function getSubmissionValue($id, $submission)
        {
        }
    }
    class NinjaFormsMigrator extends \FluentForm\App\Services\Migrator\Classes\BaseMigrator
    {
        public function __construct()
        {
        }
        /**
         * Check if form type exists
         * @return bool
         */
        public function exist()
        {
        }
        /**
         * Get array of all forms
         * @return array Forms with fields
         */
        public function getForms()
        {
        }
        public function getForm($id)
        {
        }
        public function getFormsFormatted()
        {
        }
        /**
         *
         * Get formatted fields form array
         * @param array $form
         * @return array fluentform data formatted for database
         */
        public function getFields($form)
        {
        }
        /**
         * Format each field with proper data
         * @param $field
         * @return array required arguments for single field
         */
        protected function formatFieldData($field)
        {
        }
        /**
         * Get field type in fluentforms type
         * @return array
         */
        public function fieldTypes()
        {
        }
        /**
         * Get formatted options for select,radio etc type fields
         * @param $options
         * @param bool $hasImage
         * @return array (options list and selected option)
         */
        public function getOptions($options, $hasImage = false)
        {
        }
        /**
         * Get Form Metas
         * @param $form
         * @return array
         */
        public function getFormMetas($form)
        {
        }
        /**
         * Update recaptcha key if already not has
         */
        protected function addRecaptcha()
        {
        }
        /**
         * Get notification data for metas
         * @param $actionData
         * @return array
         */
        private function getNotificationData($actionData)
        {
        }
        /**
         * Convert Ninja Forms merge Tags to Fluent forms dynamic shortcodes.
         * @param $msg
         * @return string
         */
        private function dynamicShortcodeConverter($msg)
        {
        }
        /**
         * Get shortcode in fluentforms format
         * @return array
         */
        protected function dynamicShortcodes()
        {
        }
        /**
         * Get form settings
         * @param $form
         * @return array $formSettings
         */
        protected function getFormSettings($form)
        {
        }
        /**
         * @param $form
         * @return mixed
         */
        protected function getFormId($form)
        {
        }
        /**
         * @param $form
         * @return mixed
         */
        protected function getFormName($form)
        {
        }
        public function getEntries($formId)
        {
        }
        public function getFieldKeyMaps($form)
        {
        }
        /**
         * @param array $values
         * @return array
         */
        public function formatEntries(array $values)
        {
        }
    }
    class WpFormsMigrator extends \FluentForm\App\Services\Migrator\Classes\BaseMigrator
    {
        public function __construct()
        {
        }
        protected function getForms()
        {
        }
        public function getFields($form)
        {
        }
        public function getSubmitBttn($args)
        {
        }
        protected function getFormName($form)
        {
        }
        protected function getFormMetas($form)
        {
        }
        protected function getFormId($form)
        {
        }
        protected function getForm($id)
        {
        }
        public function getEntries($formId)
        {
        }
        protected function getSubmissionNameValue($nameFields, $submissionField)
        {
        }
        public function getFormsFormatted()
        {
        }
        public function exist()
        {
        }
        protected function formatFieldData($field, $type)
        {
        }
        private function fieldTypeMap()
        {
        }
        private function getConfirmations($form, $defaultValues)
        {
        }
        private function getAdvancedValidation() : array
        {
        }
        private function getNotifications($form)
        {
        }
        public function getOptions($options)
        {
        }
        /**
         * @return array
         */
        private function getStepWrapper()
        {
        }
        /**
         * @param array $field
         * @return array[]
         */
        private function getAddressArgs($field, $args)
        {
        }
    }
}
namespace FluentForm\App\Services\Parser {
    class Extractor
    {
        /**
         * The form field settings.
         *
         * @var array
         */
        protected $fields;
        /**
         * The properties that need to be extracted.
         *
         * @var array
         */
        protected $with;
        /**
         * The supported form input types defined for Fluent Forms.
         *
         * @var array
         */
        protected $inputTypes;
        /**
         * The extracted result.
         *
         * @var array
         */
        protected $result = [];
        /**
         * The current form field that's being set when we loop
         * through all the form fields in the looper method.
         *
         * @var array
         */
        protected $field = [];
        /**
         * The current field attribute that's being set when we loop
         * through all the form fields in the looper method.
         *
         * @var string
         */
        protected $attribute;
        /**
         * Extractor constructor.
         *
         * @param array $fields
         * @param array $with
         * @param array $inputTypes
         */
        public function __construct($fields, $with, $inputTypes)
        {
        }
        /**
         * The extractor initializer for getting the extracted data.
         *
         * @return array
         */
        public function extract()
        {
        }
        /**
         * The recursive looper method to loop each
         * of the fields and extract it's data.
         *
         * @param array $fields
         */
        protected function looper($fields = [])
        {
        }
        /**
         * Extract the form field.
         *
         * @param  array $field
         * @return $this
         */
        protected function extractField($field)
        {
        }
        /**
         * Set the field and attribute of the current iteration when
         * we loop through the form fields using the looper method.
         *
         * @param  array  $field
         * @param  string $attribute
         * @return $this
         */
        protected function prepareIteration($field, $attribute)
        {
        }
        /**
         * Set the element of the form field.
         *
         * @param  array  $field
         * @param  string $attributeName
         * @return $this
         */
        protected function setElement()
        {
        }
        /**
         * Set the label of the form field.
         *
         * @return $this
         */
        protected function setLabel()
        {
        }
        /**
         * Set the admin label of the form field.
         *
         * @return $this
         */
        protected function setAdminLabel()
        {
        }
        /**
         * Set the options of the form field.
         *
         * @return $this
         */
        protected function setOptions()
        {
        }
        /**
         * Set the advanced options of the form field.
         *
         * @return $this
         */
        protected function setAdvancedOptions()
        {
        }
        protected function setSettings()
        {
        }
        /**
         * Set the attributes of the form field.
         *
         * @return $this
         */
        protected function setAttributes()
        {
        }
        /**
         * Set the validation rules and conditions of the form field.
         *
         * @return $this
         */
        protected function setValidations()
        {
        }
        /**
         * Handle the child fields of the custom field.
         *
         * @return $this
         */
        protected function handleCustomField()
        {
        }
        /**
         * Set the raw field of the form field.
         *
         * @return $this
         */
        protected function setRaw()
        {
        }
    }
    class Form
    {
        /**
         * @var \stdClass $form
         */
        protected $form;
        /**
         * @var array $inputTypes
         */
        protected $inputTypes;
        /**
         * The parsed form fields.
         *
         * @var array
         */
        protected $parsed;
        /**
         * The parsed validations
         *
         * @var array
         */
        protected $validations;
        /**
         * Form Parser constructor.
         *
         * @param \stdClass $form
         */
        public function __construct($form)
        {
        }
        /**
         * Set input types of the form.
         *
         * @param array $types
         * @return \FluentForm\App\Services\Parser\Form $this
         */
        public function setInputTypes($types = [])
        {
        }
        /**
         * Get form fields.
         *
         * @param boolean $asArray
         * @return array
         */
        public function getFields($asArray = false)
        {
        }
        /**
         * Get flatten form inputs. Flatten implies that all
         * of the form fields will be in a simple array.
         *
         * @param array $with
         * @return array
         */
        public function getInputs($with = [])
        {
        }
        /**
         * Get the inputs just as they setup in the form editor.
         * e.g. `names` as `names` not with the child fields.
         *
         * @param array $with
         * @return array
         */
        public function getEntryInputs($with = ['admin_label'])
        {
        }
        /**
         * Get the flatten inputs as the result of the `getInputs`
         * method but replace the keys those have `[]` with `.`
         * And also remove the repeat fields' child fields.
         *
         * @param array $with
         * @param array
         */
        public function getShortCodeInputs($with = ['admin_label'])
        {
        }
        /**
         * Get admin labels of the form fields.
         *
         * @param array $fields
         * @return array
         */
        public function getAdminLabels($fields = [])
        {
        }
        /**
         * Get admin labels of the form fields.
         *
         * @param array $inputs
         * @param array $fields
         * @return array
         */
        public function getValidations($inputs, $fields = [])
        {
        }
        /**
         * Get an element by it's name.
         *
         * @param string|array $name
         * @param array $with
         * @return array
         */
        public function getElement($name, $with = [])
        {
        }
        /**
         * Determine whether the form has an element.
         *
         * @param string $name
         * @return bool
         */
        public function hasElement($name)
        {
        }
        /**
         * Determine whether the form has any required fields.
         *
         * @param array $fields
         * @return bool
         */
        public function hasRequiredFields($fields = [])
        {
        }
        /**
         * Get Payment Related Fields
         *
         * @param array $with array
         * @return array
         */
        public function getPaymentFields($with = ['element'])
        {
        }
        /**
         * Get Payment Input Fields
         *
         * @return array
         */
        public function getPaymentInputFields($with = ['element'])
        {
        }
        /**
         * Determine whether the form has payment elements
         *
         * @return bool
         */
        public function hasPaymentFields()
        {
        }
        /**
         * Get an specific field for an element type.
         *
         * @param $element
         * @param $attribute
         * @param array $with
         * @return array|null
         */
        public function getField($element, $attribute, $with = [])
        {
        }
        /**
         * Get Payment Input Fields
         *
         * @return array
         */
        public function getAttachmentInputFields($with = ['element'])
        {
        }
        /**
         * Get Any Field Type
         * @return array
         */
        public function getInputsByElementTypes($types, $with = ['element'])
        {
        }
        /**
         * Get Address Fields
         *
         * @return array
         */
        public function getAddressFields($with = ['admin_label', 'attributes'])
        {
        }
    }
    class Validations
    {
        /**
         * Form fields that were defined when the form was created.
         *
         * @var array
         */
        protected $fields;
        /**
         * Form inputs that were submited by the user.
         *
         * @var array
         */
        protected $inputs;
        /**
         * The current field accessor of the fields' iteration.
         *
         * @var string
         */
        protected $accessor;
        /**
         * The repeater field settings. It is being set if the
         * field in iteration is indeed a repeater field.
         *
         * @var array
         */
        protected $repeater = ['status' => false, 'attribute' => '', 'length' => 0, 'rule' => ''];
        /**
         * The extracted validation rules.
         *
         * @var array
         */
        protected $rules = [];
        /**
         * The extracted validation messages.
         *
         * @var array
         */
        protected $messages = [];
        /**
         * The validation extractor constructor.
         *
         * @param array $formFields
         * @param array $formData
         */
        public function __construct($formFields = [], $formData = [])
        {
        }
        /**
         * Get the extracted validation rules and messages.
         *
         * @return array
         */
        public function get()
        {
        }
        /**
         * Set the field accessor by replacing the `[]`, `*` by `.`
         * so that dot notation can be used to access the inputs.
         *
         * @param  string $fieldName
         * @return $this
         */
        protected function setFieldAccessor($fieldName)
        {
        }
        /**
         * Determines if the field is applicable for extracting validations.
         *
         * @param  array   $field
         * @return boolean
         */
        protected function isApplicable($field)
        {
        }
        /**
         * Get the field value from the form data.
         *
         * @return mixed
         */
        protected function getFieldValue()
        {
        }
        /**
         * Set the repeater settings if the field in
         * iteration is indeed a repeater field.
         *
         * @param  string $fieldName
         * @param  array  $field
         * @return $this
         */
        protected function setRepeater($fieldName, $field)
        {
        }
        /**
         * Determines if the iteration should skip this rule or not.
         *
         * @param  array   $rule
         * @return boolean
         */
        protected function shouldNotSkipThisRule($rule, $fieldValue, $hasRequiredRule)
        {
        }
        /**
         * Prepare the validation extraction.
         *
         * @param string $fieldName
         * @param string $ruleName
         * @param array  $rule
         */
        protected function prepareValidations($fieldName, $ruleName, $rule)
        {
        }
        /**
         * Set the validation rules & messages
         *
         * @param string $fieldName
         * @param string $ruleName
         * @param array  $rule
         * @param string $logic
         */
        protected function setValidations($fieldName, $ruleName, $rule, $logic)
        {
        }
        /**
         * Get the logic name for the current rule.
         *
         * @param  string $ruleName
         * @param  array  $rule
         * @return string
         */
        protected function getLogic($ruleName, $rule)
        {
        }
    }
}
namespace FluentForm\App\Services\Report {
    class ReportHelper
    {
        public static function generateReport($form, $statuses = [])
        {
        }
        public static function getInputReport($formId, $fieldNames, $statuses = [])
        {
        }
        public static function getSubFieldInputReport($formId, $fieldNames, $statuses)
        {
        }
        protected static function getFormattedReportsForSubInputs($reports, $formId, $statuses)
        {
        }
        protected static function setReportForSubInput($report, &$formattedReports)
        {
        }
        public static function getEntryTotal($fieldName, $formId, $statuses = false)
        {
        }
        private static function getEntryCounts($formId, $statuses = false)
        {
        }
        public static function getBrowserCounts($formId, $statuses = false)
        {
        }
        public static function getDeviceCounts($formId, $statuses = false)
        {
        }
        private static function getCounts($formId, $for, $statuses)
        {
        }
        public static function maybeMigrateData($formId)
        {
        }
    }
    class ReportService
    {
        /**
         * Get Form Report
         * @param array $attr
         * @return array|mixed $response
         * @throws Exception
         */
        public function form($attr = [])
        {
        }
        /**
         * Get Submissions Report
         *
         * @throws Exception
         */
        public function submissions($args)
        {
        }
    }
}
namespace FluentForm\App\Services\Roles {
    class RolesService
    {
        public function getRoles($attributes = [])
        {
        }
        public function setCapability($attributes = [])
        {
        }
        private function getFormattedRoles()
        {
        }
    }
}
namespace FluentForm\App\Services\Scheduler {
    class Scheduler
    {
        public static function processEmailReport()
        {
        }
        private static function cleanUpOldData()
        {
        }
    }
}
namespace FluentForm\App\Services\Settings {
    class Customizer
    {
        public function get($formId)
        {
        }
        public function store($attributes = [])
        {
        }
    }
    class SettingsService
    {
        public function get($attributes = [])
        {
        }
        public function general($formId)
        {
        }
        public function saveGeneral($attributes = [])
        {
        }
        private function sanitizeData($settings)
        {
        }
        public function store($attributes = [])
        {
        }
        public function remove($attributes = [])
        {
        }
        public function conversationalDesign($formId)
        {
        }
        public function storeConversationalDesign($attributes, $formId)
        {
        }
    }
    class Validator
    {
        /**
         * Centralized validator for all the settings data.
         *
         * @param $key
         * @param array $data
         */
        public static function validate($key, $data = [])
        {
        }
    }
}
namespace FluentForm\App\Services\Settings\Validator {
    abstract class Validate
    {
        /**
         * Validates confirmations settings data.
         *
         * @param array $data
         *
         * @return bool
         */
        public static function validate($data = [])
        {
        }
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param \FluentForm\Framework\Validator\Validator $validator
         *
         * @return \FluentForm\Framework\Validator\Validator
         */
        public static function conditionalValidations(\FluentForm\Framework\Validator\Validator $validator)
        {
        }
    }
    class Confirmations extends \FluentForm\App\Services\Settings\Validator\Validate
    {
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param \FluentForm\Framework\Validator\Validator $validator
         *
         * @return \FluentForm\Framework\Validator\Validator
         */
        public static function conditionalValidations(\FluentForm\Framework\Validator\Validator $validator)
        {
        }
    }
    class MailChimps extends \FluentForm\App\Services\Settings\Validator\Validate
    {
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
    }
    class Notifications extends \FluentForm\App\Services\Settings\Validator\Validate
    {
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
        /**
         * Add conditional validations to the validator.
         *
         * @param \FluentForm\Framework\Validator\Validator $validator
         *
         * @return \FluentForm\Framework\Validator\Validator
         */
        public static function conditionalValidations(\FluentForm\Framework\Validator\Validator $validator)
        {
        }
    }
    class Pdfs extends \FluentForm\App\Services\Settings\Validator\Validate
    {
        /**
         * Produce the necessary validation rules and corresponding messages
         *
         * @return array
         */
        public static function validations()
        {
        }
    }
}
namespace Box\Spout\Autoloader {
    /**
     * Class Psr4Autoloader
     * @see https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md#class-example
     *
     * @package Box\Spout\Autoloader
     */
    class Psr4Autoloader
    {
        /**
         * An associative array where the key is a namespace prefix and the value
         * is an array of base directories for classes in that namespace.
         *
         * @var array
         */
        protected $prefixes = array();
        /**
         * Register loader with SPL autoloader stack.
         *
         * @return void
         */
        public function register()
        {
        }
        /**
         * Adds a base directory for a namespace prefix.
         *
         * @param string $prefix The namespace prefix.
         * @param string $baseDir A base directory for class files in the
         * namespace.
         * @param bool $prepend If true, prepend the base directory to the stack
         * instead of appending it; this causes it to be searched first rather
         * than last.
         * @return void
         */
        public function addNamespace($prefix, $baseDir, $prepend = false)
        {
        }
        /**
         * Loads the class file for a given class name.
         *
         * @param string $class The fully-qualified class name.
         * @return mixed The mapped file name on success, or boolean false on
         * failure.
         */
        public function loadClass($class)
        {
        }
        /**
         * Load the mapped file for a namespace prefix and relative class.
         *
         * @param string $prefix The namespace prefix.
         * @param string $relativeClass The relative class name.
         * @return mixed Boolean false if no mapped file can be loaded, or the
         * name of the mapped file that was loaded.
         */
        protected function loadMappedFile($prefix, $relativeClass)
        {
        }
        /**
         * If a file exists, require it from the file system.
         *
         * @param string $file The file to require.
         * @return bool True if the file exists, false if not.
         */
        protected function requireFile($file)
        {
        }
    }
}
namespace Box\Spout\Common\Escaper {
    /**
     * Interface EscaperInterface
     *
     * @package Box\Spout\Common\Escaper
     */
    interface EscaperInterface
    {
        /**
         * Escapes the given string to make it compatible with PHP
         *
         * @param string $string The string to escape
         * @return string The escaped string
         */
        public function escape($string);
        /**
         * Unescapes the given string to make it compatible with PHP
         *
         * @param string $string The string to unescape
         * @return string The unescaped string
         */
        public function unescape($string);
    }
    /**
     * Class CSV
     * Provides functions to escape and unescape data for CSV files
     *
     * @package Box\Spout\Common\Escaper
     */
    class CSV implements \Box\Spout\Common\Escaper\EscaperInterface
    {
        /**
         * Escapes the given string to make it compatible with CSV
         *
         * @codeCoverageIgnore
         *
         * @param string $string The string to escape
         * @return string The escaped string
         */
        public function escape($string)
        {
        }
        /**
         * Unescapes the given string to make it compatible with CSV
         *
         * @codeCoverageIgnore
         *
         * @param string $string The string to unescape
         * @return string The unescaped string
         */
        public function unescape($string)
        {
        }
    }
}
namespace Box\Spout\Common {
    /**
     * Class Singleton
     * Defines a class as a singleton.
     *
     * @package Box\Spout\Common
     */
    trait Singleton
    {
        protected static $instance;
        /**
         * @return static
         */
        public static final function getInstance()
        {
        }
        /**
         * Singleton constructor.
         */
        private final function __construct()
        {
        }
        /**
         * Initializes the singleton
         * @return void
         */
        protected function init()
        {
        }
        private final function __wakeup()
        {
        }
        private final function __clone()
        {
        }
    }
}
namespace Box\Spout\Common\Escaper {
    /**
     * Class ODS
     * Provides functions to escape and unescape data for ODS files
     *
     * @package Box\Spout\Common\Escaper
     */
    class ODS implements \Box\Spout\Common\Escaper\EscaperInterface
    {
        use \Box\Spout\Common\Singleton;
        /**
         * Escapes the given string to make it compatible with XLSX
         *
         * @param string $string The string to escape
         * @return string The escaped string
         */
        public function escape($string)
        {
        }
        /**
         * Unescapes the given string to make it compatible with XLSX
         *
         * @param string $string The string to unescape
         * @return string The unescaped string
         */
        public function unescape($string)
        {
        }
    }
    /**
     * Class XLSX
     * Provides functions to escape and unescape data for XLSX files
     *
     * @package Box\Spout\Common\Escaper
     */
    class XLSX implements \Box\Spout\Common\Escaper\EscaperInterface
    {
        use \Box\Spout\Common\Singleton;
        /** @var string Regex pattern to detect control characters that need to be escaped */
        protected $escapableControlCharactersPattern;
        /** @var string[] Map containing control characters to be escaped (key) and their escaped value (value) */
        protected $controlCharactersEscapingMap;
        /** @var string[] Map containing control characters to be escaped (value) and their escaped value (key) */
        protected $controlCharactersEscapingReverseMap;
        /**
         * Initializes the singleton instance
         */
        protected function init()
        {
        }
        /**
         * Escapes the given string to make it compatible with XLSX
         *
         * @param string $string The string to escape
         * @return string The escaped string
         */
        public function escape($string)
        {
        }
        /**
         * Unescapes the given string to make it compatible with XLSX
         *
         * @param string $string The string to unescape
         * @return string The unescaped string
         */
        public function unescape($string)
        {
        }
        /**
         * @return string Regex pattern containing all escapable control characters
         */
        protected function getEscapableControlCharactersPattern()
        {
        }
        /**
         * Builds the map containing control characters to be escaped
         * mapped to their escaped values.
         * "\t", "\r" and "\n" don't need to be escaped.
         *
         * NOTE: the logic has been adapted from the XlsxWriter library (BSD License)
         * @link https://github.com/jmcnamara/XlsxWriter/blob/f1e610f29/xlsxwriter/sharedstrings.py#L89
         *
         * @return string[]
         */
        protected function getControlCharactersEscapingMap()
        {
        }
        /**
         * Converts PHP control characters from the given string to OpenXML escaped control characters
         *
         * Excel escapes control characters with _xHHHH_ and also escapes any
         * literal strings of that type by encoding the leading underscore.
         * So "\0" -> _x0000_ and "_x0000_" -> _x005F_x0000_.
         *
         * NOTE: the logic has been adapted from the XlsxWriter library (BSD License)
         * @link https://github.com/jmcnamara/XlsxWriter/blob/f1e610f29/xlsxwriter/sharedstrings.py#L89
         *
         * @param string $string String to escape
         * @return string
         */
        protected function escapeControlCharacters($string)
        {
        }
        /**
         * Escapes the escape character: "_x0000_" -> "_x005F_x0000_"
         *
         * @param string $string String to escape
         * @return string The escaped string
         */
        protected function escapeEscapeCharacter($string)
        {
        }
        /**
         * Converts OpenXML escaped control characters from the given string to PHP control characters
         *
         * Excel escapes control characters with _xHHHH_ and also escapes any
         * literal strings of that type by encoding the leading underscore.
         * So "_x0000_" -> "\0" and "_x005F_x0000_" -> "_x0000_"
         *
         * NOTE: the logic has been adapted from the XlsxWriter library (BSD License)
         * @link https://github.com/jmcnamara/XlsxWriter/blob/f1e610f29/xlsxwriter/sharedstrings.py#L89
         *
         * @param string $string String to unescape
         * @return string
         */
        protected function unescapeControlCharacters($string)
        {
        }
        /**
         * Unecapes the escape character: "_x005F_x0000_" => "_x0000_"
         *
         * @param string $string String to unescape
         * @return string The unescaped string
         */
        protected function unescapeEscapeCharacter($string)
        {
        }
    }
}
namespace Box\Spout\Common\Exception {
    /**
     * Class SpoutException
     *
     * @package Box\Spout\Common\Exception
     * @abstract
     */
    abstract class SpoutException extends \Exception
    {
    }
    /**
     * Class EncodingConversionException
     *
     * @api
     * @package Box\Spout\Common\Exception
     */
    class EncodingConversionException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
    /**
     * Class IOException
     *
     * @api
     * @package Box\Spout\Common\Exception
     */
    class IOException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
    /**
     * Class InvalidArgumentException
     *
     * @api
     * @package Box\Spout\Common\Exception
     */
    class InvalidArgumentException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
    /**
     * Class UnsupportedTypeException
     *
     * @api
     * @package Box\Spout\Common\Exception
     */
    class UnsupportedTypeException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
}
namespace Box\Spout\Common\Helper {
    /**
     * Class EncodingHelper
     * This class provides helper functions to work with encodings.
     *
     * @package Box\Spout\Common\Helper
     */
    class EncodingHelper
    {
        /** Definition of the encodings that can have a BOM */
        const ENCODING_UTF8 = 'UTF-8';
        const ENCODING_UTF16_LE = 'UTF-16LE';
        const ENCODING_UTF16_BE = 'UTF-16BE';
        const ENCODING_UTF32_LE = 'UTF-32LE';
        const ENCODING_UTF32_BE = 'UTF-32BE';
        /** Definition of the BOMs for the different encodings */
        const BOM_UTF8 = "﻿";
        const BOM_UTF16_LE = "\xff\xfe";
        const BOM_UTF16_BE = "\xfe\xff";
        const BOM_UTF32_LE = "\xff\xfe\x00\x00";
        const BOM_UTF32_BE = "\x00\x00\xfe\xff";
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /** @var array Map representing the encodings supporting BOMs (key) and their associated BOM (value) */
        protected $supportedEncodingsWithBom;
        /**
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         */
        public function __construct($globalFunctionsHelper)
        {
        }
        /**
         * Returns the number of bytes to use as offset in order to skip the BOM.
         *
         * @param resource $filePointer Pointer to the file to check
         * @param string $encoding Encoding of the file to check
         * @return int Bytes offset to apply to skip the BOM (0 means no BOM)
         */
        public function getBytesOffsetToSkipBOM($filePointer, $encoding)
        {
        }
        /**
         * Returns whether the file identified by the given pointer has a BOM.
         *
         * @param resource $filePointer Pointer to the file to check
         * @param string $encoding Encoding of the file to check
         * @return bool TRUE if the file has a BOM, FALSE otherwise
         */
        protected function hasBOM($filePointer, $encoding)
        {
        }
        /**
         * Attempts to convert a non UTF-8 string into UTF-8.
         *
         * @param string $string Non UTF-8 string to be converted
         * @param string $sourceEncoding The encoding used to encode the source string
         * @return string The converted, UTF-8 string
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If conversion is not supported or if the conversion failed
         */
        public function attemptConversionToUTF8($string, $sourceEncoding)
        {
        }
        /**
         * Attempts to convert a UTF-8 string into the given encoding.
         *
         * @param string $string UTF-8 string to be converted
         * @param string $targetEncoding The encoding the string should be re-encoded into
         * @return string The converted string, encoded with the given encoding
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If conversion is not supported or if the conversion failed
         */
        public function attemptConversionFromUTF8($string, $targetEncoding)
        {
        }
        /**
         * Attempts to convert the given string to the given encoding.
         * Depending on what is installed on the server, we will try to iconv or mbstring.
         *
         * @param string $string string to be converted
         * @param string $sourceEncoding The encoding used to encode the source string
         * @param string $targetEncoding The encoding the string should be re-encoded into
         * @return string The converted string, encoded with the given encoding
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If conversion is not supported or if the conversion failed
         */
        protected function attemptConversion($string, $sourceEncoding, $targetEncoding)
        {
        }
        /**
         * Returns whether "iconv" can be used.
         *
         * @return bool TRUE if "iconv" is available and can be used, FALSE otherwise
         */
        protected function canUseIconv()
        {
        }
        /**
         * Returns whether "mb_string" functions can be used.
         * These functions come with the PHP Intl package.
         *
         * @return bool TRUE if "mb_string" functions are available and can be used, FALSE otherwise
         */
        protected function canUseMbString()
        {
        }
    }
    /**
     * Class FileSystemHelper
     * This class provides helper functions to help with the file system operations
     * like files/folders creation & deletion
     *
     * @package Box\Spout\Common\Helper
     */
    class FileSystemHelper
    {
        /** @var string Real path of the base folder where all the I/O can occur */
        protected $baseFolderRealPath;
        /**
         * @param string $baseFolderPath The path of the base folder where all the I/O can occur
         */
        public function __construct($baseFolderPath)
        {
        }
        /**
         * Creates an empty folder with the given name under the given parent folder.
         *
         * @param string $parentFolderPath The parent folder path under which the folder is going to be created
         * @param string $folderName The name of the folder to create
         * @return string Path of the created folder
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder or if the folder path is not inside of the base folder
         */
        public function createFolder($parentFolderPath, $folderName)
        {
        }
        /**
         * Creates a file with the given name and content in the given folder.
         * The parent folder must exist.
         *
         * @param string $parentFolderPath The parent folder path where the file is going to be created
         * @param string $fileName The name of the file to create
         * @param string $fileContents The contents of the file to create
         * @return string Path of the created file
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file or if the file path is not inside of the base folder
         */
        public function createFileWithContents($parentFolderPath, $fileName, $fileContents)
        {
        }
        /**
         * Delete the file at the given path
         *
         * @param string $filePath Path of the file to delete
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the file path is not inside of the base folder
         */
        public function deleteFile($filePath)
        {
        }
        /**
         * Delete the folder at the given path as well as all its contents
         *
         * @param string $folderPath Path of the folder to delete
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the folder path is not inside of the base folder
         */
        public function deleteFolderRecursively($folderPath)
        {
        }
        /**
         * All I/O operations must occur inside the base folder, for security reasons.
         * This function will throw an exception if the folder where the I/O operation
         * should occur is not inside the base folder.
         *
         * @param string $operationFolderPath The path of the folder where the I/O operation should occur
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the folder where the I/O operation should occur is not inside the base folder
         */
        protected function throwIfOperationNotInBaseFolder($operationFolderPath)
        {
        }
    }
    /**
     * Class GlobalFunctionsHelper
     * This class wraps global functions to facilitate testing
     *
     * @codeCoverageIgnore
     *
     * @package Box\Spout\Common\Helper
     */
    class GlobalFunctionsHelper
    {
        /**
         * Wrapper around global function fopen()
         * @see fopen()
         *
         * @param string $fileName
         * @param string $mode
         * @return resource|bool
         */
        public function fopen($fileName, $mode)
        {
        }
        /**
         * Wrapper around global function fgets()
         * @see fgets()
         *
         * @param resource $handle
         * @param int|void $length
         * @return string
         */
        public function fgets($handle, $length = null)
        {
        }
        /**
         * Wrapper around global function fputs()
         * @see fputs()
         *
         * @param resource $handle
         * @param string $string
         * @return int
         */
        public function fputs($handle, $string)
        {
        }
        /**
         * Wrapper around global function fflush()
         * @see fflush()
         *
         * @param resource $handle
         * @return bool
         */
        public function fflush($handle)
        {
        }
        /**
         * Wrapper around global function fseek()
         * @see fseek()
         *
         * @param resource $handle
         * @param int $offset
         * @return int
         */
        public function fseek($handle, $offset)
        {
        }
        /**
         * Wrapper around global function fgetcsv()
         * @see fgetcsv()
         *
         * @param resource $handle
         * @param int|void $length
         * @param string|void $delimiter
         * @param string|void $enclosure
         * @return array
         */
        public function fgetcsv($handle, $length = null, $delimiter = null, $enclosure = null)
        {
        }
        /**
         * Wrapper around global function fputcsv()
         * @see fputcsv()
         *
         * @param resource $handle
         * @param array $fields
         * @param string|void $delimiter
         * @param string|void $enclosure
         * @return int
         */
        public function fputcsv($handle, array $fields, $delimiter = null, $enclosure = null)
        {
        }
        /**
         * Wrapper around global function fwrite()
         * @see fwrite()
         *
         * @param resource $handle
         * @param string $string
         * @return int
         */
        public function fwrite($handle, $string)
        {
        }
        /**
         * Wrapper around global function fclose()
         * @see fclose()
         *
         * @param resource $handle
         * @return bool
         */
        public function fclose($handle)
        {
        }
        /**
         * Wrapper around global function rewind()
         * @see rewind()
         *
         * @param resource $handle
         * @return bool
         */
        public function rewind($handle)
        {
        }
        /**
         * Wrapper around global function file_exists()
         * @see file_exists()
         *
         * @param string $fileName
         * @return bool
         */
        public function file_exists($fileName)
        {
        }
        /**
         * Wrapper around global function file_get_contents()
         * @see file_get_contents()
         *
         * @param string $filePath
         * @return string
         */
        public function file_get_contents($filePath)
        {
        }
        /**
         * Updates the given file path to use a real path.
         * This is to avoid issues on some Windows setup.
         *
         * @param string $filePath File path
         * @return string The file path using a real path
         */
        protected function convertToUseRealPath($filePath)
        {
        }
        /**
         * Returns whether the given path is a zip stream.
         *
         * @param string $path Path pointing to a document
         * @return bool TRUE if path is a zip stream, FALSE otherwise
         */
        protected function isZipStream($path)
        {
        }
        /**
         * Wrapper around global function feof()
         * @see feof()
         *
         * @param resource
         * @return bool
         */
        public function feof($handle)
        {
        }
        /**
         * Wrapper around global function is_readable()
         * @see is_readable()
         *
         * @param string $fileName
         * @return bool
         */
        public function is_readable($fileName)
        {
        }
        /**
         * Wrapper around global function basename()
         * @see basename()
         *
         * @param string $path
         * @param string|void $suffix
         * @return string
         */
        public function basename($path, $suffix = null)
        {
        }
        /**
         * Wrapper around global function header()
         * @see header()
         *
         * @param string $string
         * @return void
         */
        public function header($string)
        {
        }
        /**
         * Wrapper around global function ob_end_clean()
         * @see ob_end_clean()
         *
         * @return void
         */
        public function ob_end_clean()
        {
        }
        /**
         * Wrapper around global function iconv()
         * @see iconv()
         *
         * @param string $string The string to be converted
         * @param string $sourceEncoding The encoding of the source string
         * @param string $targetEncoding The encoding the source string should be converted to
         * @return string|bool the converted string or FALSE on failure.
         */
        public function iconv($string, $sourceEncoding, $targetEncoding)
        {
        }
        /**
         * Wrapper around global function mb_convert_encoding()
         * @see mb_convert_encoding()
         *
         * @param string $string The string to be converted
         * @param string $sourceEncoding The encoding of the source string
         * @param string $targetEncoding The encoding the source string should be converted to
         * @return string|bool the converted string or FALSE on failure.
         */
        public function mb_convert_encoding($string, $sourceEncoding, $targetEncoding)
        {
        }
        /**
         * Wrapper around global function stream_get_wrappers()
         * @see stream_get_wrappers()
         *
         * @return array
         */
        public function stream_get_wrappers()
        {
        }
        /**
         * Wrapper around global function function_exists()
         * @see function_exists()
         *
         * @param string $functionName
         * @return bool
         */
        public function function_exists($functionName)
        {
        }
    }
    /**
     * Class StringHelper
     * This class provides helper functions to work with strings and multibyte strings.
     *
     * @codeCoverageIgnore
     *
     * @package Box\Spout\Common\Helper
     */
    class StringHelper
    {
        /** @var bool Whether the mbstring extension is loaded */
        protected $hasMbstringSupport;
        /**
         *
         */
        public function __construct()
        {
        }
        /**
         * Returns the length of the given string.
         * It uses the multi-bytes function is available.
         * @see strlen
         * @see mb_strlen
         *
         * @param string $string
         * @return int
         */
        public function getStringLength($string)
        {
        }
        /**
         * Returns the position of the first occurrence of the given character/substring within the given string.
         * It uses the multi-bytes function is available.
         * @see strpos
         * @see mb_strpos
         *
         * @param string $char Needle
         * @param string $string Haystack
         * @return int Char/substring's first occurrence position within the string if found (starts at 0) or -1 if not found
         */
        public function getCharFirstOccurrencePosition($char, $string)
        {
        }
        /**
         * Returns the position of the last occurrence of the given character/substring within the given string.
         * It uses the multi-bytes function is available.
         * @see strrpos
         * @see mb_strrpos
         *
         * @param string $char Needle
         * @param string $string Haystack
         * @return int Char/substring's last occurrence position within the string if found (starts at 0) or -1 if not found
         */
        public function getCharLastOccurrencePosition($char, $string)
        {
        }
    }
}
namespace Box\Spout\Common {
    /**
     * Class Type
     * This class references the supported types
     *
     * @api
     */
    abstract class Type
    {
        const CSV = 'csv';
        const XLSX = 'xlsx';
        const ODS = 'ods';
    }
}
namespace Box\Spout\Reader {
    /**
     * Interface ReaderInterface
     *
     * @package Box\Spout\Reader
     */
    interface ReaderInterface
    {
        /**
         * Prepares the reader to read the given file. It also makes sure
         * that the file exists and is readable.
         *
         * @param  string $filePath Path of the file to be read
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException
         */
        public function open($filePath);
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @return \Iterator To iterate over sheets
         * @throws \Box\Spout\Reader\Exception\ReaderNotOpenedException If called before opening the reader
         */
        public function getSheetIterator();
        /**
         * Closes the reader, preventing any additional reading
         *
         * @return void
         */
        public function close();
    }
    /**
     * Class AbstractReader
     *
     * @package Box\Spout\Reader
     * @abstract
     */
    abstract class AbstractReader implements \Box\Spout\Reader\ReaderInterface
    {
        /** @var bool Indicates whether the stream is currently open */
        protected $isStreamOpened = false;
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /** @var \Box\Spout\Reader\Common\ReaderOptions Reader's customized options */
        protected $options;
        /**
         * Returns the reader's current options
         *
         * @return \Box\Spout\Reader\Common\ReaderOptions
         */
        protected abstract function getOptions();
        /**
         * Returns whether stream wrappers are supported
         *
         * @return bool
         */
        protected abstract function doesSupportStreamWrapper();
        /**
         * Opens the file at the given file path to make it ready to be read
         *
         * @param  string $filePath Path of the file to be read
         * @return void
         */
        protected abstract function openReader($filePath);
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @return \Iterator To iterate over sheets
         */
        protected abstract function getConcreteSheetIterator();
        /**
         * Closes the reader. To be used after reading the file.
         *
         * @return AbstractReader
         */
        protected abstract function closeReader();
        /**
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         * @return AbstractReader
         */
        public function setGlobalFunctionsHelper($globalFunctionsHelper)
        {
        }
        /**
         * Sets whether date/time values should be returned as PHP objects or be formatted as strings.
         *
         * @api
         * @param bool $shouldFormatDates
         * @return AbstractReader
         */
        public function setShouldFormatDates($shouldFormatDates)
        {
        }
        /**
         * Sets whether empty rows should be returned or skipped.
         *
         * @api
         * @param bool $shouldPreserveEmptyRows
         * @return AbstractReader
         */
        public function setShouldPreserveEmptyRows($shouldPreserveEmptyRows)
        {
        }
        /**
         * Prepares the reader to read the given file. It also makes sure
         * that the file exists and is readable.
         *
         * @api
         * @param  string $filePath Path of the file to be read
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the file at the given path does not exist, is not readable or is corrupted
         */
        public function open($filePath)
        {
        }
        /**
         * Returns the real path of the given path.
         * If the given path is a valid stream wrapper, returns the path unchanged.
         *
         * @param string $filePath
         * @return string
         */
        protected function getFileRealPath($filePath)
        {
        }
        /**
         * Returns the scheme of the custom stream wrapper, if the path indicates a stream wrapper is used.
         * For example, php://temp => php, s3://path/to/file => s3...
         *
         * @param string $filePath Path of the file to be read
         * @return string|null The stream wrapper scheme or NULL if not a stream wrapper
         */
        protected function getStreamWrapperScheme($filePath)
        {
        }
        /**
         * Checks if the given path is an unsupported stream wrapper
         * (like local path, php://temp, mystream://foo/bar...).
         *
         * @param string $filePath Path of the file to be read
         * @return bool Whether the given path is an unsupported stream wrapper
         */
        protected function isStreamWrapper($filePath)
        {
        }
        /**
         * Checks if the given path is an supported stream wrapper
         * (like php://temp, mystream://foo/bar...).
         * If the given path is a local path, returns true.
         *
         * @param string $filePath Path of the file to be read
         * @return bool Whether the given path is an supported stream wrapper
         */
        protected function isSupportedStreamWrapper($filePath)
        {
        }
        /**
         * Checks if a path is a PHP stream (like php://output, php://memory, ...)
         *
         * @param string $filePath Path of the file to be read
         * @return bool Whether the given path maps to a PHP stream
         */
        protected function isPhpStream($filePath)
        {
        }
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @api
         * @return \Iterator To iterate over sheets
         * @throws \Box\Spout\Reader\Exception\ReaderNotOpenedException If called before opening the reader
         */
        public function getSheetIterator()
        {
        }
        /**
         * Closes the reader, preventing any additional reading
         *
         * @api
         * @return void
         */
        public function close()
        {
        }
    }
}
namespace Box\Spout\Reader\CSV {
    /**
     * Class Reader
     * This class provides support to read data from a CSV file.
     *
     * @package Box\Spout\Reader\CSV
     */
    class Reader extends \Box\Spout\Reader\AbstractReader
    {
        /** @var resource Pointer to the file to be written */
        protected $filePointer;
        /** @var SheetIterator To iterator over the CSV unique "sheet" */
        protected $sheetIterator;
        /** @var string Original value for the "auto_detect_line_endings" INI value */
        protected $originalAutoDetectLineEndings;
        /**
         * Returns the reader's current options
         *
         * @return ReaderOptions
         */
        protected function getOptions()
        {
        }
        /**
         * Sets the field delimiter for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $fieldDelimiter Character that delimits fields
         * @return Reader
         */
        public function setFieldDelimiter($fieldDelimiter)
        {
        }
        /**
         * Sets the field enclosure for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $fieldEnclosure Character that enclose fields
         * @return Reader
         */
        public function setFieldEnclosure($fieldEnclosure)
        {
        }
        /**
         * Sets the encoding of the CSV file to be read.
         * Needs to be called before opening the reader.
         *
         * @param string $encoding Encoding of the CSV file to be read
         * @return Reader
         */
        public function setEncoding($encoding)
        {
        }
        /**
         * Sets the EOL for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $endOfLineCharacter used to properly get lines from the CSV file.
         * @return Reader
         */
        public function setEndOfLineCharacter($endOfLineCharacter)
        {
        }
        /**
         * Returns whether stream wrappers are supported
         *
         * @return bool
         */
        protected function doesSupportStreamWrapper()
        {
        }
        /**
         * Opens the file at the given path to make it ready to be read.
         * If setEncoding() was not called, it assumes that the file is encoded in UTF-8.
         *
         * @param  string $filePath Path of the CSV file to be read
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException
         */
        protected function openReader($filePath)
        {
        }
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @return SheetIterator To iterate over sheets
         */
        protected function getConcreteSheetIterator()
        {
        }
        /**
         * Closes the reader. To be used after reading the file.
         *
         * @return void
         */
        protected function closeReader()
        {
        }
    }
}
namespace Box\Spout\Reader\Common {
    /**
     * Class ReaderOptions
     * Readers' common options
     *
     * @package Box\Spout\Reader\Common
     */
    class ReaderOptions
    {
        /** @var bool Whether date/time values should be returned as PHP objects or be formatted as strings */
        protected $shouldFormatDates = false;
        /** @var bool Whether empty rows should be returned or skipped */
        protected $shouldPreserveEmptyRows = false;
        /**
         * @return bool Whether date/time values should be returned as PHP objects or be formatted as strings.
         */
        public function shouldFormatDates()
        {
        }
        /**
         * Sets whether date/time values should be returned as PHP objects or be formatted as strings.
         *
         * @param bool $shouldFormatDates
         * @return ReaderOptions
         */
        public function setShouldFormatDates($shouldFormatDates)
        {
        }
        /**
         * @return bool Whether empty rows should be returned or skipped.
         */
        public function shouldPreserveEmptyRows()
        {
        }
        /**
         * Sets whether empty rows should be returned or skipped.
         *
         * @param bool $shouldPreserveEmptyRows
         * @return ReaderOptions
         */
        public function setShouldPreserveEmptyRows($shouldPreserveEmptyRows)
        {
        }
    }
}
namespace Box\Spout\Reader\CSV {
    /**
     * Class ReaderOptions
     * This class is used to customize the reader's behavior
     *
     * @package Box\Spout\Reader\CSV
     */
    class ReaderOptions extends \Box\Spout\Reader\Common\ReaderOptions
    {
        /** @var string Defines the character used to delimit fields (one character only) */
        protected $fieldDelimiter = ',';
        /** @var string Defines the character used to enclose fields (one character only) */
        protected $fieldEnclosure = '"';
        /** @var string Encoding of the CSV file to be read */
        protected $encoding = \Box\Spout\Common\Helper\EncodingHelper::ENCODING_UTF8;
        /** @var string Defines the End of line */
        protected $endOfLineCharacter = "\n";
        /**
         * @return string
         */
        public function getFieldDelimiter()
        {
        }
        /**
         * Sets the field delimiter for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $fieldDelimiter Character that delimits fields
         * @return ReaderOptions
         */
        public function setFieldDelimiter($fieldDelimiter)
        {
        }
        /**
         * @return string
         */
        public function getFieldEnclosure()
        {
        }
        /**
         * Sets the field enclosure for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $fieldEnclosure Character that enclose fields
         * @return ReaderOptions
         */
        public function setFieldEnclosure($fieldEnclosure)
        {
        }
        /**
         * @return string
         */
        public function getEncoding()
        {
        }
        /**
         * Sets the encoding of the CSV file to be read.
         * Needs to be called before opening the reader.
         *
         * @param string $encoding Encoding of the CSV file to be read
         * @return ReaderOptions
         */
        public function setEncoding($encoding)
        {
        }
        /**
         * @return string EOL for the CSV
         */
        public function getEndOfLineCharacter()
        {
        }
        /**
         * Sets the EOL for the CSV.
         * Needs to be called before opening the reader.
         *
         * @param string $endOfLineCharacter used to properly get lines from the CSV file.
         * @return ReaderOptions
         */
        public function setEndOfLineCharacter($endOfLineCharacter)
        {
        }
    }
}
namespace Box\Spout\Reader {
    /**
     * Interface IteratorInterface
     *
     * @package Box\Spout\Reader
     */
    interface IteratorInterface extends \Iterator
    {
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end();
    }
}
namespace Box\Spout\Reader\CSV {
    /**
     * Class RowIterator
     * Iterate over CSV rows.
     *
     * @package Box\Spout\Reader\CSV
     */
    class RowIterator implements \Box\Spout\Reader\IteratorInterface
    {
        /**
         * Value passed to fgetcsv. 0 means "unlimited" (slightly slower but accomodates for very long lines).
         */
        const MAX_READ_BYTES_PER_LINE = 0;
        /** @var resource Pointer to the CSV file to read */
        protected $filePointer;
        /** @var int Number of read rows */
        protected $numReadRows = 0;
        /** @var array|null Buffer used to store the row data, while checking if there are more rows to read */
        protected $rowDataBuffer = null;
        /** @var bool Indicates whether all rows have been read */
        protected $hasReachedEndOfFile = false;
        /** @var string Defines the character used to delimit fields (one character only) */
        protected $fieldDelimiter;
        /** @var string Defines the character used to enclose fields (one character only) */
        protected $fieldEnclosure;
        /** @var string Encoding of the CSV file to be read */
        protected $encoding;
        /** @var string End of line delimiter, given by the user as input. */
        protected $inputEOLDelimiter;
        /** @var bool Whether empty rows should be returned or skipped */
        protected $shouldPreserveEmptyRows;
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /** @var \Box\Spout\Common\Helper\EncodingHelper Helper to work with different encodings */
        protected $encodingHelper;
        /** @var string End of line delimiter, encoded using the same encoding as the CSV */
        protected $encodedEOLDelimiter;
        /**
         * @param resource $filePointer Pointer to the CSV file to read
         * @param \Box\Spout\Reader\CSV\ReaderOptions $options
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         */
        public function __construct($filePointer, $options, $globalFunctionsHelper)
        {
        }
        /**
         * Rewind the Iterator to the first element
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         */
        public function rewind()
        {
        }
        /**
         * This rewinds and skips the BOM if inserted at the beginning of the file
         * by moving the file pointer after it, so that it is not read.
         *
         * @return void
         */
        protected function rewindAndSkipBom()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element. Reads data for the next unprocessed row.
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If unable to convert data to UTF-8
         */
        public function next()
        {
        }
        /**
         * @return void
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If unable to convert data to UTF-8
         */
        protected function readDataForNextRow()
        {
        }
        /**
         * @param array|bool $currentRowData
         * @return bool Whether the data for the current row can be returned or if we need to keep reading
         */
        protected function shouldReadNextRow($currentRowData)
        {
        }
        /**
         * Returns the next row, converted if necessary to UTF-8.
         * As fgetcsv() does not manage correctly encoding for non UTF-8 data,
         * we remove manually whitespace with ltrim or rtrim (depending on the order of the bytes)
         *
         * @return array|false The row for the current file pointer, encoded in UTF-8 or FALSE if nothing to read
         * @throws \Box\Spout\Common\Exception\EncodingConversionException If unable to convert data to UTF-8
         */
        protected function getNextUTF8EncodedRow()
        {
        }
        /**
         * Returns the end of line delimiter, encoded using the same encoding as the CSV.
         * The return value is cached.
         *
         * @return string
         */
        protected function getEncodedEOLDelimiter()
        {
        }
        /**
         * @param array|bool $lineData Array containing the cells value for the line
         * @return bool Whether the given line is empty
         */
        protected function isEmptyLine($lineData)
        {
        }
        /**
         * Return the current element from the buffer
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return array|null
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
}
namespace Box\Spout\Reader {
    /**
     * Interface SheetInterface
     *
     * @package Box\Spout\Reader
     */
    interface SheetInterface
    {
        /**
         * Returns an iterator to iterate over the sheet's rows.
         *
         * @return \Iterator
         */
        public function getRowIterator();
    }
}
namespace Box\Spout\Reader\CSV {
    /**
     * Class Sheet
     *
     * @package Box\Spout\Reader\CSV
     */
    class Sheet implements \Box\Spout\Reader\SheetInterface
    {
        /** @var \Box\Spout\Reader\CSV\RowIterator To iterate over the CSV's rows */
        protected $rowIterator;
        /**
         * @param resource $filePointer Pointer to the CSV file to read
         * @param \Box\Spout\Reader\CSV\ReaderOptions $options
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         */
        public function __construct($filePointer, $options, $globalFunctionsHelper)
        {
        }
        /**
         * @api
         * @return \Box\Spout\Reader\CSV\RowIterator
         */
        public function getRowIterator()
        {
        }
        /**
         * @api
         * @return int Index of the sheet
         */
        public function getIndex()
        {
        }
        /**
         * @api
         * @return string Name of the sheet - empty string since CSV does not support that
         */
        public function getName()
        {
        }
        /**
         * @api
         * @return bool Always TRUE as there is only one sheet
         */
        public function isActive()
        {
        }
    }
    /**
     * Class SheetIterator
     * Iterate over CSV unique "sheet".
     *
     * @package Box\Spout\Reader\CSV
     */
    class SheetIterator implements \Box\Spout\Reader\IteratorInterface
    {
        /** @var \Box\Spout\Reader\CSV\Sheet The CSV unique "sheet" */
        protected $sheet;
        /** @var bool Whether the unique "sheet" has already been read */
        protected $hasReadUniqueSheet = false;
        /**
         * @param resource $filePointer
         * @param \Box\Spout\Reader\CSV\ReaderOptions $options
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         */
        public function __construct($filePointer, $options, $globalFunctionsHelper)
        {
        }
        /**
         * Rewind the Iterator to the first element
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         */
        public function rewind()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         */
        public function next()
        {
        }
        /**
         * Return the current element
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return \Box\Spout\Reader\CSV\Sheet
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
}
namespace Box\Spout\Reader\Common {
    /**
     * Class XMLProcessor
     * Helps process XML files
     *
     * @package Box\Spout\Reader\Common
     */
    class XMLProcessor
    {
        /* Node types */
        const NODE_TYPE_START = \Box\Spout\Reader\Wrapper\XMLReader::ELEMENT;
        const NODE_TYPE_END = \Box\Spout\Reader\Wrapper\XMLReader::END_ELEMENT;
        /* Keys associated to reflection attributes to invoke a callback */
        const CALLBACK_REFLECTION_METHOD = 'reflectionMethod';
        const CALLBACK_REFLECTION_OBJECT = 'reflectionObject';
        /* Values returned by the callbacks to indicate what the processor should do next */
        const PROCESSING_CONTINUE = 1;
        const PROCESSING_STOP = 2;
        /** @var \Box\Spout\Reader\Wrapper\XMLReader The XMLReader object that will help read sheet's XML data */
        protected $xmlReader;
        /** @var array Registered callbacks */
        private $callbacks = [];
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object
         */
        public function __construct($xmlReader)
        {
        }
        /**
         * @param string $nodeName A callback may be triggered when a node with this name is read
         * @param int $nodeType Type of the node [NODE_TYPE_START || NODE_TYPE_END]
         * @param callable $callback Callback to execute when the read node has the given name and type
         * @return XMLProcessor
         */
        public function registerCallback($nodeName, $nodeType, $callback)
        {
        }
        /**
         * @param string $nodeName Name of the node
         * @param int $nodeType Type of the node [NODE_TYPE_START || NODE_TYPE_END]
         * @return string Key used to store the associated callback
         */
        private function getCallbackKey($nodeName, $nodeType)
        {
        }
        /**
         * Because the callback can be a "protected" function, we don't want to use call_user_func() directly
         * but instead invoke the callback using Reflection. This allows the invocation of "protected" functions.
         * Since some functions can be called a lot, we pre-process the callback to only return the elements that
         * will be needed to invoke the callback later.
         *
         * @param callable $callback Array reference to a callback: [OBJECT, METHOD_NAME]
         * @return array Associative array containing the elements needed to invoke the callback using Reflection
         */
        private function getInvokableCallbackData($callback)
        {
        }
        /**
         * Resumes the reading of the XML file where it was left off.
         * Stops whenever a callback indicates that reading should stop or at the end of the file.
         *
         * @return void
         * @throws \Box\Spout\Reader\Exception\XMLProcessingException
         */
        public function readUntilStopped()
        {
        }
        /**
         * @param string $nodeNamePossiblyWithPrefix Name of the node, possibly prefixed
         * @param string $nodeNameWithoutPrefix Name of the same node, un-prefixed
         * @param int $nodeType Type of the node [NODE_TYPE_START || NODE_TYPE_END]
         * @return array|null Callback data to be used for execution when a node of the given name/type is read or NULL if none found
         */
        private function getRegisteredCallbackData($nodeNamePossiblyWithPrefix, $nodeNameWithoutPrefix, $nodeType)
        {
        }
        /**
         * @param array $callbackData Associative array containing data to invoke the callback using Reflection
         * @param array $args Arguments to pass to the callback
         * @return int Callback response
         */
        private function invokeCallback($callbackData, $args)
        {
        }
    }
}
namespace Box\Spout\Reader\Exception {
    /**
     * Class ReaderException
     *
     * @package Box\Spout\Reader\Exception
     * @abstract
     */
    abstract class ReaderException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
    /**
     * Class IteratorNotRewindableException
     *
     * @api
     * @package Box\Spout\Reader\Exception
     */
    class IteratorNotRewindableException extends \Box\Spout\Reader\Exception\ReaderException
    {
    }
    /**
     * Class NoSheetsFoundException
     *
     * @api
     * @package Box\Spout\Reader\Exception
     */
    class NoSheetsFoundException extends \Box\Spout\Reader\Exception\ReaderException
    {
    }
    /**
     * Class ReaderNotOpenedException
     *
     * @api
     * @package Box\Spout\Reader\Exception
     */
    class ReaderNotOpenedException extends \Box\Spout\Reader\Exception\ReaderException
    {
    }
    /**
     * Class SharedStringNotFoundException
     *
     * @api
     * @package Box\Spout\Reader\Exception
     */
    class SharedStringNotFoundException extends \Box\Spout\Reader\Exception\ReaderException
    {
    }
    /**
     * Class XMLProcessingException
     *
     * @package Box\Spout\Reader\Exception
     */
    class XMLProcessingException extends \Box\Spout\Reader\Exception\ReaderException
    {
    }
}
namespace Box\Spout\Reader\ODS\Helper {
    /**
     * Class CellValueFormatter
     * This class provides helper functions to format cell values
     *
     * @package Box\Spout\Reader\ODS\Helper
     */
    class CellValueFormatter
    {
        /** Definition of all possible cell types */
        const CELL_TYPE_STRING = 'string';
        const CELL_TYPE_FLOAT = 'float';
        const CELL_TYPE_BOOLEAN = 'boolean';
        const CELL_TYPE_DATE = 'date';
        const CELL_TYPE_TIME = 'time';
        const CELL_TYPE_CURRENCY = 'currency';
        const CELL_TYPE_PERCENTAGE = 'percentage';
        const CELL_TYPE_VOID = 'void';
        /** Definition of XML nodes names used to parse data */
        const XML_NODE_P = 'p';
        const XML_NODE_S = 'text:s';
        const XML_NODE_A = 'text:a';
        const XML_NODE_SPAN = 'text:span';
        /** Definition of XML attributes used to parse data */
        const XML_ATTRIBUTE_TYPE = 'office:value-type';
        const XML_ATTRIBUTE_VALUE = 'office:value';
        const XML_ATTRIBUTE_BOOLEAN_VALUE = 'office:boolean-value';
        const XML_ATTRIBUTE_DATE_VALUE = 'office:date-value';
        const XML_ATTRIBUTE_TIME_VALUE = 'office:time-value';
        const XML_ATTRIBUTE_CURRENCY = 'office:currency';
        const XML_ATTRIBUTE_C = 'text:c';
        /** @var bool Whether date/time values should be returned as PHP objects or be formatted as strings */
        protected $shouldFormatDates;
        /** @var \Box\Spout\Common\Escaper\ODS Used to unescape XML data */
        protected $escaper;
        /**
         * @param bool $shouldFormatDates Whether date/time values should be returned as PHP objects or be formatted as strings
         */
        public function __construct($shouldFormatDates)
        {
        }
        /**
         * Returns the (unescaped) correctly marshalled, cell value associated to the given XML node.
         * @see http://docs.oasis-open.org/office/v1.2/os/OpenDocument-v1.2-os-part1.html#refTable13
         *
         * @param \DOMNode $node
         * @return string|int|float|bool|\DateTime|\DateInterval|null The value associated with the cell, empty string if cell's type is void/undefined, null on error
         */
        public function extractAndFormatNodeValue($node)
        {
        }
        /**
         * Returns the cell String value.
         *
         * @param \DOMNode $node
         * @return string The value associated with the cell
         */
        protected function formatStringCellValue($node)
        {
        }
        /**
         * Returns the cell Numeric value from the given node.
         *
         * @param \DOMNode $node
         * @return int|float The value associated with the cell
         */
        protected function formatFloatCellValue($node)
        {
        }
        /**
         * Returns the cell Boolean value from the given node.
         *
         * @param \DOMNode $node
         * @return bool The value associated with the cell
         */
        protected function formatBooleanCellValue($node)
        {
        }
        /**
         * Returns the cell Date value from the given node.
         *
         * @param \DOMNode $node
         * @return \DateTime|string|null The value associated with the cell or NULL if invalid date value
         */
        protected function formatDateCellValue($node)
        {
        }
        /**
         * Returns the cell Time value from the given node.
         *
         * @param \DOMNode $node
         * @return \DateInterval|string|null The value associated with the cell or NULL if invalid time value
         */
        protected function formatTimeCellValue($node)
        {
        }
        /**
         * Returns the cell Currency value from the given node.
         *
         * @param \DOMNode $node
         * @return string The value associated with the cell (e.g. "100 USD" or "9.99 EUR")
         */
        protected function formatCurrencyCellValue($node)
        {
        }
        /**
         * Returns the cell Percentage value from the given node.
         *
         * @param \DOMNode $node
         * @return int|float The value associated with the cell
         */
        protected function formatPercentageCellValue($node)
        {
        }
    }
    /**
     * Class SettingsHelper
     * This class provides helper functions to extract data from the "settings.xml" file.
     *
     * @package Box\Spout\Reader\ODS\Helper
     */
    class SettingsHelper
    {
        const SETTINGS_XML_FILE_PATH = 'settings.xml';
        /** Definition of XML nodes name and attribute used to parse settings data */
        const XML_NODE_CONFIG_ITEM = 'config:config-item';
        const XML_ATTRIBUTE_CONFIG_NAME = 'config:name';
        const XML_ATTRIBUTE_VALUE_ACTIVE_TABLE = 'ActiveTable';
        /**
         * @param string $filePath Path of the file to be read
         * @return string|null Name of the sheet that was defined as active or NULL if none found
         */
        public function getActiveSheetName($filePath)
        {
        }
    }
}
namespace Box\Spout\Reader\ODS {
    /**
     * Class Reader
     * This class provides support to read data from a ODS file
     *
     * @package Box\Spout\Reader\ODS
     */
    class Reader extends \Box\Spout\Reader\AbstractReader
    {
        /** @var \ZipArchive */
        protected $zip;
        /** @var SheetIterator To iterator over the ODS sheets */
        protected $sheetIterator;
        /**
         * Returns the reader's current options
         *
         * @return ReaderOptions
         */
        protected function getOptions()
        {
        }
        /**
         * Returns whether stream wrappers are supported
         *
         * @return bool
         */
        protected function doesSupportStreamWrapper()
        {
        }
        /**
         * Opens the file at the given file path to make it ready to be read.
         *
         * @param  string $filePath Path of the file to be read
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the file at the given path or its content cannot be read
         * @throws \Box\Spout\Reader\Exception\NoSheetsFoundException If there are no sheets in the file
         */
        protected function openReader($filePath)
        {
        }
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @return SheetIterator To iterate over sheets
         */
        protected function getConcreteSheetIterator()
        {
        }
        /**
         * Closes the reader. To be used after reading the file.
         *
         * @return void
         */
        protected function closeReader()
        {
        }
    }
    /**
     * Class ReaderOptions
     * This class is used to customize the reader's behavior
     *
     * @package Box\Spout\Reader\ODS
     */
    class ReaderOptions extends \Box\Spout\Reader\Common\ReaderOptions
    {
        // No extra options
    }
    /**
     * Class RowIterator
     *
     * @package Box\Spout\Reader\ODS
     */
    class RowIterator implements \Box\Spout\Reader\IteratorInterface
    {
        /** Definition of XML nodes names used to parse data */
        const XML_NODE_TABLE = 'table:table';
        const XML_NODE_ROW = 'table:table-row';
        const XML_NODE_CELL = 'table:table-cell';
        const MAX_COLUMNS_EXCEL = 16384;
        /** Definition of XML attribute used to parse data */
        const XML_ATTRIBUTE_NUM_ROWS_REPEATED = 'table:number-rows-repeated';
        const XML_ATTRIBUTE_NUM_COLUMNS_REPEATED = 'table:number-columns-repeated';
        /** @var \Box\Spout\Reader\Wrapper\XMLReader The XMLReader object that will help read sheet's XML data */
        protected $xmlReader;
        /** @var \Box\Spout\Reader\Common\XMLProcessor Helper Object to process XML nodes */
        protected $xmlProcessor;
        /** @var bool Whether empty rows should be returned or skipped */
        protected $shouldPreserveEmptyRows;
        /** @var Helper\CellValueFormatter Helper to format cell values */
        protected $cellValueFormatter;
        /** @var bool Whether the iterator has already been rewound once */
        protected $hasAlreadyBeenRewound = false;
        /** @var array Contains the data for the currently processed row (key = cell index, value = cell value) */
        protected $currentlyProcessedRowData = [];
        /** @var array|null Buffer used to store the row data, while checking if there are more rows to read */
        protected $rowDataBuffer = null;
        /** @var bool Indicates whether all rows have been read */
        protected $hasReachedEndOfFile = false;
        /** @var int Last row index processed (one-based) */
        protected $lastRowIndexProcessed = 0;
        /** @var int Row index to be processed next (one-based) */
        protected $nextRowIndexToBeProcessed = 1;
        /** @var mixed|null Value of the last processed cell (because when reading cell at column N+1, cell N is processed) */
        protected $lastProcessedCellValue = null;
        /** @var int Number of times the last processed row should be repeated */
        protected $numRowsRepeated = 1;
        /** @var int Number of times the last cell value should be copied to the cells on its right */
        protected $numColumnsRepeated = 1;
        /** @var bool Whether at least one cell has been read for the row currently being processed */
        protected $hasAlreadyReadOneCellInCurrentRow = false;
        /**
         * @param XMLReader $xmlReader XML Reader, positioned on the "<table:table>" element
         * @param \Box\Spout\Reader\ODS\ReaderOptions $options Reader's current options
         */
        public function __construct($xmlReader, $options)
        {
        }
        /**
         * Rewind the Iterator to the first element.
         * NOTE: It can only be done once, as it is not possible to read an XML file backwards.
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         * @throws \Box\Spout\Reader\Exception\IteratorNotRewindableException If the iterator is rewound more than once
         */
        public function rewind()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element. Empty rows will be skipped.
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If a shared string was not found
         * @throws \Box\Spout\Common\Exception\IOException If unable to read the sheet data XML
         */
        public function next()
        {
        }
        /**
         * Returns whether we need data for the next row to be processed.
         * We DO need to read data if:
         *   - we have not read any rows yet
         *      OR
         *   - the next row to be processed immediately follows the last read row
         *
         * @return bool Whether we need data for the next row to be processed.
         */
        protected function doesNeedDataForNextRowToBeProcessed()
        {
        }
        /**
         * @return void
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If a shared string was not found
         * @throws \Box\Spout\Common\Exception\IOException If unable to read the sheet data XML
         */
        protected function readDataForNextRow()
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<table:table-row>" starting node
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processRowStartingNode($xmlReader)
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<table:table-cell>" starting node
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processCellStartingNode($xmlReader)
        {
        }
        /**
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processRowEndingNode()
        {
        }
        /**
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processTableEndingNode()
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<table:table-row>" starting node
         * @return int The value of "table:number-rows-repeated" attribute of the current node, or 1 if attribute missing
         */
        protected function getNumRowsRepeatedForCurrentNode($xmlReader)
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<table:table-cell>" starting node
         * @return int The value of "table:number-columns-repeated" attribute of the current node, or 1 if attribute missing
         */
        protected function getNumColumnsRepeatedForCurrentNode($xmlReader)
        {
        }
        /**
         * Returns the (unescaped) correctly marshalled, cell value associated to the given XML node.
         *
         * @param \DOMNode $node
         * @return string|int|float|bool|\DateTime|\DateInterval|null The value associated with the cell, empty string if cell's type is void/undefined, null on error
         */
        protected function getCellValue($node)
        {
        }
        /**
         * After finishing processing each cell, a row is considered empty if it contains
         * no cells or if the value of the last read cell is an empty string.
         * After finishing processing each cell, the last read cell is not part of the
         * row data yet (as we still need to apply the "num-columns-repeated" attribute).
         *
         * @param array $rowData
         * @param string|int|float|bool|\DateTime|\DateInterval|null The value of the last read cell
         * @return bool Whether the row is empty
         */
        protected function isEmptyRow($rowData, $lastReadCellValue)
        {
        }
        /**
         * Return the current element, from the buffer.
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return array|null
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
    /**
     * Class Sheet
     * Represents a sheet within a ODS file
     *
     * @package Box\Spout\Reader\ODS
     */
    class Sheet implements \Box\Spout\Reader\SheetInterface
    {
        /** @var \Box\Spout\Reader\ODS\RowIterator To iterate over sheet's rows */
        protected $rowIterator;
        /** @var int ID of the sheet */
        protected $id;
        /** @var int Index of the sheet, based on order in the workbook (zero-based) */
        protected $index;
        /** @var string Name of the sheet */
        protected $name;
        /** @var bool Whether the sheet was the active one */
        protected $isActive;
        /**
         * @param XMLReader $xmlReader XML Reader, positioned on the "<table:table>" element
         * @param int $sheetIndex Index of the sheet, based on order in the workbook (zero-based)
         * @param string $sheetName Name of the sheet
         * @param bool $isSheetActive Whether the sheet was defined as active
         * @param \Box\Spout\Reader\ODS\ReaderOptions $options Reader's current options
         */
        public function __construct($xmlReader, $sheetIndex, $sheetName, $isSheetActive, $options)
        {
        }
        /**
         * @api
         * @return \Box\Spout\Reader\ODS\RowIterator
         */
        public function getRowIterator()
        {
        }
        /**
         * @api
         * @return int Index of the sheet, based on order in the workbook (zero-based)
         */
        public function getIndex()
        {
        }
        /**
         * @api
         * @return string Name of the sheet
         */
        public function getName()
        {
        }
        /**
         * @api
         * @return bool Whether the sheet was defined as active
         */
        public function isActive()
        {
        }
    }
    /**
     * Class SheetIterator
     * Iterate over ODS sheet.
     *
     * @package Box\Spout\Reader\ODS
     */
    class SheetIterator implements \Box\Spout\Reader\IteratorInterface
    {
        const CONTENT_XML_FILE_PATH = 'content.xml';
        /** Definition of XML nodes name and attribute used to parse sheet data */
        const XML_NODE_TABLE = 'table:table';
        const XML_ATTRIBUTE_TABLE_NAME = 'table:name';
        /** @var string $filePath Path of the file to be read */
        protected $filePath;
        /** @var \Box\Spout\Reader\ODS\ReaderOptions Reader's current options */
        protected $options;
        /** @var XMLReader The XMLReader object that will help read sheet's XML data */
        protected $xmlReader;
        /** @var \Box\Spout\Common\Escaper\ODS Used to unescape XML data */
        protected $escaper;
        /** @var bool Whether there are still at least a sheet to be read */
        protected $hasFoundSheet;
        /** @var int The index of the sheet being read (zero-based) */
        protected $currentSheetIndex;
        /** @var string The name of the sheet that was defined as active */
        protected $activeSheetName;
        /**
         * @param string $filePath Path of the file to be read
         * @param \Box\Spout\Reader\ODS\ReaderOptions $options Reader's current options
         * @throws \Box\Spout\Reader\Exception\NoSheetsFoundException If there are no sheets in the file
         */
        public function __construct($filePath, $options)
        {
        }
        /**
         * Rewind the Iterator to the first element
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the XML file containing sheets' data
         */
        public function rewind()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         */
        public function next()
        {
        }
        /**
         * Return the current element
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return \Box\Spout\Reader\ODS\Sheet
         */
        public function current()
        {
        }
        /**
         * Returns whether the current sheet was defined as the active one
         *
         * @param string $sheetName Name of the current sheet
         * @param int $sheetIndex Index of the current sheet
         * @param string|null Name of the sheet that was defined as active or NULL if none defined
         * @return bool Whether the current sheet was defined as the active one
         */
        private function isActiveSheet($sheetName, $sheetIndex, $activeSheetName)
        {
        }
        /**
         * Return the key of the current element
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
}
namespace Box\Spout\Reader {
    /**
     * Class ReaderFactory
     * This factory is used to create readers, based on the type of the file to be read.
     * It supports CSV and XLSX formats.
     *
     * @package Box\Spout\Reader
     */
    class ReaderFactory
    {
        /**
         * This creates an instance of the appropriate reader, given the type of the file to be read
         *
         * @api
         * @param  string $readerType Type of the reader to instantiate
         * @return ReaderInterface
         * @throws \Box\Spout\Common\Exception\UnsupportedTypeException
         */
        public static function create($readerType)
        {
        }
    }
}
namespace Box\Spout\Reader\Wrapper {
    /**
     * Trait XMLInternalErrorsHelper
     *
     * @package Box\Spout\Reader\Wrapper
     */
    trait XMLInternalErrorsHelper
    {
        /** @var bool Stores whether XML errors were initially stored internally - used to reset */
        protected $initialUseInternalErrorsValue;
        /**
         * To avoid displaying lots of warning/error messages on screen,
         * stores errors internally instead.
         *
         * @return void
         */
        protected function useXMLInternalErrors()
        {
        }
        /**
         * Throws an XMLProcessingException if an error occured.
         * It also always resets the "libxml_use_internal_errors" setting back to its initial value.
         *
         * @return void
         * @throws \Box\Spout\Reader\Exception\XMLProcessingException
         */
        protected function resetXMLInternalErrorsSettingAndThrowIfXMLErrorOccured()
        {
        }
        /**
         * Returns whether the a XML error has occured since the last time errors were cleared.
         *
         * @return bool TRUE if an error occured, FALSE otherwise
         */
        private function hasXMLErrorOccured()
        {
        }
        /**
         * Returns the error message for the last XML error that occured.
         * @see libxml_get_last_error
         *
         * @return String|null Last XML error message or null if no error
         */
        private function getLastXMLErrorMessage()
        {
        }
        /**
         * @return void
         */
        protected function resetXMLInternalErrorsSetting()
        {
        }
    }
    /**
     * Class XMLReader
     * Wrapper around the built-in XMLReader
     * @see \XMLReader
     *
     * @package Box\Spout\Reader\Wrapper
     */
    class XMLReader extends \XMLReader
    {
        use \Box\Spout\Reader\Wrapper\XMLInternalErrorsHelper;
        const ZIP_WRAPPER = 'zip://';
        /**
         * Opens the XML Reader to read a file located inside a ZIP file.
         *
         * @param string $zipFilePath Path to the ZIP file
         * @param string $fileInsideZipPath Relative or absolute path of the file inside the zip
         * @return bool TRUE on success or FALSE on failure
         */
        public function openFileInZip($zipFilePath, $fileInsideZipPath)
        {
        }
        /**
         * Returns the real path for the given path components.
         * This is useful to avoid issues on some Windows setup.
         *
         * @param string $zipFilePath Path to the ZIP file
         * @param string $fileInsideZipPath Relative or absolute path of the file inside the zip
         * @return string The real path URI
         */
        public function getRealPathURIForFileInZip($zipFilePath, $fileInsideZipPath)
        {
        }
        /**
         * Returns whether the file at the given location exists
         *
         * @param string $zipStreamURI URI of a zip stream, e.g. "zip://file.zip#path/inside.xml"
         * @return bool TRUE if the file exists, FALSE otherwise
         */
        protected function fileExistsWithinZip($zipStreamURI)
        {
        }
        /**
         * Move to next node in document
         * @see \XMLReader::read
         *
         * @return bool TRUE on success or FALSE on failure
         * @throws \Box\Spout\Reader\Exception\XMLProcessingException If an error/warning occurred
         */
        public function read()
        {
        }
        /**
         * Read until the element with the given name is found, or the end of the file.
         *
         * @param string $nodeName Name of the node to find
         * @return bool TRUE on success or FALSE on failure
         * @throws \Box\Spout\Reader\Exception\XMLProcessingException If an error/warning occurred
         */
        public function readUntilNodeFound($nodeName)
        {
        }
        /**
         * Move cursor to next node skipping all subtrees
         * @see \XMLReader::next
         *
         * @param string|void $localName The name of the next node to move to
         * @return bool TRUE on success or FALSE on failure
         * @throws \Box\Spout\Reader\Exception\XMLProcessingException If an error/warning occurred
         */
        public function next($localName = null)
        {
        }
        /**
         * @param string $nodeName
         * @return bool Whether the XML Reader is currently positioned on the starting node with given name
         */
        public function isPositionedOnStartingNode($nodeName)
        {
        }
        /**
         * @param string $nodeName
         * @return bool Whether the XML Reader is currently positioned on the ending node with given name
         */
        public function isPositionedOnEndingNode($nodeName)
        {
        }
        /**
         * @param string $nodeName
         * @param int $nodeType
         * @return bool Whether the XML Reader is currently positioned on the node with given name and type
         */
        private function isPositionedOnNode($nodeName, $nodeType)
        {
        }
        /**
         * @return string The name of the current node, un-prefixed
         */
        public function getCurrentNodeName()
        {
        }
    }
}
namespace Box\Spout\Reader\XLSX\Helper {
    /**
     * Class CellHelper
     * This class provides helper functions when working with cells
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class CellHelper
    {
        // Using ord() is super slow... Using a pre-computed hash table instead.
        private static $columnLetterToIndexMapping = ['A' => 0, 'B' => 1, 'C' => 2, 'D' => 3, 'E' => 4, 'F' => 5, 'G' => 6, 'H' => 7, 'I' => 8, 'J' => 9, 'K' => 10, 'L' => 11, 'M' => 12, 'N' => 13, 'O' => 14, 'P' => 15, 'Q' => 16, 'R' => 17, 'S' => 18, 'T' => 19, 'U' => 20, 'V' => 21, 'W' => 22, 'X' => 23, 'Y' => 24, 'Z' => 25];
        /**
         * Fills the missing indexes of an array with a given value.
         * For instance, $dataArray = []; $a[1] = 1; $a[3] = 3;
         * Calling fillMissingArrayIndexes($dataArray, 'FILL') will return this array: ['FILL', 1, 'FILL', 3]
         *
         * @param array $dataArray The array to fill
         * @param string|void $fillValue optional
         * @return array
         */
        public static function fillMissingArrayIndexes($dataArray, $fillValue = '')
        {
        }
        /**
         * Returns the base 10 column index associated to the cell index (base 26).
         * Excel uses A to Z letters for column indexing, where A is the 1st column,
         * Z is the 26th and AA is the 27th.
         * The mapping is zero based, so that A1 maps to 0, B2 maps to 1, Z13 to 25 and AA4 to 26.
         *
         * @param string $cellIndex The Excel cell index ('A1', 'BC13', ...)
         * @return int
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException When the given cell index is invalid
         */
        public static function getColumnIndexFromCellIndex($cellIndex)
        {
        }
        /**
         * Returns whether a cell index is valid, in an Excel world.
         * To be valid, the cell index should start with capital letters and be followed by numbers.
         * There can only be 3 letters, as there can only be 16,384 rows, which is equivalent to 'XFE'.
         *
         * @param string $cellIndex The Excel cell index ('A1', 'BC13', ...)
         * @return bool
         */
        protected static function isValidCellIndex($cellIndex)
        {
        }
    }
    /**
     * Class CellValueFormatter
     * This class provides helper functions to format cell values
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class CellValueFormatter
    {
        /** Definition of all possible cell types */
        const CELL_TYPE_INLINE_STRING = 'inlineStr';
        const CELL_TYPE_STR = 'str';
        const CELL_TYPE_SHARED_STRING = 's';
        const CELL_TYPE_BOOLEAN = 'b';
        const CELL_TYPE_NUMERIC = 'n';
        const CELL_TYPE_DATE = 'd';
        const CELL_TYPE_ERROR = 'e';
        /** Definition of XML nodes names used to parse data */
        const XML_NODE_VALUE = 'v';
        const XML_NODE_INLINE_STRING_VALUE = 't';
        /** Definition of XML attributes used to parse data */
        const XML_ATTRIBUTE_TYPE = 't';
        const XML_ATTRIBUTE_STYLE_ID = 's';
        /** Constants used for date formatting */
        const NUM_SECONDS_IN_ONE_DAY = 86400;
        const NUM_SECONDS_IN_ONE_HOUR = 3600;
        const NUM_SECONDS_IN_ONE_MINUTE = 60;
        /**
         * February 29th, 1900 is NOT a leap year but Excel thinks it is...
         * @see https://en.wikipedia.org/wiki/Year_1900_problem#Microsoft_Excel
         */
        const ERRONEOUS_EXCEL_LEAP_YEAR_DAY = 60;
        /** @var SharedStringsHelper Helper to work with shared strings */
        protected $sharedStringsHelper;
        /** @var StyleHelper Helper to work with styles */
        protected $styleHelper;
        /** @var bool Whether date/time values should be returned as PHP objects or be formatted as strings */
        protected $shouldFormatDates;
        /** @var \Box\Spout\Common\Escaper\XLSX Used to unescape XML data */
        protected $escaper;
        /**
         * @param SharedStringsHelper $sharedStringsHelper Helper to work with shared strings
         * @param StyleHelper $styleHelper Helper to work with styles
         * @param bool $shouldFormatDates Whether date/time values should be returned as PHP objects or be formatted as strings
         */
        public function __construct($sharedStringsHelper, $styleHelper, $shouldFormatDates)
        {
        }
        /**
         * Returns the (unescaped) correctly marshalled, cell value associated to the given XML node.
         *
         * @param \DOMNode $node
         * @return string|int|float|bool|\DateTime|null The value associated with the cell (null when the cell has an error)
         */
        public function extractAndFormatNodeValue($node)
        {
        }
        /**
         * Returns the cell's string value from a node's nested value node
         *
         * @param \DOMNode $node
         * @return string The value associated with the cell
         */
        protected function getVNodeValue($node)
        {
        }
        /**
         * Returns the cell String value where string is inline.
         *
         * @param \DOMNode $node
         * @return string The value associated with the cell (null when the cell has an error)
         */
        protected function formatInlineStringCellValue($node)
        {
        }
        /**
         * Returns the cell String value from shared-strings file using nodeValue index.
         *
         * @param string $nodeValue
         * @return string The value associated with the cell (null when the cell has an error)
         */
        protected function formatSharedStringCellValue($nodeValue)
        {
        }
        /**
         * Returns the cell String value, where string is stored in value node.
         *
         * @param string $nodeValue
         * @return string The value associated with the cell (null when the cell has an error)
         */
        protected function formatStrCellValue($nodeValue)
        {
        }
        /**
         * Returns the cell Numeric value from string of nodeValue.
         * The value can also represent a timestamp and a DateTime will be returned.
         *
         * @param string $nodeValue
         * @param int $cellStyleId 0 being the default style
         * @return int|float|\DateTime|null The value associated with the cell
         */
        protected function formatNumericCellValue($nodeValue, $cellStyleId)
        {
        }
        /**
         * Returns a cell's PHP Date value, associated to the given timestamp.
         * NOTE: The timestamp is a float representing the number of days since January 1st, 1900.
         * NOTE: The timestamp can also represent a time, if it is a value between 0 and 1.
         *
         * @param float $nodeValue
         * @param int $cellStyleId 0 being the default style
         * @return \DateTime|null The value associated with the cell or NULL if invalid date value
         */
        protected function formatExcelTimestampValue($nodeValue, $cellStyleId)
        {
        }
        /**
         * Returns a cell's PHP DateTime value, associated to the given timestamp.
         * Only the time value matters. The date part is set to Jan 1st, 1900 (base Excel date).
         *
         * @param float $nodeValue
         * @param int $cellStyleId 0 being the default style
         * @return \DateTime|string The value associated with the cell
         */
        protected function formatExcelTimestampValueAsTimeValue($nodeValue, $cellStyleId)
        {
        }
        /**
         * Returns a cell's PHP Date value, associated to the given timestamp.
         * NOTE: The timestamp is a float representing the number of days since January 1st, 1900.
         *
         * @param float $nodeValue
         * @param int $cellStyleId 0 being the default style
         * @return \DateTime|string|null The value associated with the cell or NULL if invalid date value
         */
        protected function formatExcelTimestampValueAsDateValue($nodeValue, $cellStyleId)
        {
        }
        /**
         * Returns the cell Boolean value from a specific node's Value.
         *
         * @param string $nodeValue
         * @return bool The value associated with the cell
         */
        protected function formatBooleanCellValue($nodeValue)
        {
        }
        /**
         * Returns a cell's PHP Date value, associated to the given stored nodeValue.
         * @see ECMA-376 Part 1 - §18.17.4
         *
         * @param string $nodeValue ISO 8601 Date string
         * @return \DateTime|string|null The value associated with the cell or NULL if invalid date value
         */
        protected function formatDateCellValue($nodeValue)
        {
        }
    }
    /**
     * Class DateFormatHelper
     * This class provides helper functions to format Excel dates
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class DateFormatHelper
    {
        const KEY_GENERAL = 'general';
        const KEY_HOUR_12 = '12h';
        const KEY_HOUR_24 = '24h';
        /**
         * This map is used to replace Excel format characters by their PHP equivalent.
         * Keys should be ordered from longest to smallest.
         *
         * @var array Mapping between Excel format characters and PHP format characters
         */
        private static $excelDateFormatToPHPDateFormatMapping = [self::KEY_GENERAL => [
            // Time
            'am/pm' => 'A',
            // Uppercase Ante meridiem and Post meridiem
            ':mm' => ':i',
            // Minutes with leading zeros - if preceded by a ":" (otherwise month)
            'mm:' => 'i:',
            // Minutes with leading zeros - if followed by a ":" (otherwise month)
            'ss' => 's',
            // Seconds, with leading zeros
            '.s' => '',
            // Ignore (fractional seconds format does not exist in PHP)
            // Date
            'e' => 'Y',
            // Full numeric representation of a year, 4 digits
            'yyyy' => 'Y',
            // Full numeric representation of a year, 4 digits
            'yy' => 'y',
            // Two digit representation of a year
            'mmmmm' => 'M',
            // Short textual representation of a month, three letters ("mmmmm" should only contain the 1st letter...)
            'mmmm' => 'F',
            // Full textual representation of a month
            'mmm' => 'M',
            // Short textual representation of a month, three letters
            'mm' => 'm',
            // Numeric representation of a month, with leading zeros
            'm' => 'n',
            // Numeric representation of a month, without leading zeros
            'dddd' => 'l',
            // Full textual representation of the day of the week
            'ddd' => 'D',
            // Textual representation of a day, three letters
            'dd' => 'd',
            // Day of the month, 2 digits with leading zeros
            'd' => 'j',
        ], self::KEY_HOUR_12 => [
            'hh' => 'h',
            // 12-hour format of an hour without leading zeros
            'h' => 'g',
        ], self::KEY_HOUR_24 => [
            'hh' => 'H',
            // 24-hour hours with leading zero
            'h' => 'G',
        ]];
        /**
         * Converts the given Excel date format to a format understandable by the PHP date function.
         *
         * @param string $excelDateFormat Excel date format
         * @return string PHP date format (as defined here: http://php.net/manual/en/function.date.php)
         */
        public static function toPHPDateFormat($excelDateFormat)
        {
        }
        /**
         * @param string $excelDateFormat Date format as defined by Excel
         * @return bool Whether the given date format has the 12-hour format marker
         */
        private static function has12HourFormatMarker($excelDateFormat)
        {
        }
    }
}
namespace Box\Spout\Reader\XLSX\Helper\SharedStringsCaching {
    /**
     * Class CachingStrategyFactory
     *
     * @package Box\Spout\Reader\XLSX\Helper\SharedStringsCaching
     */
    class CachingStrategyFactory
    {
        /**
         * The memory amount needed to store a string was obtained empirically from this data:
         *
         *        ------------------------------------
         *        | Number of chars⁺ | Memory needed |
         *        ------------------------------------
         *        |           3,000  |         1 MB  |
         *        |          15,000  |         2 MB  |
         *        |          30,000  |         5 MB  |
         *        |          75,000  |        11 MB  |
         *        |         150,000  |        21 MB  |
         *        |         300,000  |        43 MB  |
         *        |         750,000  |       105 MB  |
         *        |       1,500,000  |       210 MB  |
         *        |       2,250,000  |       315 MB  |
         *        |       3,000,000  |       420 MB  |
         *        |       4,500,000  |       630 MB  |
         *        ------------------------------------
         *
         *        ⁺ All characters were 1 byte long
         *
         * This gives a linear graph where each 1-byte character requires about 150 bytes to be stored.
         * Given that some characters can take up to 4 bytes, we need 600 bytes per character to be safe.
         * Also, there is on average about 20 characters per cell (this is entirely empirical data...).
         *
         * This means that in order to store one shared string in memory, the memory amount needed is:
         *   => 20 * 600 ≈ 12KB
         */
        const AMOUNT_MEMORY_NEEDED_PER_STRING_IN_KB = 12;
        /**
         * To avoid running out of memory when extracting a huge number of shared strings, they can be saved to temporary files
         * instead of in memory. Then, when accessing a string, the corresponding file contents will be loaded in memory
         * and the string will be quickly retrieved.
         * The performance bottleneck is not when creating these temporary files, but rather when loading their content.
         * Because the contents of the last loaded file stays in memory until another file needs to be loaded, it works
         * best when the indexes of the shared strings are sorted in the sheet data.
         * 10,000 was chosen because it creates small files that are fast to be loaded in memory.
         */
        const MAX_NUM_STRINGS_PER_TEMP_FILE = 10000;
        /** @var CachingStrategyFactory|null Singleton instance */
        protected static $instance = null;
        /**
         * Private constructor for singleton
         */
        private function __construct()
        {
        }
        /**
         * Returns the singleton instance of the factory
         *
         * @return CachingStrategyFactory
         */
        public static function getInstance()
        {
        }
        /**
         * Returns the best caching strategy, given the number of unique shared strings
         * and the amount of memory available.
         *
         * @param int|null $sharedStringsUniqueCount Number of unique shared strings (NULL if unknown)
         * @param string|void $tempFolder Temporary folder where the temporary files to store shared strings will be stored
         * @return CachingStrategyInterface The best caching strategy
         */
        public function getBestCachingStrategy($sharedStringsUniqueCount, $tempFolder = null)
        {
        }
        /**
         * Returns whether it is safe to use in-memory caching, given the number of unique shared strings
         * and the amount of memory available.
         *
         * @param int|null $sharedStringsUniqueCount Number of unique shared strings (NULL if unknown)
         * @return bool
         */
        protected function isInMemoryStrategyUsageSafe($sharedStringsUniqueCount)
        {
        }
        /**
         * Returns the PHP "memory_limit" in Kilobytes
         *
         * @return float
         */
        protected function getMemoryLimitInKB()
        {
        }
        /**
         * Returns the formatted "memory_limit" value
         *
         * @return string
         */
        protected function getMemoryLimitFromIni()
        {
        }
    }
    /**
     * Interface CachingStrategyInterface
     *
     * @package Box\Spout\Reader\XLSX\Helper\SharedStringsCaching
     */
    interface CachingStrategyInterface
    {
        /**
         * Adds the given string to the cache.
         *
         * @param string $sharedString The string to be added to the cache
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return void
         */
        public function addStringForIndex($sharedString, $sharedStringIndex);
        /**
         * Closes the cache after the last shared string was added.
         * This prevents any additional string from being added to the cache.
         *
         * @return void
         */
        public function closeCache();
        /**
         * Returns the string located at the given index from the cache.
         *
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return string The shared string at the given index
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If no shared string found for the given index
         */
        public function getStringAtIndex($sharedStringIndex);
        /**
         * Destroys the cache, freeing memory and removing any created artifacts
         *
         * @return void
         */
        public function clearCache();
    }
    /**
     * Class FileBasedStrategy
     *
     * This class implements the file-based caching strategy for shared strings.
     * Shared strings are stored in small files (with a max number of strings per file).
     * This strategy is slower than an in-memory strategy but is used to avoid out of memory crashes.
     *
     * @package Box\Spout\Reader\XLSX\Helper\SharedStringsCaching
     */
    class FileBasedStrategy implements \Box\Spout\Reader\XLSX\Helper\SharedStringsCaching\CachingStrategyInterface
    {
        /** Value to use to escape the line feed character ("\n") */
        const ESCAPED_LINE_FEED_CHARACTER = '_x000A_';
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /** @var \Box\Spout\Common\Helper\FileSystemHelper Helper to perform file system operations */
        protected $fileSystemHelper;
        /** @var string Temporary folder where the temporary files will be created */
        protected $tempFolder;
        /**
         * @var int Maximum number of strings that can be stored in one temp file
         * @see CachingStrategyFactory::MAX_NUM_STRINGS_PER_TEMP_FILE
         */
        protected $maxNumStringsPerTempFile;
        /** @var resource Pointer to the last temp file a shared string was written to */
        protected $tempFilePointer;
        /**
         * @var string Path of the temporary file whose contents is currently stored in memory
         * @see CachingStrategyFactory::MAX_NUM_STRINGS_PER_TEMP_FILE
         */
        protected $inMemoryTempFilePath;
        /**
         * @var array Contents of the temporary file that was last read
         * @see CachingStrategyFactory::MAX_NUM_STRINGS_PER_TEMP_FILE
         */
        protected $inMemoryTempFileContents;
        /**
         * @param string|null $tempFolder Temporary folder where the temporary files to store shared strings will be stored
         * @param int $maxNumStringsPerTempFile Maximum number of strings that can be stored in one temp file
         */
        public function __construct($tempFolder, $maxNumStringsPerTempFile)
        {
        }
        /**
         * Adds the given string to the cache.
         *
         * @param string $sharedString The string to be added to the cache
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return void
         */
        public function addStringForIndex($sharedString, $sharedStringIndex)
        {
        }
        /**
         * Returns the path for the temp file that should contain the string for the given index
         *
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return string The temp file path for the given index
         */
        protected function getSharedStringTempFilePath($sharedStringIndex)
        {
        }
        /**
         * Closes the cache after the last shared string was added.
         * This prevents any additional string from being added to the cache.
         *
         * @return void
         */
        public function closeCache()
        {
        }
        /**
         * Returns the string located at the given index from the cache.
         *
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return string The shared string at the given index
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If no shared string found for the given index
         */
        public function getStringAtIndex($sharedStringIndex)
        {
        }
        /**
         * Escapes the line feed characters (\n)
         *
         * @param string $unescapedString
         * @return string
         */
        private function escapeLineFeed($unescapedString)
        {
        }
        /**
         * Unescapes the line feed characters (\n)
         *
         * @param string $escapedString
         * @return string
         */
        private function unescapeLineFeed($escapedString)
        {
        }
        /**
         * Destroys the cache, freeing memory and removing any created artifacts
         *
         * @return void
         */
        public function clearCache()
        {
        }
    }
    /**
     * Class InMemoryStrategy
     *
     * This class implements the in-memory caching strategy for shared strings.
     * This strategy is used when the number of unique strings is low, compared to the memory available.
     *
     * @package Box\Spout\Reader\XLSX\Helper\SharedStringsCaching
     */
    class InMemoryStrategy implements \Box\Spout\Reader\XLSX\Helper\SharedStringsCaching\CachingStrategyInterface
    {
        /** @var \SplFixedArray Array used to cache the shared strings */
        protected $inMemoryCache;
        /** @var bool Whether the cache has been closed */
        protected $isCacheClosed;
        /**
         * @param int $sharedStringsUniqueCount Number of unique shared strings
         */
        public function __construct($sharedStringsUniqueCount)
        {
        }
        /**
         * Adds the given string to the cache.
         *
         * @param string $sharedString The string to be added to the cache
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return void
         */
        public function addStringForIndex($sharedString, $sharedStringIndex)
        {
        }
        /**
         * Closes the cache after the last shared string was added.
         * This prevents any additional string from being added to the cache.
         *
         * @return void
         */
        public function closeCache()
        {
        }
        /**
         * Returns the string located at the given index from the cache.
         *
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return string The shared string at the given index
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If no shared string found for the given index
         */
        public function getStringAtIndex($sharedStringIndex)
        {
        }
        /**
         * Destroys the cache, freeing memory and removing any created artifacts
         *
         * @return void
         */
        public function clearCache()
        {
        }
    }
}
namespace Box\Spout\Reader\XLSX\Helper {
    /**
     * Class SharedStringsHelper
     * This class provides helper functions for reading sharedStrings XML file
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class SharedStringsHelper
    {
        /** Path of sharedStrings XML file inside the XLSX file */
        const SHARED_STRINGS_XML_FILE_PATH = 'xl/sharedStrings.xml';
        /** Main namespace for the sharedStrings.xml file */
        const MAIN_NAMESPACE_FOR_SHARED_STRINGS_XML = 'http://schemas.openxmlformats.org/spreadsheetml/2006/main';
        /** Definition of XML nodes names used to parse data */
        const XML_NODE_SST = 'sst';
        const XML_NODE_SI = 'si';
        const XML_NODE_R = 'r';
        const XML_NODE_T = 't';
        /** Definition of XML attributes used to parse data */
        const XML_ATTRIBUTE_COUNT = 'count';
        const XML_ATTRIBUTE_UNIQUE_COUNT = 'uniqueCount';
        const XML_ATTRIBUTE_XML_SPACE = 'xml:space';
        const XML_ATTRIBUTE_VALUE_PRESERVE = 'preserve';
        /** @var string Path of the XLSX file being read */
        protected $filePath;
        /** @var string Temporary folder where the temporary files to store shared strings will be stored */
        protected $tempFolder;
        /** @var CachingStrategyInterface The best caching strategy for storing shared strings */
        protected $cachingStrategy;
        /**
         * @param string $filePath Path of the XLSX file being read
         * @param string|null|void $tempFolder Temporary folder where the temporary files to store shared strings will be stored
         */
        public function __construct($filePath, $tempFolder = null)
        {
        }
        /**
         * Returns whether the XLSX file contains a shared strings XML file
         *
         * @return bool
         */
        public function hasSharedStrings()
        {
        }
        /**
         * Builds an in-memory array containing all the shared strings of the sheet.
         * All the strings are stored in a XML file, located at 'xl/sharedStrings.xml'.
         * It is then accessed by the sheet data, via the string index in the built table.
         *
         * More documentation available here: http://msdn.microsoft.com/en-us/library/office/gg278314.aspx
         *
         * The XML file can be really big with sheets containing a lot of data. That is why
         * we need to use a XML reader that provides streaming like the XMLReader library.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If sharedStrings.xml can't be read
         */
        public function extractSharedStrings()
        {
        }
        /**
         * Returns the shared strings unique count, as specified in <sst> tag.
         *
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader instance
         * @return int|null Number of unique shared strings in the sharedStrings.xml file
         * @throws \Box\Spout\Common\Exception\IOException If sharedStrings.xml is invalid and can't be read
         */
        protected function getSharedStringsUniqueCount($xmlReader)
        {
        }
        /**
         * Returns the best shared strings caching strategy.
         *
         * @param int|null $sharedStringsUniqueCount Number of unique shared strings (NULL if unknown)
         * @return CachingStrategyInterface
         */
        protected function getBestSharedStringsCachingStrategy($sharedStringsUniqueCount)
        {
        }
        /**
         * Processes the shared strings item XML node which the given XML reader is positioned on.
         *
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XML Reader positioned on a "<si>" node
         * @param int $sharedStringIndex Index of the processed shared strings item
         * @return void
         */
        protected function processSharedStringsItem($xmlReader, $sharedStringIndex)
        {
        }
        /**
         * Not all text nodes' values must be extracted.
         * Some text nodes are part of a node describing the pronunciation for instance.
         * We'll only consider the nodes whose parents are "<si>" or "<r>".
         *
         * @param \DOMElement $textNode Text node to check
         * @return bool Whether the given text node's value must be extracted
         */
        protected function shouldExtractTextNodeValue($textNode)
        {
        }
        /**
         * If the text node has the attribute 'xml:space="preserve"', then preserve whitespace.
         *
         * @param \DOMElement $textNode The text node element (<t>) whose whitespace may be preserved
         * @return bool Whether whitespace should be preserved
         */
        protected function shouldPreserveWhitespace($textNode)
        {
        }
        /**
         * Returns the shared string at the given index, using the previously chosen caching strategy.
         *
         * @param int $sharedStringIndex Index of the shared string in the sharedStrings.xml file
         * @return string The shared string at the given index
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If no shared string found for the given index
         */
        public function getStringAtIndex($sharedStringIndex)
        {
        }
        /**
         * Destroys the cache, freeing memory and removing any created artifacts
         *
         * @return void
         */
        public function cleanup()
        {
        }
    }
    /**
     * Class SheetHelper
     * This class provides helper functions related to XLSX sheets
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class SheetHelper
    {
        /** Paths of XML files relative to the XLSX file root */
        const WORKBOOK_XML_RELS_FILE_PATH = 'xl/_rels/workbook.xml.rels';
        const WORKBOOK_XML_FILE_PATH = 'xl/workbook.xml';
        /** Definition of XML node names used to parse data */
        const XML_NODE_WORKBOOK_VIEW = 'workbookView';
        const XML_NODE_SHEET = 'sheet';
        const XML_NODE_SHEETS = 'sheets';
        const XML_NODE_RELATIONSHIP = 'Relationship';
        /** Definition of XML attributes used to parse data */
        const XML_ATTRIBUTE_ACTIVE_TAB = 'activeTab';
        const XML_ATTRIBUTE_R_ID = 'r:id';
        const XML_ATTRIBUTE_NAME = 'name';
        const XML_ATTRIBUTE_ID = 'Id';
        const XML_ATTRIBUTE_TARGET = 'Target';
        /** @var string Path of the XLSX file being read */
        protected $filePath;
        /** @var \Box\Spout\Reader\XLSX\ReaderOptions Reader's current options */
        protected $options;
        /** @var \Box\Spout\Reader\XLSX\Helper\SharedStringsHelper Helper to work with shared strings */
        protected $sharedStringsHelper;
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /**
         * @param string $filePath Path of the XLSX file being read
         * @param \Box\Spout\Reader\XLSX\ReaderOptions $options Reader's current options
         * @param \Box\Spout\Reader\XLSX\Helper\SharedStringsHelper Helper to work with shared strings
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         */
        public function __construct($filePath, $options, $sharedStringsHelper, $globalFunctionsHelper)
        {
        }
        /**
         * Returns the sheets metadata of the file located at the previously given file path.
         * The paths to the sheets' data are read from the [Content_Types].xml file.
         *
         * @return Sheet[] Sheets within the XLSX file
         */
        public function getSheets()
        {
        }
        /**
         * Returns an instance of a sheet, given the XML node describing the sheet - from "workbook.xml".
         * We can find the XML file path describing the sheet inside "workbook.xml.res", by mapping with the sheet ID
         * ("r:id" in "workbook.xml", "Id" in "workbook.xml.res").
         *
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReaderOnSheetNode XML Reader instance, pointing on the node describing the sheet, as defined in "workbook.xml"
         * @param int $sheetIndexZeroBased Index of the sheet, based on order of appearance in the workbook (zero-based)
         * @param bool $isSheetActive Whether this sheet was defined as active
         * @return \Box\Spout\Reader\XLSX\Sheet Sheet instance
         */
        protected function getSheetFromSheetXMLNode($xmlReaderOnSheetNode, $sheetIndexZeroBased, $isSheetActive)
        {
        }
        /**
         * @param string $sheetId The sheet ID, as defined in "workbook.xml"
         * @return string The XML file path describing the sheet inside "workbook.xml.res", for the given sheet ID
         */
        protected function getSheetDataXMLFilePathForSheetId($sheetId)
        {
        }
    }
    /**
     * Class StyleHelper
     * This class provides helper functions related to XLSX styles
     *
     * @package Box\Spout\Reader\XLSX\Helper
     */
    class StyleHelper
    {
        /** Paths of XML files relative to the XLSX file root */
        const STYLES_XML_FILE_PATH = 'xl/styles.xml';
        /** Nodes used to find relevant information in the styles XML file */
        const XML_NODE_NUM_FMTS = 'numFmts';
        const XML_NODE_NUM_FMT = 'numFmt';
        const XML_NODE_CELL_XFS = 'cellXfs';
        const XML_NODE_XF = 'xf';
        /** Attributes used to find relevant information in the styles XML file */
        const XML_ATTRIBUTE_NUM_FMT_ID = 'numFmtId';
        const XML_ATTRIBUTE_FORMAT_CODE = 'formatCode';
        const XML_ATTRIBUTE_APPLY_NUMBER_FORMAT = 'applyNumberFormat';
        /** By convention, default style ID is 0 */
        const DEFAULT_STYLE_ID = 0;
        const NUMBER_FORMAT_GENERAL = 'General';
        /**
         * @see https://msdn.microsoft.com/en-us/library/ff529597(v=office.12).aspx
         * @var array Mapping between built-in numFmtId and the associated format - for dates only
         */
        protected static $builtinNumFmtIdToNumFormatMapping = [
            14 => 'm/d/yyyy',
            // @NOTE: ECMA spec is 'mm-dd-yy'
            15 => 'd-mmm-yy',
            16 => 'd-mmm',
            17 => 'mmm-yy',
            18 => 'h:mm AM/PM',
            19 => 'h:mm:ss AM/PM',
            20 => 'h:mm',
            21 => 'h:mm:ss',
            22 => 'm/d/yyyy h:mm',
            // @NOTE: ECMA spec is 'm/d/yy h:mm',
            45 => 'mm:ss',
            46 => '[h]:mm:ss',
            47 => 'mm:ss.0',
        ];
        /** @var string Path of the XLSX file being read */
        protected $filePath;
        /** @var array Array containing the IDs of built-in number formats indicating a date */
        protected $builtinNumFmtIdIndicatingDates;
        /** @var array Array containing a mapping NUM_FMT_ID => FORMAT_CODE */
        protected $customNumberFormats;
        /** @var array Array containing a mapping STYLE_ID => [STYLE_ATTRIBUTES] */
        protected $stylesAttributes;
        /** @var array Cache containing a mapping NUM_FMT_ID => IS_DATE_FORMAT. Used to avoid lots of recalculations */
        protected $numFmtIdToIsDateFormatCache = [];
        /**
         * @param string $filePath Path of the XLSX file being read
         */
        public function __construct($filePath)
        {
        }
        /**
         * Returns whether the style with the given ID should consider
         * numeric values as timestamps and format the cell as a date.
         *
         * @param int $styleId Zero-based style ID
         * @return bool Whether the cell with the given cell should display a date instead of a numeric value
         */
        public function shouldFormatNumericValueAsDate($styleId)
        {
        }
        /**
         * Reads the styles.xml file and extract the relevant information from the file.
         *
         * @return void
         */
        protected function extractRelevantInfo()
        {
        }
        /**
         * Extracts number formats from the "numFmt" nodes.
         * For simplicity, the styles attributes are kept in memory. This is possible thanks
         * to the reuse of formats. So 1 million cells should not use 1 million formats.
         *
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XML Reader positioned on the "numFmts" node
         * @return void
         */
        protected function extractNumberFormats($xmlReader)
        {
        }
        /**
         * Extracts style attributes from the "xf" nodes, inside the "cellXfs" section.
         * For simplicity, the styles attributes are kept in memory. This is possible thanks
         * to the reuse of styles. So 1 million cells should not use 1 million styles.
         *
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XML Reader positioned on the "cellXfs" node
         * @return void
         */
        protected function extractStyleAttributes($xmlReader)
        {
        }
        /**
         * @return array The custom number formats
         */
        protected function getCustomNumberFormats()
        {
        }
        /**
         * @return array The styles attributes
         */
        protected function getStylesAttributes()
        {
        }
        /**
         * @param array $styleAttributes Array containing the style attributes (2 keys: "applyNumberFormat" and "numFmtId")
         * @return bool Whether the style with the given attributes indicates that the number is a date
         */
        protected function doesStyleIndicateDate($styleAttributes)
        {
        }
        /**
         * Returns whether the number format ID indicates that the number is a date.
         * The result is cached to avoid recomputing the same thing over and over, as
         * "numFmtId" attributes can be shared between multiple styles.
         *
         * @param int $numFmtId
         * @return bool Whether the number format ID indicates that the number is a date
         */
        protected function doesNumFmtIdIndicateDate($numFmtId)
        {
        }
        /**
         * @param int $numFmtId
         * @return string|null The custom number format or NULL if none defined for the given numFmtId
         */
        protected function getFormatCodeForNumFmtId($numFmtId)
        {
        }
        /**
         * @param int $numFmtId
         * @return bool Whether the number format ID indicates that the number is a date
         */
        protected function isNumFmtIdBuiltInDateFormat($numFmtId)
        {
        }
        /**
         * @param string|null $formatCode
         * @return bool Whether the given format code indicates that the number is a date
         */
        protected function isFormatCodeCustomDateFormat($formatCode)
        {
        }
        /**
         * @param string $formatCode
         * @return bool Whether the given format code matches a date format pattern
         */
        protected function isFormatCodeMatchingDateFormatPattern($formatCode)
        {
        }
        /**
         * Returns the format as defined in "styles.xml" of the given style.
         * NOTE: It is assumed that the style DOES have a number format associated to it.
         *
         * @param int $styleId Zero-based style ID
         * @return string The number format code associated with the given style
         */
        public function getNumberFormatCode($styleId)
        {
        }
    }
}
namespace Box\Spout\Reader\XLSX {
    /**
     * Class Reader
     * This class provides support to read data from a XLSX file
     *
     * @package Box\Spout\Reader\XLSX
     */
    class Reader extends \Box\Spout\Reader\AbstractReader
    {
        /** @var \ZipArchive */
        protected $zip;
        /** @var \Box\Spout\Reader\XLSX\Helper\SharedStringsHelper Helper to work with shared strings */
        protected $sharedStringsHelper;
        /** @var SheetIterator To iterator over the XLSX sheets */
        protected $sheetIterator;
        /**
         * Returns the reader's current options
         *
         * @return ReaderOptions
         */
        protected function getOptions()
        {
        }
        /**
         * @param string $tempFolder Temporary folder where the temporary files will be created
         * @return Reader
         */
        public function setTempFolder($tempFolder)
        {
        }
        /**
         * Returns whether stream wrappers are supported
         *
         * @return bool
         */
        protected function doesSupportStreamWrapper()
        {
        }
        /**
         * Opens the file at the given file path to make it ready to be read.
         * It also parses the sharedStrings.xml file to get all the shared strings available in memory
         * and fetches all the available sheets.
         *
         * @param  string $filePath Path of the file to be read
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the file at the given path or its content cannot be read
         * @throws \Box\Spout\Reader\Exception\NoSheetsFoundException If there are no sheets in the file
         */
        protected function openReader($filePath)
        {
        }
        /**
         * Returns an iterator to iterate over sheets.
         *
         * @return SheetIterator To iterate over sheets
         */
        protected function getConcreteSheetIterator()
        {
        }
        /**
         * Closes the reader. To be used after reading the file.
         *
         * @return void
         */
        protected function closeReader()
        {
        }
    }
    /**
     * Class ReaderOptions
     * This class is used to customize the reader's behavior
     *
     * @package Box\Spout\Reader\XLSX
     */
    class ReaderOptions extends \Box\Spout\Reader\Common\ReaderOptions
    {
        /** @var string|null Temporary folder where the temporary files will be created */
        protected $tempFolder = null;
        /**
         * @return string|null Temporary folder where the temporary files will be created
         */
        public function getTempFolder()
        {
        }
        /**
         * @param string|null $tempFolder Temporary folder where the temporary files will be created
         * @return ReaderOptions
         */
        public function setTempFolder($tempFolder)
        {
        }
    }
    /**
     * Class RowIterator
     *
     * @package Box\Spout\Reader\XLSX
     */
    class RowIterator implements \Box\Spout\Reader\IteratorInterface
    {
        /** Definition of XML nodes names used to parse data */
        const XML_NODE_DIMENSION = 'dimension';
        const XML_NODE_WORKSHEET = 'worksheet';
        const XML_NODE_ROW = 'row';
        const XML_NODE_CELL = 'c';
        /** Definition of XML attributes used to parse data */
        const XML_ATTRIBUTE_REF = 'ref';
        const XML_ATTRIBUTE_SPANS = 'spans';
        const XML_ATTRIBUTE_ROW_INDEX = 'r';
        const XML_ATTRIBUTE_CELL_INDEX = 'r';
        /** @var string Path of the XLSX file being read */
        protected $filePath;
        /** @var string $sheetDataXMLFilePath Path of the sheet data XML file as in [Content_Types].xml */
        protected $sheetDataXMLFilePath;
        /** @var \Box\Spout\Reader\Wrapper\XMLReader The XMLReader object that will help read sheet's XML data */
        protected $xmlReader;
        /** @var \Box\Spout\Reader\Common\XMLProcessor Helper Object to process XML nodes */
        protected $xmlProcessor;
        /** @var Helper\CellValueFormatter Helper to format cell values */
        protected $cellValueFormatter;
        /** @var Helper\StyleHelper $styleHelper Helper to work with styles */
        protected $styleHelper;
        /**
         * TODO: This variable can be deleted when row indices get preserved
         * @var int Number of read rows
         */
        protected $numReadRows = 0;
        /** @var array Contains the data for the currently processed row (key = cell index, value = cell value) */
        protected $currentlyProcessedRowData = [];
        /** @var array|null Buffer used to store the row data, while checking if there are more rows to read */
        protected $rowDataBuffer = null;
        /** @var bool Indicates whether all rows have been read */
        protected $hasReachedEndOfFile = false;
        /** @var int The number of columns the sheet has (0 meaning undefined) */
        protected $numColumns = 0;
        /** @var bool Whether empty rows should be returned or skipped */
        protected $shouldPreserveEmptyRows;
        /** @var int Last row index processed (one-based) */
        protected $lastRowIndexProcessed = 0;
        /** @var int Row index to be processed next (one-based) */
        protected $nextRowIndexToBeProcessed = 0;
        /** @var int Last column index processed (zero-based) */
        protected $lastColumnIndexProcessed = -1;
        /**
         * @param string $filePath Path of the XLSX file being read
         * @param string $sheetDataXMLFilePath Path of the sheet data XML file as in [Content_Types].xml
         * @param \Box\Spout\Reader\XLSX\ReaderOptions $options Reader's current options
         * @param Helper\SharedStringsHelper $sharedStringsHelper Helper to work with shared strings
         */
        public function __construct($filePath, $sheetDataXMLFilePath, $options, $sharedStringsHelper)
        {
        }
        /**
         * @param string $sheetDataXMLFilePath Path of the sheet data XML file as in [Content_Types].xml
         * @return string Path of the XML file containing the sheet data,
         *                without the leading slash.
         */
        protected function normalizeSheetDataXMLFilePath($sheetDataXMLFilePath)
        {
        }
        /**
         * Rewind the Iterator to the first element.
         * Initializes the XMLReader object that reads the associated sheet data.
         * The XMLReader is configured to be safe from billion laughs attack.
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data XML cannot be read
         */
        public function rewind()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element. Reads data describing the next unprocessed row.
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If a shared string was not found
         * @throws \Box\Spout\Common\Exception\IOException If unable to read the sheet data XML
         */
        public function next()
        {
        }
        /**
         * Returns whether we need data for the next row to be processed.
         * We don't need to read data if:
         *   we have already read at least one row
         *     AND
         *   we need to preserve empty rows
         *     AND
         *   the last row that was read is not the row that need to be processed
         *   (i.e. if we need to return empty rows)
         *
         * @return bool Whether we need data for the next row to be processed.
         */
        protected function doesNeedDataForNextRowToBeProcessed()
        {
        }
        /**
         * @return void
         * @throws \Box\Spout\Reader\Exception\SharedStringNotFoundException If a shared string was not found
         * @throws \Box\Spout\Common\Exception\IOException If unable to read the sheet data XML
         */
        protected function readDataForNextRow()
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<dimension>" starting node
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processDimensionStartingNode($xmlReader)
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<row>" starting node
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processRowStartingNode($xmlReader)
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<cell>" starting node
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processCellStartingNode($xmlReader)
        {
        }
        /**
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processRowEndingNode()
        {
        }
        /**
         * @return int A return code that indicates what action should the processor take next
         */
        protected function processWorksheetEndingNode()
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<row>" node
         * @return int Row index
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException When the given cell index is invalid
         */
        protected function getRowIndex($xmlReader)
        {
        }
        /**
         * @param \Box\Spout\Reader\Wrapper\XMLReader $xmlReader XMLReader object, positioned on a "<c>" node
         * @return int Column index
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException When the given cell index is invalid
         */
        protected function getColumnIndex($xmlReader)
        {
        }
        /**
         * Returns the (unescaped) correctly marshalled, cell value associated to the given XML node.
         *
         * @param \DOMNode $node
         * @return string|int|float|bool|\DateTime|null The value associated with the cell (null when the cell has an error)
         */
        protected function getCellValue($node)
        {
        }
        /**
         * @param array $rowData
         * @return bool Whether the given row is empty
         */
        protected function isEmptyRow($rowData)
        {
        }
        /**
         * Return the current element, either an empty row or from the buffer.
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return array|null
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element. Here, the row index.
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
    /**
     * Class Sheet
     * Represents a sheet within a XLSX file
     *
     * @package Box\Spout\Reader\XLSX
     */
    class Sheet implements \Box\Spout\Reader\SheetInterface
    {
        /** @var \Box\Spout\Reader\XLSX\RowIterator To iterate over sheet's rows */
        protected $rowIterator;
        /** @var int Index of the sheet, based on order in the workbook (zero-based) */
        protected $index;
        /** @var string Name of the sheet */
        protected $name;
        /** @var bool Whether the sheet was the active one */
        protected $isActive;
        /**
         * @param string $filePath Path of the XLSX file being read
         * @param string $sheetDataXMLFilePath Path of the sheet data XML file as in [Content_Types].xml
         * @param int $sheetIndex Index of the sheet, based on order in the workbook (zero-based)
         * @param string $sheetName Name of the sheet
         * @param bool $isSheetActive Whether the sheet was defined as active
         * @param \Box\Spout\Reader\XLSX\ReaderOptions $options Reader's current options
         * @param Helper\SharedStringsHelper Helper to work with shared strings
         */
        public function __construct($filePath, $sheetDataXMLFilePath, $sheetIndex, $sheetName, $isSheetActive, $options, $sharedStringsHelper)
        {
        }
        /**
         * @api
         * @return \Box\Spout\Reader\XLSX\RowIterator
         */
        public function getRowIterator()
        {
        }
        /**
         * @api
         * @return int Index of the sheet, based on order in the workbook (zero-based)
         */
        public function getIndex()
        {
        }
        /**
         * @api
         * @return string Name of the sheet
         */
        public function getName()
        {
        }
        /**
         * @api
         * @return bool Whether the sheet was defined as active
         */
        public function isActive()
        {
        }
    }
    /**
     * Class SheetIterator
     * Iterate over XLSX sheet.
     *
     * @package Box\Spout\Reader\XLSX
     */
    class SheetIterator implements \Box\Spout\Reader\IteratorInterface
    {
        /** @var \Box\Spout\Reader\XLSX\Sheet[] The list of sheet present in the file */
        protected $sheets;
        /** @var int The index of the sheet being read (zero-based) */
        protected $currentSheetIndex;
        /**
         * @param string $filePath Path of the file to be read
         * @param \Box\Spout\Reader\XLSX\ReaderOptions $options Reader's current options
         * @param \Box\Spout\Reader\XLSX\Helper\SharedStringsHelper $sharedStringsHelper
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         * @throws \Box\Spout\Reader\Exception\NoSheetsFoundException If there are no sheets in the file
         */
        public function __construct($filePath, $options, $sharedStringsHelper, $globalFunctionsHelper)
        {
        }
        /**
         * Rewind the Iterator to the first element
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         */
        public function rewind()
        {
        }
        /**
         * Checks if current position is valid
         * @link http://php.net/manual/en/iterator.valid.php
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Move forward to next element
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         */
        public function next()
        {
        }
        /**
         * Return the current element
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return \Box\Spout\Reader\XLSX\Sheet
         */
        public function current()
        {
        }
        /**
         * Return the key of the current element
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Cleans up what was created to iterate over the object.
         *
         * @return void
         */
        public function end()
        {
        }
    }
}
namespace Box\Spout\Writer {
    /**
     * Interface WriterInterface
     *
     * @package Box\Spout\Writer
     */
    interface WriterInterface
    {
        /**
         * Inits the writer and opens it to accept data.
         * By using this method, the data will be written to a file.
         *
         * @param  string $outputFilePath Path of the output file that will contain the data
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\IOException If the writer cannot be opened or if the given path is not writable
         */
        public function openToFile($outputFilePath);
        /**
         * Inits the writer and opens it to accept data.
         * By using this method, the data will be outputted directly to the browser.
         *
         * @param  string $outputFileName Name of the output file that will contain the data. If a path is passed in, only the file name will be kept
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\IOException If the writer cannot be opened
         */
        public function openToBrowser($outputFileName);
        /**
         * Write given data to the output. New data will be appended to end of stream.
         *
         * @param  array $dataRow Array containing data to be streamed.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @return WriterInterface
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRow(array $dataRow);
        /**
         * Write given data to the output and apply the given style.
         * @see addRow
         *
         * @param array $dataRow Array of array containing data to be streamed.
         * @param Style\Style $style Style to be applied to the row.
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRowWithStyle(array $dataRow, $style);
        /**
         * Write given data to the output. New data will be appended to end of stream.
         *
         * @param  array $dataRows Array of array containing data to be streamed.
         *          Example $dataRow = [
         *              ['data11', 12, , '', 'data13'],
         *              ['data21', 'data22', null],
         *          ];
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRows(array $dataRows);
        /**
         * Write given data to the output and apply the given style.
         * @see addRows
         *
         * @param array $dataRows Array of array containing data to be streamed.
         * @param Style\Style $style Style to be applied to the rows.
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRowsWithStyle(array $dataRows, $style);
        /**
         * Closes the writer. This will close the streamer as well, preventing new data
         * to be written to the file.
         *
         * @return void
         */
        public function close();
    }
    /**
     * Class AbstractWriter
     *
     * @package Box\Spout\Writer
     * @abstract
     */
    abstract class AbstractWriter implements \Box\Spout\Writer\WriterInterface
    {
        /** @var string Path to the output file */
        protected $outputFilePath;
        /** @var resource Pointer to the file/stream we will write to */
        protected $filePointer;
        /** @var bool Indicates whether the writer has been opened or not */
        protected $isWriterOpened = false;
        /** @var \Box\Spout\Common\Helper\GlobalFunctionsHelper Helper to work with global functions */
        protected $globalFunctionsHelper;
        /** @var Style\Style Style to be applied to the next written row(s) */
        protected $rowStyle;
        /** @var Style\Style Default row style. Each writer can have its own default style */
        protected $defaultRowStyle;
        /** @var string Content-Type value for the header - to be defined by child class */
        protected static $headerContentType;
        /**
         * Opens the streamer and makes it ready to accept data.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the writer cannot be opened
         */
        protected abstract function openWriter();
        /**
         * Adds data to the currently openned writer.
         *
         * @param  array $dataRow Array containing data to be streamed.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param Style\Style $style Style to be applied to the written row
         * @return void
         */
        protected abstract function addRowToWriter(array $dataRow, $style);
        /**
         * Closes the streamer, preventing any additional writing.
         *
         * @return void
         */
        protected abstract function closeWriter();
        /**
         *
         */
        public function __construct()
        {
        }
        /**
         * Sets the default styles for all rows added with "addRow".
         * Overriding the default style instead of using "addRowWithStyle" improves performance by 20%.
         * @see https://github.com/box/spout/issues/272
         *
         * @param Style\Style $defaultStyle
         * @return AbstractWriter
         */
        public function setDefaultRowStyle($defaultStyle)
        {
        }
        /**
         * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
         * @return AbstractWriter
         */
        public function setGlobalFunctionsHelper($globalFunctionsHelper)
        {
        }
        /**
         * Inits the writer and opens it to accept data.
         * By using this method, the data will be written to a file.
         *
         * @api
         * @param  string $outputFilePath Path of the output file that will contain the data
         * @return AbstractWriter
         * @throws \Box\Spout\Common\Exception\IOException If the writer cannot be opened or if the given path is not writable
         */
        public function openToFile($outputFilePath)
        {
        }
        /**
         * Inits the writer and opens it to accept data.
         * By using this method, the data will be outputted directly to the browser.
         *
         * @codeCoverageIgnore
         *
         * @api
         * @param  string $outputFileName Name of the output file that will contain the data. If a path is passed in, only the file name will be kept
         * @return AbstractWriter
         * @throws \Box\Spout\Common\Exception\IOException If the writer cannot be opened
         */
        public function openToBrowser($outputFileName)
        {
        }
        /**
         * Checks if the pointer to the file/stream to write to is available.
         * Will throw an exception if not available.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the pointer is not available
         */
        protected function throwIfFilePointerIsNotAvailable()
        {
        }
        /**
         * Checks if the writer has already been opened, since some actions must be done before it gets opened.
         * Throws an exception if already opened.
         *
         * @param string $message Error message
         * @return void
         * @throws \Box\Spout\Writer\Exception\WriterAlreadyOpenedException If the writer was already opened and must not be.
         */
        protected function throwIfWriterAlreadyOpened($message)
        {
        }
        /**
         * Write given data to the output. New data will be appended to end of stream.
         *
         * @param  array $dataRow Array containing data to be streamed.
         *                        If empty, no data is added (i.e. not even as a blank row)
         *                        Example: $dataRow = ['data1', 1234, null, '', 'data5', false];
         * @api
         * @return AbstractWriter
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         * @throws \Box\Spout\Common\Exception\SpoutException If anything else goes wrong while writing data
         */
        public function addRow(array $dataRow)
        {
        }
        /**
         * Write given data to the output and apply the given style.
         * @see addRow
         *
         * @api
         * @param array $dataRow Array of array containing data to be streamed.
         * @param Style\Style $style Style to be applied to the row.
         * @return AbstractWriter
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRowWithStyle(array $dataRow, $style)
        {
        }
        /**
         * Write given data to the output. New data will be appended to end of stream.
         *
         * @api
         * @param  array $dataRows Array of array containing data to be streamed.
         *                         If a row is empty, it won't be added (i.e. not even as a blank row)
         *                         Example: $dataRows = [
         *                             ['data11', 12, , '', 'data13'],
         *                             ['data21', 'data22', null, false],
         *                         ];
         * @return AbstractWriter
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRows(array $dataRows)
        {
        }
        /**
         * Write given data to the output and apply the given style.
         * @see addRows
         *
         * @api
         * @param array $dataRows Array of array containing data to be streamed.
         * @param Style\Style $style Style to be applied to the rows.
         * @return AbstractWriter
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If the input param is not valid
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If this function is called before opening the writer
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        public function addRowsWithStyle(array $dataRows, $style)
        {
        }
        /**
         * Returns the default style to be applied to rows.
         * Can be overriden by children to have a custom style.
         *
         * @return Style\Style
         */
        protected function getDefaultRowStyle()
        {
        }
        /**
         * Sets the style to be applied to the next written rows
         * until it is changed or reset.
         *
         * @param Style\Style $style
         * @return void
         */
        private function setRowStyle($style)
        {
        }
        /**
         * Resets the style to be applied to the next written rows.
         *
         * @return void
         */
        private function resetRowStyleToDefault()
        {
        }
        /**
         * Closes the writer. This will close the streamer as well, preventing new data
         * to be written to the file.
         *
         * @api
         * @return void
         */
        public function close()
        {
        }
        /**
         * Closes the writer and attempts to cleanup all files that were
         * created during the writing process (temp files & final file).
         *
         * @return void
         */
        private function closeAndAttemptToCleanupAllFiles()
        {
        }
    }
    /**
     * Class AbstractMultiSheetsWriter
     *
     * @package Box\Spout\Writer
     * @abstract
     */
    abstract class AbstractMultiSheetsWriter extends \Box\Spout\Writer\AbstractWriter
    {
        /** @var bool Whether new sheets should be automatically created when the max rows limit per sheet is reached */
        protected $shouldCreateNewSheetsAutomatically = true;
        /**
         * @return Common\Internal\WorkbookInterface The workbook representing the file to be written
         */
        protected abstract function getWorkbook();
        /**
         * Sets whether new sheets should be automatically created when the max rows limit per sheet is reached.
         * This must be set before opening the writer.
         *
         * @api
         * @param bool $shouldCreateNewSheetsAutomatically Whether new sheets should be automatically created when the max rows limit per sheet is reached
         * @return AbstractMultiSheetsWriter
         * @throws \Box\Spout\Writer\Exception\WriterAlreadyOpenedException If the writer was already opened
         */
        public function setShouldCreateNewSheetsAutomatically($shouldCreateNewSheetsAutomatically)
        {
        }
        /**
         * Returns all the workbook's sheets
         *
         * @api
         * @return Common\Sheet[] All the workbook's sheets
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         */
        public function getSheets()
        {
        }
        /**
         * Creates a new sheet and make it the current sheet. The data will now be written to this sheet.
         *
         * @api
         * @return Common\Sheet The created sheet
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         */
        public function addNewSheetAndMakeItCurrent()
        {
        }
        /**
         * Returns the current sheet
         *
         * @api
         * @return Common\Sheet The current sheet
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         */
        public function getCurrentSheet()
        {
        }
        /**
         * Sets the given sheet as the current one. New data will be written to this sheet.
         * The writing will resume where it stopped (i.e. data won't be truncated).
         *
         * @api
         * @param Common\Sheet $sheet The sheet to set as current
         * @return void
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the writer has not been opened yet
         * @throws \Box\Spout\Writer\Exception\SheetNotFoundException If the given sheet does not exist in the workbook
         */
        public function setCurrentSheet($sheet)
        {
        }
        /**
         * Checks if the book has been created. Throws an exception if not created yet.
         *
         * @return void
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the book is not created yet
         */
        protected function throwIfBookIsNotAvailable()
        {
        }
    }
}
namespace Box\Spout\Writer\CSV {
    /**
     * Class Writer
     * This class provides support to write data to CSV files
     *
     * @package Box\Spout\Writer\CSV
     */
    class Writer extends \Box\Spout\Writer\AbstractWriter
    {
        /** Number of rows to write before flushing */
        const FLUSH_THRESHOLD = 500;
        /** @var string Content-Type value for the header */
        protected static $headerContentType = 'text/csv; charset=UTF-8';
        /** @var string Defines the character used to delimit fields (one character only) */
        protected $fieldDelimiter = ',';
        /** @var string Defines the character used to enclose fields (one character only) */
        protected $fieldEnclosure = '"';
        /** @var int */
        protected $lastWrittenRowIndex = 0;
        /** @var bool */
        protected $shouldAddBOM = true;
        /**
         * Sets the field delimiter for the CSV
         *
         * @api
         * @param string $fieldDelimiter Character that delimits fields
         * @return Writer
         */
        public function setFieldDelimiter($fieldDelimiter)
        {
        }
        /**
         * Sets the field enclosure for the CSV
         *
         * @api
         * @param string $fieldEnclosure Character that enclose fields
         * @return Writer
         */
        public function setFieldEnclosure($fieldEnclosure)
        {
        }
        /**
         * Set if a BOM has to be added to the file
         *
         * @param bool $shouldAddBOM
         * @return Writer
         */
        public function setShouldAddBOM($shouldAddBOM)
        {
        }
        /**
         * Opens the CSV streamer and makes it ready to accept data.
         *
         * @return void
         */
        protected function openWriter()
        {
        }
        /**
         * Adds data to the currently opened writer.
         *
         * @param  array $dataRow Array containing data to be written.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Ignored here since CSV does not support styling.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        protected function addRowToWriter(array $dataRow, $style)
        {
        }
        /**
         * Closes the CSV streamer, preventing any additional writing.
         * If set, sets the headers and redirects output to the browser.
         *
         * @return void
         */
        protected function closeWriter()
        {
        }
    }
}
namespace Box\Spout\Writer\Common\Helper {
    /**
     * Class AbstractStyleHelper
     * This class provides helper functions to manage styles
     *
     * @package Box\Spout\Writer\Common\Helper
     */
    abstract class AbstractStyleHelper
    {
        /** @var array [SERIALIZED_STYLE] => [STYLE_ID] mapping table, keeping track of the registered styles */
        protected $serializedStyleToStyleIdMappingTable = [];
        /** @var array [STYLE_ID] => [STYLE] mapping table, keeping track of the registered styles */
        protected $styleIdToStyleMappingTable = [];
        /**
         * @param \Box\Spout\Writer\Style\Style $defaultStyle
         */
        public function __construct($defaultStyle)
        {
        }
        /**
         * Registers the given style as a used style.
         * Duplicate styles won't be registered more than once.
         *
         * @param \Box\Spout\Writer\Style\Style $style The style to be registered
         * @return \Box\Spout\Writer\Style\Style The registered style, updated with an internal ID.
         */
        public function registerStyle($style)
        {
        }
        /**
         * Returns whether the given style has already been registered.
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return bool
         */
        protected function hasStyleAlreadyBeenRegistered($style)
        {
        }
        /**
         * Returns the registered style associated to the given serialization.
         *
         * @param string $serializedStyle The serialized style from which the actual style should be fetched from
         * @return \Box\Spout\Writer\Style\Style
         */
        protected function getStyleFromSerializedStyle($serializedStyle)
        {
        }
        /**
         * @return \Box\Spout\Writer\Style\Style[] List of registered styles
         */
        protected function getRegisteredStyles()
        {
        }
        /**
         * Returns the default style
         *
         * @return \Box\Spout\Writer\Style\Style Default style
         */
        protected function getDefaultStyle()
        {
        }
        /**
         * Apply additional styles if the given row needs it.
         * Typically, set "wrap text" if a cell contains a new line.
         *
         * @param \Box\Spout\Writer\Style\Style $style The original style
         * @param array $dataRow The row the style will be applied to
         * @return \Box\Spout\Writer\Style\Style The updated style
         */
        public function applyExtraStylesIfNeeded($style, $dataRow)
        {
        }
        /**
         * Set the "wrap text" option if a cell of the given row contains a new line.
         *
         * @NOTE: There is a bug on the Mac version of Excel (2011 and below) where new lines
         *        are ignored even when the "wrap text" option is set. This only occurs with
         *        inline strings (shared strings do work fine).
         *        A workaround would be to encode "\n" as "_x000D_" but it does not work
         *        on the Windows version of Excel...
         *
         * @param \Box\Spout\Writer\Style\Style $style The original style
         * @param array $dataRow The row the style will be applied to
         * @return \Box\Spout\Writer\Style\Style The eventually updated style
         */
        protected function applyWrapTextIfCellContainsNewLine($style, $dataRow)
        {
        }
    }
    /**
     * Class CellHelper
     * This class provides helper functions when working with cells
     *
     * @package Box\Spout\Writer\Common\Helper
     */
    class CellHelper
    {
        /** @var array Cache containing the mapping column index => cell index */
        private static $columnIndexToCellIndexCache = [];
        /**
         * Returns the cell index (base 26) associated to the base 10 column index.
         * Excel uses A to Z letters for column indexing, where A is the 1st column,
         * Z is the 26th and AA is the 27th.
         * The mapping is zero based, so that 0 maps to A, B maps to 1, Z to 25 and AA to 26.
         *
         * @param int $columnIndex The Excel column index (0, 42, ...)
         * @return string The associated cell index ('A', 'BC', ...)
         */
        public static function getCellIndexFromColumnIndex($columnIndex)
        {
        }
        /**
         * @param $value
         * @return bool Whether the given value is considered "empty"
         */
        public static function isEmpty($value)
        {
        }
        /**
         * @param $value
         * @return bool Whether the given value is a non empty string
         */
        public static function isNonEmptyString($value)
        {
        }
        /**
         * Returns whether the given value is numeric.
         * A numeric value is from type "integer" or "double" ("float" is not returned by gettype).
         *
         * @param $value
         * @return bool Whether the given value is numeric
         */
        public static function isNumeric($value)
        {
        }
        /**
         * Returns whether the given value is boolean.
         * "true"/"false" and 0/1 are not booleans.
         *
         * @param $value
         * @return bool Whether the given value is boolean
         */
        public static function isBoolean($value)
        {
        }
    }
    /**
     * Class ZipHelper
     * This class provides helper functions to create zip files
     *
     * @package Box\Spout\Writer\Common\Helper
     */
    class ZipHelper
    {
        const ZIP_EXTENSION = '.zip';
        /** Controls what to do when trying to add an existing file */
        const EXISTING_FILES_SKIP = 'skip';
        const EXISTING_FILES_OVERWRITE = 'overwrite';
        /** @var string Path of the folder where the zip file will be created */
        protected $tmpFolderPath;
        /** @var \ZipArchive The ZipArchive instance */
        protected $zip;
        /**
         * @param string $tmpFolderPath Path of the temp folder where the zip file will be created
         */
        public function __construct($tmpFolderPath)
        {
        }
        /**
         * Returns the already created ZipArchive instance or
         * creates one if none exists.
         *
         * @return \ZipArchive
         */
        protected function createOrGetZip()
        {
        }
        /**
         * @return string Path where the zip file of the given folder will be created
         */
        public function getZipFilePath()
        {
        }
        /**
         * Adds the given file, located under the given root folder to the archive.
         * The file will be compressed.
         *
         * Example of use:
         *   addFileToArchive('/tmp/xlsx/foo', 'bar/baz.xml');
         *   => will add the file located at '/tmp/xlsx/foo/bar/baz.xml' in the archive, but only as 'bar/baz.xml'
         *
         * @param string $rootFolderPath Path of the root folder that will be ignored in the archive tree.
         * @param string $localFilePath Path of the file to be added, under the root folder
         * @param string|void $existingFileMode Controls what to do when trying to add an existing file
         * @return void
         */
        public function addFileToArchive($rootFolderPath, $localFilePath, $existingFileMode = self::EXISTING_FILES_OVERWRITE)
        {
        }
        /**
         * Adds the given file, located under the given root folder to the archive.
         * The file will NOT be compressed.
         *
         * Example of use:
         *   addUncompressedFileToArchive('/tmp/xlsx/foo', 'bar/baz.xml');
         *   => will add the file located at '/tmp/xlsx/foo/bar/baz.xml' in the archive, but only as 'bar/baz.xml'
         *
         * @param string $rootFolderPath Path of the root folder that will be ignored in the archive tree.
         * @param string $localFilePath Path of the file to be added, under the root folder
         * @param string|void $existingFileMode Controls what to do when trying to add an existing file
         * @return void
         */
        public function addUncompressedFileToArchive($rootFolderPath, $localFilePath, $existingFileMode = self::EXISTING_FILES_OVERWRITE)
        {
        }
        /**
         * Adds the given file, located under the given root folder to the archive.
         * The file will NOT be compressed.
         *
         * Example of use:
         *   addUncompressedFileToArchive('/tmp/xlsx/foo', 'bar/baz.xml');
         *   => will add the file located at '/tmp/xlsx/foo/bar/baz.xml' in the archive, but only as 'bar/baz.xml'
         *
         * @param string $rootFolderPath Path of the root folder that will be ignored in the archive tree.
         * @param string $localFilePath Path of the file to be added, under the root folder
         * @param string $existingFileMode Controls what to do when trying to add an existing file
         * @param int $compressionMethod The compression method
         * @return void
         */
        protected function addFileToArchiveWithCompressionMethod($rootFolderPath, $localFilePath, $existingFileMode, $compressionMethod)
        {
        }
        /**
         * @return bool Whether it is possible to choose the desired compression method to be used
         */
        public static function canChooseCompressionMethod()
        {
        }
        /**
         * @param string $folderPath Path to the folder to be zipped
         * @param string|void $existingFileMode Controls what to do when trying to add an existing file
         * @return void
         */
        public function addFolderToArchive($folderPath, $existingFileMode = self::EXISTING_FILES_OVERWRITE)
        {
        }
        /**
         * @param \ZipArchive $zip
         * @param string $itemLocalPath
         * @param string $existingFileMode
         * @return bool Whether the file should be added to the archive or skipped
         */
        protected function shouldSkipFile($zip, $itemLocalPath, $existingFileMode)
        {
        }
        /**
         * Returns canonicalized absolute pathname, containing only forward slashes.
         *
         * @param string $path Path to normalize
         * @return string Normalized and canonicalized path
         */
        protected function getNormalizedRealPath($path)
        {
        }
        /**
         * Closes the archive and copies it into the given stream
         *
         * @param resource $streamPointer Pointer to the stream to copy the zip
         * @return void
         */
        public function closeArchiveAndCopyToStream($streamPointer)
        {
        }
        /**
         * Streams the contents of the zip file into the given stream
         *
         * @param resource $pointer Pointer to the stream to copy the zip
         * @return void
         */
        protected function copyZipToStream($pointer)
        {
        }
    }
}
namespace Box\Spout\Writer\Common\Internal {
    /**
     * Interface WorkbookInterface
     *
     * @package Box\Spout\Writer\Common\Internal
     */
    interface WorkbookInterface
    {
        /**
         * Creates a new sheet in the workbook. The current sheet remains unchanged.
         *
         * @return WorksheetInterface The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public function addNewSheet();
        /**
         * Creates a new sheet in the workbook and make it the current sheet.
         * The writing will resume where it stopped (i.e. data won't be truncated).
         *
         * @return WorksheetInterface The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public function addNewSheetAndMakeItCurrent();
        /**
         * @return WorksheetInterface[] All the workbook's sheets
         */
        public function getWorksheets();
        /**
         * Returns the current sheet
         *
         * @return WorksheetInterface The current sheet
         */
        public function getCurrentWorksheet();
        /**
         * Sets the given sheet as the current one. New data will be written to this sheet.
         * The writing will resume where it stopped (i.e. data won't be truncated).
         *
         * @param \Box\Spout\Writer\Common\Sheet $sheet The "external" sheet to set as current
         * @return void
         * @throws \Box\Spout\Writer\Exception\SheetNotFoundException If the given sheet does not exist in the workbook
         */
        public function setCurrentSheet($sheet);
        /**
         * Adds data to the current sheet.
         * If shouldCreateNewSheetsAutomatically option is set to true, it will handle pagination
         * with the creation of new worksheets if one worksheet has reached its maximum capicity.
         *
         * @param array $dataRow Array containing data to be written.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If trying to create a new sheet and unable to open the sheet for writing
         * @throws \Box\Spout\Writer\Exception\WriterException If unable to write data
         */
        public function addRowToCurrentWorksheet($dataRow, $style);
        /**
         * Closes the workbook and all its associated sheets.
         * All the necessary files are written to disk and zipped together to create the ODS file.
         * All the temporary files are then deleted.
         *
         * @param resource $finalFilePointer Pointer to the ODS that will be created
         * @return void
         */
        public function close($finalFilePointer);
    }
    /**
     * Class Workbook
     * Represents a workbook within a spreadsheet file.
     * It provides the functions to work with worksheets.
     *
     * @package Box\Spout\Writer\Common
     */
    abstract class AbstractWorkbook implements \Box\Spout\Writer\Common\Internal\WorkbookInterface
    {
        /** @var bool Whether new sheets should be automatically created when the max rows limit per sheet is reached */
        protected $shouldCreateNewSheetsAutomatically;
        /** @var string Timestamp based unique ID identifying the workbook */
        protected $internalId;
        /** @var WorksheetInterface[] Array containing the workbook's sheets */
        protected $worksheets = [];
        /** @var WorksheetInterface The worksheet where data will be written to */
        protected $currentWorksheet;
        /**
         * @param bool $shouldCreateNewSheetsAutomatically
         * @param \Box\Spout\Writer\Style\Style $defaultRowStyle
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the base folders
         */
        public function __construct($shouldCreateNewSheetsAutomatically, $defaultRowStyle)
        {
        }
        /**
         * @return \Box\Spout\Writer\Common\Helper\AbstractStyleHelper The specific style helper
         */
        protected abstract function getStyleHelper();
        /**
         * @return int Maximum number of rows/columns a sheet can contain
         */
        protected abstract function getMaxRowsPerWorksheet();
        /**
         * Creates a new sheet in the workbook. The current sheet remains unchanged.
         *
         * @return WorksheetInterface The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public abstract function addNewSheet();
        /**
         * Creates a new sheet in the workbook and make it the current sheet.
         * The writing will resume where it stopped (i.e. data won't be truncated).
         *
         * @return WorksheetInterface The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public function addNewSheetAndMakeItCurrent()
        {
        }
        /**
         * @return WorksheetInterface[] All the workbook's sheets
         */
        public function getWorksheets()
        {
        }
        /**
         * Returns the current sheet
         *
         * @return WorksheetInterface The current sheet
         */
        public function getCurrentWorksheet()
        {
        }
        /**
         * Sets the given sheet as the current one. New data will be written to this sheet.
         * The writing will resume where it stopped (i.e. data won't be truncated).
         *
         * @param \Box\Spout\Writer\Common\Sheet $sheet The "external" sheet to set as current
         * @return void
         * @throws \Box\Spout\Writer\Exception\SheetNotFoundException If the given sheet does not exist in the workbook
         */
        public function setCurrentSheet($sheet)
        {
        }
        /**
         * @param WorksheetInterface $worksheet
         * @return void
         */
        protected function setCurrentWorksheet($worksheet)
        {
        }
        /**
         * Returns the worksheet associated to the given external sheet.
         *
         * @param \Box\Spout\Writer\Common\Sheet $sheet
         * @return WorksheetInterface|null The worksheet associated to the given external sheet or null if not found.
         */
        protected function getWorksheetFromExternalSheet($sheet)
        {
        }
        /**
         * Adds data to the current sheet.
         * If shouldCreateNewSheetsAutomatically option is set to true, it will handle pagination
         * with the creation of new worksheets if one worksheet has reached its maximum capicity.
         *
         * @param array $dataRow Array containing data to be written. Cannot be empty.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If trying to create a new sheet and unable to open the sheet for writing
         * @throws \Box\Spout\Writer\Exception\WriterException If unable to write data
         */
        public function addRowToCurrentWorksheet($dataRow, $style)
        {
        }
        /**
         * @return bool Whether the current worksheet has reached the maximum number of rows per sheet.
         */
        protected function hasCurrentWorkseetReachedMaxRows()
        {
        }
        /**
         * Closes the workbook and all its associated sheets.
         * All the necessary files are written to disk and zipped together to create the ODS file.
         * All the temporary files are then deleted.
         *
         * @param resource $finalFilePointer Pointer to the ODS that will be created
         * @return void
         */
        public abstract function close($finalFilePointer);
    }
    /**
     * Interface WorksheetInterface
     *
     * @package Box\Spout\Writer\Common\Internal
     */
    interface WorksheetInterface
    {
        /**
         * @return \Box\Spout\Writer\Common\Sheet The "external" sheet
         */
        public function getExternalSheet();
        /**
         * @return int The index of the last written row
         */
        public function getLastWrittenRowIndex();
        /**
         * Adds data to the worksheet.
         *
         * @param array $dataRow Array containing data to be written.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row. NULL means use default style.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the data cannot be written
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If a cell value's type is not supported
         */
        public function addRow($dataRow, $style);
        /**
         * Closes the worksheet
         *
         * @return void
         */
        public function close();
    }
}
namespace Box\Spout\Writer\Common {
    /**
     * Class Sheet
     * External representation of a worksheet
     *
     * @package Box\Spout\Writer\Common
     */
    class Sheet
    {
        const DEFAULT_SHEET_NAME_PREFIX = 'Sheet';
        /** Sheet name should not exceed 31 characters */
        const MAX_LENGTH_SHEET_NAME = 31;
        /** @var array Invalid characters that cannot be contained in the sheet name */
        private static $INVALID_CHARACTERS_IN_SHEET_NAME = ['\\', '/', '?', '*', ':', '[', ']'];
        /** @var array Associative array [WORKBOOK_ID] => [[SHEET_INDEX] => [SHEET_NAME]] keeping track of sheets' name to enforce uniqueness per workbook */
        protected static $SHEETS_NAME_USED = [];
        /** @var int Index of the sheet, based on order in the workbook (zero-based) */
        protected $index;
        /** @var string ID of the sheet's associated workbook. Used to restrict sheet name uniqueness enforcement to a single workbook */
        protected $associatedWorkbookId;
        /** @var string Name of the sheet */
        protected $name;
        /** @var \Box\Spout\Common\Helper\StringHelper */
        protected $stringHelper;
        /**
         * @param int $sheetIndex Index of the sheet, based on order in the workbook (zero-based)
         * @param string $associatedWorkbookId ID of the sheet's associated workbook
         */
        public function __construct($sheetIndex, $associatedWorkbookId)
        {
        }
        /**
         * @api
         * @return int Index of the sheet, based on order in the workbook (zero-based)
         */
        public function getIndex()
        {
        }
        /**
         * @api
         * @return string Name of the sheet
         */
        public function getName()
        {
        }
        /**
         * Sets the name of the sheet. Note that Excel has some restrictions on the name:
         *  - it should not be blank
         *  - it should not exceed 31 characters
         *  - it should not contain these characters: \ / ? * : [ or ]
         *  - it should be unique
         *
         * @api
         * @param string $name Name of the sheet
         * @return Sheet
         * @throws \Box\Spout\Writer\Exception\InvalidSheetNameException If the sheet's name is invalid.
         */
        public function setName($name)
        {
        }
        /**
         * Throws an exception if the given sheet's name is not valid.
         * @see Sheet::setName for validity rules.
         *
         * @param string $name
         * @return void
         * @throws \Box\Spout\Writer\Exception\InvalidSheetNameException If the sheet's name is invalid.
         */
        protected function throwIfNameIsInvalid($name)
        {
        }
        /**
         * Returns whether the given name contains at least one invalid character.
         * @see Sheet::$INVALID_CHARACTERS_IN_SHEET_NAME for the full list.
         *
         * @param string $name
         * @return bool TRUE if the name contains invalid characters, FALSE otherwise.
         */
        protected function doesContainInvalidCharacters($name)
        {
        }
        /**
         * Returns whether the given name starts or ends with a single quote
         *
         * @param string $name
         * @return bool TRUE if the name starts or ends with a single quote, FALSE otherwise.
         */
        protected function doesStartOrEndWithSingleQuote($name)
        {
        }
        /**
         * Returns whether the given name is unique.
         *
         * @param string $name
         * @return bool TRUE if the name is unique, FALSE otherwise.
         */
        protected function isNameUnique($name)
        {
        }
    }
}
namespace Box\Spout\Writer\Exception {
    /**
     * Class WriterException
     *
     * @package Box\Spout\Writer\Exception
     * @abstract
     */
    abstract class WriterException extends \Box\Spout\Common\Exception\SpoutException
    {
    }
}
namespace Box\Spout\Writer\Exception\Border {
    class InvalidNameException extends \Box\Spout\Writer\Exception\WriterException
    {
        public function __construct($name)
        {
        }
    }
    class InvalidStyleException extends \Box\Spout\Writer\Exception\WriterException
    {
        public function __construct($name)
        {
        }
    }
    class InvalidWidthException extends \Box\Spout\Writer\Exception\WriterException
    {
        public function __construct($name)
        {
        }
    }
}
namespace Box\Spout\Writer\Exception {
    /**
     * Class InvalidColorException
     *
     * @api
     * @package Box\Spout\Writer\Exception
     */
    class InvalidColorException extends \Box\Spout\Writer\Exception\WriterException
    {
    }
    /**
     * Class InvalidSheetNameException
     *
     * @api
     * @package Box\Spout\Writer\Exception
     */
    class InvalidSheetNameException extends \Box\Spout\Writer\Exception\WriterException
    {
    }
    /**
     * Class SheetNotFoundException
     *
     * @api
     * @package Box\Spout\Writer\Exception
     */
    class SheetNotFoundException extends \Box\Spout\Writer\Exception\WriterException
    {
    }
    /**
     * Class WriterAlreadyOpenedException
     *
     * @api
     * @package Box\Spout\Writer\Exception
     */
    class WriterAlreadyOpenedException extends \Box\Spout\Writer\Exception\WriterException
    {
    }
    /**
     * Class WriterNotOpenedException
     *
     * @api
     * @package Box\Spout\Writer\Exception
     */
    class WriterNotOpenedException extends \Box\Spout\Writer\Exception\WriterException
    {
    }
}
namespace Box\Spout\Writer\ODS\Helper {
    /**
     * Class BorderHelper
     *
     * The fo:border, fo:border-top, fo:border-bottom, fo:border-left and fo:border-right attributes
     * specify border properties
     * http://docs.oasis-open.org/office/v1.2/os/OpenDocument-v1.2-os-part1.html#__RefHeading__1419780_253892949
     *
     * Example table-cell-properties
     *
     * <style:table-cell-properties
     * fo:border-bottom="0.74pt solid #ffc000" style:diagonal-bl-tr="none"
     * style:diagonal-tl-br="none" fo:border-left="none" fo:border-right="none"
     * style:rotation-align="none" fo:border-top="none"/>
     */
    class BorderHelper
    {
        /**
         * Width mappings
         *
         * @var array
         */
        protected static $widthMap = [\Box\Spout\Writer\Style\Border::WIDTH_THIN => '0.75pt', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => '1.75pt', \Box\Spout\Writer\Style\Border::WIDTH_THICK => '2.5pt'];
        /**
         * Style mapping
         *
         * @var array
         */
        protected static $styleMap = [\Box\Spout\Writer\Style\Border::STYLE_SOLID => 'solid', \Box\Spout\Writer\Style\Border::STYLE_DASHED => 'dashed', \Box\Spout\Writer\Style\Border::STYLE_DOTTED => 'dotted', \Box\Spout\Writer\Style\Border::STYLE_DOUBLE => 'double'];
        /**
         * @param BorderPart $borderPart
         * @return string
         */
        public static function serializeBorderPart(\Box\Spout\Writer\Style\BorderPart $borderPart)
        {
        }
    }
    /**
     * Class FileSystemHelper
     * This class provides helper functions to help with the file system operations
     * like files/folders creation & deletion for ODS files
     *
     * @package Box\Spout\Writer\ODS\Helper
     */
    class FileSystemHelper extends \Box\Spout\Common\Helper\FileSystemHelper
    {
        const APP_NAME = 'Spout';
        const MIMETYPE = 'application/vnd.oasis.opendocument.spreadsheet';
        const META_INF_FOLDER_NAME = 'META-INF';
        const SHEETS_CONTENT_TEMP_FOLDER_NAME = 'worksheets-temp';
        const MANIFEST_XML_FILE_NAME = 'manifest.xml';
        const CONTENT_XML_FILE_NAME = 'content.xml';
        const META_XML_FILE_NAME = 'meta.xml';
        const MIMETYPE_FILE_NAME = 'mimetype';
        const STYLES_XML_FILE_NAME = 'styles.xml';
        /** @var string Path to the root folder inside the temp folder where the files to create the ODS will be stored */
        protected $rootFolder;
        /** @var string Path to the "META-INF" folder inside the root folder */
        protected $metaInfFolder;
        /** @var string Path to the temp folder, inside the root folder, where specific sheets content will be written to */
        protected $sheetsContentTempFolder;
        /**
         * @return string
         */
        public function getRootFolder()
        {
        }
        /**
         * @return string
         */
        public function getSheetsContentTempFolder()
        {
        }
        /**
         * Creates all the folders needed to create a ODS file, as well as the files that won't change.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the base folders
         */
        public function createBaseFilesAndFolders()
        {
        }
        /**
         * Creates the folder that will be used as root
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder
         */
        protected function createRootFolder()
        {
        }
        /**
         * Creates the "META-INF" folder under the root folder as well as the "manifest.xml" file in it
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder or the "manifest.xml" file
         */
        protected function createMetaInfoFolderAndFile()
        {
        }
        /**
         * Creates the "manifest.xml" file under the "META-INF" folder (under root)
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createManifestFile()
        {
        }
        /**
         * Creates the temp folder where specific sheets content will be written to.
         * This folder is not part of the final ODS file and is only used to be able to jump between sheets.
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder
         */
        protected function createSheetsContentTempFolder()
        {
        }
        /**
         * Creates the "meta.xml" file under the root folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createMetaFile()
        {
        }
        /**
         * Creates the "mimetype" file under the root folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createMimetypeFile()
        {
        }
        /**
         * Creates the "content.xml" file under the root folder
         *
         * @param Worksheet[] $worksheets
         * @param StyleHelper $styleHelper
         * @return FileSystemHelper
         */
        public function createContentFile($worksheets, $styleHelper)
        {
        }
        /**
         * Streams the content of the file at the given path into the target resource.
         * Depending on which mode the target resource was created with, it will truncate then copy
         * or append the content to the target file.
         *
         * @param string $sourceFilePath Path of the file whose content will be copied
         * @param resource $targetResource Target resource that will receive the content
         * @return void
         */
        protected function copyFileContentsToTarget($sourceFilePath, $targetResource)
        {
        }
        /**
         * Deletes the temporary folder where sheets content was stored.
         *
         * @return FileSystemHelper
         */
        public function deleteWorksheetTempFolder()
        {
        }
        /**
         * Creates the "styles.xml" file under the root folder
         *
         * @param StyleHelper $styleHelper
         * @param int $numWorksheets Number of created worksheets
         * @return FileSystemHelper
         */
        public function createStylesFile($styleHelper, $numWorksheets)
        {
        }
        /**
         * Zips the root folder and streams the contents of the zip into the given stream
         *
         * @param resource $streamPointer Pointer to the stream to copy the zip
         * @return void
         */
        public function zipRootFolderAndCopyToStream($streamPointer)
        {
        }
    }
    /**
     * Class StyleHelper
     * This class provides helper functions to manage styles
     *
     * @package Box\Spout\Writer\ODS\Helper
     */
    class StyleHelper extends \Box\Spout\Writer\Common\Helper\AbstractStyleHelper
    {
        /** @var string[] [FONT_NAME] => [] Map whose keys contain all the fonts used */
        protected $usedFontsSet = [];
        /**
         * Registers the given style as a used style.
         * Duplicate styles won't be registered more than once.
         *
         * @param \Box\Spout\Writer\Style\Style $style The style to be registered
         * @return \Box\Spout\Writer\Style\Style The registered style, updated with an internal ID.
         */
        public function registerStyle($style)
        {
        }
        /**
         * @return string[] List of used fonts name
         */
        protected function getUsedFonts()
        {
        }
        /**
         * Returns the content of the "styles.xml" file, given a list of styles.
         *
         * @param int $numWorksheets Number of worksheets created
         * @return string
         */
        public function getStylesXMLFileContent($numWorksheets)
        {
        }
        /**
         * Returns the content of the "<office:font-face-decls>" section, inside "styles.xml" file.
         *
         * @return string
         */
        protected function getFontFaceSectionContent()
        {
        }
        /**
         * Returns the content of the "<office:styles>" section, inside "styles.xml" file.
         *
         * @return string
         */
        protected function getStylesSectionContent()
        {
        }
        /**
         * Returns the content of the "<office:automatic-styles>" section, inside "styles.xml" file.
         *
         * @param int $numWorksheets Number of worksheets created
         * @return string
         */
        protected function getAutomaticStylesSectionContent($numWorksheets)
        {
        }
        /**
         * Returns the content of the "<office:master-styles>" section, inside "styles.xml" file.
         *
         * @param int $numWorksheets Number of worksheets created
         * @return string
         */
        protected function getMasterStylesSectionContent($numWorksheets)
        {
        }
        /**
         * Returns the contents of the "<office:font-face-decls>" section, inside "content.xml" file.
         *
         * @return string
         */
        public function getContentXmlFontFaceSectionContent()
        {
        }
        /**
         * Returns the contents of the "<office:automatic-styles>" section, inside "content.xml" file.
         *
         * @param int $numWorksheets Number of worksheets created
         * @return string
         */
        public function getContentXmlAutomaticStylesSectionContent($numWorksheets)
        {
        }
        /**
         * Returns the contents of the "<style:style>" section, inside "<office:automatic-styles>" section
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return string
         */
        protected function getStyleSectionContent($style)
        {
        }
        /**
         * Returns the contents of the "<style:text-properties>" section, inside "<style:style>" section
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return string
         */
        private function getTextPropertiesSectionContent($style)
        {
        }
        /**
         * Returns the contents of the "<style:text-properties>" section, inside "<style:style>" section
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return string
         */
        private function getFontSectionContent($style)
        {
        }
        /**
         * Returns the contents of the "<style:table-cell-properties>" section, inside "<style:style>" section
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return string
         */
        private function getTableCellPropertiesSectionContent($style)
        {
        }
        /**
         * Returns the contents of the wrap text definition for the "<style:table-cell-properties>" section
         *
         * @return string
         */
        private function getWrapTextXMLContent()
        {
        }
        /**
         * Returns the contents of the borders definition for the "<style:table-cell-properties>" section
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return string
         */
        private function getBorderXMLContent($style)
        {
        }
        /**
         * Returns the contents of the background color definition for the "<style:table-cell-properties>" section
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return string
         */
        private function getBackgroundColorXMLContent($style)
        {
        }
    }
}
namespace Box\Spout\Writer\ODS\Internal {
    /**
     * Class Workbook
     * Represents a workbook within a ODS file.
     * It provides the functions to work with worksheets.
     *
     * @package Box\Spout\Writer\ODS\Internal
     */
    class Workbook extends \Box\Spout\Writer\Common\Internal\AbstractWorkbook
    {
        /**
         * Maximum number of rows a ODS sheet can contain
         * @see https://ask.libreoffice.org/en/question/8631/upper-limit-to-number-of-rows-in-calc/
         */
        protected static $maxRowsPerWorksheet = 1048576;
        /** @var \Box\Spout\Writer\ODS\Helper\FileSystemHelper Helper to perform file system operations */
        protected $fileSystemHelper;
        /** @var \Box\Spout\Writer\ODS\Helper\StyleHelper Helper to apply styles */
        protected $styleHelper;
        /**
         * @param string $tempFolder
         * @param bool $shouldCreateNewSheetsAutomatically
         * @param \Box\Spout\Writer\Style\Style $defaultRowStyle
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the base folders
         */
        public function __construct($tempFolder, $shouldCreateNewSheetsAutomatically, $defaultRowStyle)
        {
        }
        /**
         * @return \Box\Spout\Writer\ODS\Helper\StyleHelper Helper to apply styles to ODS files
         */
        protected function getStyleHelper()
        {
        }
        /**
         * @return int Maximum number of rows/columns a sheet can contain
         */
        protected function getMaxRowsPerWorksheet()
        {
        }
        /**
         * Creates a new sheet in the workbook. The current sheet remains unchanged.
         *
         * @return Worksheet The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public function addNewSheet()
        {
        }
        /**
         * Closes the workbook and all its associated sheets.
         * All the necessary files are written to disk and zipped together to create the ODS file.
         * All the temporary files are then deleted.
         *
         * @param resource $finalFilePointer Pointer to the ODS that will be created
         * @return void
         */
        public function close($finalFilePointer)
        {
        }
        /**
         * Deletes the root folder created in the temp folder and all its contents.
         *
         * @return void
         */
        protected function cleanupTempFolder()
        {
        }
    }
    /**
     * Class Worksheet
     * Represents a worksheet within a ODS file. The difference with the Sheet object is
     * that this class provides an interface to write data
     *
     * @package Box\Spout\Writer\ODS\Internal
     */
    class Worksheet implements \Box\Spout\Writer\Common\Internal\WorksheetInterface
    {
        /** @var \Box\Spout\Writer\Common\Sheet The "external" sheet */
        protected $externalSheet;
        /** @var string Path to the XML file that will contain the sheet data */
        protected $worksheetFilePath;
        /** @var \Box\Spout\Common\Escaper\ODS Strings escaper */
        protected $stringsEscaper;
        /** @var \Box\Spout\Common\Helper\StringHelper To help with string manipulation */
        protected $stringHelper;
        /** @var Resource Pointer to the temporary sheet data file (e.g. worksheets-temp/sheet1.xml) */
        protected $sheetFilePointer;
        /** @var int Maximum number of columns among all the written rows */
        protected $maxNumColumns = 1;
        /** @var int Index of the last written row */
        protected $lastWrittenRowIndex = 0;
        /**
         * @param \Box\Spout\Writer\Common\Sheet $externalSheet The associated "external" sheet
         * @param string $worksheetFilesFolder Temporary folder where the files to create the ODS will be stored
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        public function __construct($externalSheet, $worksheetFilesFolder)
        {
        }
        /**
         * Prepares the worksheet to accept data
         * The XML file does not contain the "<table:table>" node as it contains the sheet's name
         * which may change during the execution of the program. It will be added at the end.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        protected function startSheet()
        {
        }
        /**
         * Checks if the book has been created. Throws an exception if not created yet.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        protected function throwIfSheetFilePointerIsNotAvailable()
        {
        }
        /**
         * @return string Path to the temporary sheet content XML file
         */
        public function getWorksheetFilePath()
        {
        }
        /**
         * Returns the table XML root node as string.
         *
         * @return string <table> node as string
         */
        public function getTableElementStartAsString()
        {
        }
        /**
         * @return \Box\Spout\Writer\Common\Sheet The "external" sheet
         */
        public function getExternalSheet()
        {
        }
        /**
         * @return int The index of the last written row
         */
        public function getLastWrittenRowIndex()
        {
        }
        /**
         * Adds data to the worksheet.
         *
         * @param array $dataRow Array containing data to be written. Cannot be empty.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row. NULL means use default style.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the data cannot be written
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If a cell value's type is not supported
         */
        public function addRow($dataRow, $style)
        {
        }
        /**
         * Returns the cell XML content, given its value.
         *
         * @param mixed $cellValue The value to be written
         * @param int $styleIndex Index of the used style
         * @param int $numTimesValueRepeated Number of times the value is consecutively repeated
         * @return string The cell XML content
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If a cell value's type is not supported
         */
        protected function getCellXML($cellValue, $styleIndex, $numTimesValueRepeated)
        {
        }
        /**
         * Closes the worksheet
         *
         * @return void
         */
        public function close()
        {
        }
    }
}
namespace Box\Spout\Writer\ODS {
    /**
     * Class Writer
     * This class provides base support to write data to ODS files
     *
     * @package Box\Spout\Writer\ODS
     */
    class Writer extends \Box\Spout\Writer\AbstractMultiSheetsWriter
    {
        /** @var string Content-Type value for the header */
        protected static $headerContentType = 'application/vnd.oasis.opendocument.spreadsheet';
        /** @var string Temporary folder where the files to create the ODS will be stored */
        protected $tempFolder;
        /** @var Internal\Workbook The workbook for the ODS file */
        protected $book;
        /**
         * Sets a custom temporary folder for creating intermediate files/folders.
         * This must be set before opening the writer.
         *
         * @api
         * @param string $tempFolder Temporary folder where the files to create the ODS will be stored
         * @return Writer
         * @throws \Box\Spout\Writer\Exception\WriterAlreadyOpenedException If the writer was already opened
         */
        public function setTempFolder($tempFolder)
        {
        }
        /**
         * Configures the write and sets the current sheet pointer to a new sheet.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the file for writing
         */
        protected function openWriter()
        {
        }
        /**
         * @return Internal\Workbook The workbook representing the file to be written
         */
        protected function getWorkbook()
        {
        }
        /**
         * Adds data to the currently opened writer.
         * If shouldCreateNewSheetsAutomatically option is set to true, it will handle pagination
         * with the creation of new worksheets if one worksheet has reached its maximum capicity.
         *
         * @param array $dataRow Array containing data to be written.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row.
         * @return void
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the book is not created yet
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        protected function addRowToWriter(array $dataRow, $style)
        {
        }
        /**
         * Closes the writer, preventing any additional writing.
         *
         * @return void
         */
        protected function closeWriter()
        {
        }
    }
}
namespace Box\Spout\Writer\Style {
    /**
     * Class Border
     */
    class Border
    {
        const LEFT = 'left';
        const RIGHT = 'right';
        const TOP = 'top';
        const BOTTOM = 'bottom';
        const STYLE_NONE = 'none';
        const STYLE_SOLID = 'solid';
        const STYLE_DASHED = 'dashed';
        const STYLE_DOTTED = 'dotted';
        const STYLE_DOUBLE = 'double';
        const WIDTH_THIN = 'thin';
        const WIDTH_MEDIUM = 'medium';
        const WIDTH_THICK = 'thick';
        /**
         * @var array A list of BorderPart objects for this border.
         */
        protected $parts = [];
        /**
         * @param array|void $borderParts
         */
        public function __construct(array $borderParts = [])
        {
        }
        /**
         * @param $name The name of the border part
         * @return null|BorderPart
         */
        public function getPart($name)
        {
        }
        /**
         * @param $name The name of the border part
         * @return bool
         */
        public function hasPart($name)
        {
        }
        /**
         * @return array
         */
        public function getParts()
        {
        }
        /**
         * Set BorderParts
         * @param array $parts
         */
        public function setParts($parts)
        {
        }
        /**
         * @param BorderPart $borderPart
         * @return self
         */
        public function addPart(\Box\Spout\Writer\Style\BorderPart $borderPart)
        {
        }
    }
    /**
     * Class BorderBuilder
     */
    class BorderBuilder
    {
        /**
         * @var Border
         */
        protected $border;
        public function __construct()
        {
        }
        /**
         * @param string|void $color Border A RGB color code
         * @param string|void $width Border width @see BorderPart::allowedWidths
         * @param string|void $style Border style @see BorderPart::allowedStyles
         * @return BorderBuilder
         */
        public function setBorderTop($color = \Box\Spout\Writer\Style\Color::BLACK, $width = \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM, $style = \Box\Spout\Writer\Style\Border::STYLE_SOLID)
        {
        }
        /**
         * @param string|void $color Border A RGB color code
         * @param string|void $width Border width @see BorderPart::allowedWidths
         * @param string|void $style Border style @see BorderPart::allowedStyles
         * @return BorderBuilder
         */
        public function setBorderRight($color = \Box\Spout\Writer\Style\Color::BLACK, $width = \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM, $style = \Box\Spout\Writer\Style\Border::STYLE_SOLID)
        {
        }
        /**
         * @param string|void $color Border A RGB color code
         * @param string|void $width Border width @see BorderPart::allowedWidths
         * @param string|void $style Border style @see BorderPart::allowedStyles
         * @return BorderBuilder
         */
        public function setBorderBottom($color = \Box\Spout\Writer\Style\Color::BLACK, $width = \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM, $style = \Box\Spout\Writer\Style\Border::STYLE_SOLID)
        {
        }
        /**
         * @param string|void $color Border A RGB color code
         * @param string|void $width Border width @see BorderPart::allowedWidths
         * @param string|void $style Border style @see BorderPart::allowedStyles
         * @return BorderBuilder
         */
        public function setBorderLeft($color = \Box\Spout\Writer\Style\Color::BLACK, $width = \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM, $style = \Box\Spout\Writer\Style\Border::STYLE_SOLID)
        {
        }
        /**
         * @return Border
         */
        public function build()
        {
        }
    }
    /**
     * Class BorderPart
     */
    class BorderPart
    {
        /**
         * @var string The style of this border part.
         */
        protected $style;
        /**
         * @var string The name of this border part.
         */
        protected $name;
        /**
         * @var string The color of this border part.
         */
        protected $color;
        /**
         * @var string The width of this border part.
         */
        protected $width;
        /**
         * @var array Allowed style constants for parts.
         */
        protected static $allowedStyles = ['none', 'solid', 'dashed', 'dotted', 'double'];
        /**
         * @var array Allowed names constants for border parts.
         */
        protected static $allowedNames = ['left', 'right', 'top', 'bottom'];
        /**
         * @var array Allowed width constants for border parts.
         */
        protected static $allowedWidths = ['thin', 'medium', 'thick'];
        /**
         * @param string $name @see  BorderPart::$allowedNames
         * @param string $color A RGB color code
         * @param string $width @see BorderPart::$allowedWidths
         * @param string $style @see BorderPart::$allowedStyles
         * @throws InvalidNameException
         * @throws InvalidStyleException
         * @throws InvalidWidthException
         */
        public function __construct($name, $color = \Box\Spout\Writer\Style\Color::BLACK, $width = \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM, $style = \Box\Spout\Writer\Style\Border::STYLE_SOLID)
        {
        }
        /**
         * @return string
         */
        public function getName()
        {
        }
        /**
         * @param string $name The name of the border part @see BorderPart::$allowedNames
         * @throws InvalidNameException
         * @return void
         */
        public function setName($name)
        {
        }
        /**
         * @return string
         */
        public function getStyle()
        {
        }
        /**
         * @param string $style The style of the border part @see BorderPart::$allowedStyles
         * @throws InvalidStyleException
         * @return void
         */
        public function setStyle($style)
        {
        }
        /**
         * @return string
         */
        public function getColor()
        {
        }
        /**
         * @param string $color The color of the border part @see Color::rgb()
         * @return void
         */
        public function setColor($color)
        {
        }
        /**
         * @return string
         */
        public function getWidth()
        {
        }
        /**
         * @param string $width The width of the border part @see BorderPart::$allowedWidths
         * @throws InvalidWidthException
         * @return void
         */
        public function setWidth($width)
        {
        }
        /**
         * @return array
         */
        public static function getAllowedStyles()
        {
        }
        /**
         * @return array
         */
        public static function getAllowedNames()
        {
        }
        /**
         * @return array
         */
        public static function getAllowedWidths()
        {
        }
    }
    /**
     * Class Color
     * This class provides constants and functions to work with colors
     *
     * @package Box\Spout\Writer\Style
     */
    class Color
    {
        /** Standard colors - based on Office Online */
        const BLACK = '000000';
        const WHITE = 'FFFFFF';
        const RED = 'FF0000';
        const DARK_RED = 'C00000';
        const ORANGE = 'FFC000';
        const YELLOW = 'FFFF00';
        const LIGHT_GREEN = '92D040';
        const GREEN = '00B050';
        const LIGHT_BLUE = '00B0E0';
        const BLUE = '0070C0';
        const DARK_BLUE = '002060';
        const PURPLE = '7030A0';
        /**
         * Returns an RGB color from R, G and B values
         *
         * @api
         * @param int $red Red component, 0 - 255
         * @param int $green Green component, 0 - 255
         * @param int $blue Blue component, 0 - 255
         * @return string RGB color
         */
        public static function rgb($red, $green, $blue)
        {
        }
        /**
         * Throws an exception is the color component value is outside of bounds (0 - 255)
         *
         * @param int $colorComponent
         * @return void
         * @throws \Box\Spout\Writer\Exception\InvalidColorException
         */
        protected static function throwIfInvalidColorComponentValue($colorComponent)
        {
        }
        /**
         * Converts the color component to its corresponding hexadecimal value
         *
         * @param int $colorComponent Color component, 0 - 255
         * @return string Corresponding hexadecimal value, with a leading 0 if needed. E.g "0f", "2d"
         */
        protected static function convertColorComponentToHex($colorComponent)
        {
        }
        /**
         * Returns the ARGB color of the given RGB color,
         * assuming that alpha value is always 1.
         *
         * @param string $rgbColor RGB color like "FF08B2"
         * @return string ARGB color
         */
        public static function toARGB($rgbColor)
        {
        }
    }
    /**
     * Class Style
     * Represents a style to be applied to a cell
     *
     * @package Box\Spout\Writer\Style
     */
    class Style
    {
        /** Default font values */
        const DEFAULT_FONT_SIZE = 11;
        const DEFAULT_FONT_COLOR = \Box\Spout\Writer\Style\Color::BLACK;
        const DEFAULT_FONT_NAME = 'Arial';
        /** @var int|null Style ID */
        protected $id = null;
        /** @var bool Whether the font should be bold */
        protected $fontBold = false;
        /** @var bool Whether the bold property was set */
        protected $hasSetFontBold = false;
        /** @var bool Whether the font should be italic */
        protected $fontItalic = false;
        /** @var bool Whether the italic property was set */
        protected $hasSetFontItalic = false;
        /** @var bool Whether the font should be underlined */
        protected $fontUnderline = false;
        /** @var bool Whether the underline property was set */
        protected $hasSetFontUnderline = false;
        /** @var bool Whether the font should be struck through */
        protected $fontStrikethrough = false;
        /** @var bool Whether the strikethrough property was set */
        protected $hasSetFontStrikethrough = false;
        /** @var int Font size */
        protected $fontSize = self::DEFAULT_FONT_SIZE;
        /** @var bool Whether the font size property was set */
        protected $hasSetFontSize = false;
        /** @var string Font color */
        protected $fontColor = self::DEFAULT_FONT_COLOR;
        /** @var bool Whether the font color property was set */
        protected $hasSetFontColor = false;
        /** @var string Font name */
        protected $fontName = self::DEFAULT_FONT_NAME;
        /** @var bool Whether the font name property was set */
        protected $hasSetFontName = false;
        /** @var bool Whether specific font properties should be applied */
        protected $shouldApplyFont = false;
        /** @var bool Whether the text should wrap in the cell (useful for long or multi-lines text) */
        protected $shouldWrapText = false;
        /** @var bool Whether the wrap text property was set */
        protected $hasSetWrapText = false;
        /**
         * @var Border
         */
        protected $border = null;
        /**
         * @var bool Whether border properties should be applied
         */
        protected $shouldApplyBorder = false;
        /** @var string Background color */
        protected $backgroundColor = null;
        /** @var bool */
        protected $hasSetBackgroundColor = false;
        /**
         * @return int|null
         */
        public function getId()
        {
        }
        /**
         * @param int $id
         * @return Style
         */
        public function setId($id)
        {
        }
        /**
         * @return Border
         */
        public function getBorder()
        {
        }
        /**
         * @param Border $border
         * @return Style
         */
        public function setBorder(\Box\Spout\Writer\Style\Border $border)
        {
        }
        /**
         * @return bool
         */
        public function shouldApplyBorder()
        {
        }
        /**
         * @return bool
         */
        public function isFontBold()
        {
        }
        /**
         * @return Style
         */
        public function setFontBold()
        {
        }
        /**
         * @return bool
         */
        public function isFontItalic()
        {
        }
        /**
         * @return Style
         */
        public function setFontItalic()
        {
        }
        /**
         * @return bool
         */
        public function isFontUnderline()
        {
        }
        /**
         * @return Style
         */
        public function setFontUnderline()
        {
        }
        /**
         * @return bool
         */
        public function isFontStrikethrough()
        {
        }
        /**
         * @return Style
         */
        public function setFontStrikethrough()
        {
        }
        /**
         * @return int
         */
        public function getFontSize()
        {
        }
        /**
         * @param int $fontSize Font size, in pixels
         * @return Style
         */
        public function setFontSize($fontSize)
        {
        }
        /**
         * @return string
         */
        public function getFontColor()
        {
        }
        /**
         * Sets the font color.
         *
         * @param string $fontColor ARGB color (@see Color)
         * @return Style
         */
        public function setFontColor($fontColor)
        {
        }
        /**
         * @return string
         */
        public function getFontName()
        {
        }
        /**
         * @param string $fontName Name of the font to use
         * @return Style
         */
        public function setFontName($fontName)
        {
        }
        /**
         * @return bool
         */
        public function shouldWrapText()
        {
        }
        /**
         * @param bool|void $shouldWrap Should the text be wrapped
         * @return Style
         */
        public function setShouldWrapText($shouldWrap = true)
        {
        }
        /**
         * @return bool
         */
        public function hasSetWrapText()
        {
        }
        /**
         * @return bool Whether specific font properties should be applied
         */
        public function shouldApplyFont()
        {
        }
        /**
         * Sets the background color
         * @param string $color ARGB color (@see Color)
         * @return Style
         */
        public function setBackgroundColor($color)
        {
        }
        /**
         * @return string
         */
        public function getBackgroundColor()
        {
        }
        /**
         *
         * @return bool Whether the background color should be applied
         */
        public function shouldApplyBackgroundColor()
        {
        }
        /**
         * Serializes the style for future comparison with other styles.
         * The ID is excluded from the comparison, as we only care about
         * actual style properties.
         *
         * @return string The serialized style
         */
        public function serialize()
        {
        }
        /**
         * Merges the current style with the given style, using the given style as a base. This means that:
         *   - if current style and base style both have property A set, use current style property's value
         *   - if current style has property A set but base style does not, use current style property's value
         *   - if base style has property A set but current style does not, use base style property's value
         *
         * @NOTE: This function returns a new style.
         *
         * @param Style $baseStyle
         * @return Style New style corresponding to the merge of the 2 styles
         */
        public function mergeWith($baseStyle)
        {
        }
        /**
         * @param Style $styleToUpdate (passed as reference)
         * @param Style $baseStyle
         * @return void
         */
        private function mergeFontStyles($styleToUpdate, $baseStyle)
        {
        }
        /**
         * @param Style $styleToUpdate Style to update (passed as reference)
         * @param Style $baseStyle
         * @return void
         */
        private function mergeOtherFontProperties($styleToUpdate, $baseStyle)
        {
        }
        /**
         * @param Style $styleToUpdate Style to update (passed as reference)
         * @param Style $baseStyle
         * @return void
         */
        private function mergeCellProperties($styleToUpdate, $baseStyle)
        {
        }
    }
    /**
     * Class StyleBuilder
     * Builder to create new styles
     *
     * @package Box\Spout\Writer\Style
     */
    class StyleBuilder
    {
        /** @var Style Style to be created */
        protected $style;
        /**
         *
         */
        public function __construct()
        {
        }
        /**
         * Makes the font bold.
         *
         * @api
         * @return StyleBuilder
         */
        public function setFontBold()
        {
        }
        /**
         * Makes the font italic.
         *
         * @api
         * @return StyleBuilder
         */
        public function setFontItalic()
        {
        }
        /**
         * Makes the font underlined.
         *
         * @api
         * @return StyleBuilder
         */
        public function setFontUnderline()
        {
        }
        /**
         * Makes the font struck through.
         *
         * @api
         * @return StyleBuilder
         */
        public function setFontStrikethrough()
        {
        }
        /**
         * Sets the font size.
         *
         * @api
         * @param int $fontSize Font size, in pixels
         * @return StyleBuilder
         */
        public function setFontSize($fontSize)
        {
        }
        /**
         * Sets the font color.
         *
         * @api
         * @param string $fontColor ARGB color (@see Color)
         * @return StyleBuilder
         */
        public function setFontColor($fontColor)
        {
        }
        /**
         * Sets the font name.
         *
         * @api
         * @param string $fontName Name of the font to use
         * @return StyleBuilder
         */
        public function setFontName($fontName)
        {
        }
        /**
         * Makes the text wrap in the cell if requested
         *
         * @api
         * @param bool $shouldWrap Should the text be wrapped
         * @return StyleBuilder
         */
        public function setShouldWrapText($shouldWrap = true)
        {
        }
        /**
         * Set a border
         *
         * @param Border $border
         * @return $this
         */
        public function setBorder(\Box\Spout\Writer\Style\Border $border)
        {
        }
        /**
         *  Sets a background color
         *
         * @api
         * @param string $color ARGB color (@see Color)
         * @return StyleBuilder
         */
        public function setBackgroundColor($color)
        {
        }
        /**
         * Returns the configured style. The style is cached and can be reused.
         *
         * @api
         * @return Style
         */
        public function build()
        {
        }
    }
}
namespace Box\Spout\Writer {
    /**
     * Class WriterFactory
     * This factory is used to create writers, based on the type of the file to be read.
     * It supports CSV, XLSX and ODS formats.
     *
     * @package Box\Spout\Writer
     */
    class WriterFactory
    {
        /**
         * This creates an instance of the appropriate writer, given the type of the file to be read
         *
         * @api
         * @param  string $writerType Type of the writer to instantiate
         * @return WriterInterface
         * @throws \Box\Spout\Common\Exception\UnsupportedTypeException
         */
        public static function create($writerType)
        {
        }
    }
}
namespace Box\Spout\Writer\XLSX\Helper {
    class BorderHelper
    {
        public static $xlsxStyleMap = [\Box\Spout\Writer\Style\Border::STYLE_SOLID => [\Box\Spout\Writer\Style\Border::WIDTH_THIN => 'thin', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => 'medium', \Box\Spout\Writer\Style\Border::WIDTH_THICK => 'thick'], \Box\Spout\Writer\Style\Border::STYLE_DOTTED => [\Box\Spout\Writer\Style\Border::WIDTH_THIN => 'dotted', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => 'dotted', \Box\Spout\Writer\Style\Border::WIDTH_THICK => 'dotted'], \Box\Spout\Writer\Style\Border::STYLE_DASHED => [\Box\Spout\Writer\Style\Border::WIDTH_THIN => 'dashed', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => 'mediumDashed', \Box\Spout\Writer\Style\Border::WIDTH_THICK => 'mediumDashed'], \Box\Spout\Writer\Style\Border::STYLE_DOUBLE => [\Box\Spout\Writer\Style\Border::WIDTH_THIN => 'double', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => 'double', \Box\Spout\Writer\Style\Border::WIDTH_THICK => 'double'], \Box\Spout\Writer\Style\Border::STYLE_NONE => [\Box\Spout\Writer\Style\Border::WIDTH_THIN => 'none', \Box\Spout\Writer\Style\Border::WIDTH_MEDIUM => 'none', \Box\Spout\Writer\Style\Border::WIDTH_THICK => 'none']];
        /**
         * @param BorderPart $borderPart
         * @return string
         */
        public static function serializeBorderPart(\Box\Spout\Writer\Style\BorderPart $borderPart)
        {
        }
        /**
         * Get the style definition from the style map
         *
         * @param BorderPart $borderPart
         * @return string
         */
        protected static function getBorderStyle(\Box\Spout\Writer\Style\BorderPart $borderPart)
        {
        }
    }
    /**
     * Class FileSystemHelper
     * This class provides helper functions to help with the file system operations
     * like files/folders creation & deletion for XLSX files
     *
     * @package Box\Spout\Writer\XLSX\Helper
     */
    class FileSystemHelper extends \Box\Spout\Common\Helper\FileSystemHelper
    {
        const APP_NAME = 'Spout';
        const RELS_FOLDER_NAME = '_rels';
        const DOC_PROPS_FOLDER_NAME = 'docProps';
        const XL_FOLDER_NAME = 'xl';
        const WORKSHEETS_FOLDER_NAME = 'worksheets';
        const RELS_FILE_NAME = '.rels';
        const APP_XML_FILE_NAME = 'app.xml';
        const CORE_XML_FILE_NAME = 'core.xml';
        const CONTENT_TYPES_XML_FILE_NAME = '[Content_Types].xml';
        const WORKBOOK_XML_FILE_NAME = 'workbook.xml';
        const WORKBOOK_RELS_XML_FILE_NAME = 'workbook.xml.rels';
        const STYLES_XML_FILE_NAME = 'styles.xml';
        /** @var string Path to the root folder inside the temp folder where the files to create the XLSX will be stored */
        protected $rootFolder;
        /** @var string Path to the "_rels" folder inside the root folder */
        protected $relsFolder;
        /** @var string Path to the "docProps" folder inside the root folder */
        protected $docPropsFolder;
        /** @var string Path to the "xl" folder inside the root folder */
        protected $xlFolder;
        /** @var string Path to the "_rels" folder inside the "xl" folder */
        protected $xlRelsFolder;
        /** @var string Path to the "worksheets" folder inside the "xl" folder */
        protected $xlWorksheetsFolder;
        /**
         * @return string
         */
        public function getRootFolder()
        {
        }
        /**
         * @return string
         */
        public function getXlFolder()
        {
        }
        /**
         * @return string
         */
        public function getXlWorksheetsFolder()
        {
        }
        /**
         * Creates all the folders needed to create a XLSX file, as well as the files that won't change.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the base folders
         */
        public function createBaseFilesAndFolders()
        {
        }
        /**
         * Creates the folder that will be used as root
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder
         */
        protected function createRootFolder()
        {
        }
        /**
         * Creates the "_rels" folder under the root folder as well as the ".rels" file in it
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder or the ".rels" file
         */
        protected function createRelsFolderAndFile()
        {
        }
        /**
         * Creates the ".rels" file under the "_rels" folder (under root)
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createRelsFile()
        {
        }
        /**
         * Creates the "docProps" folder under the root folder as well as the "app.xml" and "core.xml" files in it
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder or one of the files
         */
        protected function createDocPropsFolderAndFiles()
        {
        }
        /**
         * Creates the "app.xml" file under the "docProps" folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createAppXmlFile()
        {
        }
        /**
         * Creates the "core.xml" file under the "docProps" folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the file
         */
        protected function createCoreXmlFile()
        {
        }
        /**
         * Creates the "xl" folder under the root folder as well as its subfolders
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the folders
         */
        protected function createXlFolderAndSubFolders()
        {
        }
        /**
         * Creates the "_rels" folder under the "xl" folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder
         */
        protected function createXlRelsFolder()
        {
        }
        /**
         * Creates the "worksheets" folder under the "xl" folder
         *
         * @return FileSystemHelper
         * @throws \Box\Spout\Common\Exception\IOException If unable to create the folder
         */
        protected function createXlWorksheetsFolder()
        {
        }
        /**
         * Creates the "[Content_Types].xml" file under the root folder
         *
         * @param Worksheet[] $worksheets
         * @return FileSystemHelper
         */
        public function createContentTypesFile($worksheets)
        {
        }
        /**
         * Creates the "workbook.xml" file under the "xl" folder
         *
         * @param Worksheet[] $worksheets
         * @return FileSystemHelper
         */
        public function createWorkbookFile($worksheets)
        {
        }
        /**
         * Creates the "workbook.xml.res" file under the "xl/_res" folder
         *
         * @param Worksheet[] $worksheets
         * @return FileSystemHelper
         */
        public function createWorkbookRelsFile($worksheets)
        {
        }
        /**
         * Creates the "styles.xml" file under the "xl" folder
         *
         * @param StyleHelper $styleHelper
         * @return FileSystemHelper
         */
        public function createStylesFile($styleHelper)
        {
        }
        /**
         * Zips the root folder and streams the contents of the zip into the given stream
         *
         * @param resource $streamPointer Pointer to the stream to copy the zip
         * @return void
         */
        public function zipRootFolderAndCopyToStream($streamPointer)
        {
        }
    }
    /**
     * Class SharedStringsHelper
     * This class provides helper functions to write shared strings
     *
     * @package Box\Spout\Writer\XLSX\Helper
     */
    class SharedStringsHelper
    {
        const SHARED_STRINGS_FILE_NAME = 'sharedStrings.xml';
        const SHARED_STRINGS_XML_FILE_FIRST_PART_HEADER = <<<EOD
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<sst xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main"
EOD;
        /**
         * This number must be really big so that the no generated file will have more strings than that.
         * If the strings number goes above, characters will be overwritten in an unwanted way and will corrupt the file.
         */
        const DEFAULT_STRINGS_COUNT_PART = 'count="9999999999999" uniqueCount="9999999999999"';
        /** @var resource Pointer to the sharedStrings.xml file */
        protected $sharedStringsFilePointer;
        /** @var int Number of shared strings already written */
        protected $numSharedStrings = 0;
        /** @var \Box\Spout\Common\Escaper\XLSX Strings escaper */
        protected $stringsEscaper;
        /**
         * @param string $xlFolder Path to the "xl" folder
         */
        public function __construct($xlFolder)
        {
        }
        /**
         * Checks if the book has been created. Throws an exception if not created yet.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        protected function throwIfSharedStringsFilePointerIsNotAvailable()
        {
        }
        /**
         * Writes the given string into the sharedStrings.xml file.
         * Starting and ending whitespaces are preserved.
         *
         * @param string $string
         * @return int ID of the written shared string
         */
        public function writeString($string)
        {
        }
        /**
         * Finishes writing the data in the sharedStrings.xml file and closes the file.
         *
         * @return void
         */
        public function close()
        {
        }
    }
    /**
     * Class StyleHelper
     * This class provides helper functions to manage styles
     *
     * @package Box\Spout\Writer\XLSX\Helper
     */
    class StyleHelper extends \Box\Spout\Writer\Common\Helper\AbstractStyleHelper
    {
        /**
         * @var array
         */
        protected $registeredFills = [];
        /**
         * @var array [STYLE_ID] => [FILL_ID] maps a style to a fill declaration
         */
        protected $styleIdToFillMappingTable = [];
        /**
         * Excel preserves two default fills with index 0 and 1
         * Since Excel is the dominant vendor - we play along here
         *
         * @var int The fill index counter for custom fills.
         */
        protected $fillIndex = 2;
        /**
         * @var array
         */
        protected $registeredBorders = [];
        /**
         * @var array [STYLE_ID] => [BORDER_ID] maps a style to a border declaration
         */
        protected $styleIdToBorderMappingTable = [];
        /**
         * XLSX specific operations on the registered styles
         *
         * @param \Box\Spout\Writer\Style\Style $style
         * @return \Box\Spout\Writer\Style\Style
         */
        public function registerStyle($style)
        {
        }
        /**
         * Register a fill definition
         *
         * @param \Box\Spout\Writer\Style\Style $style
         */
        protected function registerFill($style)
        {
        }
        /**
         * Register a border definition
         *
         * @param \Box\Spout\Writer\Style\Style $style
         */
        protected function registerBorder($style)
        {
        }
        /**
         * For empty cells, we can specify a style or not. If no style are specified,
         * then the software default will be applied. But sometimes, it may be useful
         * to override this default style, for instance if the cell should have a
         * background color different than the default one or some borders
         * (fonts property don't really matter here).
         *
         * @param int $styleId
         * @return bool Whether the cell should define a custom style
         */
        public function shouldApplyStyleOnEmptyCell($styleId)
        {
        }
        /**
         * Returns the content of the "styles.xml" file, given a list of styles.
         *
         * @return string
         */
        public function getStylesXMLFileContent()
        {
        }
        /**
         * Returns the content of the "<fonts>" section.
         *
         * @return string
         */
        protected function getFontsSectionContent()
        {
        }
        /**
         * Returns the content of the "<fills>" section.
         *
         * @return string
         */
        protected function getFillsSectionContent()
        {
        }
        /**
         * Returns the content of the "<borders>" section.
         *
         * @return string
         */
        protected function getBordersSectionContent()
        {
        }
        /**
         * Returns the content of the "<cellStyleXfs>" section.
         *
         * @return string
         */
        protected function getCellStyleXfsSectionContent()
        {
        }
        /**
         * Returns the content of the "<cellXfs>" section.
         *
         * @return string
         */
        protected function getCellXfsSectionContent()
        {
        }
        /**
         * Returns the content of the "<cellStyles>" section.
         *
         * @return string
         */
        protected function getCellStylesSectionContent()
        {
        }
    }
}
namespace Box\Spout\Writer\XLSX\Internal {
    /**
     * Class Workbook
     * Represents a workbook within a XLSX file.
     * It provides the functions to work with worksheets.
     *
     * @package Box\Spout\Writer\XLSX\Internal
     */
    class Workbook extends \Box\Spout\Writer\Common\Internal\AbstractWorkbook
    {
        /**
         * Maximum number of rows a XLSX sheet can contain
         * @see http://office.microsoft.com/en-us/excel-help/excel-specifications-and-limits-HP010073849.aspx
         */
        protected static $maxRowsPerWorksheet = 1048576;
        /** @var bool Whether inline or shared strings should be used */
        protected $shouldUseInlineStrings;
        /** @var \Box\Spout\Writer\XLSX\Helper\FileSystemHelper Helper to perform file system operations */
        protected $fileSystemHelper;
        /** @var \Box\Spout\Writer\XLSX\Helper\SharedStringsHelper Helper to write shared strings */
        protected $sharedStringsHelper;
        /** @var \Box\Spout\Writer\XLSX\Helper\StyleHelper Helper to apply styles */
        protected $styleHelper;
        /**
         * @param string $tempFolder
         * @param bool $shouldUseInlineStrings
         * @param bool $shouldCreateNewSheetsAutomatically
         * @param \Box\Spout\Writer\Style\Style $defaultRowStyle
         * @throws \Box\Spout\Common\Exception\IOException If unable to create at least one of the base folders
         */
        public function __construct($tempFolder, $shouldUseInlineStrings, $shouldCreateNewSheetsAutomatically, $defaultRowStyle)
        {
        }
        /**
         * @return \Box\Spout\Writer\XLSX\Helper\StyleHelper Helper to apply styles to XLSX files
         */
        protected function getStyleHelper()
        {
        }
        /**
         * @return int Maximum number of rows/columns a sheet can contain
         */
        protected function getMaxRowsPerWorksheet()
        {
        }
        /**
         * Creates a new sheet in the workbook. The current sheet remains unchanged.
         *
         * @return Worksheet The created sheet
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the sheet for writing
         */
        public function addNewSheet()
        {
        }
        /**
         * Closes the workbook and all its associated sheets.
         * All the necessary files are written to disk and zipped together to create the XLSX file.
         * All the temporary files are then deleted.
         *
         * @param resource $finalFilePointer Pointer to the XLSX that will be created
         * @return void
         */
        public function close($finalFilePointer)
        {
        }
        /**
         * Deletes the root folder created in the temp folder and all its contents.
         *
         * @return void
         */
        protected function cleanupTempFolder()
        {
        }
    }
    /**
     * Class Worksheet
     * Represents a worksheet within a XLSX file. The difference with the Sheet object is
     * that this class provides an interface to write data
     *
     * @package Box\Spout\Writer\XLSX\Internal
     */
    class Worksheet implements \Box\Spout\Writer\Common\Internal\WorksheetInterface
    {
        /**
         * Maximum number of characters a cell can contain
         * @see https://support.office.com/en-us/article/Excel-specifications-and-limits-16c69c74-3d6a-4aaf-ba35-e6eb276e8eaa [Excel 2007]
         * @see https://support.office.com/en-us/article/Excel-specifications-and-limits-1672b34d-7043-467e-8e27-269d656771c3 [Excel 2010]
         * @see https://support.office.com/en-us/article/Excel-specifications-and-limits-ca36e2dc-1f09-4620-b726-67c00b05040f [Excel 2013/2016]
         */
        const MAX_CHARACTERS_PER_CELL = 32767;
        const SHEET_XML_FILE_HEADER = <<<EOD
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships">
EOD;
        /** @var \Box\Spout\Writer\Common\Sheet The "external" sheet */
        protected $externalSheet;
        /** @var string Path to the XML file that will contain the sheet data */
        protected $worksheetFilePath;
        /** @var \Box\Spout\Writer\XLSX\Helper\SharedStringsHelper Helper to write shared strings */
        protected $sharedStringsHelper;
        /** @var \Box\Spout\Writer\XLSX\Helper\StyleHelper Helper to work with styles */
        protected $styleHelper;
        /** @var bool Whether inline or shared strings should be used */
        protected $shouldUseInlineStrings;
        /** @var \Box\Spout\Common\Escaper\XLSX Strings escaper */
        protected $stringsEscaper;
        /** @var \Box\Spout\Common\Helper\StringHelper String helper */
        protected $stringHelper;
        /** @var Resource Pointer to the sheet data file (e.g. xl/worksheets/sheet1.xml) */
        protected $sheetFilePointer;
        /** @var int Index of the last written row */
        protected $lastWrittenRowIndex = 0;
        /**
         * @param \Box\Spout\Writer\Common\Sheet $externalSheet The associated "external" sheet
         * @param string $worksheetFilesFolder Temporary folder where the files to create the XLSX will be stored
         * @param \Box\Spout\Writer\XLSX\Helper\SharedStringsHelper $sharedStringsHelper Helper for shared strings
         * @param \Box\Spout\Writer\XLSX\Helper\StyleHelper Helper to work with styles
         * @param bool $shouldUseInlineStrings Whether inline or shared strings should be used
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        public function __construct($externalSheet, $worksheetFilesFolder, $sharedStringsHelper, $styleHelper, $shouldUseInlineStrings)
        {
        }
        /**
         * Prepares the worksheet to accept data
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        protected function startSheet()
        {
        }
        /**
         * Checks if the book has been created. Throws an exception if not created yet.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the sheet data file cannot be opened for writing
         */
        protected function throwIfSheetFilePointerIsNotAvailable()
        {
        }
        /**
         * @return \Box\Spout\Writer\Common\Sheet The "external" sheet
         */
        public function getExternalSheet()
        {
        }
        /**
         * @return int The index of the last written row
         */
        public function getLastWrittenRowIndex()
        {
        }
        /**
         * @return int The ID of the worksheet
         */
        public function getId()
        {
        }
        /**
         * Adds data to the worksheet.
         *
         * @param array $dataRow Array containing data to be written. Cannot be empty.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row. NULL means use default style.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the data cannot be written
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If a cell value's type is not supported
         */
        public function addRow($dataRow, $style)
        {
        }
        /**
         * Returns whether the given row is empty
         *
         * @param array $dataRow Array containing data to be written. Cannot be empty.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @return bool Whether the given row is empty
         */
        protected function isEmptyRow($dataRow)
        {
        }
        /**
         * Adds non empty row to the worksheet.
         *
         * @param array $dataRow Array containing data to be written. Cannot be empty.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row. NULL means use default style.
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If the data cannot be written
         * @throws \Box\Spout\Common\Exception\InvalidArgumentException If a cell value's type is not supported
         */
        protected function addNonEmptyRow($dataRow, $style)
        {
        }
        /**
         * Build and return xml for a single cell.
         *
         * @param int $rowIndex
         * @param int $cellNumber
         * @param mixed $cellValue
         * @param int $styleId
         * @return string
         * @throws InvalidArgumentException If the given value cannot be processed
         */
        protected function getCellXML($rowIndex, $cellNumber, $cellValue, $styleId)
        {
        }
        /**
         * Returns the XML fragment for a cell containing a non empty string
         *
         * @param string $cellValue The cell value
         * @return string The XML fragment representing the cell
         * @throws InvalidArgumentException If the string exceeds the maximum number of characters allowed per cell
         */
        protected function getCellXMLFragmentForNonEmptyString($cellValue)
        {
        }
        /**
         * Closes the worksheet
         *
         * @return void
         */
        public function close()
        {
        }
    }
}
namespace Box\Spout\Writer\XLSX {
    /**
     * Class Writer
     * This class provides base support to write data to XLSX files
     *
     * @package Box\Spout\Writer\XLSX
     */
    class Writer extends \Box\Spout\Writer\AbstractMultiSheetsWriter
    {
        /** Default style font values */
        const DEFAULT_FONT_SIZE = 12;
        const DEFAULT_FONT_NAME = 'Calibri';
        /** @var string Content-Type value for the header */
        protected static $headerContentType = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
        /** @var string Temporary folder where the files to create the XLSX will be stored */
        protected $tempFolder;
        /** @var bool Whether inline or shared strings should be used - inline string is more memory efficient */
        protected $shouldUseInlineStrings = true;
        /** @var Internal\Workbook The workbook for the XLSX file */
        protected $book;
        /**
         * Sets a custom temporary folder for creating intermediate files/folders.
         * This must be set before opening the writer.
         *
         * @api
         * @param string $tempFolder Temporary folder where the files to create the XLSX will be stored
         * @return Writer
         * @throws \Box\Spout\Writer\Exception\WriterAlreadyOpenedException If the writer was already opened
         */
        public function setTempFolder($tempFolder)
        {
        }
        /**
         * Use inline string to be more memory efficient. If set to false, it will use shared strings.
         * This must be set before opening the writer.
         *
         * @api
         * @param bool $shouldUseInlineStrings Whether inline or shared strings should be used
         * @return Writer
         * @throws \Box\Spout\Writer\Exception\WriterAlreadyOpenedException If the writer was already opened
         */
        public function setShouldUseInlineStrings($shouldUseInlineStrings)
        {
        }
        /**
         * Configures the write and sets the current sheet pointer to a new sheet.
         *
         * @return void
         * @throws \Box\Spout\Common\Exception\IOException If unable to open the file for writing
         */
        protected function openWriter()
        {
        }
        /**
         * @return Internal\Workbook The workbook representing the file to be written
         */
        protected function getWorkbook()
        {
        }
        /**
         * Adds data to the currently opened writer.
         * If shouldCreateNewSheetsAutomatically option is set to true, it will handle pagination
         * with the creation of new worksheets if one worksheet has reached its maximum capicity.
         *
         * @param array $dataRow Array containing data to be written.
         *          Example $dataRow = ['data1', 1234, null, '', 'data5'];
         * @param \Box\Spout\Writer\Style\Style $style Style to be applied to the row.
         * @return void
         * @throws \Box\Spout\Writer\Exception\WriterNotOpenedException If the book is not created yet
         * @throws \Box\Spout\Common\Exception\IOException If unable to write data
         */
        protected function addRowToWriter(array $dataRow, $style)
        {
        }
        /**
         * Returns the default style to be applied to rows.
         *
         * @return \Box\Spout\Writer\Style\Style
         */
        protected function getDefaultRowStyle()
        {
        }
        /**
         * Closes the writer, preventing any additional writing.
         *
         * @return void
         */
        protected function closeWriter()
        {
        }
    }
}
namespace FluentForm\App\Services\Submission {
    class SubmissionService
    {
        /**
         * @var \FluentForm\App\Models\Submission|\FluentForm\Framework\Database\Query\Builder|\FluentForm\Framework\Database\Orm\Builder
         */
        protected $model;
        protected $formService;
        public function __construct()
        {
        }
        public function get($attributes = [])
        {
        }
        public function find($submissionId)
        {
        }
        public function resources($attributes)
        {
        }
        public function updateStatus($attributes = [])
        {
        }
        public function toggleIsFavorite($submissionId)
        {
        }
        public function storeColumnSettings($attributes = [])
        {
        }
        public function handleBulkActions($attributes = [])
        {
        }
        public function deleteEntries($submissionIds, $formId)
        {
        }
        public function deleteFiles($submissionIds, $formId)
        {
        }
        public function getAttachments($submissionIds, $form)
        {
        }
        public function getNotes($submissionId, $attributes)
        {
        }
        public function storeNote($submissionId, $attributes = [])
        {
        }
        public function updateSubmissionUser($userId, $submissionId)
        {
        }
        public function recordEntryDetails($entryId, $formId, $data)
        {
        }
    }
}
namespace FluentForm\App\Services\Transfer {
    class TransferService
    {
        public static function exportForms($formIds)
        {
        }
        /**
         * @throws Exception
         */
        public static function importForms($file)
        {
        }
        public static function exportEntries($args)
        {
        }
        private static function exportAsJSON($form, $args)
        {
        }
        private static function getSubmissions($args)
        {
        }
        private static function downloadOfficeDoc($data, $type = 'csv', $fileName = null)
        {
        }
    }
}
namespace FluentForm\App\Services\WPAsync {
    class FluentFormAsyncRequest
    {
        /**
         * $prefix The prefix for the identifier
         * @var string
         */
        protected $table = 'ff_scheduled_actions';
        /**
         * $action The action for the identifier
         * @var string
         */
        protected $action = 'fluentform_background_process';
        /**
         * $actions Actions to be fired when an async request is sent
         * @var array
         */
        protected $actions = array();
        /**
         * $app Instance of Application/Framework
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app = null;
        /**
         * Construct the Object
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        public function queueFeeds($feeds)
        {
        }
        public function dispatchAjax($data = [])
        {
        }
        public function handleBackgroundCall()
        {
        }
        public function processActions($originId = false)
        {
        }
        private function getEntry($submission, $form)
        {
        }
    }
}
namespace FluentForm\Database {
    class DBMigrator
    {
        public static function run($network_wide = false)
        {
        }
    }
}
namespace FluentForm\Database\Migrations {
    class FormAnalytics
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class FormMeta
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class Forms
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class Logs
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class ScheduledActions
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class SubmissionDetails
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class SubmissionMeta
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate()
        {
        }
    }
    class Submissions
    {
        /**
         * Migrate the table.
         *
         * @return void
         */
        public static function migrate($force = false)
        {
        }
    }
}
namespace {
    // autoload_real.php @generated by Composer
    class ComposerAutoloaderInitb99e07d253bf4705bf50ef1db90791ef
    {
        private static $loader;
        public static function loadClassLoader($class)
        {
        }
        /**
         * @return \Composer\Autoload\ClassLoader
         */
        public static function getLoader()
        {
        }
    }
}
namespace Composer\Autoload {
    class ComposerStaticInitb99e07d253bf4705bf50ef1db90791ef
    {
        public static $prefixLengthsPsr4 = array('W' => array('WPFluent\\' => 9), 'F' => array('FluentForm\\Framework\\' => 21, 'FluentForm\\App\\' => 15));
        public static $prefixDirsPsr4 = array('WPFluent\\' => array(0 => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent'), 'FluentForm\\Framework\\' => array(0 => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent'), 'FluentForm\\App\\' => array(0 => __DIR__ . '/../..' . '/app'));
        public static $classMap = array('Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php', 'FluentForm\\App\\Api\\Entry' => __DIR__ . '/../..' . '/app/Api/Entry.php', 'FluentForm\\App\\Api\\Form' => __DIR__ . '/../..' . '/app/Api/Form.php', 'FluentForm\\App\\Api\\FormProperties' => __DIR__ . '/../..' . '/app/Api/FormProperties.php', 'FluentForm\\App\\Api\\Submission' => __DIR__ . '/../..' . '/app/Api/Submission.php', 'FluentForm\\App\\App' => __DIR__ . '/../..' . '/app/App.php', 'FluentForm\\App\\ComposerScript' => __DIR__ . '/../..' . '/app/ComposerScript.php', 'FluentForm\\App\\Helpers\\Helper' => __DIR__ . '/../..' . '/app/Helpers/Helper.php', 'FluentForm\\App\\Helpers\\IntegrationManagerHelper' => __DIR__ . '/../..' . '/app/Helpers/IntegrationManagerHelper.php', 'FluentForm\\App\\Helpers\\Protector' => __DIR__ . '/../..' . '/app/Helpers/Protector.php', 'FluentForm\\App\\Helpers\\Str' => __DIR__ . '/../..' . '/app/Helpers/Str.php', 'FluentForm\\App\\Hooks\\Handlers\\ActivationHandler' => __DIR__ . '/../..' . '/app/Hooks/Handlers/ActivationHandler.php', 'FluentForm\\App\\Hooks\\Handlers\\DeactivationHandler' => __DIR__ . '/../..' . '/app/Hooks/Handlers/DeactivationHandler.php', 'FluentForm\\App\\Hooks\\Handlers\\GlobalNotificationHandler' => __DIR__ . '/../..' . '/app/Hooks/Handlers/GlobalNotificationHandler.php', 'FluentForm\\App\\Http\\Controllers\\AdminNoticeController' => __DIR__ . '/../..' . '/app/Http/Controllers/AdminNoticeController.php', 'FluentForm\\App\\Http\\Controllers\\AnalyticsController' => __DIR__ . '/../..' . '/app/Http/Controllers/AnalyticsController.php', 'FluentForm\\App\\Http\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Http/Controllers/Controller.php', 'FluentForm\\App\\Http\\Controllers\\FormController' => __DIR__ . '/../..' . '/app/Http/Controllers/FormController.php', 'FluentForm\\App\\Http\\Controllers\\FormIntegrationController' => __DIR__ . '/../..' . '/app/Http/Controllers/FormIntegrationController.php', 'FluentForm\\App\\Http\\Controllers\\FormSettingsController' => __DIR__ . '/../..' . '/app/Http/Controllers/FormSettingsController.php', 'FluentForm\\App\\Http\\Controllers\\GlobalIntegrationController' => __DIR__ . '/../..' . '/app/Http/Controllers/GlobalIntegrationController.php', 'FluentForm\\App\\Http\\Controllers\\GlobalSettingsController' => __DIR__ . '/../..' . '/app/Http/Controllers/GlobalSettingsController.php', 'FluentForm\\App\\Http\\Controllers\\IntegrationManagerController' => __DIR__ . '/../..' . '/app/Http/Controllers/IntegrationManagerController.php', 'FluentForm\\App\\Http\\Controllers\\LogController' => __DIR__ . '/../..' . '/app/Http/Controllers/LogController.php', 'FluentForm\\App\\Http\\Controllers\\ManagersController' => __DIR__ . '/../..' . '/app/Http/Controllers/ManagersController.php', 'FluentForm\\App\\Http\\Controllers\\ReportController' => __DIR__ . '/../..' . '/app/Http/Controllers/ReportController.php', 'FluentForm\\App\\Http\\Controllers\\RolesController' => __DIR__ . '/../..' . '/app/Http/Controllers/RolesController.php', 'FluentForm\\App\\Http\\Controllers\\SubmissionController' => __DIR__ . '/../..' . '/app/Http/Controllers/SubmissionController.php', 'FluentForm\\App\\Http\\Controllers\\SubmissionHandlerController' => __DIR__ . '/../..' . '/app/Http/Controllers/SubmissionHandlerController.php', 'FluentForm\\App\\Http\\Controllers\\SubmissionLogController' => __DIR__ . '/../..' . '/app/Http/Controllers/SubmissionLogController.php', 'FluentForm\\App\\Http\\Controllers\\SubmissionNoteController' => __DIR__ . '/../..' . '/app/Http/Controllers/SubmissionNoteController.php', 'FluentForm\\App\\Http\\Controllers\\TransferController' => __DIR__ . '/../..' . '/app/Http/Controllers/TransferController.php', 'FluentForm\\App\\Http\\Policies\\FormPolicy' => __DIR__ . '/../..' . '/app/Http/Policies/FormPolicy.php', 'FluentForm\\App\\Http\\Policies\\GlobalSettingsPolicy' => __DIR__ . '/../..' . '/app/Http/Policies/GlobalSettingsPolicy.php', 'FluentForm\\App\\Http\\Policies\\PublicPolicy' => __DIR__ . '/../..' . '/app/Http/Policies/PublicPolicy.php', 'FluentForm\\App\\Http\\Policies\\ReportPolicy' => __DIR__ . '/../..' . '/app/Http/Policies/ReportPolicy.php', 'FluentForm\\App\\Http\\Policies\\RoleManagerPolicy' => __DIR__ . '/../..' . '/app/Http/Policies/RoleManagerPolicy.php', 'FluentForm\\App\\Http\\Policies\\SubmissionPolicy' => __DIR__ . '/../..' . '/app/Http/Policies/SubmissionPolicy.php', 'FluentForm\\App\\Http\\Requests\\UserRequest' => __DIR__ . '/../..' . '/app/Http/Requests/UserRequest.php', 'FluentForm\\App\\Models\\Entry' => __DIR__ . '/../..' . '/app/Models/Entry.php', 'FluentForm\\App\\Models\\EntryDetails' => __DIR__ . '/../..' . '/app/Models/EntryDetails.php', 'FluentForm\\App\\Models\\EntryMeta' => __DIR__ . '/../..' . '/app/Models/EntryMeta.php', 'FluentForm\\App\\Models\\Form' => __DIR__ . '/../..' . '/app/Models/Form.php', 'FluentForm\\App\\Models\\FormAnalytics' => __DIR__ . '/../..' . '/app/Models/FormAnalytics.php', 'FluentForm\\App\\Models\\FormMeta' => __DIR__ . '/../..' . '/app/Models/FormMeta.php', 'FluentForm\\App\\Models\\Log' => __DIR__ . '/../..' . '/app/Models/Log.php', 'FluentForm\\App\\Models\\Model' => __DIR__ . '/../..' . '/app/Models/Model.php', 'FluentForm\\App\\Models\\Scheduler' => __DIR__ . '/../..' . '/app/Models/Scheduler.php', 'FluentForm\\App\\Models\\Submission' => __DIR__ . '/../..' . '/app/Models/Submission.php', 'FluentForm\\App\\Models\\SubmissionMeta' => __DIR__ . '/../..' . '/app/Models/SubmissionMeta.php', 'FluentForm\\App\\Models\\Traits\\PredefinedForms' => __DIR__ . '/../..' . '/app/Models/Traits/PredefinedForms.php', 'FluentForm\\App\\Models\\User' => __DIR__ . '/../..' . '/app/Models/User.php', 'FluentForm\\App\\Modules\\Acl\\Acl' => __DIR__ . '/../..' . '/app/Modules/Acl/Acl.php', 'FluentForm\\App\\Modules\\Acl\\Managers' => __DIR__ . '/../..' . '/app/Modules/Acl/Managers.php', 'FluentForm\\App\\Modules\\Acl\\RoleManager' => __DIR__ . '/../..' . '/app/Modules/Acl/RoleManager.php', 'FluentForm\\App\\Modules\\AddOnModule' => __DIR__ . '/../..' . '/app/Modules/AddOnModule.php', 'FluentForm\\App\\Modules\\CLI\\Commands' => __DIR__ . '/../..' . '/app/Modules/CLI/Commands.php', 'FluentForm\\App\\Modules\\Component\\BaseComponent' => __DIR__ . '/../..' . '/app/Modules/Component/BaseComponent.php', 'FluentForm\\App\\Modules\\Component\\Component' => __DIR__ . '/../..' . '/app/Modules/Component/Component.php', 'FluentForm\\App\\Modules\\Component\\ComponentInitTrait' => __DIR__ . '/../..' . '/app/Modules/Component/ComponentInitTrait.php', 'FluentForm\\App\\Modules\\DashboardWidgetModule' => __DIR__ . '/../..' . '/app/Modules/DashboardWidgetModule.php', 'FluentForm\\App\\Modules\\DocumentationModule' => __DIR__ . '/../..' . '/app/Modules/DocumentationModule.php', 'FluentForm\\App\\Modules\\EditorButtonModule' => __DIR__ . '/../..' . '/app/Modules/EditorButtonModule.php', 'FluentForm\\App\\Modules\\Entries\\Entries' => __DIR__ . '/../..' . '/app/Modules/Entries/Entries.php', 'FluentForm\\App\\Modules\\Entries\\EntryQuery' => __DIR__ . '/../..' . '/app/Modules/Entries/EntryQuery.php', 'FluentForm\\App\\Modules\\Entries\\Export' => __DIR__ . '/../..' . '/app/Modules/Entries/Export.php', 'FluentForm\\App\\Modules\\Entries\\Report' => __DIR__ . '/../..' . '/app/Modules/Entries/Report.php', 'FluentForm\\App\\Modules\\Form\\AkismetHandler' => __DIR__ . '/../..' . '/app/Modules/Form/AkismetHandler.php', 'FluentForm\\App\\Modules\\Form\\Analytics' => __DIR__ . '/../..' . '/app/Modules/Form/Analytics.php', 'FluentForm\\App\\Modules\\Form\\Form' => __DIR__ . '/../..' . '/app/Modules/Form/Form.php', 'FluentForm\\App\\Modules\\Form\\FormDataParser' => __DIR__ . '/../..' . '/app/Modules/Form/FormDataParser.php', 'FluentForm\\App\\Modules\\Form\\FormFieldsParser' => __DIR__ . '/../..' . '/app/Modules/Form/FormFieldsParser.php', 'FluentForm\\App\\Modules\\Form\\FormHandler' => __DIR__ . '/../..' . '/app/Modules/Form/FormHandler.php', 'FluentForm\\App\\Modules\\Form\\HoneyPot' => __DIR__ . '/../..' . '/app/Modules/Form/HoneyPot.php', 'FluentForm\\App\\Modules\\Form\\Inputs' => __DIR__ . '/../..' . '/app/Modules/Form/Inputs.php', 'FluentForm\\App\\Modules\\Form\\Predefined' => __DIR__ . '/../..' . '/app/Modules/Form/Predefined.php', 'FluentForm\\App\\Modules\\Form\\Settings\\EntryColumnViewSettings' => __DIR__ . '/../..' . '/app/Modules/Form/Settings/EntryColumnViewSettings.php', 'FluentForm\\App\\Modules\\Form\\Settings\\ExtraSettings' => __DIR__ . '/../..' . '/app/Modules/Form/Settings/ExtraSettings.php', 'FluentForm\\App\\Modules\\Form\\Settings\\FormCssJs' => __DIR__ . '/../..' . '/app/Modules/Form/Settings/FormCssJs.php', 'FluentForm\\App\\Modules\\Form\\Settings\\FormSettings' => __DIR__ . '/../..' . '/app/Modules/Form/Settings/FormSettings.php', 'FluentForm\\App\\Modules\\Form\\Settings\\Validator\\Confirmations' => __DIR__ . '/../..' . '/app/Modules/Form/Settings/Validator/Confirmations.php', 'FluentForm\\App\\Modules\\Form\\Settings\\Validator\\MailChimps' => __DIR__ . '/../..' . '/app/Modules/Form/Settings/Validator/MailChimps.php', 'FluentForm\\App\\Modules\\Form\\Settings\\Validator\\Notifications' => __DIR__ . '/../..' . '/app/Modules/Form/Settings/Validator/Notifications.php', 'FluentForm\\App\\Modules\\Form\\Settings\\Validator\\Pdfs' => __DIR__ . '/../..' . '/app/Modules/Form/Settings/Validator/Pdfs.php', 'FluentForm\\App\\Modules\\Form\\Settings\\Validator\\Validator' => __DIR__ . '/../..' . '/app/Modules/Form/Settings/Validator/Validator.php', 'FluentForm\\App\\Modules\\Form\\Transfer' => __DIR__ . '/../..' . '/app/Modules/Form/Transfer.php', 'FluentForm\\App\\Modules\\HCaptcha\\HCaptcha' => __DIR__ . '/../..' . '/app/Modules/HCaptcha/HCaptcha.php', 'FluentForm\\App\\Modules\\Logger\\DataLogger' => __DIR__ . '/../..' . '/app/Modules/Logger/DataLogger.php', 'FluentForm\\App\\Modules\\ProcessExteriorModule' => __DIR__ . '/../..' . '/app/Modules/ProcessExteriorModule.php', 'FluentForm\\App\\Modules\\ReCaptcha\\ReCaptcha' => __DIR__ . '/../..' . '/app/Modules/ReCaptcha/ReCaptcha.php', 'FluentForm\\App\\Modules\\Registerer\\AdminBar' => __DIR__ . '/../..' . '/app/Modules/Registerer/AdminBar.php', 'FluentForm\\App\\Modules\\Registerer\\Menu' => __DIR__ . '/../..' . '/app/Modules/Registerer/Menu.php', 'FluentForm\\App\\Modules\\Registerer\\ReviewQuery' => __DIR__ . '/../..' . '/app/Modules/Registerer/ReviewQuery.php', 'FluentForm\\App\\Modules\\Registerer\\TranslationString' => __DIR__ . '/../..' . '/app/Modules/Registerer/TranslationString.php', 'FluentForm\\App\\Modules\\Renderer\\GlobalSettings\\Settings' => __DIR__ . '/../..' . '/app/Modules/Renderer/GlobalSettings/Settings.php', 'FluentForm\\App\\Modules\\Settings\\Settings' => __DIR__ . '/../..' . '/app/Modules/Settings/Settings.php', 'FluentForm\\App\\Modules\\Track\\SetupModule' => __DIR__ . '/../..' . '/app/Modules/Track/SetupModule.php', 'FluentForm\\App\\Modules\\Track\\TrackModule' => __DIR__ . '/../..' . '/app/Modules/Track/TrackModule.php', 'FluentForm\\App\\Modules\\Turnstile\\Turnstile' => __DIR__ . '/../..' . '/app/Modules/Turnstile/Turnstile.php', 'FluentForm\\App\\Modules\\Widgets\\ElementorWidget' => __DIR__ . '/../..' . '/app/Modules/Widgets/ElementorWidget.php', 'FluentForm\\App\\Modules\\Widgets\\FluentFormWidget' => __DIR__ . '/../..' . '/app/Modules/Widgets/FluentFormWidget.php', 'FluentForm\\App\\Modules\\Widgets\\OxyFluentFormWidget' => __DIR__ . '/../..' . '/app/Modules/Widgets/OxyFluentFormWidget.php', 'FluentForm\\App\\Modules\\Widgets\\OxygenEl' => __DIR__ . '/../..' . '/app/Modules/Widgets/OxygenEl.php', 'FluentForm\\App\\Modules\\Widgets\\OxygenWidget' => __DIR__ . '/../..' . '/app/Modules/Widgets/OxygenWidget.php', 'FluentForm\\App\\Modules\\Widgets\\SidebarWidgets' => __DIR__ . '/../..' . '/app/Modules/Widgets/SidebarWidgets.php', 'FluentForm\\App\\Services\\Analytics\\AnalyticsService' => __DIR__ . '/../..' . '/app/Services/Analytics/AnalyticsService.php', 'FluentForm\\App\\Services\\Browser\\Browser' => __DIR__ . '/../..' . '/app/Services/Browser/Browser.php', 'FluentForm\\App\\Services\\ConditionAssesor' => __DIR__ . '/../..' . '/app/Services/ConditionAssesor.php', 'FluentForm\\App\\Services\\Emogrifier\\Emogrifier' => __DIR__ . '/../..' . '/app/Services/Emogrifier/Emogrifier.php', 'FluentForm\\App\\Services\\FluentConversational\\Classes\\Converter\\Converter' => __DIR__ . '/../..' . '/app/Services/FluentConversational/Classes/Converter/Converter.php', 'FluentForm\\App\\Services\\FluentConversational\\Classes\\Elements\\WelcomeScreen' => __DIR__ . '/../..' . '/app/Services/FluentConversational/Classes/Elements/WelcomeScreen.php', 'FluentForm\\App\\Services\\FluentConversational\\Classes\\Fonts' => __DIR__ . '/../..' . '/app/Services/FluentConversational/Classes/Fonts.php', 'FluentForm\\App\\Services\\FluentConversational\\Classes\\Form' => __DIR__ . '/../..' . '/app/Services/FluentConversational/Classes/Form.php', 'FluentForm\\App\\Services\\FormBuilder\\BaseFieldManager' => __DIR__ . '/../..' . '/app/Services/FormBuilder/BaseFieldManager.php', 'FluentForm\\App\\Services\\FormBuilder\\Components' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\Address' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/Address.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\BaseComponent' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/BaseComponent.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\Checkable' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/Checkable.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\Container' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/Container.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\CustomHtml' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/CustomHtml.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\CustomSubmitButton' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/CustomSubmitButton.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\DateTime' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/DateTime.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\Hcaptcha' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/Hcaptcha.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\Name' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/Name.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\Rating' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/Rating.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\Recaptcha' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/Recaptcha.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\SectionBreak' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/SectionBreak.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\Select' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/Select.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\SelectCountry' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/SelectCountry.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\SubmitButton' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/SubmitButton.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\TabularGrid' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/TabularGrid.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\TermsAndConditions' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/TermsAndConditions.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\Text' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/Text.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\TextArea' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/TextArea.php', 'FluentForm\\App\\Services\\FormBuilder\\Components\\Turnstile' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Components/Turnstile.php', 'FluentForm\\App\\Services\\FormBuilder\\EditorShortCode' => __DIR__ . '/../..' . '/app/Services/FormBuilder/EditorShortCode.php', 'FluentForm\\App\\Services\\FormBuilder\\EditorShortcodeParser' => __DIR__ . '/../..' . '/app/Services/FormBuilder/EditorShortcodeParser.php', 'FluentForm\\App\\Services\\FormBuilder\\FormBuilder' => __DIR__ . '/../..' . '/app/Services/FormBuilder/FormBuilder.php', 'FluentForm\\App\\Services\\FormBuilder\\GroupSetterProxy' => __DIR__ . '/../..' . '/app/Services/FormBuilder/GroupSetterProxy.php', 'FluentForm\\App\\Services\\FormBuilder\\NotificationParser' => __DIR__ . '/../..' . '/app/Services/FormBuilder/NotificationParser.php', 'FluentForm\\App\\Services\\FormBuilder\\Notifications\\EmailNotification' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Notifications/EmailNotification.php', 'FluentForm\\App\\Services\\FormBuilder\\Notifications\\EmailNotificationActions' => __DIR__ . '/../..' . '/app/Services/FormBuilder/Notifications/EmailNotificationActions.php', 'FluentForm\\App\\Services\\FormBuilder\\ShortCodeParser' => __DIR__ . '/../..' . '/app/Services/FormBuilder/ShortCodeParser.php', 'FluentForm\\App\\Services\\Form\\Duplicator' => __DIR__ . '/../..' . '/app/Services/Form/Duplicator.php', 'FluentForm\\App\\Services\\Form\\Fields' => __DIR__ . '/../..' . '/app/Services/Form/Fields.php', 'FluentForm\\App\\Services\\Form\\FormService' => __DIR__ . '/../..' . '/app/Services/Form/FormService.php', 'FluentForm\\App\\Services\\Form\\FormValidationService' => __DIR__ . '/../..' . '/app/Services/Form/FormValidationService.php', 'FluentForm\\App\\Services\\Form\\SubmissionHandlerService' => __DIR__ . '/../..' . '/app/Services/Form/SubmissionHandlerService.php', 'FluentForm\\App\\Services\\Form\\Updater' => __DIR__ . '/../..' . '/app/Services/Form/Updater.php', 'FluentForm\\App\\Services\\GlobalSettings\\GlobalSettingsHelper' => __DIR__ . '/../..' . '/app/Services/GlobalSettings/GlobalSettingsHelper.php', 'FluentForm\\App\\Services\\GlobalSettings\\GlobalSettingsService' => __DIR__ . '/../..' . '/app/Services/GlobalSettings/GlobalSettingsService.php', 'FluentForm\\App\\Services\\Integrations\\BaseIntegration' => __DIR__ . '/../..' . '/app/Services/Integrations/BaseIntegration.php', 'FluentForm\\App\\Services\\Integrations\\FormIntegrationService' => __DIR__ . '/../..' . '/app/Services/Integrations/FormIntegrationService.php', 'FluentForm\\App\\Services\\Integrations\\GlobalIntegrationManager' => __DIR__ . '/../..' . '/app/Services/Integrations/GlobalIntegrationManager.php', 'FluentForm\\App\\Services\\Integrations\\GlobalIntegrationService' => __DIR__ . '/../..' . '/app/Services/Integrations/GlobalIntegrationService.php', 'FluentForm\\App\\Services\\Integrations\\GlobalNotificationManager' => __DIR__ . '/../..' . '/app/Services/Integrations/GlobalNotificationManager.php', 'FluentForm\\App\\Services\\Integrations\\GlobalNotificationService' => __DIR__ . '/../..' . '/app/Services/Integrations/GlobalNotificationService.php', 'FluentForm\\App\\Services\\Integrations\\IntegrationManager' => __DIR__ . '/../..' . '/app/Services/Integrations/IntegrationManager.php', 'FluentForm\\App\\Services\\Integrations\\LogResponseTrait' => __DIR__ . '/../..' . '/app/Services/Integrations/LogResponseTrait.php', 'FluentForm\\App\\Services\\Integrations\\MailChimp\\MailChimp' => __DIR__ . '/../..' . '/app/Services/Integrations/MailChimp/MailChimp.php', 'FluentForm\\App\\Services\\Integrations\\MailChimp\\MailChimpIntegration' => __DIR__ . '/../..' . '/app/Services/Integrations/MailChimp/MailChimpIntegration.php', 'FluentForm\\App\\Services\\Integrations\\MailChimp\\MailChimpSubscriber' => __DIR__ . '/../..' . '/app/Services/Integrations/MailChimp/MailChimpSubscriber.php', 'FluentForm\\App\\Services\\Integrations\\Slack\\Slack' => __DIR__ . '/../..' . '/app/Services/Integrations/Slack/Slack.php', 'FluentForm\\App\\Services\\Integrations\\Slack\\SlackNotificationActions' => __DIR__ . '/../..' . '/app/Services/Integrations/Slack/SlackNotificationActions.php', 'FluentForm\\App\\Services\\Logger\\Logger' => __DIR__ . '/../..' . '/app/Services/Logger/Logger.php', 'FluentForm\\App\\Services\\Manager\\ManagerService' => __DIR__ . '/../..' . '/app/Services/Manager/ManagerService.php', 'FluentForm\\App\\Services\\Migrator\\Bootstrap' => __DIR__ . '/../..' . '/app/Services/Migrator/Bootstrap.php', 'FluentForm\\App\\Services\\Migrator\\Classes\\BaseMigrator' => __DIR__ . '/../..' . '/app/Services/Migrator/Classes/BaseMigrator.php', 'FluentForm\\App\\Services\\Migrator\\Classes\\CalderaMigrator' => __DIR__ . '/../..' . '/app/Services/Migrator/Classes/CalderaMigrator.php', 'FluentForm\\App\\Services\\Migrator\\Classes\\GravityFormsMigrator' => __DIR__ . '/../..' . '/app/Services/Migrator/Classes/GravityFormsMigrator.php', 'FluentForm\\App\\Services\\Migrator\\Classes\\NinjaFormsMigrator' => __DIR__ . '/../..' . '/app/Services/Migrator/Classes/NinjaFormsMigrator.php', 'FluentForm\\App\\Services\\Migrator\\Classes\\WpFormsMigrator' => __DIR__ . '/../..' . '/app/Services/Migrator/Classes/WpFormsMigrator.php', 'FluentForm\\App\\Services\\Parser\\Extractor' => __DIR__ . '/../..' . '/app/Services/Parser/Extractor.php', 'FluentForm\\App\\Services\\Parser\\Form' => __DIR__ . '/../..' . '/app/Services/Parser/Form.php', 'FluentForm\\App\\Services\\Parser\\Validations' => __DIR__ . '/../..' . '/app/Services/Parser/Validations.php', 'FluentForm\\App\\Services\\Report\\ReportHelper' => __DIR__ . '/../..' . '/app/Services/Report/ReportHelper.php', 'FluentForm\\App\\Services\\Report\\ReportService' => __DIR__ . '/../..' . '/app/Services/Report/ReportService.php', 'FluentForm\\App\\Services\\Roles\\RolesService' => __DIR__ . '/../..' . '/app/Services/Roles/RolesService.php', 'FluentForm\\App\\Services\\Scheduler\\Scheduler' => __DIR__ . '/../..' . '/app/Services/Scheduler/Scheduler.php', 'FluentForm\\App\\Services\\Settings\\Customizer' => __DIR__ . '/../..' . '/app/Services/Settings/Customizer.php', 'FluentForm\\App\\Services\\Settings\\SettingsService' => __DIR__ . '/../..' . '/app/Services/Settings/SettingsService.php', 'FluentForm\\App\\Services\\Settings\\Validator' => __DIR__ . '/../..' . '/app/Services/Settings/Validator.php', 'FluentForm\\App\\Services\\Settings\\Validator\\Confirmations' => __DIR__ . '/../..' . '/app/Services/Settings/Validator/Confirmations.php', 'FluentForm\\App\\Services\\Settings\\Validator\\MailChimps' => __DIR__ . '/../..' . '/app/Services/Settings/Validator/MailChimps.php', 'FluentForm\\App\\Services\\Settings\\Validator\\Notifications' => __DIR__ . '/../..' . '/app/Services/Settings/Validator/Notifications.php', 'FluentForm\\App\\Services\\Settings\\Validator\\Pdfs' => __DIR__ . '/../..' . '/app/Services/Settings/Validator/Pdfs.php', 'FluentForm\\App\\Services\\Settings\\Validator\\Validate' => __DIR__ . '/../..' . '/app/Services/Settings/Validator/Validate.php', 'FluentForm\\App\\Services\\Submission\\SubmissionService' => __DIR__ . '/../..' . '/app/Services/Submission/SubmissionService.php', 'FluentForm\\App\\Services\\Transfer\\TransferService' => __DIR__ . '/../..' . '/app/Services/Transfer/TransferService.php', 'FluentForm\\App\\Services\\WPAsync\\FluentFormAsyncRequest' => __DIR__ . '/../..' . '/app/Services/WPAsync/FluentFormAsyncRequest.php', 'FluentForm\\Database\\DBMigrator' => __DIR__ . '/../..' . '/database/DBMigrator.php', 'FluentForm\\Database\\Migrations\\FormAnalytics' => __DIR__ . '/../..' . '/database/Migrations/FormAnalytics.php', 'FluentForm\\Database\\Migrations\\FormMeta' => __DIR__ . '/../..' . '/database/Migrations/FormMeta.php', 'FluentForm\\Database\\Migrations\\Forms' => __DIR__ . '/../..' . '/database/Migrations/Forms.php', 'FluentForm\\Database\\Migrations\\Logs' => __DIR__ . '/../..' . '/database/Migrations/Logs.php', 'FluentForm\\Database\\Migrations\\ScheduledActions' => __DIR__ . '/../..' . '/database/Migrations/ScheduledActions.php', 'FluentForm\\Database\\Migrations\\SubmissionDetails' => __DIR__ . '/../..' . '/database/Migrations/SubmissionDetails.php', 'FluentForm\\Database\\Migrations\\SubmissionMeta' => __DIR__ . '/../..' . '/database/Migrations/SubmissionMeta.php', 'FluentForm\\Database\\Migrations\\Submissions' => __DIR__ . '/../..' . '/database/Migrations/Submissions.php', 'FluentForm\\Framework\\Database\\BaseGrammar' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/BaseGrammar.php', 'FluentForm\\Framework\\Database\\ConnectionInterface' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/ConnectionInterface.php', 'FluentForm\\Framework\\Database\\ConnectionResolver' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/ConnectionResolver.php', 'FluentForm\\Framework\\Database\\ConnectionResolverInterface' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/ConnectionResolverInterface.php', 'FluentForm\\Framework\\Database\\Orm\\Builder' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Builder.php', 'FluentForm\\Framework\\Database\\Orm\\Collection' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Collection.php', 'FluentForm\\Framework\\Database\\Orm\\DateTime' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/DateTime.php', 'FluentForm\\Framework\\Database\\Orm\\MassAssignmentException' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/MassAssignmentException.php', 'FluentForm\\Framework\\Database\\Orm\\Model' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Model.php', 'FluentForm\\Framework\\Database\\Orm\\ModelHelperTrait' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/ModelHelperTrait.php', 'FluentForm\\Framework\\Database\\Orm\\ModelNotFoundException' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/ModelNotFoundException.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\BelongsTo' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/BelongsTo.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\BelongsToMany' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/BelongsToMany.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\HasMany' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/HasMany.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\HasManyThrough' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/HasManyThrough.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\HasOne' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/HasOne.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\HasOneOrMany' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/HasOneOrMany.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\MorphMany' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/MorphMany.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\MorphOne' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/MorphOne.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\MorphOneOrMany' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/MorphOneOrMany.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\MorphPivot' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/MorphPivot.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\MorphTo' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/MorphTo.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\MorphToMany' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/MorphToMany.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\Pivot' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/Pivot.php', 'FluentForm\\Framework\\Database\\Orm\\Relations\\Relation' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Relations/Relation.php', 'FluentForm\\Framework\\Database\\Orm\\Scope' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/Scope.php', 'FluentForm\\Framework\\Database\\Orm\\ScopeInterface' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/ScopeInterface.php', 'FluentForm\\Framework\\Database\\Orm\\SoftDeletes' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/SoftDeletes.php', 'FluentForm\\Framework\\Database\\Orm\\SoftDeletingScope' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Orm/SoftDeletingScope.php', 'FluentForm\\Framework\\Database\\QueryException' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/QueryException.php', 'FluentForm\\Framework\\Database\\Query\\Builder' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Query/Builder.php', 'FluentForm\\Framework\\Database\\Query\\Expression' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Query/Expression.php', 'FluentForm\\Framework\\Database\\Query\\Grammar' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Query/Grammar.php', 'FluentForm\\Framework\\Database\\Query\\JoinClause' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Query/JoinClause.php', 'FluentForm\\Framework\\Database\\Query\\JsonExpression' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Query/JsonExpression.php', 'FluentForm\\Framework\\Database\\Query\\MySqlGrammar' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Query/MySqlGrammar.php', 'FluentForm\\Framework\\Database\\Query\\Processor' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Query/Processor.php', 'FluentForm\\Framework\\Database\\Query\\WPDBConnection' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Database/Query/WPDBConnection.php', 'FluentForm\\Framework\\Foundation\\App' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/App.php', 'FluentForm\\Framework\\Foundation\\Application' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/Application.php', 'FluentForm\\Framework\\Foundation\\AsyncRequestTrait' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/AsyncRequestTrait.php', 'FluentForm\\Framework\\Foundation\\BindingResolutionException' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/BindingResolutionException.php', 'FluentForm\\Framework\\Foundation\\ComponentBinder' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/ComponentBinder.php', 'FluentForm\\Framework\\Foundation\\Config' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/Config.php', 'FluentForm\\Framework\\Foundation\\Container' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/Container.php', 'FluentForm\\Framework\\Foundation\\ContainerContract' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/ContainerContract.php', 'FluentForm\\Framework\\Foundation\\ContextualBindingBuilder' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/ContextualBindingBuilder.php', 'FluentForm\\Framework\\Foundation\\ContextualBindingBuilderContract' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/ContextualBindingBuilderContract.php', 'FluentForm\\Framework\\Foundation\\CronTaskSchedulerTrait' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/CronTaskSchedulerTrait.php', 'FluentForm\\Framework\\Foundation\\Dispatcher' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/Dispatcher.php', 'FluentForm\\Framework\\Foundation\\ForbiddenException' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/ForbiddenException.php', 'FluentForm\\Framework\\Foundation\\FoundationTrait' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/FoundationTrait.php', 'FluentForm\\Framework\\Foundation\\Policy' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/Policy.php', 'FluentForm\\Framework\\Foundation\\RequestGuard' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/RequestGuard.php', 'FluentForm\\Framework\\Foundation\\UnAuthorizedException' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Foundation/UnAuthorizedException.php', 'FluentForm\\Framework\\Helpers\\ArrayHelper' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Helpers/ArrayHelper.php', 'FluentForm\\Framework\\Http\\Controller' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Http/Controller.php', 'FluentForm\\Framework\\Http\\Route' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Http/Route.php', 'FluentForm\\Framework\\Http\\Router' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Http/Router.php', 'FluentForm\\Framework\\Pagination\\AbstractPaginator' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Pagination/AbstractPaginator.php', 'FluentForm\\Framework\\Pagination\\LengthAwarePaginator' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Pagination/LengthAwarePaginator.php', 'FluentForm\\Framework\\Pagination\\LengthAwarePaginatorInterface' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Pagination/LengthAwarePaginatorInterface.php', 'FluentForm\\Framework\\Pagination\\Paginator' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Pagination/Paginator.php', 'FluentForm\\Framework\\Pagination\\PaginatorInterface' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Pagination/PaginatorInterface.php', 'FluentForm\\Framework\\Pagination\\Presenter' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Pagination/Presenter.php', 'FluentForm\\Framework\\Request\\Cleaner' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Request/Cleaner.php', 'FluentForm\\Framework\\Request\\File' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Request/File.php', 'FluentForm\\Framework\\Request\\FileHandler' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Request/FileHandler.php', 'FluentForm\\Framework\\Request\\Request' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Request/Request.php', 'FluentForm\\Framework\\Response\\Response' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Response/Response.php', 'FluentForm\\Framework\\Support\\Arr' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/Arr.php', 'FluentForm\\Framework\\Support\\ArrayableInterface' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/ArrayableInterface.php', 'FluentForm\\Framework\\Support\\Collection' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/Collection.php', 'FluentForm\\Framework\\Support\\Helper' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/Helper.php', 'FluentForm\\Framework\\Support\\Htmlable' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/Htmlable.php', 'FluentForm\\Framework\\Support\\JsonableInterface' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/JsonableInterface.php', 'FluentForm\\Framework\\Support\\MacroableTrait' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/MacroableTrait.php', 'FluentForm\\Framework\\Support\\Pluralizer' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/Pluralizer.php', 'FluentForm\\Framework\\Support\\QueueableCollectionInterface' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/QueueableCollectionInterface.php', 'FluentForm\\Framework\\Support\\QueueableEntity' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/QueueableEntity.php', 'FluentForm\\Framework\\Support\\Sanitizer' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/Sanitizer.php', 'FluentForm\\Framework\\Support\\Str' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/Str.php', 'FluentForm\\Framework\\Support\\UrlRoutable' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Support/UrlRoutable.php', 'FluentForm\\Framework\\Validator\\Contracts\\File' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Validator/Contracts/File.php', 'FluentForm\\Framework\\Validator\\MessageBag' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Validator/MessageBag.php', 'FluentForm\\Framework\\Validator\\ValidatesAttributes' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Validator/ValidatesAttributes.php', 'FluentForm\\Framework\\Validator\\ValidationData' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Validator/ValidationData.php', 'FluentForm\\Framework\\Validator\\ValidationException' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Validator/ValidationException.php', 'FluentForm\\Framework\\Validator\\ValidationRuleParser' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Validator/ValidationRuleParser.php', 'FluentForm\\Framework\\Validator\\Validator' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/Validator/Validator.php', 'FluentForm\\Framework\\View\\View' => __DIR__ . '/..' . '/wpfluent/framework/src/WPFluent/View/View.php');
        public static function getInitializer(\Composer\Autoload\ClassLoader $loader)
        {
        }
    }
}
namespace FluentForm\Framework\Database {
    abstract class BaseGrammar
    {
        /**
         * The grammar table prefix.
         *
         * @var string
         */
        protected $tablePrefix = '';
        /**
         * Wrap an array of values.
         *
         * @param  array  $values
         * @return array
         */
        public function wrapArray(array $values)
        {
        }
        /**
         * Wrap a table in keyword identifiers.
         *
         * @param  \FluentForm\Framework\Database\Query\Expression|string  $table
         * @return string
         */
        public function wrapTable($table)
        {
        }
        /**
         * Wrap a value in keyword identifiers.
         *
         * @param  \FluentForm\Framework\Database\Query\Expression|string  $value
         * @param  bool    $prefixAlias
         * @return string
         */
        public function wrap($value, $prefixAlias = false)
        {
        }
        /**
         * Wrap a single string in keyword identifiers.
         *
         * @param  string  $value
         * @return string
         */
        protected function wrapValue($value)
        {
        }
        /**
         * Convert an array of column names into a delimited string.
         *
         * @param  array   $columns
         * @return string
         */
        public function columnize(array $columns)
        {
        }
        /**
         * Create query parameter place-holders for an array.
         *
         * @param  array   $values
         * @return string
         */
        public function parameterize($values)
        {
        }
        /**
         * Get the appropriate query parameter place-holder for a value.
         *
         * @param  mixed   $value
         * @return string
         */
        public function parameter($value)
        {
        }
        /**
         * Get the value of a raw expression.
         *
         * @param  \FluentForm\Framework\Database\Query\Expression  $expression
         * @return string
         */
        public function getValue($expression)
        {
        }
        /**
         * Determine if the given value is a raw expression.
         *
         * @param  mixed  $value
         * @return bool
         */
        public function isExpression($value)
        {
        }
        /**
         * Get the format for database stored dates.
         *
         * @return string
         */
        public function getDateFormat()
        {
        }
        /**
         * Get the grammar's table prefix.
         *
         * @return string
         */
        public function getTablePrefix()
        {
        }
        /**
         * Set the grammar's table prefix.
         *
         * @param  string  $prefix
         * @return $this
         */
        public function setTablePrefix($prefix)
        {
        }
    }
    interface ConnectionInterface
    {
        /**
         * Begin a fluent query against a database table.
         *
         * @param  string  $table
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function table($table);
        /**
         * Get a new raw query expression.
         *
         * @param  mixed  $value
         * @return \FluentForm\Framework\Database\Query\Expression
         */
        public function raw($value);
        /**
         * Run a select statement and return a single result.
         *
         * @param  string  $query
         * @param  array   $bindings
         * @return mixed
         */
        public function selectOne($query, $bindings = []);
        /**
         * Run a select statement against the database.
         *
         * @param  string  $query
         * @param  array   $bindings
         * @return array
         */
        public function select($query, $bindings = []);
        /**
         * Run an insert statement against the database.
         *
         * @param  string  $query
         * @param  array   $bindings
         * @return bool
         */
        public function insert($query, $bindings = []);
        /**
         * Run an update statement against the database.
         *
         * @param  string  $query
         * @param  array   $bindings
         * @return int
         */
        public function update($query, $bindings = []);
        /**
         * Run a delete statement against the database.
         *
         * @param  string  $query
         * @param  array   $bindings
         * @return int
         */
        public function delete($query, $bindings = []);
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param  string  $query
         * @param  array   $bindings
         * @return bool
         */
        public function statement($query, $bindings = []);
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param  string  $query
         * @param  array   $bindings
         * @return int
         */
        public function affectingStatement($query, $bindings = []);
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param  string  $query
         * @return bool
         */
        public function unprepared($query);
        /**
         * Prepare the query bindings for execution.
         *
         * @param  array  $bindings
         * @return array
         */
        public function prepareBindings(array $bindings);
        /**
         * Execute a Closure within a transaction.
         *
         * @param  \Closure  $callback
         * @return mixed
         *
         * @throws \Throwable
         */
        public function transaction(\Closure $callback);
        /**
         * Start a new database transaction.
         *
         * @return void
         */
        public function beginTransaction();
        /**
         * Commit the active database transaction.
         *
         * @return void
         */
        public function commit();
        /**
         * Rollback the active database transaction.
         *
         * @return void
         */
        public function rollBack();
        /**
         * Get the number of active transactions.
         *
         * @return int
         */
        public function transactionLevel();
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param  \Closure  $callback
         * @return array
         */
        public function pretend(\Closure $callback);
    }
    interface ConnectionResolverInterface
    {
        /**
         * Get a database connection instance.
         */
        public function connection($name = null);
        /**
         * Get the default connection name.
         *
         * @return string
         */
        public function getDefaultConnection();
        /**
         * Set the default connection name.
         *
         * @param  string  $name
         * @return void
         */
        public function setDefaultConnection($name);
    }
    class ConnectionResolver implements \FluentForm\Framework\Database\ConnectionResolverInterface
    {
        /**
         * Get a database connection instance.
         *
         * @param  string  $name
         * @return \FluentForm\Framework\Database\ConnectionInterface
         */
        public function connection($name = null)
        {
        }
        /**
         * Get the default connection name.
         *
         * @return string
         */
        public function getDefaultConnection()
        {
        }
        /**
         * Set the default connection name.
         *
         * @param  string  $name
         * @return void
         */
        public function setDefaultConnection($name)
        {
        }
    }
}
namespace FluentForm\Framework\Database\Orm {
    class Builder
    {
        /**
         * The base query builder instance.
         *
         * @var \FluentForm\Framework\Database\Query\Builder
         */
        protected $query;
        /**
         * The model being queried.
         *
         * @var \FluentForm\Framework\Database\Orm\Model
         */
        protected $model;
        /**
         * The relationships that should be eager loaded.
         *
         * @var array
         */
        protected $eagerLoad = [];
        /**
         * All of the registered builder macros.
         *
         * @var array
         */
        protected $macros = [];
        /**
         * A replacement for the typical delete function.
         *
         * @var \Closure
         */
        protected $onDelete;
        /**
         * The methods that should be returned from query builder.
         *
         * @var array
         */
        protected $passthru = ['insert', 'insertGetId', 'getBindings', 'toSql', 'exists', 'count', 'min', 'max', 'avg', 'sum', 'getConnection'];
        /**
         * Applied global scopes.
         *
         * @var array
         */
        protected $scopes = [];
        /**
         * Removed global scopes.
         *
         * @var array
         */
        protected $removedScopes = [];
        /**
         * Create a new Eloquent query builder instance.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Register a new global scope.
         *
         * @param  string  $identifier
         * @param  \FluentForm\Framework\Database\Orm\Scope|\Closure  $scope
         * @return $this
         */
        public function withGlobalScope($identifier, $scope)
        {
        }
        /**
         * Remove a registered global scope.
         *
         * @param  \FluentForm\Framework\Database\Orm\Scope|string  $scope
         * @return $this
         */
        public function withoutGlobalScope($scope)
        {
        }
        /**
         * Remove all or passed registered global scopes.
         *
         * @param  array|null  $scopes
         * @return $this
         */
        public function withoutGlobalScopes(array $scopes = null)
        {
        }
        /**
         * Get an array of global scopes that were removed from the query.
         *
         * @return array
         */
        public function removedScopes()
        {
        }
        /**
         * Find a model by its primary key.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model|\FluentForm\Framework\Database\Orm\Collection|static[]|static|null
         */
        public function find($id, $columns = ['*'])
        {
        }
        /**
         * Find multiple models by their primary keys.
         *
         * @param  array  $ids
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Collection
         */
        public function findMany($ids, $columns = ['*'])
        {
        }
        /**
         * Find a model by its primary key or throw an exception.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model|\FluentForm\Framework\Database\Orm\Collection
         *
         * @throws \FluentForm\Framework\Database\Orm\ModelNotFoundException
         */
        public function findOrFail($id, $columns = ['*'])
        {
        }
        /**
         * Find a model by its primary key or return fresh model instance.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function findOrNew($id, $columns = ['*'])
        {
        }
        /**
         * Get the first record matching the attributes or instantiate it.
         *
         * @param  array  $attributes
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function firstOrNew(array $attributes)
        {
        }
        /**
         * Get the first record matching the attributes or create it.
         *
         * @param  array  $attributes
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function firstOrCreate(array $attributes)
        {
        }
        /**
         * Create or update a record matching the attributes, and fill it with values.
         *
         * @param  array  $attributes
         * @param  array  $values
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function updateOrCreate(array $attributes, array $values = [])
        {
        }
        /**
         * Execute the query and get the first result.
         *
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model|static|null
         */
        public function first($columns = ['*'])
        {
        }
        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model|static
         *
         * @throws \FluentForm\Framework\Database\Orm\ModelNotFoundException
         */
        public function firstOrFail($columns = ['*'])
        {
        }
        /**
         * Execute the query as a "select" statement.
         *
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Collection|static[]
         */
        public function get($columns = ['*'])
        {
        }
        /**
         * Get a single column's value from the first result of a query.
         *
         * @param  string  $column
         * @return mixed
         */
        public function value($column)
        {
        }
        /**
         * Get a generator for the given query.
         *
         * @return \Generator
         */
        public function cursor()
        {
        }
        /**
         * Chunk the results of the query.
         *
         * @param  int  $count
         * @param  callable  $callback
         * @return bool
         */
        public function chunk($count, callable $callback)
        {
        }
        /**
         * Chunk the results of a query by comparing numeric IDs.
         *
         * @param  int  $count
         * @param  callable  $callback
         * @param  string  $column
         * @return bool
         */
        public function chunkById($count, callable $callback, $column = 'id')
        {
        }
        /**
         * Execute a callback over each item while chunking.
         *
         * @param  callable  $callback
         * @param  int  $count
         * @return bool
         */
        public function each(callable $callback, $count = 1000)
        {
        }
        /**
         * Get an array with the values of a given column.
         *
         * @param  string  $column
         * @param  string|null  $key
         * @return \Illuminate\Support\Collection
         */
        public function pluck($column, $key = null)
        {
        }
        /**
         * Alias for the "pluck" method.
         *
         * @param  string  $column
         * @param  string  $key
         * @return \Illuminate\Support\Collection
         *
         * @deprecated since version 5.2. Use the "pluck" method directly.
         */
        public function lists($column, $key = null)
        {
        }
        /**
         * Paginate the given query.
         *
         * @param  int  $perPage
         * @param  array  $columns
         * @param  string  $pageName
         * @param  int|null  $page
         * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
         *
         * @throws \InvalidArgumentException
         */
        public function paginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)
        {
        }
        /**
         * Paginate the given query into a simple paginator.
         *
         * @param  int  $perPage
         * @param  array  $columns
         * @param  string  $pageName
         * @param  int|null  $page
         * @return \Illuminate\Contracts\Pagination\Paginator
         */
        public function simplePaginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)
        {
        }
        /**
         * Update a record in the database.
         *
         * @param  array  $values
         * @return int
         */
        public function update(array $values)
        {
        }
        /**
         * Increment a column's value by a given amount.
         *
         * @param  string  $column
         * @param  int  $amount
         * @param  array  $extra
         * @return int
         */
        public function increment($column, $amount = 1, array $extra = [])
        {
        }
        /**
         * Decrement a column's value by a given amount.
         *
         * @param  string  $column
         * @param  int  $amount
         * @param  array  $extra
         * @return int
         */
        public function decrement($column, $amount = 1, array $extra = [])
        {
        }
        /**
         * Add the "updated at" column to an array of values.
         *
         * @param  array  $values
         * @return array
         */
        protected function addUpdatedAtColumn(array $values)
        {
        }
        /**
         * Delete a record from the database.
         *
         * @return mixed
         */
        public function delete()
        {
        }
        /**
         * Run the default delete function on the builder.
         *
         * @return mixed
         */
        public function forceDelete()
        {
        }
        /**
         * Register a replacement for the default delete function.
         *
         * @param  \Closure  $callback
         * @return void
         */
        public function onDelete(\Closure $callback)
        {
        }
        /**
         * Get the hydrated models without eager loading.
         *
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model[]
         */
        public function getModels($columns = ['*'])
        {
        }
        /**
         * Eager load the relationships for the models.
         *
         * @param  array  $models
         * @return array
         */
        public function eagerLoadRelations(array $models)
        {
        }
        /**
         * Eagerly load the relationship on a set of models.
         *
         * @param  array  $models
         * @param  string  $name
         * @param  \Closure  $constraints
         * @return array
         */
        protected function loadRelation(array $models, $name, \Closure $constraints)
        {
        }
        /**
         * Get the relation instance for the given relation name.
         *
         * @param  string  $name
         * @return \FluentForm\Framework\Database\Orm\Relations\Relation
         */
        public function getRelation($name)
        {
        }
        /**
         * Get the deeply nested relations for a given top-level relation.
         *
         * @param  string  $relation
         * @return array
         */
        protected function nestedRelations($relation)
        {
        }
        /**
         * Determine if the relationship is nested.
         *
         * @param  string  $name
         * @param  string  $relation
         * @return bool
         */
        protected function isNested($name, $relation)
        {
        }
        /**
         * Apply the callback's query changes if the given "value" is true.
         *
         * @param  bool  $value
         * @param  \Closure  $callback
         * @return $this
         */
        public function when($value, $callback)
        {
        }
        /**
         * Add a basic where clause to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  mixed   $value
         * @param  string  $boolean
         * @return $this
         */
        public function where($column, $operator = null, $value = null, $boolean = 'and')
        {
        }
        /**
         * Add an "or where" clause to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  mixed   $value
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function orWhere($column, $operator = null, $value = null)
        {
        }
        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param  string  $relation
         * @param  string  $operator
         * @param  int     $count
         * @param  string  $boolean
         * @param  \Closure|null  $callback
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function has($relation, $operator = '>=', $count = 1, $boolean = 'and', \Closure $callback = null)
        {
        }
        /**
         * Add nested relationship count / exists conditions to the query.
         *
         * @param  string  $relations
         * @param  string  $operator
         * @param  int     $count
         * @param  string  $boolean
         * @param  \Closure|null  $callback
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        protected function hasNested($relations, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
        {
        }
        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param  string  $relation
         * @param  string  $boolean
         * @param  \Closure|null  $callback
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function doesntHave($relation, $boolean = 'and', \Closure $callback = null)
        {
        }
        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param  string    $relation
         * @param  \Closure  $callback
         * @param  string    $operator
         * @param  int       $count
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function whereHas($relation, \Closure $callback, $operator = '>=', $count = 1)
        {
        }
        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param  string  $relation
         * @param  \Closure|null  $callback
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function whereDoesntHave($relation, \Closure $callback = null)
        {
        }
        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param  string  $relation
         * @param  string  $operator
         * @param  int     $count
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function orHas($relation, $operator = '>=', $count = 1)
        {
        }
        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param  string    $relation
         * @param  \Closure  $callback
         * @param  string    $operator
         * @param  int       $count
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function orWhereHas($relation, \Closure $callback, $operator = '>=', $count = 1)
        {
        }
        /**
         * Add the "has" condition where clause to the query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $hasQuery
         * @param  \FluentForm\Framework\Database\Orm\Relations\Relation  $relation
         * @param  string  $operator
         * @param  int  $count
         * @param  string  $boolean
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        protected function addHasWhere(\FluentForm\Framework\Database\Orm\Builder $hasQuery, \FluentForm\Framework\Database\Orm\Relations\Relation $relation, $operator, $count, $boolean)
        {
        }
        /**
         * Check if we can run an "exists" query to optimize performance.
         *
         * @param  string  $operator
         * @param  int  $count
         * @return bool
         */
        protected function shouldRunExistsQuery($operator, $count)
        {
        }
        /**
         * Add a sub query count clause to the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder $query
         * @param  string  $operator
         * @param  int  $count
         * @param  string  $boolean
         * @return $this
         */
        protected function whereCountQuery(\FluentForm\Framework\Database\Query\Builder $query, $operator = '>=', $count = 1, $boolean = 'and')
        {
        }
        /**
         * Merge the constraints from a relation query to the current query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $relation
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function mergeModelDefinedRelationConstraints(\FluentForm\Framework\Database\Orm\Builder $relation)
        {
        }
        /**
         * Get the "has relation" base query instance.
         *
         * @param  string  $relation
         * @return \FluentForm\Framework\Database\Orm\Relations\Relation
         */
        protected function getHasRelationQuery($relation)
        {
        }
        /**
         * Set the relationships that should be eager loaded.
         *
         * @param  mixed  $relations
         * @return $this
         */
        public function with($relations)
        {
        }
        /**
         * Prevent the specified relations from being eager loaded.
         *
         * @param  mixed  $relations
         * @return $this
         */
        public function without($relations)
        {
        }
        /**
         * Add subselect queries to count the relations.
         *
         * @param  mixed  $relations
         * @return $this
         */
        public function withCount($relations)
        {
        }
        /**
         * Parse a list of relations into individuals.
         *
         * @param  array  $relations
         * @return array
         */
        protected function parseWithRelations(array $relations)
        {
        }
        /**
         * Parse the nested relationships in a relation.
         *
         * @param  string  $name
         * @param  array   $results
         * @return array
         */
        protected function parseNestedWith($name, $results)
        {
        }
        /**
         * Add the given scopes to the current builder instance.
         *
         * @param  array  $scopes
         * @return mixed
         */
        public function scopes(array $scopes)
        {
        }
        /**
         * Apply the given scope on the current builder instance.
         *
         * @param  callable $scope
         * @param  array $parameters
         * @return mixed
         */
        protected function callScope(callable $scope, $parameters = [])
        {
        }
        /**
         * Apply the scopes to the Eloquent builder instance and return it.
         *
         * @return \FluentForm\Framework\Database\Orm\Builder|static
         */
        public function applyScopes()
        {
        }
        /**
         * Determine if the scope added after the given offset should be nested.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  int  $originalWhereCount
         * @return bool
         */
        protected function shouldNestWheresForScope(\FluentForm\Framework\Database\Query\Builder $query, $originalWhereCount)
        {
        }
        /**
         * Nest where conditions by slicing them at the given where count.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  int  $originalWhereCount
         * @return void
         */
        protected function nestWheresForScope(\FluentForm\Framework\Database\Query\Builder $query, $originalWhereCount)
        {
        }
        /**
         * Slice where conditions at the given offset and add them to the query as a nested condition.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $wheres
         * @param  int  $offset
         * @param  int  $length
         * @return void
         */
        protected function addNestedWhereSlice(\FluentForm\Framework\Database\Query\Builder $query, $wheres, $offset, $length = null)
        {
        }
        /**
         * Create a where array with nested where conditions.
         *
         * @param  array  $whereSlice
         * @return array
         */
        protected function nestWhereSlice($whereSlice)
        {
        }
        /**
         * Get the underlying query builder instance.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function getQuery()
        {
        }
        /**
         * Get a base query builder instance.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function toBase()
        {
        }
        /**
         * Set the underlying query builder instance.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return $this
         */
        public function setQuery($query)
        {
        }
        /**
         * Get the relationships being eagerly loaded.
         *
         * @return array
         */
        public function getEagerLoads()
        {
        }
        /**
         * Set the relationships being eagerly loaded.
         *
         * @param  array  $eagerLoad
         * @return $this
         */
        public function setEagerLoads(array $eagerLoad)
        {
        }
        /**
         * Get the model instance being queried.
         *
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function getModel()
        {
        }
        /**
         * Set a model instance for the model being queried.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model  $model
         * @return $this
         */
        public function setModel(\FluentForm\Framework\Database\Orm\Model $model)
        {
        }
        /**
         * Extend the builder with a given callback.
         *
         * @param  string    $name
         * @param  \Closure  $callback
         * @return void
         */
        public function macro($name, \Closure $callback)
        {
        }
        /**
         * Get the given macro by name.
         *
         * @param  string  $name
         * @return \Closure
         */
        public function getMacro($name)
        {
        }
        /**
         * Dynamically handle calls into the query instance.
         *
         * @param  string  $method
         * @param  array   $parameters
         * @return mixed
         */
        public function __call($method, $parameters)
        {
        }
        /**
         * Force a clone of the underlying query builder when cloning.
         *
         * @return void
         */
        public function __clone()
        {
        }
    }
}
namespace FluentForm\Framework\Support {
    interface QueueableCollectionInterface
    {
        /**
         * Get the type of the entities being queued.
         *
         * @return string|null
         */
        public function getQueueableClass();
        /**
         * Get the identifiers for all of the entities.
         *
         * @return array
         */
        public function getQueueableIds();
    }
    trait MacroableTrait
    {
        /**
         * The registered string macros.
         *
         * @var array
         */
        protected static $macros = [];
        /**
         * Register a custom macro.
         *
         * @param  string    $name
         * @param  callable  $macro
         * @return void
         */
        public static function macro($name, callable $macro)
        {
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string  $name
         * @return bool
         */
        public static function hasMacro($name)
        {
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param  string  $method
         * @param  array   $parameters
         * @return mixed
         *
         * @throws \BadMethodCallException
         */
        public static function __callStatic($method, $parameters)
        {
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param  string  $method
         * @param  array   $parameters
         * @return mixed
         *
         * @throws \BadMethodCallException
         */
        public function __call($method, $parameters)
        {
        }
    }
    class Collection implements \ArrayAccess, \FluentForm\Framework\Support\ArrayableInterface, \Countable, \IteratorAggregate, \FluentForm\Framework\Support\JsonableInterface, \JsonSerializable
    {
        use \FluentForm\Framework\Support\MacroableTrait;
        /**
         * The items contained in the collection.
         *
         * @var array
         */
        protected $items = [];
        /**
         * Create a new collection.
         *
         * @param  mixed  $items
         * @return void
         */
        public function __construct($items = [])
        {
        }
        /**
         * Create a new collection instance if the value isn't one already.
         *
         * @param  mixed  $items
         * @return static
         */
        public static function make($items = [])
        {
        }
        /**
         * Get all of the items in the collection.
         *
         * @return array
         */
        public function all()
        {
        }
        /**
         * Get the average value of a given key.
         *
         * @param  string|null  $key
         * @return mixed
         */
        public function avg($key = null)
        {
        }
        /**
         * Alias for the "avg" method.
         *
         * @param  string|null  $key
         * @return mixed
         */
        public function average($key = null)
        {
        }
        /**
         * Get the median of a given key.
         *
         * @param  null $key
         * @return mixed|null
         */
        public function median($key = null)
        {
        }
        /**
         * Get the mode of a given key.
         *
         * @param  null $key
         * @return array
         */
        public function mode($key = null)
        {
        }
        /**
         * Collapse the collection of items into a single array.
         *
         * @return static
         */
        public function collapse()
        {
        }
        /**
         * Determine if an item exists in the collection.
         *
         * @param  mixed  $key
         * @param  mixed  $value
         * @return bool
         */
        public function contains($key, $value = null)
        {
        }
        /**
         * Get the items in the collection that are not present in the given items.
         *
         * @param  mixed  $items
         * @return static
         */
        public function diff($items)
        {
        }
        /**
         * Get the items in the collection whose keys are not present in the given items.
         *
         * @param  mixed  $items
         * @return static
         */
        public function diffKeys($items)
        {
        }
        /**
         * Execute a callback over each item.
         *
         * @param  callable  $callback
         * @return $this
         */
        public function each(callable $callback)
        {
        }
        /**
         * Create a new collection consisting of every n-th element.
         *
         * @param  int  $step
         * @param  int  $offset
         * @return static
         */
        public function every($step, $offset = 0)
        {
        }
        /**
         * Get all items except for those with the specified keys.
         *
         * @param  mixed  $keys
         * @return static
         */
        public function except($keys)
        {
        }
        /**
         * Run a filter over each of the items.
         *
         * @param  callable|null  $callback
         * @return static
         */
        public function filter(callable $callback = null)
        {
        }
        /**
         * Filter items by the given key value pair.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @param  bool  $strict
         * @return static
         */
        public function where($key, $value, $strict = true)
        {
        }
        /**
         * Filter items by the given key value pair using loose comparison.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return static
         */
        public function whereLoose($key, $value)
        {
        }
        /**
         * Filter items by the given key value pair.
         *
         * @param  string  $key
         * @param  array  $values
         * @param  bool  $strict
         * @return static
         */
        public function whereIn($key, array $values, $strict = true)
        {
        }
        /**
         * Filter items by the given key value pair using loose comparison.
         *
         * @param  string  $key
         * @param  array  $values
         * @return static
         */
        public function whereInLoose($key, array $values)
        {
        }
        /**
         * Get the first item from the collection.
         *
         * @param  callable|null  $callback
         * @param  mixed  $default
         * @return mixed
         */
        public function first(callable $callback = null, $default = null)
        {
        }
        /**
         * Get a flattened array of the items in the collection.
         *
         * @param  int  $depth
         * @return static
         */
        public function flatten($depth = INF)
        {
        }
        /**
         * Flip the items in the collection.
         *
         * @return static
         */
        public function flip()
        {
        }
        /**
         * Remove an item from the collection by key.
         *
         * @param  string|array  $keys
         * @return $this
         */
        public function forget($keys)
        {
        }
        /**
         * Get an item from the collection by key.
         *
         * @param  mixed  $key
         * @param  mixed  $default
         * @return mixed
         */
        public function get($key, $default = null)
        {
        }
        /**
         * Group an associative array by a field or using a callback.
         *
         * @param  callable|string  $groupBy
         * @param  bool  $preserveKeys
         * @return static
         */
        public function groupBy($groupBy, $preserveKeys = false)
        {
        }
        /**
         * Key an associative array by a field or using a callback.
         *
         * @param  callable|string  $keyBy
         * @return static
         */
        public function keyBy($keyBy)
        {
        }
        /**
         * Determine if an item exists in the collection by key.
         *
         * @param  mixed  $key
         * @return bool
         */
        public function has($key)
        {
        }
        /**
         * Concatenate values of a given key as a string.
         *
         * @param  string  $value
         * @param  string  $glue
         * @return string
         */
        public function implode($value, $glue = null)
        {
        }
        /**
         * Intersect the collection with the given items.
         *
         * @param  mixed  $items
         * @return static
         */
        public function intersect($items)
        {
        }
        /**
         * Determine if the collection is empty or not.
         *
         * @return bool
         */
        public function isEmpty()
        {
        }
        /**
         * Determine if the given value is callable, but not a string.
         *
         * @param  mixed  $value
         * @return bool
         */
        protected function useAsCallable($value)
        {
        }
        /**
         * Get the keys of the collection items.
         *
         * @return static
         */
        public function keys()
        {
        }
        /**
         * Get the last item from the collection.
         *
         * @param  callable|null  $callback
         * @param  mixed  $default
         * @return mixed
         */
        public function last(callable $callback = null, $default = null)
        {
        }
        /**
         * Get the values of a given key.
         *
         * @param  string  $value
         * @param  string|null  $key
         * @return static
         */
        public function pluck($value, $key = null)
        {
        }
        /**
         * Alias for the "pluck" method.
         *
         * @param  string  $value
         * @param  string|null  $key
         * @return static
         *
         * @deprecated since version 5.2. Use the "pluck" method directly.
         */
        public function lists($value, $key = null)
        {
        }
        /**
         * Run a map over each of the items.
         *
         * @param  callable  $callback
         * @return static
         */
        public function map(callable $callback)
        {
        }
        /**
         * Map a collection and flatten the result by a single level.
         *
         * @param  callable  $callback
         * @return static
         */
        public function flatMap(callable $callback)
        {
        }
        /**
         * Get the max value of a given key.
         *
         * @param  string|null  $key
         * @return mixed
         */
        public function max($key = null)
        {
        }
        /**
         * Merge the collection with the given items.
         *
         * @param  mixed  $items
         * @return static
         */
        public function merge($items)
        {
        }
        /**
         * Create a collection by using this collection for keys and another for its values.
         *
         * @param  mixed  $values
         * @return static
         */
        public function combine($values)
        {
        }
        /**
         * Union the collection with the given items.
         *
         * @param  mixed  $items
         * @return static
         */
        public function union($items)
        {
        }
        /**
         * Get the min value of a given key.
         *
         * @param  string|null  $key
         * @return mixed
         */
        public function min($key = null)
        {
        }
        /**
         * Get the items with the specified keys.
         *
         * @param  mixed  $keys
         * @return static
         */
        public function only($keys)
        {
        }
        /**
         * "Paginate" the collection by slicing it into a smaller collection.
         *
         * @param  int  $page
         * @param  int  $perPage
         * @return static
         */
        public function forPage($page, $perPage)
        {
        }
        /**
         * Pass the collection to the given callback and return the result.
         *
         * @param  callable $callback
         * @return mixed
         */
        public function pipe(callable $callback)
        {
        }
        /**
         * Get and remove the last item from the collection.
         *
         * @return mixed
         */
        public function pop()
        {
        }
        /**
         * Push an item onto the beginning of the collection.
         *
         * @param  mixed  $value
         * @param  mixed  $key
         * @return $this
         */
        public function prepend($value, $key = null)
        {
        }
        /**
         * Push an item onto the end of the collection.
         *
         * @param  mixed  $value
         * @return $this
         */
        public function push($value)
        {
        }
        /**
         * Get and remove an item from the collection.
         *
         * @param  mixed  $key
         * @param  mixed  $default
         * @return mixed
         */
        public function pull($key, $default = null)
        {
        }
        /**
         * Put an item in the collection by key.
         *
         * @param  mixed  $key
         * @param  mixed  $value
         * @return $this
         */
        public function put($key, $value)
        {
        }
        /**
         * Get one or more items randomly from the collection.
         *
         * @param  int  $amount
         * @return mixed
         *
         * @throws \InvalidArgumentException
         */
        public function random($amount = 1)
        {
        }
        /**
         * Reduce the collection to a single value.
         *
         * @param  callable  $callback
         * @param  mixed     $initial
         * @return mixed
         */
        public function reduce(callable $callback, $initial = null)
        {
        }
        /**
         * Create a collection of all elements that do not pass a given truth test.
         *
         * @param  callable|mixed  $callback
         * @return static
         */
        public function reject($callback)
        {
        }
        /**
         * Reverse items order.
         *
         * @return static
         */
        public function reverse()
        {
        }
        /**
         * Search the collection for a given value and return the corresponding key if successful.
         *
         * @param  mixed  $value
         * @param  bool   $strict
         * @return mixed
         */
        public function search($value, $strict = false)
        {
        }
        /**
         * Get and remove the first item from the collection.
         *
         * @return mixed
         */
        public function shift()
        {
        }
        /**
         * Shuffle the items in the collection.
         *
         * @param int $seed
         * @return static
         */
        public function shuffle($seed = null)
        {
        }
        /**
         * Slice the underlying collection array.
         *
         * @param  int   $offset
         * @param  int   $length
         * @return static
         */
        public function slice($offset, $length = null)
        {
        }
        /**
         * Chunk the underlying collection array.
         *
         * @param  int   $size
         * @return static
         */
        public function chunk($size)
        {
        }
        /**
         * Sort through each item with a callback.
         *
         * @param  callable|null  $callback
         * @return static
         */
        public function sort(callable $callback = null)
        {
        }
        /**
         * Sort the collection using the given callback.
         *
         * @param  callable|string  $callback
         * @param  int   $options
         * @param  bool  $descending
         * @return static
         */
        public function sortBy($callback, $options = SORT_REGULAR, $descending = false)
        {
        }
        /**
         * Sort the collection in descending order using the given callback.
         *
         * @param  callable|string  $callback
         * @param  int  $options
         * @return static
         */
        public function sortByDesc($callback, $options = SORT_REGULAR)
        {
        }
        /**
         * Splice a portion of the underlying collection array.
         *
         * @param  int  $offset
         * @param  int|null  $length
         * @param  mixed  $replacement
         * @return static
         */
        public function splice($offset, $length = null, $replacement = [])
        {
        }
        /**
         * Get the sum of the given values.
         *
         * @param  callable|string|null  $callback
         * @return mixed
         */
        public function sum($callback = null)
        {
        }
        /**
         * Take the first or last {$limit} items.
         *
         * @param  int  $limit
         * @return static
         */
        public function take($limit)
        {
        }
        /**
         * Transform each item in the collection using a callback.
         *
         * @param  callable  $callback
         * @return $this
         */
        public function transform(callable $callback)
        {
        }
        /**
         * Return only unique items from the collection array.
         *
         * @param  string|callable|null  $key
         * @return static
         */
        public function unique($key = null)
        {
        }
        /**
         * Reset the keys on the underlying array.
         *
         * @return static
         */
        public function values()
        {
        }
        /**
         * Get a value retrieving callback.
         *
         * @param  string  $value
         * @return callable
         */
        protected function valueRetriever($value)
        {
        }
        /**
         * Zip the collection together with one or more arrays.
         *
         * e.g. new Collection([1, 2, 3])->zip([4, 5, 6]);
         *      => [[1, 4], [2, 5], [3, 6]]
         *
         * @param  mixed ...$items
         * @return static
         */
        public function zip($items)
        {
        }
        /**
         * Get the collection of items as a plain array.
         *
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array
         */
        #[\ReturnTypeWillChange]
        public function jsonSerialize()
        {
        }
        /**
         * Get the collection of items as JSON.
         *
         * @param  int  $options
         * @return string
         */
        public function toJson($options = 0)
        {
        }
        /**
         * Get an iterator for the items.
         *
         * @return \ArrayIterator
         */
        #[\ReturnTypeWillChange]
        public function getIterator()
        {
        }
        /**
         * Get a CachingIterator instance.
         *
         * @param  int  $flags
         * @return \CachingIterator
         */
        public function getCachingIterator($flags = \CachingIterator::CALL_TOSTRING)
        {
        }
        /**
         * Count the number of items in the collection.
         *
         * @return int
         */
        #[\ReturnTypeWillChange]
        public function count()
        {
        }
        /**
         * Determine if an item exists at an offset.
         *
         * @param  mixed  $key
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function offsetExists($key)
        {
        }
        /**
         * Get an item at a given offset.
         *
         * @param  mixed  $key
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($key)
        {
        }
        /**
         * Set the item at a given offset.
         *
         * @param  mixed  $key
         * @param  mixed  $value
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($key, $value)
        {
        }
        /**
         * Unset the item at a given offset.
         *
         * @param  string  $key
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetUnset($key)
        {
        }
        /**
         * Convert the collection to its string representation.
         *
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * Results array of items from Collection or ArrayableInterface.
         *
         * @param  mixed  $items
         * @return array
         */
        protected function getArrayableItems($items)
        {
        }
    }
}
namespace FluentForm\Framework\Database\Orm {
    class Collection extends \FluentForm\Framework\Support\Collection implements \FluentForm\Framework\Support\QueueableCollectionInterface
    {
        /**
         * Find a model in the collection by key.
         *
         * @param  mixed  $key
         * @param  mixed  $default
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function find($key, $default = null)
        {
        }
        /**
         * Load a set of relationships onto the collection.
         *
         * @param  mixed  $relations
         * @return $this
         */
        public function load($relations)
        {
        }
        /**
         * Add an item to the collection.
         *
         * @param  mixed  $item
         * @return $this
         */
        public function add($item)
        {
        }
        /**
         * Determine if a key exists in the collection.
         *
         * @param  mixed  $key
         * @param  mixed  $value
         * @return bool
         */
        public function contains($key, $value = null)
        {
        }
        /**
         * Get the array of primary keys.
         *
         * @return array
         */
        public function modelKeys()
        {
        }
        /**
         * Merge the collection with the given items.
         *
         * @param  \ArrayAccess|array  $items
         * @return static
         */
        public function merge($items)
        {
        }
        /**
         * Diff the collection with the given items.
         *
         * @param  \ArrayAccess|array  $items
         * @return static
         */
        public function diff($items)
        {
        }
        /**
         * Intersect the collection with the given items.
         *
         * @param  \ArrayAccess|array  $items
         * @return static
         */
        public function intersect($items)
        {
        }
        /**
         * Return only unique items from the collection.
         *
         * @param  string|callable|null  $key
         * @return static
         */
        public function unique($key = null)
        {
        }
        /**
         * Returns only the models from the collection with the specified keys.
         *
         * @param  mixed  $keys
         * @return static
         */
        public function only($keys)
        {
        }
        /**
         * Returns all models in the collection except the models with specified keys.
         *
         * @param  mixed  $keys
         * @return static
         */
        public function except($keys)
        {
        }
        /**
         * Make the given, typically visible, attributes hidden across the entire collection.
         *
         * @param  array|string  $attributes
         * @return $this
         */
        public function makeHidden($attributes)
        {
        }
        /**
         * Make the given, typically hidden, attributes visible across the entire collection.
         *
         * @param  array|string  $attributes
         * @return $this
         */
        public function makeVisible($attributes)
        {
        }
        /**
         * Make the given, typically hidden, attributes visible across the entire collection.
         *
         * @param  array|string  $attributes
         * @return $this
         *
         * @deprecated since version 5.2. Use the "makeVisible" method directly.
         */
        public function withHidden($attributes)
        {
        }
        /**
         * Get a dictionary keyed by primary keys.
         *
         * @param  \ArrayAccess|array|null  $items
         * @return array
         */
        public function getDictionary($items = null)
        {
        }
        /**
         * The following methods are intercepted to always return base collections.
         */
        /**
         * Get an array with the values of a given key.
         *
         * @param  string  $value
         * @param  string|null  $key
         * @return \FluentForm\Framework\Support\Collection
         */
        public function pluck($value, $key = null)
        {
        }
        /**
         * Get the keys of the collection items.
         *
         * @return \FluentForm\Framework\Support\Collection
         */
        public function keys()
        {
        }
        /**
         * Zip the collection together with one or more arrays.
         *
         * @param  mixed ...$items
         * @return \FluentForm\Framework\Support\Collection
         */
        public function zip($items)
        {
        }
        /**
         * Collapse the collection of items into a single array.
         *
         * @return \FluentForm\Framework\Support\Collection
         */
        public function collapse()
        {
        }
        /**
         * Get a flattened array of the items in the collection.
         *
         * @param  int  $depth
         * @return \FluentForm\Framework\Support\Collection
         */
        public function flatten($depth = INF)
        {
        }
        /**
         * Flip the items in the collection.
         *
         * @return \FluentForm\Framework\Support\Collection
         */
        public function flip()
        {
        }
        /**
         * Get the type of the entities being queued.
         *
         * @return string|null
         */
        public function getQueueableClass()
        {
        }
        /**
         * Get the identifiers for all of the entities.
         *
         * @return array
         */
        public function getQueueableIds()
        {
        }
        /**
         * Get a base Support collection instance from this collection.
         *
         * @return \FluentForm\Framework\Support\Collection
         */
        public function toBase()
        {
        }
    }
    class DateTime extends \DateTime
    {
        use \FluentForm\Framework\Database\Orm\ModelHelperTrait;
        public function __construct($datetime = "now", $timezone = null)
        {
        }
        public function __toString()
        {
        }
    }
    class MassAssignmentException extends \RuntimeException
    {
        // Pass
    }
    class ModelNotFoundException extends \RuntimeException
    {
        /**
         * Name of the affected Eloquent model.
         *
         * @var string
         */
        protected $model;
        /**
         * Set the affected Eloquent model.
         *
         * @param  string   $model
         * @return $this
         */
        public function setModel($model)
        {
        }
        /**
         * Get the affected Eloquent model.
         *
         * @return string
         */
        public function getModel()
        {
        }
    }
}
namespace FluentForm\Framework\Database\Orm\Relations {
    abstract class Relation
    {
        /**
         * The Eloquent query builder instance.
         *
         * @var \FluentForm\Framework\Database\Orm\Builder
         */
        protected $query;
        /**
         * The parent model instance.
         *
         * @var \FluentForm\Framework\Database\Orm\Model
         */
        protected $parent;
        /**
         * The related model instance.
         *
         * @var \FluentForm\Framework\Database\Orm\Model
         */
        protected $related;
        /**
         * Indicates if the relation is adding constraints.
         *
         * @var bool
         */
        protected static $constraints = true;
        /**
         * An array to map class names to their morph names in database.
         *
         * @var array
         */
        protected static $morphMap = [];
        /**
         * Create a new relation instance.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Model $parent)
        {
        }
        /**
         * Set the base constraints on the relation query.
         *
         * @return void
         */
        public abstract function addConstraints();
        /**
         * Set the constraints for an eager load of the relation.
         *
         * @param  array  $models
         * @return void
         */
        public abstract function addEagerConstraints(array $models);
        /**
         * Initialize the relation on a set of models.
         *
         * @param  array   $models
         * @param  string  $relation
         * @return array
         */
        public abstract function initRelation(array $models, $relation);
        /**
         * Match the eagerly loaded results to their parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public abstract function match(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation);
        /**
         * Get the results of the relationship.
         *
         * @return mixed
         */
        public abstract function getResults();
        /**
         * Get the relationship for eager loading.
         *
         * @return \FluentForm\Framework\Database\Orm\Collection
         */
        public function getEager()
        {
        }
        /**
         * Touch all of the related models for the relationship.
         *
         * @return void
         */
        public function touch()
        {
        }
        /**
         * Run a raw update against the base query.
         *
         * @param  array  $attributes
         * @return int
         */
        public function rawUpdate(array $attributes = [])
        {
        }
        /**
         * Add the constraints for a relationship count query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationCountQuery(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent)
        {
        }
        /**
         * Add the constraints for a relationship query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @param  array|mixed $columns
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationQuery(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent, $columns = ['*'])
        {
        }
        /**
         * Run a callback with constraints disabled on the relation.
         *
         * @param  \Closure  $callback
         * @return mixed
         */
        public static function noConstraints(\Closure $callback)
        {
        }
        /**
         * Get all of the primary keys for an array of models.
         *
         * @param  array   $models
         * @param  string  $key
         * @return array
         */
        protected function getKeys(array $models, $key = null)
        {
        }
        /**
         * Get the underlying query for the relation.
         *
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getQuery()
        {
        }
        /**
         * Get the base query builder driving the Eloquent builder.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function getBaseQuery()
        {
        }
        /**
         * Get the parent model of the relation.
         *
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function getParent()
        {
        }
        /**
         * Get the fully qualified parent key name.
         *
         * @return string
         */
        public function getQualifiedParentKeyName()
        {
        }
        /**
         * Get the related model of the relation.
         *
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function getRelated()
        {
        }
        /**
         * Get the name of the "created at" column.
         *
         * @return string
         */
        public function createdAt()
        {
        }
        /**
         * Get the name of the "updated at" column.
         *
         * @return string
         */
        public function updatedAt()
        {
        }
        /**
         * Get the name of the related model's "updated at" column.
         *
         * @return string
         */
        public function relatedUpdatedAt()
        {
        }
        /**
         * Wrap the given value with the parent query's grammar.
         *
         * @param  string  $value
         * @return string
         */
        public function wrap($value)
        {
        }
        /**
         * Set or get the morph map for polymorphic relations.
         *
         * @param  array|null  $map
         * @param  bool  $merge
         * @return array
         */
        public static function morphMap(array $map = null, $merge = true)
        {
        }
        /**
         * Builds a table-keyed array from model class names.
         *
         * @param  string[]|null  $models
         * @return array|null
         */
        protected static function buildMorphMapFromModels(array $models = null)
        {
        }
        /**
         * Handle dynamic method calls to the relationship.
         *
         * @param  string  $method
         * @param  array   $parameters
         * @return mixed
         */
        public function __call($method, $parameters)
        {
        }
        /**
         * Force a clone of the underlying query builder when cloning.
         *
         * @return void
         */
        public function __clone()
        {
        }
    }
    class BelongsTo extends \FluentForm\Framework\Database\Orm\Relations\Relation
    {
        /**
         * The foreign key of the parent model.
         *
         * @var string
         */
        protected $foreignKey;
        /**
         * The associated key on the parent model.
         *
         * @var string
         */
        protected $otherKey;
        /**
         * The name of the relationship.
         *
         * @var string
         */
        protected $relation;
        /**
         * The count of self joins.
         *
         * @var int
         */
        protected static $selfJoinCount = 0;
        /**
         * Create a new belongs to relationship instance.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @param  string  $foreignKey
         * @param  string  $otherKey
         * @param  string  $relation
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Model $parent, $foreignKey, $otherKey, $relation)
        {
        }
        /**
         * Get the results of the relationship.
         *
         * @return mixed
         */
        public function getResults()
        {
        }
        /**
         * Set the base constraints on the relation query.
         *
         * @return void
         */
        public function addConstraints()
        {
        }
        /**
         * Add the constraints for a relationship query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @param  array|mixed  $columns
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationQuery(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent, $columns = ['*'])
        {
        }
        /**
         * Add the constraints for a relationship query on the same table.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @param  array|mixed  $columns
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationQueryForSelfRelation(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent, $columns = ['*'])
        {
        }
        /**
         * Get a relationship join table hash.
         *
         * @return string
         */
        public function getRelationCountHash()
        {
        }
        /**
         * Set the constraints for an eager load of the relation.
         *
         * @param  array  $models
         * @return void
         */
        public function addEagerConstraints(array $models)
        {
        }
        /**
         * Gather the keys from an array of related models.
         *
         * @param  array  $models
         * @return array
         */
        protected function getEagerModelKeys(array $models)
        {
        }
        /**
         * Initialize the relation on a set of models.
         *
         * @param  array   $models
         * @param  string  $relation
         * @return array
         */
        public function initRelation(array $models, $relation)
        {
        }
        /**
         * Match the eagerly loaded results to their parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public function match(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation)
        {
        }
        /**
         * Associate the model instance to the given parent.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model|int  $model
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function associate($model)
        {
        }
        /**
         * Dissociate previously associated model from the given parent.
         *
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function dissociate()
        {
        }
        /**
         * Update the parent model on the relationship.
         *
         * @param  array  $attributes
         * @return mixed
         */
        public function update(array $attributes)
        {
        }
        /**
         * Get the foreign key of the relationship.
         *
         * @return string
         */
        public function getForeignKey()
        {
        }
        /**
         * Get the fully qualified foreign key of the relationship.
         *
         * @return string
         */
        public function getQualifiedForeignKey()
        {
        }
        /**
         * Get the associated key of the relationship.
         *
         * @return string
         */
        public function getOtherKey()
        {
        }
        /**
         * Get the fully qualified associated key of the relationship.
         *
         * @return string
         */
        public function getQualifiedOtherKeyName()
        {
        }
    }
    class BelongsToMany extends \FluentForm\Framework\Database\Orm\Relations\Relation
    {
        use \FluentForm\Framework\Database\Orm\ModelHelperTrait;
        /**
         * The intermediate table for the relation.
         *
         * @var string
         */
        protected $table;
        /**
         * The foreign key of the parent model.
         *
         * @var string
         */
        protected $foreignKey;
        /**
         * The associated key of the relation.
         *
         * @var string
         */
        protected $otherKey;
        /**
         * The "name" of the relationship.
         *
         * @var string
         */
        protected $relationName;
        /**
         * The pivot table columns to retrieve.
         *
         * @var array
         */
        protected $pivotColumns = [];
        /**
         * Any pivot table restrictions for where clauses.
         *
         * @var array
         */
        protected $pivotWheres = [];
        /**
         * Any pivot table restrictions for whereIn clauses.
         *
         * @var array
         */
        protected $pivotWhereIns = [];
        /**
         * The custom pivot table column for the created_at timestamp.
         *
         * @var string
         */
        protected $pivotCreatedAt;
        /**
         * The custom pivot table column for the updated_at timestamp.
         *
         * @var string
         */
        protected $pivotUpdatedAt;
        /**
         * The count of self joins.
         *
         * @var int
         */
        protected static $selfJoinCount = 0;
        /**
         * Create a new belongs to many relationship instance.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @param  string  $table
         * @param  string  $foreignKey
         * @param  string  $otherKey
         * @param  string  $relationName
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Model $parent, $table, $foreignKey, $otherKey, $relationName = null)
        {
        }
        /**
         * Get the results of the relationship.
         *
         * @return mixed
         */
        public function getResults()
        {
        }
        /**
         * Set a where clause for a pivot table column.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  mixed   $value
         * @param  string  $boolean
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsToMany
         */
        public function wherePivot($column, $operator = null, $value = null, $boolean = 'and')
        {
        }
        /**
         * Set a "where in" clause for a pivot table column.
         *
         * @param  string  $column
         * @param  mixed   $values
         * @param  string  $boolean
         * @param  bool    $not
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsToMany
         */
        public function wherePivotIn($column, $values, $boolean = 'and', $not = false)
        {
        }
        /**
         * Set an "or where" clause for a pivot table column.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  mixed   $value
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsToMany
         */
        public function orWherePivot($column, $operator = null, $value = null)
        {
        }
        /**
         * Set an "or where in" clause for a pivot table column.
         *
         * @param  string  $column
         * @param  mixed   $values
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsToMany
         */
        public function orWherePivotIn($column, $values)
        {
        }
        /**
         * Execute the query and get the first result.
         *
         * @param  array   $columns
         * @return mixed
         */
        public function first($columns = ['*'])
        {
        }
        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model|static
         *
         * @throws \FluentForm\Framework\Database\Orm\ModelNotFoundException
         */
        public function firstOrFail($columns = ['*'])
        {
        }
        /**
         * Execute the query as a "select" statement.
         *
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Collection
         */
        public function get($columns = ['*'])
        {
        }
        /**
         * Get a paginator for the "select" statement.
         *
         * @param  int  $perPage
         * @param  array  $columns
         * @param  string  $pageName
         * @param  int|null  $page
         * @return \FluentForm\Framework\Contracts\Pagination\LengthAwarePaginator
         */
        public function paginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)
        {
        }
        /**
         * Paginate the given query into a simple paginator.
         *
         * @param  int  $perPage
         * @param  array  $columns
         * @param  string  $pageName
         * @return \FluentForm\Framework\Contracts\Pagination\Paginator
         */
        public function simplePaginate($perPage = null, $columns = ['*'], $pageName = 'page')
        {
        }
        /**
         * Chunk the results of the query.
         *
         * @param  int  $count
         * @param  callable  $callback
         * @return bool
         */
        public function chunk($count, callable $callback)
        {
        }
        /**
         * Hydrate the pivot table relationship on the models.
         *
         * @param  array  $models
         * @return void
         */
        protected function hydratePivotRelation(array $models)
        {
        }
        /**
         * Get the pivot attributes from a model.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model  $model
         * @return array
         */
        protected function cleanPivotAttributes(\FluentForm\Framework\Database\Orm\Model $model)
        {
        }
        /**
         * Set the base constraints on the relation query.
         *
         * @return void
         */
        public function addConstraints()
        {
        }
        /**
         * Add the constraints for a relationship query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @param  array|mixed  $columns
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationQuery(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent, $columns = ['*'])
        {
        }
        /**
         * Add the constraints for a relationship query on the same table.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @param  array|mixed  $columns
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationQueryForSelfJoin(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent, $columns = ['*'])
        {
        }
        /**
         * Get a relationship join table hash.
         *
         * @return string
         */
        public function getRelationCountHash()
        {
        }
        /**
         * Set the select clause for the relation query.
         *
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsToMany
         */
        protected function getSelectColumns(array $columns = ['*'])
        {
        }
        /**
         * Get the pivot columns for the relation.
         *
         * @return array
         */
        protected function getAliasedPivotColumns()
        {
        }
        /**
         * Determine whether the given column is defined as a pivot column.
         *
         * @param  string  $column
         * @return bool
         */
        protected function hasPivotColumn($column)
        {
        }
        /**
         * Set the join clause for the relation query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder|null  $query
         * @return $this
         */
        protected function setJoin($query = null)
        {
        }
        /**
         * Set the where clause for the relation query.
         *
         * @return $this
         */
        protected function setWhere()
        {
        }
        /**
         * Set the constraints for an eager load of the relation.
         *
         * @param  array  $models
         * @return void
         */
        public function addEagerConstraints(array $models)
        {
        }
        /**
         * Initialize the relation on a set of models.
         *
         * @param  array   $models
         * @param  string  $relation
         * @return array
         */
        public function initRelation(array $models, $relation)
        {
        }
        /**
         * Match the eagerly loaded results to their parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public function match(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation)
        {
        }
        /**
         * Build model dictionary keyed by the relation's foreign key.
         *
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @return array
         */
        protected function buildDictionary(\FluentForm\Framework\Database\Orm\Collection $results)
        {
        }
        /**
         * Touch all of the related models for the relationship.
         *
         * E.g.: Touch all roles associated with this user.
         *
         * @return void
         */
        public function touch()
        {
        }
        /**
         * Get all of the IDs for the related models.
         *
         * @return \FluentForm\Framework\Support\Collection
         */
        public function getRelatedIds()
        {
        }
        /**
         * Save a new model and attach it to the parent model.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model  $model
         * @param  array  $joining
         * @param  bool   $touch
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function save(\FluentForm\Framework\Database\Orm\Model $model, array $joining = [], $touch = true)
        {
        }
        /**
         * Save an array of new models and attach them to the parent model.
         *
         * @param  \FluentForm\Framework\Support\Collection|array  $models
         * @param  array  $joinings
         * @return array
         */
        public function saveMany($models, array $joinings = [])
        {
        }
        /**
         * Find a related model by its primary key.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model|\FluentForm\Framework\Database\Orm\Collection|null
         */
        public function find($id, $columns = ['*'])
        {
        }
        /**
         * Find multiple related models by their primary keys.
         *
         * @param  mixed  $ids
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Collection
         */
        public function findMany($ids, $columns = ['*'])
        {
        }
        /**
         * Find a related model by its primary key or throw an exception.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model|\FluentForm\Framework\Database\Orm\Collection
         *
         * @throws \FluentForm\Framework\Database\Orm\ModelNotFoundException
         */
        public function findOrFail($id, $columns = ['*'])
        {
        }
        /**
         * Find a related model by its primary key or return new instance of the related model.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \FluentForm\Framework\Support\Collection|\FluentForm\Framework\Database\Orm\Model
         */
        public function findOrNew($id, $columns = ['*'])
        {
        }
        /**
         * Get the first related model record matching the attributes or instantiate it.
         *
         * @param  array  $attributes
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function firstOrNew(array $attributes)
        {
        }
        /**
         * Get the first related record matching the attributes or create it.
         *
         * @param  array  $attributes
         * @param  array  $joining
         * @param  bool   $touch
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function firstOrCreate(array $attributes, array $joining = [], $touch = true)
        {
        }
        /**
         * Create or update a related record matching the attributes, and fill it with values.
         *
         * @param  array  $attributes
         * @param  array  $values
         * @param  array  $joining
         * @param  bool   $touch
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function updateOrCreate(array $attributes, array $values = [], array $joining = [], $touch = true)
        {
        }
        /**
         * Create a new instance of the related model.
         *
         * @param  array  $attributes
         * @param  array  $joining
         * @param  bool   $touch
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function create(array $attributes, array $joining = [], $touch = true)
        {
        }
        /**
         * Create an array of new instances of the related models.
         *
         * @param  array  $records
         * @param  array  $joinings
         * @return array
         */
        public function createMany(array $records, array $joinings = [])
        {
        }
        /**
         * Sync the intermediate tables with a list of IDs without detaching.
         *
         * @param  \FluentForm\Framework\Database\Orm\Collection|array  $ids
         * @return array
         */
        public function syncWithoutDetaching($ids)
        {
        }
        /**
         * Sync the intermediate tables with a list of IDs or collection of models.
         *
         * @param  \FluentForm\Framework\Database\Orm\Collection|array  $ids
         * @param  bool   $detaching
         * @return array
         */
        public function sync($ids, $detaching = true)
        {
        }
        /**
         * Format the sync list so that it is keyed by ID.
         *
         * @param  array  $records
         * @return array
         */
        protected function formatSyncList(array $records)
        {
        }
        /**
         * Attach all of the IDs that aren't in the current array.
         *
         * @param  array  $records
         * @param  array  $current
         * @param  bool   $touch
         * @return array
         */
        protected function attachNew(array $records, array $current, $touch = true)
        {
        }
        /**
         * Update an existing pivot record on the table.
         *
         * @param  mixed  $id
         * @param  array  $attributes
         * @param  bool   $touch
         * @return int
         */
        public function updateExistingPivot($id, array $attributes, $touch = true)
        {
        }
        /**
         * Attach a model to the parent.
         *
         * @param  mixed  $id
         * @param  array  $attributes
         * @param  bool   $touch
         * @return void
         */
        public function attach($id, array $attributes = [], $touch = true)
        {
        }
        /**
         * Create an array of records to insert into the pivot table.
         *
         * @param  array  $ids
         * @param  array  $attributes
         * @return array
         */
        protected function createAttachRecords($ids, array $attributes)
        {
        }
        /**
         * Create a full attachment record payload.
         *
         * @param  int    $key
         * @param  mixed  $value
         * @param  array  $attributes
         * @param  bool   $timed
         * @return array
         */
        protected function attacher($key, $value, $attributes, $timed)
        {
        }
        /**
         * Get the attach record ID and extra attributes.
         *
         * @param  mixed  $key
         * @param  mixed  $value
         * @param  array  $attributes
         * @return array
         */
        protected function getAttachId($key, $value, array $attributes)
        {
        }
        /**
         * Create a new pivot attachment record.
         *
         * @param  int   $id
         * @param  bool  $timed
         * @return array
         */
        protected function createAttachRecord($id, $timed)
        {
        }
        /**
         * Set the creation and update timestamps on an attach record.
         *
         * @param  array  $record
         * @param  bool   $exists
         * @return array
         */
        protected function setTimestampsOnAttach(array $record, $exists = false)
        {
        }
        /**
         * Detach models from the relationship.
         *
         * @param  mixed  $ids
         * @param  bool  $touch
         * @return int
         */
        public function detach($ids = [], $touch = true)
        {
        }
        /**
         * If we're touching the parent model, touch.
         *
         * @return void
         */
        public function touchIfTouching()
        {
        }
        /**
         * Determine if we should touch the parent on sync.
         *
         * @return bool
         */
        protected function touchingParent()
        {
        }
        /**
         * Attempt to guess the name of the inverse of the relation.
         *
         * @return string
         */
        protected function guessInverseRelation()
        {
        }
        /**
         * Create a new query builder for the pivot table.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        protected function newPivotQuery()
        {
        }
        /**
         * Get a new plain query builder for the pivot table.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function newPivotStatement()
        {
        }
        /**
         * Get a new pivot statement for a given "other" ID.
         *
         * @param  mixed  $id
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function newPivotStatementForId($id)
        {
        }
        /**
         * Create a new pivot model instance.
         *
         * @param  array  $attributes
         * @param  bool   $exists
         * @return \FluentForm\Framework\Database\Orm\Relations\Pivot
         */
        public function newPivot(array $attributes = [], $exists = false)
        {
        }
        /**
         * Create a new existing pivot model instance.
         *
         * @param  array  $attributes
         * @return \FluentForm\Framework\Database\Orm\Relations\Pivot
         */
        public function newExistingPivot(array $attributes = [])
        {
        }
        /**
         * Set the columns on the pivot table to retrieve.
         *
         * @param  array|mixed  $columns
         * @return $this
         */
        public function withPivot($columns)
        {
        }
        /**
         * Specify that the pivot table has creation and update timestamps.
         *
         * @param  mixed  $createdAt
         * @param  mixed  $updatedAt
         * @return \FluentForm\Framework\Database\Orm\Relations\BelongsToMany
         */
        public function withTimestamps($createdAt = null, $updatedAt = null)
        {
        }
        /**
         * Get the name of the "created at" column.
         *
         * @return string
         */
        public function createdAt()
        {
        }
        /**
         * Get the name of the "updated at" column.
         *
         * @return string
         */
        public function updatedAt()
        {
        }
        /**
         * Get the related model's updated at column name.
         *
         * @return string
         */
        public function getRelatedFreshUpdate()
        {
        }
        /**
         * Get the key for comparing against the parent key in "has" query.
         *
         * @return string
         */
        public function getHasCompareKey()
        {
        }
        /**
         * Get the fully qualified foreign key for the relation.
         *
         * @return string
         */
        public function getForeignKey()
        {
        }
        /**
         * Get the fully qualified "other key" for the relation.
         *
         * @return string
         */
        public function getOtherKey()
        {
        }
        /**
         * Get the intermediate table for the relationship.
         *
         * @return string
         */
        public function getTable()
        {
        }
        /**
         * Get the relationship name for the relationship.
         *
         * @return string
         */
        public function getRelationName()
        {
        }
    }
    abstract class HasOneOrMany extends \FluentForm\Framework\Database\Orm\Relations\Relation
    {
        /**
         * The foreign key of the parent model.
         *
         * @var string
         */
        protected $foreignKey;
        /**
         * The local key of the parent model.
         *
         * @var string
         */
        protected $localKey;
        /**
         * The count of self joins.
         *
         * @var int
         */
        protected static $selfJoinCount = 0;
        /**
         * Create a new has one or many relationship instance.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @param  string  $foreignKey
         * @param  string  $localKey
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Model $parent, $foreignKey, $localKey)
        {
        }
        /**
         * Set the base constraints on the relation query.
         *
         * @return void
         */
        public function addConstraints()
        {
        }
        /**
         * Add the constraints for a relationship query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @param  array|mixed  $columns
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationQuery(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent, $columns = ['*'])
        {
        }
        /**
         * Add the constraints for a relationship query on the same table.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @param  array|mixed  $columns
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationQueryForSelfRelation(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent, $columns = ['*'])
        {
        }
        /**
         * Get a relationship join table hash.
         *
         * @return string
         */
        public function getRelationCountHash()
        {
        }
        /**
         * Set the constraints for an eager load of the relation.
         *
         * @param  array  $models
         * @return void
         */
        public function addEagerConstraints(array $models)
        {
        }
        /**
         * Match the eagerly loaded results to their single parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public function matchOne(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation)
        {
        }
        /**
         * Match the eagerly loaded results to their many parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public function matchMany(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation)
        {
        }
        /**
         * Match the eagerly loaded results to their many parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @param  string  $type
         * @return array
         */
        protected function matchOneOrMany(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation, $type)
        {
        }
        /**
         * Get the value of a relationship by one or many type.
         *
         * @param  array   $dictionary
         * @param  string  $key
         * @param  string  $type
         * @return mixed
         */
        protected function getRelationValue(array $dictionary, $key, $type)
        {
        }
        /**
         * Build model dictionary keyed by the relation's foreign key.
         *
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @return array
         */
        protected function buildDictionary(\FluentForm\Framework\Database\Orm\Collection $results)
        {
        }
        /**
         * Attach a model instance to the parent model.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model  $model
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function save(\FluentForm\Framework\Database\Orm\Model $model)
        {
        }
        /**
         * Attach a collection of models to the parent instance.
         *
         * @param  \Traversable|array  $models
         * @return \Traversable|array
         */
        public function saveMany($models)
        {
        }
        /**
         * Find a model by its primary key or return new instance of the related model.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \FluentForm\Framework\Support\Collection|\FluentForm\Framework\Database\Orm\Model
         */
        public function findOrNew($id, $columns = ['*'])
        {
        }
        /**
         * Get the first related model record matching the attributes or instantiate it.
         *
         * @param  array  $attributes
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function firstOrNew(array $attributes)
        {
        }
        /**
         * Get the first related record matching the attributes or create it.
         *
         * @param  array  $attributes
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function firstOrCreate(array $attributes)
        {
        }
        /**
         * Create or update a related record matching the attributes, and fill it with values.
         *
         * @param  array  $attributes
         * @param  array  $values
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function updateOrCreate(array $attributes, array $values = [])
        {
        }
        /**
         * Create a new instance of the related model.
         *
         * @param  array  $attributes
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function create(array $attributes)
        {
        }
        /**
         * Create an array of new instances of the related model.
         *
         * @param  array  $records
         * @return array
         */
        public function createMany(array $records)
        {
        }
        /**
         * Perform an update on all the related models.
         *
         * @param  array  $attributes
         * @return int
         */
        public function update(array $attributes)
        {
        }
        /**
         * Get the key for comparing against the parent key in "has" query.
         *
         * @return string
         */
        public function getHasCompareKey()
        {
        }
        /**
         * Get the foreign key for the relationship.
         *
         * @return string
         */
        public function getForeignKey()
        {
        }
        /**
         * Get the plain foreign key.
         *
         * @return string
         */
        public function getPlainForeignKey()
        {
        }
        /**
         * Get the key value of the parent's local key.
         *
         * @return mixed
         */
        public function getParentKey()
        {
        }
        /**
         * Get the fully qualified parent key name.
         *
         * @return string
         */
        public function getQualifiedParentKeyName()
        {
        }
    }
    class HasMany extends \FluentForm\Framework\Database\Orm\Relations\HasOneOrMany
    {
        /**
         * Get the results of the relationship.
         *
         * @return mixed
         */
        public function getResults()
        {
        }
        /**
         * Initialize the relation on a set of models.
         *
         * @param  array   $models
         * @param  string  $relation
         * @return array
         */
        public function initRelation(array $models, $relation)
        {
        }
        /**
         * Match the eagerly loaded results to their parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public function match(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation)
        {
        }
    }
    class HasManyThrough extends \FluentForm\Framework\Database\Orm\Relations\Relation
    {
        /**
         * The distance parent model instance.
         *
         * @var \FluentForm\Framework\Database\Orm\Model
         */
        protected $farParent;
        /**
         * The near key on the relationship.
         *
         * @var string
         */
        protected $firstKey;
        /**
         * The far key on the relationship.
         *
         * @var string
         */
        protected $secondKey;
        /**
         * The local key on the relationship.
         *
         * @var string
         */
        protected $localKey;
        /**
         * Create a new has many through relationship instance.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Model  $farParent
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @param  string  $firstKey
         * @param  string  $secondKey
         * @param  string  $localKey
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Model $farParent, \FluentForm\Framework\Database\Orm\Model $parent, $firstKey, $secondKey, $localKey)
        {
        }
        /**
         * Set the base constraints on the relation query.
         *
         * @return void
         */
        public function addConstraints()
        {
        }
        /**
         * Add the constraints for a relationship query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @param  array|mixed  $columns
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationQuery(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent, $columns = ['*'])
        {
        }
        /**
         * Set the join clause on the query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder|null  $query
         * @return void
         */
        protected function setJoin(\FluentForm\Framework\Database\Orm\Builder $query = null)
        {
        }
        /**
         * Determine whether close parent of the relation uses Soft Deletes.
         *
         * @return bool
         */
        public function parentSoftDeletes()
        {
        }
        /**
         * Set the constraints for an eager load of the relation.
         *
         * @param  array  $models
         * @return void
         */
        public function addEagerConstraints(array $models)
        {
        }
        /**
         * Initialize the relation on a set of models.
         *
         * @param  array   $models
         * @param  string  $relation
         * @return array
         */
        public function initRelation(array $models, $relation)
        {
        }
        /**
         * Match the eagerly loaded results to their parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public function match(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation)
        {
        }
        /**
         * Build model dictionary keyed by the relation's foreign key.
         *
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @return array
         */
        protected function buildDictionary(\FluentForm\Framework\Database\Orm\Collection $results)
        {
        }
        /**
         * Get the results of the relationship.
         *
         * @return mixed
         */
        public function getResults()
        {
        }
        /**
         * Execute the query and get the first related model.
         *
         * @param  array   $columns
         * @return mixed
         */
        public function first($columns = ['*'])
        {
        }
        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model|static
         *
         * @throws \FluentForm\Framework\Database\Orm\ModelNotFoundException
         */
        public function firstOrFail($columns = ['*'])
        {
        }
        /**
         * Find a related model by its primary key.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model|\FluentForm\Framework\Database\Orm\Collection|null
         */
        public function find($id, $columns = ['*'])
        {
        }
        /**
         * Find multiple related models by their primary keys.
         *
         * @param  mixed  $ids
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Collection
         */
        public function findMany($ids, $columns = ['*'])
        {
        }
        /**
         * Find a related model by its primary key or throw an exception.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Model|\FluentForm\Framework\Database\Orm\Collection
         *
         * @throws \FluentForm\Framework\Database\Orm\ModelNotFoundException
         */
        public function findOrFail($id, $columns = ['*'])
        {
        }
        /**
         * Execute the query as a "select" statement.
         *
         * @param  array  $columns
         * @return \FluentForm\Framework\Database\Orm\Collection
         */
        public function get($columns = ['*'])
        {
        }
        /**
         * Set the select clause for the relation query.
         *
         * @param  array  $columns
         * @return array
         */
        protected function getSelectColumns(array $columns = ['*'])
        {
        }
        /**
         * Get a paginator for the "select" statement.
         *
         * @param  int  $perPage
         * @param  array  $columns
         * @param  string  $pageName
         * @param  int  $page
         * @return \FluentForm\Framework\Contracts\Pagination\LengthAwarePaginator
         */
        public function paginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)
        {
        }
        /**
         * Paginate the given query into a simple paginator.
         *
         * @param  int  $perPage
         * @param  array  $columns
         * @param  string  $pageName
         * @return \FluentForm\Framework\Contracts\Pagination\Paginator
         */
        public function simplePaginate($perPage = null, $columns = ['*'], $pageName = 'page')
        {
        }
        /**
         * Get the key for comparing against the parent key in "has" query.
         *
         * @return string
         */
        public function getHasCompareKey()
        {
        }
        /**
         * Get the qualified foreign key on the related model.
         *
         * @return string
         */
        public function getForeignKey()
        {
        }
        /**
         * Get the qualified foreign key on the "through" model.
         *
         * @return string
         */
        public function getThroughKey()
        {
        }
    }
    class HasOne extends \FluentForm\Framework\Database\Orm\Relations\HasOneOrMany
    {
        /**
         * Get the results of the relationship.
         *
         * @return mixed
         */
        public function getResults()
        {
        }
        /**
         * Initialize the relation on a set of models.
         *
         * @param  array   $models
         * @param  string  $relation
         * @return array
         */
        public function initRelation(array $models, $relation)
        {
        }
        /**
         * Match the eagerly loaded results to their parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public function match(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation)
        {
        }
    }
    abstract class MorphOneOrMany extends \FluentForm\Framework\Database\Orm\Relations\HasOneOrMany
    {
        /**
         * The foreign key type for the relationship.
         *
         * @var string
         */
        protected $morphType;
        /**
         * The class name of the parent model.
         *
         * @var string
         */
        protected $morphClass;
        /**
         * Create a new morph one or many relationship instance.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @param  string  $type
         * @param  string  $id
         * @param  string  $localKey
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Model $parent, $type, $id, $localKey)
        {
        }
        /**
         * Set the base constraints on the relation query.
         *
         * @return void
         */
        public function addConstraints()
        {
        }
        /**
         * Get the relationship query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @param  array|mixed  $columns
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationQuery(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent, $columns = ['*'])
        {
        }
        /**
         * Set the constraints for an eager load of the relation.
         *
         * @param  array  $models
         * @return void
         */
        public function addEagerConstraints(array $models)
        {
        }
        /**
         * Attach a model instance to the parent model.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model  $model
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function save(\FluentForm\Framework\Database\Orm\Model $model)
        {
        }
        /**
         * Find a related model by its primary key or return new instance of the related model.
         *
         * @param  mixed  $id
         * @param  array  $columns
         * @return \FluentForm\Framework\Support\Collection|\FluentForm\Framework\Database\Orm\Model
         */
        public function findOrNew($id, $columns = ['*'])
        {
        }
        /**
         * Get the first related model record matching the attributes or instantiate it.
         *
         * @param  array  $attributes
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function firstOrNew(array $attributes)
        {
        }
        /**
         * Get the first related record matching the attributes or create it.
         *
         * @param  array  $attributes
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function firstOrCreate(array $attributes)
        {
        }
        /**
         * Create or update a related record matching the attributes, and fill it with values.
         *
         * @param  array  $attributes
         * @param  array  $values
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function updateOrCreate(array $attributes, array $values = [])
        {
        }
        /**
         * Create a new instance of the related model.
         *
         * @param  array  $attributes
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function create(array $attributes)
        {
        }
        /**
         * Set the foreign ID and type for creating a related model.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model  $model
         * @return void
         */
        protected function setForeignAttributesForCreate(\FluentForm\Framework\Database\Orm\Model $model)
        {
        }
        /**
         * Get the foreign key "type" name.
         *
         * @return string
         */
        public function getMorphType()
        {
        }
        /**
         * Get the plain morph type name without the table.
         *
         * @return string
         */
        public function getPlainMorphType()
        {
        }
        /**
         * Get the class name of the parent model.
         *
         * @return string
         */
        public function getMorphClass()
        {
        }
    }
    class MorphMany extends \FluentForm\Framework\Database\Orm\Relations\MorphOneOrMany
    {
        /**
         * Get the results of the relationship.
         *
         * @return mixed
         */
        public function getResults()
        {
        }
        /**
         * Initialize the relation on a set of models.
         *
         * @param  array   $models
         * @param  string  $relation
         * @return array
         */
        public function initRelation(array $models, $relation)
        {
        }
        /**
         * Match the eagerly loaded results to their parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public function match(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation)
        {
        }
    }
    class MorphOne extends \FluentForm\Framework\Database\Orm\Relations\MorphOneOrMany
    {
        /**
         * Get the results of the relationship.
         *
         * @return mixed
         */
        public function getResults()
        {
        }
        /**
         * Initialize the relation on a set of models.
         *
         * @param  array   $models
         * @param  string  $relation
         * @return array
         */
        public function initRelation(array $models, $relation)
        {
        }
        /**
         * Match the eagerly loaded results to their parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public function match(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation)
        {
        }
    }
    class Pivot extends \FluentForm\Framework\Database\Orm\Model
    {
        /**
         * The parent model of the relationship.
         *
         * @var \FluentForm\Framework\Database\Orm\Model
         */
        protected $parent;
        /**
         * The name of the foreign key column.
         *
         * @var string
         */
        protected $foreignKey;
        /**
         * The name of the "other key" column.
         *
         * @var string
         */
        protected $otherKey;
        /**
         * The attributes that aren't mass assignable.
         *
         * @var array
         */
        protected $guarded = [];
        /**
         * Create a new pivot model instance.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @param  array   $attributes
         * @param  string  $table
         * @param  bool    $exists
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\Orm\Model $parent, $attributes, $table, $exists = false)
        {
        }
        /**
         * Create a new pivot model from raw values returned from a query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @param  array   $attributes
         * @param  string  $table
         * @param  bool    $exists
         * @return static
         */
        public static function fromRawAttributes(\FluentForm\Framework\Database\Orm\Model $parent, $attributes, $table, $exists = false)
        {
        }
        /**
         * Set the keys for a save update query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        protected function setKeysForSaveQuery(\FluentForm\Framework\Database\Orm\Builder $query)
        {
        }
        /**
         * Delete the pivot model record from the database.
         *
         * @return int
         */
        public function delete()
        {
        }
        /**
         * Get the query builder for a delete operation on the pivot.
         *
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        protected function getDeleteQuery()
        {
        }
        /**
         * Get the foreign key column name.
         *
         * @return string
         */
        public function getForeignKey()
        {
        }
        /**
         * Get the "other key" column name.
         *
         * @return string
         */
        public function getOtherKey()
        {
        }
        /**
         * Set the key names for the pivot model instance.
         *
         * @param  string  $foreignKey
         * @param  string  $otherKey
         * @return $this
         */
        public function setPivotKeys($foreignKey, $otherKey)
        {
        }
        /**
         * Determine if the pivot model has timestamp attributes.
         *
         * @return bool
         */
        public function hasTimestampAttributes()
        {
        }
        /**
         * Get the name of the "created at" column.
         *
         * @return string
         */
        public function getCreatedAtColumn()
        {
        }
        /**
         * Get the name of the "updated at" column.
         *
         * @return string
         */
        public function getUpdatedAtColumn()
        {
        }
    }
    class MorphPivot extends \FluentForm\Framework\Database\Orm\Relations\Pivot
    {
        /**
         * The type of the polymorphic relation.
         *
         * Explicitly define this so it's not included in saved attributes.
         *
         * @var string
         */
        protected $morphType;
        /**
         * The value of the polymorphic relation.
         *
         * Explicitly define this so it's not included in saved attributes.
         *
         * @var string
         */
        protected $morphClass;
        /**
         * Set the keys for a save update query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        protected function setKeysForSaveQuery(\FluentForm\Framework\Database\Orm\Builder $query)
        {
        }
        /**
         * Delete the pivot model record from the database.
         *
         * @return int
         */
        public function delete()
        {
        }
        /**
         * Set the morph type for the pivot.
         *
         * @param  string  $morphType
         * @return $this
         */
        public function setMorphType($morphType)
        {
        }
        /**
         * Set the morph class for the pivot.
         *
         * @param  string  $morphClass
         * @return \FluentForm\Framework\Database\Orm\Relations\MorphPivot
         */
        public function setMorphClass($morphClass)
        {
        }
    }
    class MorphTo extends \FluentForm\Framework\Database\Orm\Relations\BelongsTo
    {
        /**
         * The type of the polymorphic relation.
         *
         * @var string
         */
        protected $morphType;
        /**
         * The models whose relations are being eager loaded.
         *
         * @var \FluentForm\Framework\Database\Orm\Collection
         */
        protected $models;
        /**
         * All of the models keyed by ID.
         *
         * @var array
         */
        protected $dictionary = [];
        /**
         * A buffer of dynamic calls to query macros.
         *
         * @var array
         */
        protected $macroBuffer = [];
        /**
         * Create a new morph to relationship instance.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @param  string  $foreignKey
         * @param  string  $otherKey
         * @param  string  $type
         * @param  string  $relation
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Model $parent, $foreignKey, $otherKey, $type, $relation)
        {
        }
        /**
         * Get the results of the relationship.
         *
         * @return mixed
         */
        public function getResults()
        {
        }
        /**
         * Set the constraints for an eager load of the relation.
         *
         * @param  array  $models
         * @return void
         */
        public function addEagerConstraints(array $models)
        {
        }
        /**
         * Build a dictionary with the models.
         *
         * @param  \FluentForm\Framework\Database\Orm\Collection  $models
         * @return void
         */
        protected function buildDictionary(\FluentForm\Framework\Database\Orm\Collection $models)
        {
        }
        /**
         * Match the eagerly loaded results to their parents.
         *
         * @param  array   $models
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @param  string  $relation
         * @return array
         */
        public function match(array $models, \FluentForm\Framework\Database\Orm\Collection $results, $relation)
        {
        }
        /**
         * Associate the model instance to the given parent.
         *
         * @param  \FluentForm\Framework\Database\Orm\Model  $model
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function associate($model)
        {
        }
        /**
         * Dissociate previously associated model from the given parent.
         *
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function dissociate()
        {
        }
        /**
         * Get the results of the relationship.
         *
         * Called via eager load method of Eloquent query builder.
         *
         * @return mixed
         */
        public function getEager()
        {
        }
        /**
         * Match the results for a given type to their parents.
         *
         * @param  string  $type
         * @param  \FluentForm\Framework\Database\Orm\Collection  $results
         * @return void
         */
        protected function matchToMorphParents($type, \FluentForm\Framework\Database\Orm\Collection $results)
        {
        }
        /**
         * Get all of the relation results for a type.
         *
         * @param  string  $type
         * @return \FluentForm\Framework\Database\Orm\Collection
         */
        protected function getResultsByType($type)
        {
        }
        /**
         * Gather all of the foreign keys for a given type.
         *
         * @param  string  $type
         * @return array
         */
        protected function gatherKeysByType($type)
        {
        }
        /**
         * Create a new model instance by type.
         *
         * @param  string  $type
         * @return \FluentForm\Framework\Database\Orm\Model
         */
        public function createModelByType($type)
        {
        }
        /**
         * Get the foreign key "type" name.
         *
         * @return string
         */
        public function getMorphType()
        {
        }
        /**
         * Get the dictionary used by the relationship.
         *
         * @return array
         */
        public function getDictionary()
        {
        }
        /**
         * Replay stored macro calls on the actual related instance.
         *
         * @param \FluentForm\Framework\Database\Orm\Builder $query
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        protected function replayMacros(\FluentForm\Framework\Database\Orm\Builder $query)
        {
        }
        /**
         * Handle dynamic method calls to the relationship.
         *
         * @param  string  $method
         * @param  array   $parameters
         * @return mixed
         */
        public function __call($method, $parameters)
        {
        }
    }
    class MorphToMany extends \FluentForm\Framework\Database\Orm\Relations\BelongsToMany
    {
        /**
         * The type of the polymorphic relation.
         *
         * @var string
         */
        protected $morphType;
        /**
         * The class name of the morph type constraint.
         *
         * @var string
         */
        protected $morphClass;
        /**
         * Indicates if we are connecting the inverse of the relation.
         *
         * This primarily affects the morphClass constraint.
         *
         * @var bool
         */
        protected $inverse;
        /**
         * Create a new morph to many relationship instance.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Model  $parent
         * @param  string  $name
         * @param  string  $table
         * @param  string  $foreignKey
         * @param  string  $otherKey
         * @param  string  $relationName
         * @param  bool  $inverse
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Model $parent, $name, $table, $foreignKey, $otherKey, $relationName = null, $inverse = false)
        {
        }
        /**
         * Set the where clause for the relation query.
         *
         * @return $this
         */
        protected function setWhere()
        {
        }
        /**
         * Add the constraints for a relationship count query.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $query
         * @param  \FluentForm\Framework\Database\Orm\Builder  $parent
         * @param  array|mixed  $columns
         * @return \FluentForm\Framework\Database\Orm\Builder
         */
        public function getRelationQuery(\FluentForm\Framework\Database\Orm\Builder $query, \FluentForm\Framework\Database\Orm\Builder $parent, $columns = ['*'])
        {
        }
        /**
         * Set the constraints for an eager load of the relation.
         *
         * @param  array  $models
         * @return void
         */
        public function addEagerConstraints(array $models)
        {
        }
        /**
         * Create a new pivot attachment record.
         *
         * @param  int   $id
         * @param  bool  $timed
         * @return array
         */
        protected function createAttachRecord($id, $timed)
        {
        }
        /**
         * Create a new query builder for the pivot table.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        protected function newPivotQuery()
        {
        }
        /**
         * Create a new pivot model instance.
         *
         * @param  array  $attributes
         * @param  bool   $exists
         * @return \FluentForm\Framework\Database\Orm\Relations\Pivot
         */
        public function newPivot(array $attributes = [], $exists = false)
        {
        }
        /**
         * Get the foreign key "type" name.
         *
         * @return string
         */
        public function getMorphType()
        {
        }
        /**
         * Get the class name of the parent model.
         *
         * @return string
         */
        public function getMorphClass()
        {
        }
    }
}
namespace FluentForm\Framework\Database\Orm {
    interface Scope
    {
        /**
         * Apply the scope to a given Eloquent query builder.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $builder
         * @param  \FluentForm\Framework\Database\Orm\Model  $model
         * @return void
         */
        public function apply(\FluentForm\Framework\Database\Orm\Builder $builder, \FluentForm\Framework\Database\Orm\Model $model);
    }
    interface ScopeInterface extends \FluentForm\Framework\Database\Orm\Scope
    {
        // Pass
    }
    trait SoftDeletes
    {
        /**
         * Indicates if the model is currently force deleting.
         *
         * @var bool
         */
        protected $forceDeleting = false;
        /**
         * Boot the soft deleting trait for a model.
         *
         * @return void
         */
        public static function bootSoftDeletes()
        {
        }
        /**
         * Force a hard delete on a soft deleted model.
         *
         * @return bool|null
         */
        public function forceDelete()
        {
        }
        /**
         * Perform the actual delete query on this model instance.
         *
         * @return mixed
         */
        protected function performDeleteOnModel()
        {
        }
        /**
         * Perform the actual delete query on this model instance.
         *
         * @return void
         */
        protected function runSoftDelete()
        {
        }
        /**
         * Restore a soft-deleted model instance.
         *
         * @return bool|null
         */
        public function restore()
        {
        }
        /**
         * Determine if the model instance has been soft-deleted.
         *
         * @return bool
         */
        public function trashed()
        {
        }
        /**
         * Register a restoring model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @return void
         */
        public static function restoring($callback)
        {
        }
        /**
         * Register a restored model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @return void
         */
        public static function restored($callback)
        {
        }
        /**
         * Get the name of the "deleted at" column.
         *
         * @return string
         */
        public function getDeletedAtColumn()
        {
        }
        /**
         * Get the fully qualified "deleted at" column.
         *
         * @return string
         */
        public function getQualifiedDeletedAtColumn()
        {
        }
    }
    class SoftDeletingScope implements \FluentForm\Framework\Database\Orm\Scope
    {
        /**
         * All of the extensions to be added to the builder.
         *
         * @var array
         */
        protected $extensions = ['ForceDelete', 'Restore', 'WithTrashed', 'WithoutTrashed', 'OnlyTrashed'];
        /**
         * Apply the scope to a given Orm query builder.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $builder
         * @param  \FluentForm\Framework\Database\Orm\Model  $model
         * @return void
         */
        public function apply(\FluentForm\Framework\Database\Orm\Builder $builder, \FluentForm\Framework\Database\Orm\Model $model)
        {
        }
        /**
         * Extend the query builder with the needed functions.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $builder
         * @return void
         */
        public function extend(\FluentForm\Framework\Database\Orm\Builder $builder)
        {
        }
        /**
         * Get the "deleted at" column for the builder.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $builder
         * @return string
         */
        protected function getDeletedAtColumn(\FluentForm\Framework\Database\Orm\Builder $builder)
        {
        }
        /**
         * Add the force delete extension to the builder.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $builder
         * @return void
         */
        protected function addForceDelete(\FluentForm\Framework\Database\Orm\Builder $builder)
        {
        }
        /**
         * Add the restore extension to the builder.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $builder
         * @return void
         */
        protected function addRestore(\FluentForm\Framework\Database\Orm\Builder $builder)
        {
        }
        /**
         * Add the with-trashed extension to the builder.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $builder
         * @return void
         */
        protected function addWithTrashed(\FluentForm\Framework\Database\Orm\Builder $builder)
        {
        }
        /**
         * Add the without-trashed extension to the builder.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $builder
         * @return void
         */
        protected function addWithoutTrashed(\FluentForm\Framework\Database\Orm\Builder $builder)
        {
        }
        /**
         * Add the only-trashed extension to the builder.
         *
         * @param  \FluentForm\Framework\Database\Orm\Builder  $builder
         * @return void
         */
        protected function addOnlyTrashed(\FluentForm\Framework\Database\Orm\Builder $builder)
        {
        }
    }
}
namespace FluentForm\Framework\Database\Query {
    class Builder
    {
        use \FluentForm\Framework\Support\MacroableTrait {
            __call as macroCall;
        }
        /**
         * The database connection instance.
         *
         * @var \FluentForm\Framework\Database\Query\WPDBConnection
         */
        protected $connection;
        /**
         * The database query grammar instance.
         *
         * @var \FluentForm\Framework\Database\Query\Grammar
         */
        protected $grammar;
        /**
         * The database query post processor instance.
         *
         * @var \FluentForm\Framework\Database\Query\Processor
         */
        protected $processor;
        /**
         * The current query value bindings.
         *
         * @var array
         */
        protected $bindings = ['select' => [], 'join' => [], 'where' => [], 'having' => [], 'order' => [], 'union' => []];
        /**
         * An aggregate function and column to be run.
         *
         * @var array
         */
        public $aggregate;
        /**
         * The columns that should be returned.
         *
         * @var array
         */
        public $columns;
        /**
         * Indicates if the query returns distinct results.
         *
         * @var bool
         */
        public $distinct = false;
        /**
         * The table which the query is targeting.
         *
         * @var string
         */
        public $from;
        /**
         * The table joins for the query.
         *
         * @var array
         */
        public $joins;
        /**
         * The where constraints for the query.
         *
         * @var array
         */
        public $wheres = [];
        /**
         * The groupings for the query.
         *
         * @var array
         */
        public $groups;
        /**
         * The having constraints for the query.
         *
         * @var array
         */
        public $havings;
        /**
         * The orderings for the query.
         *
         * @var array
         */
        public $orders;
        /**
         * The maximum number of records to return.
         *
         * @var int
         */
        public $limit;
        /**
         * The number of records to skip.
         *
         * @var int
         */
        public $offset;
        /**
         * The query union statements.
         *
         * @var array
         */
        public $unions;
        /**
         * The maximum number of union records to return.
         *
         * @var int
         */
        public $unionLimit;
        /**
         * The number of union records to skip.
         *
         * @var int
         */
        public $unionOffset;
        /**
         * The orderings for the union query.
         *
         * @var array
         */
        public $unionOrders;
        /**
         * Indicates whether row locking is being used.
         *
         * @var string|bool
         */
        public $lock;
        /**
         * The field backups currently in use.
         *
         * @var array
         */
        protected $backups = [];
        /**
         * The binding backups currently in use.
         *
         * @var array
         */
        protected $bindingBackups = [];
        /**
         * All of the available clause operators.
         *
         * @var array
         */
        protected $operators = ['=', '<', '>', '<=', '>=', '<>', '!=', 'like', 'like binary', 'not like', 'between', 'ilike', '&', '|', '^', '<<', '>>', 'rlike', 'regexp', 'not regexp', '~', '~*', '!~', '!~*', 'similar to', 'not similar to', 'not ilike', '~~*', '!~~*'];
        /**
         * Whether use write pdo for select.
         *
         * @var bool
         */
        protected $useWritePdo = false;
        /**
         * Create a new query builder instance.
         *
         * @param  \FluentForm\Framework\Database\ConnectionInterface  $connection
         * @param  \FluentForm\Framework\Database\Query\Grammar  $grammar
         * @param  \FluentForm\Framework\Database\Query\Processor  $processor
         * @return void
         */
        public function __construct(\FluentForm\Framework\Database\ConnectionInterface $connection, \FluentForm\Framework\Database\Query\Grammar $grammar = null, \FluentForm\Framework\Database\Query\Processor $processor = null)
        {
        }
        /**
         * Set the columns to be selected.
         *
         * @param  array|mixed  $columns
         * @return $this
         */
        public function select($columns = ['*'])
        {
        }
        /**
         * Add a new "raw" select expression to the query.
         *
         * @param  string  $expression
         * @param  array   $bindings
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function selectRaw($expression, array $bindings = [])
        {
        }
        /**
         * Add a subselect expression to the query.
         *
         * @param  \Closure|\FluentForm\Framework\Database\Query\Builder|string $query
         * @param  string  $as
         * @return \FluentForm\Framework\Database\Query\Builder|static
         *
         * @throws \InvalidArgumentException
         */
        public function selectSub($query, $as)
        {
        }
        /**
         * Add a new select column to the query.
         *
         * @param  array|mixed  $column
         * @return $this
         */
        public function addSelect($column)
        {
        }
        /**
         * Force the query to only return distinct results.
         *
         * @return $this
         */
        public function distinct()
        {
        }
        /**
         * Set the table which the query is targeting.
         *
         * @param  string  $table
         * @return $this
         */
        public function from($table)
        {
        }
        /**
         * Add a join clause to the query.
         *
         * @param  string  $table
         * @param  string  $one
         * @param  string  $operator
         * @param  string  $two
         * @param  string  $type
         * @param  bool    $where
         * @return $this
         */
        public function join($table, $one, $operator = null, $two = null, $type = 'inner', $where = false)
        {
        }
        /**
         * Add a "join where" clause to the query.
         *
         * @param  string  $table
         * @param  string  $one
         * @param  string  $operator
         * @param  string  $two
         * @param  string  $type
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function joinWhere($table, $one, $operator, $two, $type = 'inner')
        {
        }
        /**
         * Add a left join to the query.
         *
         * @param  string  $table
         * @param  string  $first
         * @param  string  $operator
         * @param  string  $second
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function leftJoin($table, $first, $operator = null, $second = null)
        {
        }
        /**
         * Add a "join where" clause to the query.
         *
         * @param  string  $table
         * @param  string  $one
         * @param  string  $operator
         * @param  string  $two
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function leftJoinWhere($table, $one, $operator, $two)
        {
        }
        /**
         * Add a right join to the query.
         *
         * @param  string  $table
         * @param  string  $first
         * @param  string  $operator
         * @param  string  $second
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function rightJoin($table, $first, $operator = null, $second = null)
        {
        }
        /**
         * Add a "right join where" clause to the query.
         *
         * @param  string  $table
         * @param  string  $one
         * @param  string  $operator
         * @param  string  $two
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function rightJoinWhere($table, $one, $operator, $two)
        {
        }
        /**
         * Add a "cross join" clause to the query.
         *
         * @param  string  $table
         * @param  string  $first
         * @param  string  $operator
         * @param  string  $second
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function crossJoin($table, $first = null, $operator = null, $second = null)
        {
        }
        /**
         * Apply the callback's query changes if the given "value" is true.
         *
         * @param  bool  $value
         * @param  \Closure  $callback
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function when($value, $callback)
        {
        }
        /**
         * Add a basic where clause to the query.
         *
         * @param  string|array|\Closure  $column
         * @param  string  $operator
         * @param  mixed   $value
         * @param  string  $boolean
         * @return $this
         *
         * @throws \InvalidArgumentException
         */
        public function where($column, $operator = null, $value = null, $boolean = 'and')
        {
        }
        /**
         * Add an array of where clauses to the query.
         *
         * @param  array  $column
         * @param  string  $boolean
         * @param  string  $method
         * @return $this
         */
        protected function addArrayOfWheres($column, $boolean, $method = 'where')
        {
        }
        /**
         * Determine if the given operator and value combination is legal.
         *
         * @param  string  $operator
         * @param  mixed  $value
         * @return bool
         */
        protected function invalidOperatorAndValue($operator, $value)
        {
        }
        /**
         * Set a "where not" constraint on the query.
         *
         * @param  string  $column
         * @param  array|string  $value
         * @return $this
         */
        public function whereNot($column, $value)
        {
        }
        /**
         * Add an "or where" clause to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  mixed   $value
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhere($column, $operator = null, $value = null)
        {
        }
        /**
         * Add a "where" clause comparing two columns to the query.
         *
         * @param  string|array  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @param  string|null  $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
        {
        }
        /**
         * Add an "or where" clause comparing two columns to the query.
         *
         * @param  string|array  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereColumn($first, $operator = null, $second = null)
        {
        }
        /**
         * Add a raw where clause to the query.
         *
         * @param  string  $sql
         * @param  array   $bindings
         * @param  string  $boolean
         * @return $this
         */
        public function whereRaw($sql, array $bindings = [], $boolean = 'and')
        {
        }
        /**
         * Add a raw or where clause to the query.
         *
         * @param  string  $sql
         * @param  array   $bindings
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereRaw($sql, array $bindings = [])
        {
        }
        /**
         * Add a where between statement to the query.
         *
         * @param  string  $column
         * @param  array   $values
         * @param  string  $boolean
         * @param  bool  $not
         * @return $this
         */
        public function whereBetween($column, array $values, $boolean = 'and', $not = false)
        {
        }
        /**
         * Add an or where between statement to the query.
         *
         * @param  string  $column
         * @param  array   $values
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereBetween($column, array $values)
        {
        }
        /**
         * Add a where not between statement to the query.
         *
         * @param  string  $column
         * @param  array   $values
         * @param  string  $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereNotBetween($column, array $values, $boolean = 'and')
        {
        }
        /**
         * Add an or where not between statement to the query.
         *
         * @param  string  $column
         * @param  array   $values
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereNotBetween($column, array $values)
        {
        }
        /**
         * Add a nested where statement to the query.
         *
         * @param  \Closure $callback
         * @param  string   $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereNested(\Closure $callback, $boolean = 'and')
        {
        }
        /**
         * Create a new query instance for nested where condition.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function forNestedWhere()
        {
        }
        /**
         * Add another query builder as a nested where to the query builder.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder|static $query
         * @param  string  $boolean
         * @return $this
         */
        public function addNestedWhereQuery($query, $boolean = 'and')
        {
        }
        /**
         * Add a full sub-select to the query.
         *
         * @param  string   $column
         * @param  string   $operator
         * @param  \Closure $callback
         * @param  string   $boolean
         * @return $this
         */
        protected function whereSub($column, $operator, \Closure $callback, $boolean)
        {
        }
        /**
         * Add an exists clause to the query.
         *
         * @param  \Closure $callback
         * @param  string   $boolean
         * @param  bool     $not
         * @return $this
         */
        public function whereExists(\Closure $callback, $boolean = 'and', $not = false)
        {
        }
        /**
         * Add an or exists clause to the query.
         *
         * @param  \Closure $callback
         * @param  bool     $not
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereExists(\Closure $callback, $not = false)
        {
        }
        /**
         * Add a where not exists clause to the query.
         *
         * @param  \Closure $callback
         * @param  string   $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereNotExists(\Closure $callback, $boolean = 'and')
        {
        }
        /**
         * Add a where not exists clause to the query.
         *
         * @param  \Closure  $callback
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereNotExists(\Closure $callback)
        {
        }
        /**
         * Add an exists clause to the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder $query
         * @param  string  $boolean
         * @param  bool  $not
         * @return $this
         */
        public function addWhereExistsQuery(\FluentForm\Framework\Database\Query\Builder $query, $boolean = 'and', $not = false)
        {
        }
        /**
         * Add a "where in" clause to the query.
         *
         * @param  string  $column
         * @param  mixed   $values
         * @param  string  $boolean
         * @param  bool    $not
         * @return $this
         */
        public function whereIn($column, $values, $boolean = 'and', $not = false)
        {
        }
        /**
         * Add an "or where in" clause to the query.
         *
         * @param  string  $column
         * @param  mixed   $values
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereIn($column, $values)
        {
        }
        /**
         * Add a "where not in" clause to the query.
         *
         * @param  string  $column
         * @param  mixed   $values
         * @param  string  $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereNotIn($column, $values, $boolean = 'and')
        {
        }
        /**
         * Add an "or where not in" clause to the query.
         *
         * @param  string  $column
         * @param  mixed   $values
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereNotIn($column, $values)
        {
        }
        /**
         * Add a where in with a sub-select to the query.
         *
         * @param  string   $column
         * @param  \Closure $callback
         * @param  string   $boolean
         * @param  bool     $not
         * @return $this
         */
        protected function whereInSub($column, \Closure $callback, $boolean, $not)
        {
        }
        /**
         * Add a external sub-select to the query.
         *
         * @param  string   $column
         * @param  \FluentForm\Framework\Database\Query\Builder|static  $query
         * @param  string   $boolean
         * @param  bool     $not
         * @return $this
         */
        protected function whereInExistingQuery($column, $query, $boolean, $not)
        {
        }
        /**
         * Add a "where null" clause to the query.
         *
         * @param  string  $column
         * @param  string  $boolean
         * @param  bool    $not
         * @return $this
         */
        public function whereNull($column, $boolean = 'and', $not = false)
        {
        }
        /**
         * Add an "or where null" clause to the query.
         *
         * @param  string  $column
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereNull($column)
        {
        }
        /**
         * Add a "where not null" clause to the query.
         *
         * @param  string  $column
         * @param  string  $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereNotNull($column, $boolean = 'and')
        {
        }
        /**
         * Add an "or where not null" clause to the query.
         *
         * @param  string  $column
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereNotNull($column)
        {
        }
        /**
         * Add a "where date" statement to the query.
         *
         * @param  string  $column
         * @param  string   $operator
         * @param  int   $value
         * @param  string   $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereDate($column, $operator, $value, $boolean = 'and')
        {
        }
        /**
         * Add an "or where date" statement to the query.
         *
         * @param  string  $column
         * @param  string   $operator
         * @param  int   $value
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereDate($column, $operator, $value)
        {
        }
        /**
         * Add a "where time" statement to the query.
         *
         * @param  string  $column
         * @param  string   $operator
         * @param  int   $value
         * @param  string   $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereTime($column, $operator, $value, $boolean = 'and')
        {
        }
        /**
         * Add an "or where time" statement to the query.
         *
         * @param  string  $column
         * @param  string   $operator
         * @param  int   $value
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orWhereTime($column, $operator, $value)
        {
        }
        /**
         * Add a "where day" statement to the query.
         *
         * @param  string  $column
         * @param  string   $operator
         * @param  int   $value
         * @param  string   $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereDay($column, $operator, $value, $boolean = 'and')
        {
        }
        /**
         * Add a "where month" statement to the query.
         *
         * @param  string  $column
         * @param  string   $operator
         * @param  int   $value
         * @param  string   $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereMonth($column, $operator, $value, $boolean = 'and')
        {
        }
        /**
         * Add a "where year" statement to the query.
         *
         * @param  string  $column
         * @param  string   $operator
         * @param  int   $value
         * @param  string   $boolean
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function whereYear($column, $operator, $value, $boolean = 'and')
        {
        }
        /**
         * Add a date based (year, month, day, time) statement to the query.
         *
         * @param  string  $type
         * @param  string  $column
         * @param  string  $operator
         * @param  int  $value
         * @param  string  $boolean
         * @return $this
         */
        protected function addDateBasedWhere($type, $column, $operator, $value, $boolean = 'and')
        {
        }
        /**
         * Handles dynamic "where" clauses to the query.
         *
         * @param  string  $method
         * @param  string  $parameters
         * @return $this
         */
        public function dynamicWhere($method, $parameters)
        {
        }
        /**
         * Add a single dynamic where clause statement to the query.
         *
         * @param  string  $segment
         * @param  string  $connector
         * @param  array   $parameters
         * @param  int     $index
         * @return void
         */
        protected function addDynamic($segment, $connector, $parameters, $index)
        {
        }
        /**
         * Add a "group by" clause to the query.
         *
         * @param  array|string  $column,...
         * @return $this
         */
        public function groupBy()
        {
        }
        /**
         * Add a "having" clause to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  string  $value
         * @param  string  $boolean
         * @return $this
         */
        public function having($column, $operator = null, $value = null, $boolean = 'and')
        {
        }
        /**
         * Add a "or having" clause to the query.
         *
         * @param  string  $column
         * @param  string  $operator
         * @param  string  $value
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orHaving($column, $operator = null, $value = null)
        {
        }
        /**
         * Add a raw having clause to the query.
         *
         * @param  string  $sql
         * @param  array   $bindings
         * @param  string  $boolean
         * @return $this
         */
        public function havingRaw($sql, array $bindings = [], $boolean = 'and')
        {
        }
        /**
         * Add a raw or having clause to the query.
         *
         * @param  string  $sql
         * @param  array   $bindings
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function orHavingRaw($sql, array $bindings = [])
        {
        }
        /**
         * Add an "order by" clause to the query.
         *
         * @param  string  $column
         * @param  string  $direction
         * @return $this
         */
        public function orderBy($column, $direction = 'asc')
        {
        }
        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param  string  $column
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function latest($column = 'created_at')
        {
        }
        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param  string  $column
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function oldest($column = 'created_at')
        {
        }
        /**
         * Put the query's results in random order.
         *
         * @param  string  $seed
         * @return $this
         */
        public function inRandomOrder($seed = '')
        {
        }
        /**
         * Add a raw "order by" clause to the query.
         *
         * @param  string  $sql
         * @param  array  $bindings
         * @return $this
         */
        public function orderByRaw($sql, $bindings = [])
        {
        }
        /**
         * Set the "offset" value of the query.
         *
         * @param  int  $value
         * @return $this
         */
        public function offset($value)
        {
        }
        /**
         * Alias to set the "offset" value of the query.
         *
         * @param  int  $value
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function skip($value)
        {
        }
        /**
         * Set the "limit" value of the query.
         *
         * @param  int  $value
         * @return $this
         */
        public function limit($value)
        {
        }
        /**
         * Alias to set the "limit" value of the query.
         *
         * @param  int  $value
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function take($value)
        {
        }
        /**
         * Set the limit and offset for a given page.
         *
         * @param  int  $page
         * @param  int  $perPage
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function forPage($page, $perPage = 15)
        {
        }
        /**
         * Constrain the query to the next "page" of results after a given ID.
         *
         * @param  int  $perPage
         * @param  int  $lastId
         * @param  string  $column
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
        {
        }
        /**
         * Add a union statement to the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder|\Closure  $query
         * @param  bool  $all
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function union($query, $all = false)
        {
        }
        /**
         * Add a union all statement to the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder|\Closure  $query
         * @return \FluentForm\Framework\Database\Query\Builder|static
         */
        public function unionAll($query)
        {
        }
        /**
         * Lock the selected rows in the table.
         *
         * @param  bool  $value
         * @return $this
         */
        public function lock($value = true)
        {
        }
        /**
         * Lock the selected rows in the table for updating.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function lockForUpdate()
        {
        }
        /**
         * Share lock the selected rows in the table.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function sharedLock()
        {
        }
        /**
         * Get the SQL representation of the query.
         *
         * @return string
         */
        public function toSql()
        {
        }
        /**
         * Execute a query for a single record by ID.
         *
         * @param  int    $id
         * @param  array  $columns
         * @return mixed|static
         */
        public function find($id, $columns = ['*'])
        {
        }
        /**
         * Get a single column's value from the first result of a query.
         *
         * @param  string  $column
         * @return mixed
         */
        public function value($column)
        {
        }
        /**
         * Execute the query and get the first result.
         *
         * @param  array   $columns
         * @return mixed|static
         */
        public function first($columns = ['*'])
        {
        }
        /**
         * Execute the query as a "select" statement.
         *
         * @param  array  $columns
         * @return array|static[]
         */
        public function get($columns = ['*'])
        {
        }
        /**
         * Run the query as a "select" statement against the connection.
         *
         * @return array
         */
        protected function runSelect()
        {
        }
        /**
         * Paginate the given query into a simple paginator.
         *
         * @param  int  $perPage
         * @param  array  $columns
         * @param  string  $pageName
         * @param  int|null  $page
         * @return \FluentForm\Framework\Pagination\LengthAwarePaginatorInterface
         */
        public function paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
        {
        }
        /**
         * Get a paginator only supporting simple next and previous links.
         *
         * This is more efficient on larger data-sets, etc.
         *
         * @param  int  $perPage
         * @param  array  $columns
         * @param  string  $pageName
         * @param  int|null  $page
         * @return \FluentForm\Framework\Pagination\PaginatorInterface
         */
        public function simplePaginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
        {
        }
        /**
         * Get the count of the total records for the paginator.
         *
         * @param  array  $columns
         * @return int
         */
        public function getCountForPagination($columns = ['*'])
        {
        }
        /**
         * Backup some fields for the pagination count.
         *
         * @return void
         */
        protected function backupFieldsForCount()
        {
        }
        /**
         * Remove the column aliases since they will break count queries.
         *
         * @param  array  $columns
         * @return array
         */
        protected function clearSelectAliases(array $columns)
        {
        }
        /**
         * Restore some fields after the pagination count.
         *
         * @return void
         */
        protected function restoreFieldsForCount()
        {
        }
        /**
         * Get a generator for the given query.
         *
         * @return \Generator
         */
        public function cursor()
        {
        }
        /**
         * Chunk the results of the query.
         *
         * @param  int  $count
         * @param  callable  $callback
         * @return  bool
         */
        public function chunk($count, callable $callback)
        {
        }
        /**
         * Chunk the results of a query by comparing numeric IDs.
         *
         * @param  int  $count
         * @param  callable  $callback
         * @param  string  $column
         * @param  string  $alias
         * @return bool
         */
        public function chunkById($count, callable $callback, $column = 'id', $alias = null)
        {
        }
        /**
         * Execute a callback over each item while chunking.
         *
         * @param  callable  $callback
         * @param  int  $count
         * @return bool
         *
         * @throws \RuntimeException
         */
        public function each(callable $callback, $count = 1000)
        {
        }
        /**
         * Get an array with the values of a given column.
         *
         * @param  string  $column
         * @param  string|null  $key
         * @return array
         */
        public function pluck($column, $key = null)
        {
        }
        /**
         * Alias for the "pluck" method.
         *
         * @param  string  $column
         * @param  string|null  $key
         * @return array
         *
         * @deprecated since version 5.2. Use the "pluck" method directly.
         */
        public function lists($column, $key = null)
        {
        }
        /**
         * Strip off the table name or alias from a column identifier.
         *
         * @param  string  $column
         * @return string|null
         */
        protected function stripTableForPluck($column)
        {
        }
        /**
         * Concatenate values of a given column as a string.
         *
         * @param  string  $column
         * @param  string  $glue
         * @return string
         */
        public function implode($column, $glue = '')
        {
        }
        /**
         * Determine if any rows exist for the current query.
         *
         * @return bool
         */
        public function exists()
        {
        }
        /**
         * Retrieve the "count" result of the query.
         *
         * @param  string  $columns
         * @return int
         */
        public function count($columns = '*')
        {
        }
        /**
         * Retrieve the minimum value of a given column.
         *
         * @param  string  $column
         * @return mixed
         */
        public function min($column)
        {
        }
        /**
         * Retrieve the maximum value of a given column.
         *
         * @param  string  $column
         * @return mixed
         */
        public function max($column)
        {
        }
        /**
         * Retrieve the sum of the values of a given column.
         *
         * @param  string  $column
         * @return mixed
         */
        public function sum($column)
        {
        }
        /**
         * Retrieve the average of the values of a given column.
         *
         * @param  string  $column
         * @return mixed
         */
        public function avg($column)
        {
        }
        /**
         * Alias for the "avg" method.
         *
         * @param  string  $column
         * @return mixed
         */
        public function average($column)
        {
        }
        /**
         * Execute an aggregate function on the database.
         *
         * @param  string  $function
         * @param  array   $columns
         * @return mixed
         */
        public function aggregate($function, $columns = ['*'])
        {
        }
        /**
         * Execute a numeric aggregate function on the database.
         *
         * @param  string  $function
         * @param  array   $columns
         * @return float|int
         */
        public function numericAggregate($function, $columns = ['*'])
        {
        }
        /**
         * Insert a new record into the database.
         *
         * @param  array  $values
         * @return bool
         */
        public function insert(array $values)
        {
        }
        /**
         * Insert a new record and get the value of the primary key.
         *
         * @param  array   $values
         * @param  string  $sequence
         * @return int
         */
        public function insertGetId(array $values, $sequence = null)
        {
        }
        /**
         * Update a record in the database.
         *
         * @param  array  $values
         * @return int
         */
        public function update(array $values)
        {
        }
        /**
         * Insert or update a record matching the attributes, and fill it with values.
         *
         * @param  array  $attributes
         * @param  array  $values
         * @return bool
         */
        public function updateOrInsert(array $attributes, array $values = [])
        {
        }
        /**
         * Increment a column's value by a given amount.
         *
         * @param  string  $column
         * @param  int     $amount
         * @param  array   $extra
         * @return int
         */
        public function increment($column, $amount = 1, array $extra = [])
        {
        }
        /**
         * Decrement a column's value by a given amount.
         *
         * @param  string  $column
         * @param  int     $amount
         * @param  array   $extra
         * @return int
         */
        public function decrement($column, $amount = 1, array $extra = [])
        {
        }
        /**
         * Delete a record from the database.
         *
         * @param  mixed  $id
         * @return int
         */
        public function delete($id = null)
        {
        }
        /**
         * Run a truncate statement on the table.
         *
         * @return void
         */
        public function truncate()
        {
        }
        /**
         * Get a new instance of the query builder.
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function newQuery()
        {
        }
        /**
         * Merge an array of where clauses and bindings.
         *
         * @param  array  $wheres
         * @param  array  $bindings
         * @return void
         */
        public function mergeWheres($wheres, $bindings)
        {
        }
        /**
         * Remove all of the expressions from a list of bindings.
         *
         * @param  array  $bindings
         * @return array
         */
        protected function cleanBindings(array $bindings)
        {
        }
        /**
         * Create a raw database expression.
         *
         * @param  mixed  $value
         * @return \FluentForm\Framework\Database\Query\Expression
         */
        public function raw($value)
        {
        }
        /**
         * Get the current query value bindings in a flattened array.
         *
         * @return array
         */
        public function getBindings()
        {
        }
        /**
         * Get the raw array of bindings.
         *
         * @return array
         */
        public function getRawBindings()
        {
        }
        /**
         * Set the bindings on the query builder.
         *
         * @param  array   $bindings
         * @param  string  $type
         * @return $this
         *
         * @throws \InvalidArgumentException
         */
        public function setBindings(array $bindings, $type = 'where')
        {
        }
        /**
         * Add a binding to the query.
         *
         * @param  mixed   $value
         * @param  string  $type
         * @return $this
         *
         * @throws \InvalidArgumentException
         */
        public function addBinding($value, $type = 'where')
        {
        }
        /**
         * Merge an array of bindings into our bindings.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return $this
         */
        public function mergeBindings(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Get the database connection instance.
         *
         * @return \FluentForm\Framework\Database\ConnectionInterface
         */
        public function getConnection()
        {
        }
        /**
         * Get the database query processor instance.
         *
         * @return \FluentForm\Framework\Database\Query\Processor
         */
        public function getProcessor()
        {
        }
        /**
         * Get the query grammar instance.
         *
         * @return \FluentForm\Framework\Database\Query\Grammar
         */
        public function getGrammar()
        {
        }
        /**
         * Use the write pdo for query.
         *
         * @return $this
         */
        public function useWritePdo()
        {
        }
        /**
         * Handle dynamic method calls into the method.
         *
         * @param  string  $method
         * @param  array   $parameters
         * @return mixed
         *
         * @throws \BadMethodCallException
         */
        public function __call($method, $parameters)
        {
        }
    }
    class Expression
    {
        /**
         * The value of the expression.
         *
         * @var mixed
         */
        protected $value;
        /**
         * Create a new raw query expression.
         *
         * @param  mixed  $value
         * @return void
         */
        public function __construct($value)
        {
        }
        /**
         * Get the value of the expression.
         *
         * @return mixed
         */
        public function getValue()
        {
        }
        /**
         * Get the value of the expression.
         *
         * @return string
         */
        public function __toString()
        {
        }
    }
    class Grammar extends \FluentForm\Framework\Database\BaseGrammar
    {
        /**
         * The grammar specific operators.
         *
         * @var array
         */
        protected $operators = [];
        /**
         * The components that make up a select clause.
         *
         * @var array
         */
        protected $selectComponents = ['aggregate', 'columns', 'from', 'joins', 'wheres', 'groups', 'havings', 'orders', 'limit', 'offset', 'unions', 'lock'];
        /**
         * Compile a select query into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return string
         */
        public function compileSelect(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Compile the components necessary for a select clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return array
         */
        protected function compileComponents(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Compile an aggregated select clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $aggregate
         * @return string
         */
        protected function compileAggregate(\FluentForm\Framework\Database\Query\Builder $query, $aggregate)
        {
        }
        /**
         * Compile the "select *" portion of the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $columns
         * @return string|null
         */
        protected function compileColumns(\FluentForm\Framework\Database\Query\Builder $query, $columns)
        {
        }
        /**
         * Compile the "from" portion of the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  string  $table
         * @return string
         */
        protected function compileFrom(\FluentForm\Framework\Database\Query\Builder $query, $table)
        {
        }
        /**
         * Compile the "join" portions of the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $joins
         * @return string
         */
        protected function compileJoins(\FluentForm\Framework\Database\Query\Builder $query, $joins)
        {
        }
        /**
         * Create a join clause constraint segment.
         *
         * @param  array  $clause
         * @return string
         */
        protected function compileJoinConstraint(array $clause)
        {
        }
        /**
         * Create a nested join clause constraint segment.
         *
         * @param  array  $clause
         * @return string
         */
        protected function compileNestedJoinConstraint(array $clause)
        {
        }
        /**
         * Compile the "where" portions of the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return string
         */
        protected function compileWheres(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Compile a nested where clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereNested(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a where condition with a sub-select.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder $query
         * @param  array   $where
         * @return string
         */
        protected function whereSub(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a basic where clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereBasic(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a where clause comparing two columns..
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereColumn(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a "between" where clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereBetween(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a where exists clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereExists(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a where exists clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereNotExists(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a "where in" clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereIn(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a "where not in" clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereNotIn(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a where in sub-select clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereInSub(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a where not in sub-select clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereNotInSub(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a "where null" clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereNull(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a "where not null" clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereNotNull(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a "where date" clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereDate(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a "where time" clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereTime(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a "where day" clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereDay(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a "where month" clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereMonth(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a "where year" clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereYear(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a date based where clause.
         *
         * @param  string  $type
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function dateBasedWhere($type, \FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile a raw where clause.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $where
         * @return string
         */
        protected function whereRaw(\FluentForm\Framework\Database\Query\Builder $query, $where)
        {
        }
        /**
         * Compile the "group by" portions of the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $groups
         * @return string
         */
        protected function compileGroups(\FluentForm\Framework\Database\Query\Builder $query, $groups)
        {
        }
        /**
         * Compile the "having" portions of the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $havings
         * @return string
         */
        protected function compileHavings(\FluentForm\Framework\Database\Query\Builder $query, $havings)
        {
        }
        /**
         * Compile a single having clause.
         *
         * @param  array   $having
         * @return string
         */
        protected function compileHaving(array $having)
        {
        }
        /**
         * Compile a basic having clause.
         *
         * @param  array   $having
         * @return string
         */
        protected function compileBasicHaving($having)
        {
        }
        /**
         * Compile the "order by" portions of the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $orders
         * @return string
         */
        protected function compileOrders(\FluentForm\Framework\Database\Query\Builder $query, $orders)
        {
        }
        /**
         * Compile the random statement into SQL.
         *
         * @param  string  $seed
         * @return string
         */
        public function compileRandom($seed)
        {
        }
        /**
         * Compile the "limit" portions of the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  int  $limit
         * @return string
         */
        protected function compileLimit(\FluentForm\Framework\Database\Query\Builder $query, $limit)
        {
        }
        /**
         * Compile the "offset" portions of the query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  int  $offset
         * @return string
         */
        protected function compileOffset(\FluentForm\Framework\Database\Query\Builder $query, $offset)
        {
        }
        /**
         * Compile the "union" queries attached to the main query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return string
         */
        protected function compileUnions(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Compile a single union statement.
         *
         * @param  array  $union
         * @return string
         */
        protected function compileUnion(array $union)
        {
        }
        /**
         * Compile an exists statement into SQL.
         *
         * @param \FluentForm\Framework\Database\Query\Builder $query
         * @return string
         */
        public function compileExists(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Compile an insert statement into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $values
         * @return string
         */
        public function compileInsert(\FluentForm\Framework\Database\Query\Builder $query, array $values)
        {
        }
        /**
         * Compile an insert and get ID statement into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array   $values
         * @param  string  $sequence
         * @return string
         */
        public function compileInsertGetId(\FluentForm\Framework\Database\Query\Builder $query, $values, $sequence)
        {
        }
        /**
         * Compile an update statement into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $values
         * @return string
         */
        public function compileUpdate(\FluentForm\Framework\Database\Query\Builder $query, $values)
        {
        }
        /**
         * Prepare the bindings for an update statement.
         *
         * @param  array  $bindings
         * @param  array  $values
         * @return array
         */
        public function prepareBindingsForUpdate(array $bindings, array $values)
        {
        }
        /**
         * Compile a delete statement into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return string
         */
        public function compileDelete(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Compile a truncate table statement into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return array
         */
        public function compileTruncate(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Compile the lock into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  bool|string  $value
         * @return string
         */
        protected function compileLock(\FluentForm\Framework\Database\Query\Builder $query, $value)
        {
        }
        /**
         * Determine if the grammar supports savepoints.
         *
         * @return bool
         */
        public function supportsSavepoints()
        {
        }
        /**
         * Compile the SQL statement to define a savepoint.
         *
         * @param  string  $name
         * @return string
         */
        public function compileSavepoint($name)
        {
        }
        /**
         * Compile the SQL statement to execute a savepoint rollback.
         *
         * @param  string  $name
         * @return string
         */
        public function compileSavepointRollBack($name)
        {
        }
        /**
         * Concatenate an array of segments, removing empties.
         *
         * @param  array   $segments
         * @return string
         */
        protected function concatenate($segments)
        {
        }
        /**
         * Remove the leading boolean from a statement.
         *
         * @param  string  $value
         * @return string
         */
        protected function removeLeadingBoolean($value)
        {
        }
        /**
         * Get the gramar specific operators.
         *
         * @return array
         */
        public function getOperators()
        {
        }
    }
    class JoinClause
    {
        /**
         * The type of join being performed.
         *
         * @var string
         */
        public $type;
        /**
         * The table the join clause is joining to.
         *
         * @var string
         */
        public $table;
        /**
         * The "on" clauses for the join.
         *
         * @var array
         */
        public $clauses = [];
        /**
         * The "on" bindings for the join.
         *
         * @var array
         */
        public $bindings = [];
        /**
         * Create a new join clause instance.
         *
         * @param  string  $type
         * @param  string  $table
         * @return void
         */
        public function __construct($type, $table)
        {
        }
        /**
         * Add an "on" clause to the join.
         *
         * On clauses can be chained, e.g.
         *
         *  $join->on('contacts.user_id', '=', 'users.id')
         *       ->on('contacts.info_id', '=', 'info.id')
         *
         * will produce the following SQL:
         *
         * on `contacts`.`user_id` = `users`.`id`  and `contacts`.`info_id` = `info`.`id`
         *
         * @param  \Closure|string  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @param  string  $boolean
         * @param  bool  $where
         * @return $this
         *
         * @throws \InvalidArgumentException
         */
        public function on($first, $operator = null, $second = null, $boolean = 'and', $where = false)
        {
        }
        /**
         * Add an "or on" clause to the join.
         *
         * @param  \Closure|string  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function orOn($first, $operator = null, $second = null)
        {
        }
        /**
         * Add an "on where" clause to the join.
         *
         * @param  \Closure|string  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @param  string  $boolean
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function where($first, $operator = null, $second = null, $boolean = 'and')
        {
        }
        /**
         * Add an "or on where" clause to the join.
         *
         * @param  \Closure|string  $first
         * @param  string|null  $operator
         * @param  string|null  $second
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function orWhere($first, $operator = null, $second = null)
        {
        }
        /**
         * Add an "on where is null" clause to the join.
         *
         * @param  string  $column
         * @param  string  $boolean
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function whereNull($column, $boolean = 'and')
        {
        }
        /**
         * Add an "or on where is null" clause to the join.
         *
         * @param  string  $column
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function orWhereNull($column)
        {
        }
        /**
         * Add an "on where is not null" clause to the join.
         *
         * @param  string  $column
         * @param  string  $boolean
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function whereNotNull($column, $boolean = 'and')
        {
        }
        /**
         * Add an "or on where is not null" clause to the join.
         *
         * @param  string  $column
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function orWhereNotNull($column)
        {
        }
        /**
         * Add an "on where in (...)" clause to the join.
         *
         * @param  string  $column
         * @param  array  $values
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function whereIn($column, array $values)
        {
        }
        /**
         * Add an "on where not in (...)" clause to the join.
         *
         * @param  string  $column
         * @param  array  $values
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function whereNotIn($column, array $values)
        {
        }
        /**
         * Add an "or on where in (...)" clause to the join.
         *
         * @param  string  $column
         * @param  array  $values
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function orWhereIn($column, array $values)
        {
        }
        /**
         * Add an "or on where not in (...)" clause to the join.
         *
         * @param  string  $column
         * @param  array  $values
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function orWhereNotIn($column, array $values)
        {
        }
        /**
         * Add a nested where statement to the query.
         *
         * @param  \Closure  $callback
         * @param  string   $boolean
         * @return \FluentForm\Framework\Database\Query\JoinClause
         */
        public function nest(\Closure $callback, $boolean = 'and')
        {
        }
    }
    class JsonExpression extends \FluentForm\Framework\Database\Query\Expression
    {
        /**
         * The value of the expression.
         *
         * @var mixed
         */
        protected $value;
        /**
         * Create a new raw query expression.
         *
         * @param  mixed  $value
         * @return void
         */
        public function __construct($value)
        {
        }
        /**
         * Translate the given value into the appropriate JSON binding parameter.
         *
         * @param  mixed  $value
         * @return string
         */
        protected function getJsonBindingParameter($value)
        {
        }
        /**
         * Get the value of the expression.
         *
         * @return mixed
         */
        public function getValue()
        {
        }
        /**
         * Get the value of the expression.
         *
         * @return string
         */
        public function __toString()
        {
        }
    }
    class MySqlGrammar extends \FluentForm\Framework\Database\Query\Grammar
    {
        /**
         * The components that make up a select clause.
         *
         * @var array
         */
        protected $selectComponents = ['aggregate', 'columns', 'from', 'joins', 'wheres', 'groups', 'havings', 'orders', 'limit', 'offset', 'lock'];
        /**
         * Compile a select query into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return string
         */
        public function compileSelect(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Compile a single union statement.
         *
         * @param  array  $union
         * @return string
         */
        protected function compileUnion(array $union)
        {
        }
        /**
         * Compile the random statement into SQL.
         *
         * @param  string  $seed
         * @return string
         */
        public function compileRandom($seed)
        {
        }
        /**
         * Compile the lock into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  bool|string  $value
         * @return string
         */
        protected function compileLock(\FluentForm\Framework\Database\Query\Builder $query, $value)
        {
        }
        /**
         * Compile an update statement into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $values
         * @return string
         */
        public function compileUpdate(\FluentForm\Framework\Database\Query\Builder $query, $values)
        {
        }
        /**
         * Prepares a JSON column being updated using the JSON_SET function.
         *
         * @param  string  $key
         * @param  \FluentForm\Framework\Database\Query\JsonExpression  $value
         * @return string
         */
        protected function compileJsonUpdateColumn($key, \FluentForm\Framework\Database\Query\JsonExpression $value)
        {
        }
        /**
         * Prepare the bindings for an update statement.
         *
         * @param  array  $bindings
         * @param  array  $values
         * @return array
         */
        public function prepareBindingsForUpdate(array $bindings, array $values)
        {
        }
        /**
         * Compile a delete statement into SQL.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @return string
         */
        public function compileDelete(\FluentForm\Framework\Database\Query\Builder $query)
        {
        }
        /**
         * Wrap a single string in keyword identifiers.
         *
         * @param  string  $value
         * @return string
         */
        protected function wrapValue($value)
        {
        }
        /**
         * Wrap the given JSON selector.
         *
         * @param  string  $value
         * @return string
         */
        protected function wrapJsonSelector($value)
        {
        }
        /**
         * Determine if the given string is a JSON selector.
         *
         * @param  string  $value
         * @return bool
         */
        protected function isJsonSelector($value)
        {
        }
    }
    class Processor
    {
        /**
         * Process the results of a "select" query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  array  $results
         * @return array
         */
        public function processSelect(\FluentForm\Framework\Database\Query\Builder $query, $results)
        {
        }
        /**
         * Process an  "insert get ID" query.
         *
         * @param  \FluentForm\Framework\Database\Query\Builder  $query
         * @param  string  $sql
         * @param  array   $values
         * @param  string  $sequence
         * @return int
         */
        public function processInsertGetId(\FluentForm\Framework\Database\Query\Builder $query, $sql, $values, $sequence = null)
        {
        }
        /**
         * Process the results of a column listing query.
         *
         * @param  array  $results
         * @return array
         */
        public function processColumnListing($results)
        {
        }
    }
    class WPDBConnection implements \FluentForm\Framework\Database\ConnectionInterface
    {
        protected $wpdb = null;
        /**
         * Count of active transactions
         *
         * @var int
         */
        protected $transactionCount = 0;
        /**
         * The database connection configuration options.
         *
         * @var array
         */
        protected $config = [];
        /**
         * Construct the Connection object
         */
        public function __construct($wpdb, $config)
        {
        }
        public function getWPDB()
        {
        }
        /**
         * Get the database connection name.
         *
         * @return string|null
         */
        public function getName()
        {
        }
        /**
         * Begin a fluent query against a database table.
         *
         * @param  string $table
         *
         * @return \FluentForm\Framework\Database\Query\Builder
         */
        public function table($table)
        {
        }
        /**
         * Get a new raw query expression.
         *
         * @param  mixed $value
         *
         * @return \FluentForm\Framework\Database\Query\Expression
         */
        public function raw($value)
        {
        }
        /**
         * Run a select statement and return a single result.
         *
         * @param  string $query
         * @param  array $bindings
         * @param  bool $useReadPdo
         * @throws QueryException
         *
         * @return mixed
         */
        public function selectOne($query, $bindings = [], $useReadPdo = true)
        {
        }
        /**
         * Run a select statement against the database.
         *
         * @param  string $query
         * @param  array $bindings
         * @param  bool $useReadPdo
         * @throws QueryException
         *
         * @return array
         */
        public function select($query, $bindings = [], $useReadPdo = true)
        {
        }
        /**
         * A hacky way to emulate bind parameters into SQL query
         *
         * @param $query
         * @param $bindings
         *
         * @return mixed
         */
        protected function bindParams($query, $bindings, $update = false)
        {
        }
        /**
         * Run an insert statement against the database.
         *
         * @param  string $query
         * @param  array $bindings
         *
         * @return bool
         */
        public function insert($query, $bindings = array())
        {
        }
        /**
         * Run an update statement against the database.
         *
         * @param  string $query
         * @param  array $bindings
         *
         * @return int
         */
        public function update($query, $bindings = array())
        {
        }
        /**
         * Run a delete statement against the database.
         *
         * @param  string $query
         * @param  array $bindings
         *
         * @return int
         */
        public function delete($query, $bindings = array())
        {
        }
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param  string $query
         * @param  array $bindings
         *
         * @return mixed
         */
        public function statement($query, $bindings = array())
        {
        }
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param  string $query
         * @param  array $bindings
         *
         * @return int
         */
        public function affectingStatement($query, $bindings = array())
        {
        }
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param  string $query
         *
         * @return bool
         */
        public function unprepared($query)
        {
        }
        /**
         * Prepare the query bindings for execution.
         *
         * @param  array $bindings
         *
         * @return array
         */
        public function prepareBindings(array $bindings)
        {
        }
        /**
         * Execute a Closure within a transaction.
         *
         * @param  Closure $callback
         * @param  int  $attempts
         *
         * @return mixed
         *
         * @throws Exception
         */
        public function transaction(\Closure $callback, $attempts = 1)
        {
        }
        /**
         * Start a new database transaction.
         *
         * @return void
         */
        public function beginTransaction()
        {
        }
        /**
         * Commit the active database transaction.
         *
         * @return void
         */
        public function commit()
        {
        }
        /**
         * Rollback the active database transaction.
         *
         * @return void
         */
        public function rollBack()
        {
        }
        /**
         * Get the number of active transactions.
         *
         * @return int
         */
        public function transactionLevel()
        {
        }
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param  Closure $callback
         *
         * @return array
         */
        public function pretend(\Closure $callback)
        {
        }
        public function getPostProcessor()
        {
        }
        public function getQueryGrammar()
        {
        }
        /**
         * Return self as PDO
         *
         * @return \FluentForm\Framework\Database\Query\WPDBConnection
         */
        public function getPdo()
        {
        }
        /**
         * Return the last insert id
         *
         * @param  string $args
         *
         * @return int
         */
        public function lastInsertId($args)
        {
        }
        /**
         * Get an option from the configuration options.
         *
         * @param  string|null  $option
         * @return mixed
         */
        public function getConfig($option)
        {
        }
    }
}
namespace FluentForm\Framework\Database {
    class QueryException extends \PDOException
    {
        /**
         * The SQL for the query.
         *
         * @var string
         */
        protected $sql;
        /**
         * The bindings for the query.
         *
         * @var array
         */
        protected $bindings;
        /**
         * Create a new query exception instance.
         *
         * @param  string  $sql
         * @param  array  $bindings
         * @param  \Exception $previous
         * @return void
         */
        public function __construct($sql, array $bindings, $previous)
        {
        }
        /**
         * Format the SQL error message.
         *
         * @param  string  $sql
         * @param  array  $bindings
         * @param  \Exception $previous
         * @return string
         */
        protected function formatMessage($sql, $bindings, $previous)
        {
        }
        /**
         * Get the SQL for the query.
         *
         * @return string
         */
        public function getSql()
        {
        }
        /**
         * Get the bindings for the query.
         *
         * @return array
         */
        public function getBindings()
        {
        }
        /**
         * Replace placeholders with bindings
         * 
         * @param  string $search
         * @param  array  $replace
         * @param  string $subject
         * @return string $subject
         */
        protected function strReplaceArray($search, array $replace, $subject)
        {
        }
    }
}
namespace FluentForm\Framework\Foundation {
    interface ContainerContract
    {
        /**
         * Determine if the given abstract type has been bound.
         *
         * @param  string  $abstract
         * @return bool
         */
        public function bound($abstract);
        /**
         * Alias a type to a different name.
         *
         * @param  string  $abstract
         * @param  string  $alias
         * @return void
         */
        public function alias($abstract, $alias);
        /**
         * Assign a set of tags to a given binding.
         *
         * @param  array|string  $abstracts
         * @param  array|mixed   ...$tags
         * @return void
         */
        public function tag($abstracts, $tags);
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param  array  $tag
         * @return array
         */
        public function tagged($tag);
        /**
         * Register a binding with the container.
         *
         * @param  string|array  $abstract
         * @param  Closure|string|null  $concrete
         * @param  bool  $shared
         * @return void
         */
        public function bind($abstract, $concrete = null, $shared = false);
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param  string  $abstract
         * @param  Closure|string|null  $concrete
         * @param  bool  $shared
         * @return void
         */
        public function bindIf($abstract, $concrete = null, $shared = false);
        /**
         * Register a shared binding in the container.
         *
         * @param  string  $abstract
         * @param  Closure|string|null  $concrete
         * @return void
         */
        public function singleton($abstract, $concrete = null);
        /**
         * "Extend" an abstract type in the container.
         *
         * @param  string    $abstract
         * @param  Closure  $closure
         * @return void
         *
         * @throws \InvalidArgumentException
         */
        public function extend($abstract, \Closure $closure);
        /**
         * Register an existing instance as shared in the container.
         *
         * @param  string  $abstract
         * @param  mixed   $instance
         * @return void
         */
        public function instance($abstract, $instance);
        /**
         * Define a contextual binding.
         *
         * @param  string  $concrete
         * @return ContextualBindingBuilder
         */
        public function when($concrete);
        /**
         * Resolve the given type from the container.
         *
         * @param  string  $abstract
         * @param  array   $parameters
         * @return mixed
         */
        public function make($abstract, $parameters = array());
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param  callable|string  $callback
         * @param  array  $parameters
         * @param  string|null  $defaultMethod
         * @return mixed
         */
        public function call($callback, array $parameters = array(), $defaultMethod = null);
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param  string $abstract
         * @return bool
         */
        public function resolved($abstract);
        /**
         * Register a new resolving callback.
         *
         * @param  string    $abstract
         * @param  Closure  $callback
         * @return void
         */
        public function resolving($abstract, \Closure $callback = null);
        /**
         * Register a new after resolving callback.
         *
         * @param  string    $abstract
         * @param  Closure  $callback
         * @return void
         */
        public function afterResolving($abstract, \Closure $callback = null);
    }
    class Container implements \ArrayAccess, \FluentForm\Framework\Foundation\ContainerContract
    {
        /**
         * The current globally available container (if any).
         *
         * @var static
         */
        protected static $instance;
        /**
         * An array of the types that have been resolved.
         *
         * @var array
         */
        protected $resolved = [];
        /**
         * The container's bindings.
         *
         * @var array
         */
        protected $bindings = [];
        /**
         * The container's shared instances.
         *
         * @var array
         */
        protected $instances = [];
        /**
         * The registered type aliases.
         *
         * @var array
         */
        protected $aliases = [];
        /**
         * The extension closures for services.
         *
         * @var array
         */
        protected $extenders = [];
        /**
         * All of the registered tags.
         *
         * @var array
         */
        protected $tags = [];
        /**
         * The stack of concretions being current built.
         *
         * @var array
         */
        protected $buildStack = [];
        /**
         * The contextual binding map.
         *
         * @var array
         */
        public $contextual = [];
        /**
         * All of the registered rebound callbacks.
         *
         * @var array
         */
        protected $reboundCallbacks = [];
        /**
         * All of the global resolving callbacks.
         *
         * @var array
         */
        protected $globalResolvingCallbacks = [];
        /**
         * All of the global after resolving callbacks.
         *
         * @var array
         */
        protected $globalAfterResolvingCallbacks = [];
        /**
         * All of the after resolving callbacks by class type.
         *
         * @var array
         */
        protected $resolvingCallbacks = [];
        /**
         * All of the after resolving callbacks by class type.
         *
         * @var array
         */
        protected $afterResolvingCallbacks = [];
        /**
         * Define a contextual binding.
         *
         * @param  string  $concrete
         * @return FluentForm\Framework\Foundation\ContextualBindingBuilder
         */
        public function when($concrete)
        {
        }
        /**
         * Determine if a given string is resolvable.
         *
         * @param  string  $abstract
         * @return bool
         */
        protected function resolvable($abstract)
        {
        }
        /**
         * Determine if the given abstract type has been bound.
         *
         * @param  string  $abstract
         * @return bool
         */
        public function bound($abstract)
        {
        }
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param  string  $abstract
         * @return bool
         */
        public function resolved($abstract)
        {
        }
        /**
         * Determine if a given string is an alias.
         *
         * @param  string  $name
         * @return bool
         */
        public function isAlias($name)
        {
        }
        /**
         * Register a binding with the container.
         *
         * @param  string|array  $abstract
         * @param  Closure|string|null  $concrete
         * @param  bool  $shared
         * @return void
         */
        public function bind($abstract, $concrete = null, $shared = false)
        {
        }
        /**
         * Get the Closure to be used when building a type.
         *
         * @param  string  $abstract
         * @param  string  $concrete
         * @return Closure
         */
        protected function getClosure($abstract, $concrete)
        {
        }
        /**
         * Add a contextual binding to the container.
         *
         * @param  string  $concrete
         * @param  string  $abstract
         * @param  Closure|string  $implementation
         */
        public function addContextualBinding($concrete, $abstract, $implementation)
        {
        }
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param  string  $abstract
         * @param  Closure|string|null  $concrete
         * @param  bool  $shared
         * @return void
         */
        public function bindIf($abstract, $concrete = null, $shared = false)
        {
        }
        /**
         * Register a shared binding in the container.
         *
         * @param  string  $abstract
         * @param  Closure|string|null  $concrete
         * @return void
         */
        public function singleton($abstract, $concrete = null)
        {
        }
        /**
         * Wrap a Closure such that it is shared.
         *
         * @param  Closure  $closure
         * @return Closure
         */
        public function share(\Closure $closure)
        {
        }
        /**
         * Bind a shared Closure into the container.
         *
         * @param  string    $abstract
         * @param  Closure  $closure
         * @return void
         */
        public function bindShared($abstract, \Closure $closure)
        {
        }
        /**
         * "Extend" an abstract type in the container.
         *
         * @param  string    $abstract
         * @param  Closure  $closure
         * @return void
         *
         * @throws \InvalidArgumentException
         */
        public function extend($abstract, \Closure $closure)
        {
        }
        /**
         * Register an existing instance as shared in the container.
         *
         * @param  string  $abstract
         * @param  mixed   $instance
         * @return void
         */
        public function instance($abstract, $instance)
        {
        }
        /**
         * Assign a set of tags to a given binding.
         *
         * @param  array|string  $abstracts
         * @param  array|mixed   ...$tags
         * @return void
         */
        public function tag($abstracts, $tags)
        {
        }
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param  string  $tag
         * @return array
         */
        public function tagged($tag)
        {
        }
        /**
         * Alias a type to a different name.
         *
         * @param  string  $abstract
         * @param  string  $alias
         * @return void
         */
        public function alias($abstract, $alias)
        {
        }
        /**
         * Extract the type and alias from a given definition.
         *
         * @param  array  $definition
         * @return array
         */
        protected function extractAlias(array $definition)
        {
        }
        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param  string    $abstract
         * @param  Closure  $callback
         * @return mixed
         */
        public function rebinding($abstract, \Closure $callback)
        {
        }
        /**
         * Refresh an instance on the given target and method.
         *
         * @param  string  $abstract
         * @param  mixed   $target
         * @param  string  $method
         * @return mixed
         */
        public function refresh($abstract, $target, $method)
        {
        }
        /**
         * Fire the "rebound" callbacks for the given abstract type.
         *
         * @param  string  $abstract
         * @return void
         */
        protected function rebound($abstract)
        {
        }
        /**
         * Get the rebound callbacks for a given type.
         *
         * @param  string  $abstract
         * @return array
         */
        protected function getReboundCallbacks($abstract)
        {
        }
        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param  Closure  $callback
         * @param  array  $parameters
         * @return Closure
         */
        public function wrap(\Closure $callback, array $parameters = [])
        {
        }
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param  callable|string  $callback
         * @param  array  $parameters
         * @param  string|null  $defaultMethod
         * @return mixed
         */
        public function call($callback, array $parameters = [], $defaultMethod = null)
        {
        }
        /**
         * Determine if the given string is in Class@method syntax.
         *
         * @param  mixed  $callback
         * @return bool
         */
        protected function isCallableWithAtSign($callback)
        {
        }
        /**
         * Get all dependencies for a given method.
         *
         * @param  callable|string  $callback
         * @param  array  $parameters
         * @return array
         */
        protected function getMethodDependencies($callback, $parameters = [])
        {
        }
        /**
         * Get the proper reflection instance for the given callback.
         *
         * @param  callable|string  $callback
         * @return ReflectionFunctionAbstract
         */
        protected function getCallReflector($callback)
        {
        }
        /**
         * Get the dependency for the given call parameter.
         *
         * @param  ReflectionParameter  $parameter
         * @param  array  $parameters
         * @param  array  $dependencies
         * @return mixed
         */
        protected function addDependencyForCallParameter(\ReflectionParameter $parameter, array &$parameters, &$dependencies)
        {
        }
        /**
         * Get the parameter type for the given parameter.
         *
         * @return object ReflectionClass|ReflectionNamedType
         */
        protected function getParameterType($parameter)
        {
        }
        /**
         * Get the parameter name for the given parameter.
         *
         * @return string
         */
        protected function getParameterName($parameter)
        {
        }
        /**
         * Call a string reference to a class using Class@method syntax.
         *
         * @param  string  $target
         * @param  array  $parameters
         * @param  string|null  $defaultMethod
         * @return mixed
         */
        protected function callClass($target, array $parameters = [], $defaultMethod = null)
        {
        }
        /**
         * Resolve the given type from the container.
         *
         * @param  string  $abstract
         * @param  array   $parameters
         * @return mixed
         */
        public function make($abstract, $parameters = [])
        {
        }
        /**
         * Get the concrete type for a given abstract.
         *
         * @param  string  $abstract
         * @return mixed   $concrete
         */
        protected function getConcrete($abstract)
        {
        }
        /**
         * Get the contextual concrete binding for the given abstract.
         *
         * @param  string  $abstract
         * @return string
         */
        protected function getContextualConcrete($abstract)
        {
        }
        /**
         * Determine if the given abstract has a leading slash.
         *
         * @param  string  $abstract
         * @return bool
         */
        protected function missingLeadingSlash($abstract)
        {
        }
        /**
         * Get the extender callbacks for a given type.
         *
         * @param  string  $abstract
         * @return array
         */
        protected function getExtenders($abstract)
        {
        }
        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param  string  $concrete
         * @param  array   $parameters
         * @return mixed
         *
         * @throws BindingResolutionException
         */
        public function build($concrete, $parameters = [])
        {
        }
        /**
         * Resolve all of the dependencies from the ReflectionParameters.
         *
         * @param  array  $parameters
         * @param  array  $primitives
         * @return array
         */
        protected function getDependencies($parameters, array $primitives = [])
        {
        }
        /**
         * Resolve a non-class hinted dependency.
         *
         * @param  ReflectionParameter  $parameter
         * @return mixed
         *
         * @throws BindingResolutionException
         */
        protected function resolveNonClass(\ReflectionParameter $parameter)
        {
        }
        /**
         * Resolve a class based dependency from the container.
         *
         * @param  ReflectionParameter  $parameter
         * @return mixed
         *
         * @throws BindingResolutionException
         */
        protected function resolveClass(\ReflectionParameter $parameter)
        {
        }
        /**
         * If extra parameters are passed by numeric ID, rekey them by argument name.
         *
         * @param  array  $dependencies
         * @param  array  $parameters
         * @return array
         */
        protected function keyParametersByArgument(array $dependencies, array $parameters)
        {
        }
        /**
         * Register a new resolving callback.
         *
         * @param  string    $abstract
         * @param  Closure  $callback
         * @return void
         */
        public function resolving($abstract, \Closure $callback = null)
        {
        }
        /**
         * Register a new after resolving callback for all types.
         *
         * @param  string   $abstract
         * @param  Closure $callback
         * @return void
         */
        public function afterResolving($abstract, \Closure $callback = null)
        {
        }
        /**
         * Register a new resolving callback by type of its first argument.
         *
         * @param  Closure  $callback
         * @return void
         */
        protected function resolvingCallback(\Closure $callback)
        {
        }
        /**
         * Register a new after resolving callback by type of its first argument.
         *
         * @param  Closure  $callback
         * @return void
         */
        protected function afterResolvingCallback(\Closure $callback)
        {
        }
        /**
         * Get the type hint for this closure's first argument.
         *
         * @param  Closure  $callback
         * @return mixed
         */
        protected function getFunctionHint(\Closure $callback)
        {
        }
        /**
         * Fire all of the resolving callbacks.
         *
         * @param  string  $abstract
         * @param  mixed   $object
         * @return void
         */
        protected function fireResolvingCallbacks($abstract, $object)
        {
        }
        /**
         * Get all callbacks for a given type.
         *
         * @param  string  $abstract
         * @param  object  $object
         * @param  array   $callbacksPerType
         *
         * @return array
         */
        protected function getCallbacksForType($abstract, $object, array $callbacksPerType)
        {
        }
        /**
         * Fire an array of callbacks with an object.
         *
         * @param  mixed  $object
         * @param  array  $callbacks
         */
        protected function fireCallbackArray($object, array $callbacks)
        {
        }
        /**
         * Determine if a given type is shared.
         *
         * @param  string  $abstract
         * @return bool
         */
        public function isShared($abstract)
        {
        }
        /**
         * Determine if the given concrete is buildable.
         *
         * @param  mixed   $concrete
         * @param  string  $abstract
         * @return bool
         */
        protected function isBuildable($concrete, $abstract)
        {
        }
        /**
         * Get the alias for an abstract if available.
         *
         * @param  string  $abstract
         * @return string
         */
        protected function getAlias($abstract)
        {
        }
        /**
         * Get the container's bindings.
         *
         * @return array
         */
        public function getBindings()
        {
        }
        /**
         * Drop all of the stale instances and aliases.
         *
         * @param  string  $abstract
         * @return void
         */
        protected function dropStaleInstances($abstract)
        {
        }
        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param  string  $abstract
         * @return void
         */
        public function forgetInstance($abstract)
        {
        }
        /**
         * Clear all of the instances from the container.
         *
         * @return void
         */
        public function forgetInstances()
        {
        }
        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void
         */
        public function flush()
        {
        }
        /**
         * Set the globally available instance of the container.
         *
         * @return static
         */
        public static function getInstance()
        {
        }
        /**
         * Set the shared instance of the container.
         *
         * @param  FluentForm\Framework\Foundation\Container  $container
         * @return void
         */
        public static function setInstance(\FluentForm\Framework\Foundation\ContainerContract $container)
        {
        }
        /**
         * Determine if a given offset exists.
         *
         * @param  string  $key
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function offsetExists($key)
        {
        }
        /**
         * Get the value at a given offset.
         *
         * @param  string  $key
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($key)
        {
        }
        /**
         * Set the value at a given offset.
         *
         * @param  string  $key
         * @param  mixed   $value
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($key, $value)
        {
        }
        /**
         * Unset the value at a given offset.
         *
         * @param  string  $key
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetUnset($key)
        {
        }
        /**
         * Dynamically access container services.
         *
         * @param  string  $key
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Dynamically set container services.
         *
         * @param  string  $key
         * @param  mixed   $value
         * @return void
         */
        public function __set($key, $value)
        {
        }
    }
    trait FoundationTrait
    {
        public function env()
        {
        }
        public function hook($prefix, $hook)
        {
        }
        public function parseRestHandler($handler)
        {
        }
        public function parsePolicyHandler($handler)
        {
        }
        public function addAction($action, $handler, $priority = 10, $numOfArgs = 1)
        {
        }
        public function addCustomAction($action, $handler, $priority = 10, $numOfArgs = 1)
        {
        }
        public function doAction()
        {
        }
        public function doCustomAction()
        {
        }
        public function addFilter($action, $handler, $priority = 10, $numOfArgs = 1)
        {
        }
        public function addCustomFilter($action, $handler, $priority = 10, $numOfArgs = 1)
        {
        }
        public function applyFilters()
        {
        }
        public function applyCustomFilters()
        {
        }
        public function addShortcode($action, $handler)
        {
        }
        public function doShortcode($content, $ignore_html = false)
        {
        }
        public function parseHookHandler($handler)
        {
        }
        public function hasNamespace($handler)
        {
        }
        public function getControllerNamespace($handler)
        {
        }
        public function makeInstance($class)
        {
        }
        private function addAjaxAction($tag, $handler, $priority, $scope)
        {
        }
        public function addAdminAjaxAction($tag, $handler, $priority = 10)
        {
        }
        public function addPublicAjaxAction($tag, $handler, $priority = 10)
        {
        }
        public function url($path = '')
        {
        }
        public function publicUrl($path = '')
        {
        }
    }
    trait AsyncRequestTrait
    {
        protected $asyncActions = [];
        protected $launchableActions = [];
        public function addAsyncAction($action, $handler)
        {
        }
        public function doAsyncAction($action, $data = [])
        {
        }
        protected function registerAsyncActions()
        {
        }
        protected function hasAsyncActions()
        {
        }
        protected function registerAdminPostAction($slug)
        {
        }
        public function callback()
        {
        }
        public function launchPostRequest()
        {
        }
        protected function getData()
        {
        }
        protected function getCookie()
        {
        }
        protected function hasLaunchableActions()
        {
        }
        protected function createNonce()
        {
        }
        protected function verifyNonce()
        {
        }
        protected function getMainAction()
        {
        }
    }
    trait CronTaskSchedulerTrait
    {
        public function addCronTask($hook, $recurrence, $args = [], $wp_error = false)
        {
        }
        public function removeCronTask($hook)
        {
        }
    }
    class Application extends \FluentForm\Framework\Foundation\Container
    {
        use \FluentForm\Framework\Foundation\FoundationTrait;
        use \FluentForm\Framework\Foundation\AsyncRequestTrait;
        use \FluentForm\Framework\Foundation\CronTaskSchedulerTrait;
        protected $file = null;
        protected $baseUrl = null;
        protected $basePath = null;
        protected $handlerNamespace = null;
        protected $controllerNamespace = null;
        protected $permissionNamespace = null;
        public function __construct($file = null)
        {
        }
        protected function init($file)
        {
        }
        protected function pluginFilePath($file)
        {
        }
        protected function setAppLevelNamespace()
        {
        }
        protected function getComposer($section = null)
        {
        }
        protected function bootstrapApplication()
        {
        }
        protected function bindAppInstance()
        {
        }
        protected function bindPathsAndUrls()
        {
        }
        protected function bindUrls()
        {
        }
        protected function basePaths()
        {
        }
        protected function loadConfigIfExists()
        {
        }
        protected function registerTextdomain()
        {
        }
        protected function textDomainPath()
        {
        }
        protected function bindCoreComponents()
        {
        }
        protected function requireCommonFiles($app)
        {
        }
        protected function addRestApiInitAction($app)
        {
        }
        protected function registerRestRoutes($router)
        {
        }
        protected function requireRouteFile($router)
        {
        }
    }
    class BindingResolutionException extends \Exception
    {
    }
    class ComponentBinder
    {
        protected $app = null;
        protected $bindables = ['Request', 'Response', 'Validator', 'View', 'Events', 'DataBase', 'Router', 'Paginator'];
        public function __construct($app)
        {
        }
        public function bindComponents()
        {
        }
        protected function registerResolvingEvent($app)
        {
        }
        protected function bindRequest()
        {
        }
        protected function bindResponse()
        {
        }
        protected function bindValidator()
        {
        }
        protected function bindView()
        {
        }
        protected function bindEvents()
        {
        }
        protected function bindDataBase()
        {
        }
        protected function bindRouter()
        {
        }
        protected function bindPaginator()
        {
        }
        protected function extendBindings($app)
        {
        }
        protected function loadGlobalFunctions($app)
        {
        }
    }
    class Config
    {
        protected $data = null;
        public function __construct($data)
        {
        }
        public function all()
        {
        }
        public function get($key = null, $default = null)
        {
        }
        public function set($key, $value)
        {
        }
    }
    interface ContextualBindingBuilderContract
    {
        /**
         * Define the abstract target that depends on the context.
         *
         * @param  string  $abstract
         * @return $this
         */
        public function needs($abstract);
        /**
         * Define the implementation for the contextual binding.
         *
         * @param  Closure|string  $implementation
         * @return void
         */
        public function give($implementation);
    }
    class ContextualBindingBuilder implements \FluentForm\Framework\Foundation\ContextualBindingBuilderContract
    {
        /**
         * The underlying container instance.
         *
         * @var FluentForm\Framework\Foundation\Container
         */
        protected $container;
        /**
         * The concrete instance.
         *
         * @var string
         */
        protected $concrete;
        /**
         * Create a new contextual binding builder.
         *
         * @param  FluentForm\Framework\Foundation\Container  $container
         * @param  string  $concrete
         * @return void
         */
        public function __construct(\FluentForm\Framework\Foundation\Container $container, $concrete)
        {
        }
        /**
         * Define the abstract target that depends on the context.
         *
         * @param  string  $abstract
         * @return $this
         */
        public function needs($abstract)
        {
        }
        /**
         * Define the implementation for the contextual binding.
         *
         * @param  Closure|string  $implementation
         * @return void
         */
        public function give($implementation)
        {
        }
    }
    class Dispatcher
    {
        /**
         * The IoC container instance.
         *
         * @var \Illuminate\Container\Container
         */
        protected $container;
        /**
         * The registered event listeners.
         *
         * @var array
         */
        protected $listeners = array();
        /**
         * The wildcard listeners.
         *
         * @var array
         */
        protected $wildcards = array();
        /**
         * The sorted event listeners.
         *
         * @var array
         */
        protected $sorted = array();
        /**
         * The event firing stack.
         *
         * @var array
         */
        protected $firing = array();
        /**
         * Create a new event dispatcher instance.
         *
         * @param  \Illuminate\Container\Container  $container
         * @return void
         */
        public function __construct(\FluentForm\Framework\Foundation\Container $container = null)
        {
        }
        /**
         * Register an event listener with the dispatcher.
         *
         * @param  string|array  $events
         * @param  mixed   $listener
         * @param  int     $priority
         * @return void
         */
        public function listen($events, $listener, $priority = 0)
        {
        }
        /**
         * Setup a wildcard listener callback.
         *
         * @param  string  $event
         * @param  mixed   $listener
         * @return void
         */
        protected function setupWildcardListen($event, $listener)
        {
        }
        /**
         * Determine if a given event has listeners.
         *
         * @param  string  $eventName
         * @return bool
         */
        public function hasListeners($eventName)
        {
        }
        /**
         * Register a queued event and payload.
         *
         * @param  string  $event
         * @param  array   $payload
         * @return void
         */
        public function queue($event, $payload = array())
        {
        }
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param  string  $subscriber
         * @return void
         */
        public function subscribe($subscriber)
        {
        }
        /**
         * Resolve the subscriber instance.
         *
         * @param  mixed  $subscriber
         * @return mixed
         */
        protected function resolveSubscriber($subscriber)
        {
        }
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param  string  $event
         * @param  array   $payload
         * @return mixed
         */
        public function until($event, $payload = array())
        {
        }
        /**
         * Flush a set of queued events.
         *
         * @param  string  $event
         * @return void
         */
        public function flush($event)
        {
        }
        /**
         * Get the event that is currently firing.
         *
         * @return string
         */
        public function firing()
        {
        }
        /**
         * Fire an event and call the listeners.
         *
         * @param  string  $event
         * @param  mixed   $payload
         * @param  bool    $halt
         * @return array|null
         */
        public function fire($event, $payload = array(), $halt = false)
        {
        }
        /**
         * Get all of the listeners for a given event name.
         *
         * @param  string  $eventName
         * @return array
         */
        public function getListeners($eventName)
        {
        }
        /**
         * Get the wildcard listeners for the event.
         *
         * @param  string  $eventName
         * @return array
         */
        protected function getWildcardListeners($eventName)
        {
        }
        /**
         * Sort the listeners for a given event by priority.
         *
         * @param  string  $eventName
         * @return array
         */
        protected function sortListeners($eventName)
        {
        }
        /**
         * Register an event listener with the dispatcher.
         *
         * @param  mixed   $listener
         * @return mixed
         */
        public function makeListener($listener)
        {
        }
        /**
         * Create a class based listener using the IoC container.
         *
         * @param  mixed    $listener
         * @return \Closure
         */
        public function createClassListener($listener)
        {
        }
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param  string  $event
         * @return void
         */
        public function forget($event)
        {
        }
        /**
         * Forget all of the queued listeners.
         *
         * @return void
         */
        public function forgetQueued()
        {
        }
    }
    class ForbiddenException extends \Exception
    {
        // ...
    }
    class UnAuthorizedException extends \Exception
    {
        // ...
    }
}
namespace FluentForm\Framework\Support {
    class Arr
    {
        use \FluentForm\Framework\Support\MacroableTrait;
        /**
         * Determine whether the given value is array accessible.
         *
         * @param  mixed  $value
         * @return bool
         */
        public static function accessible($value)
        {
        }
        /**
         * Add an element to an array using "dot" notation if it doesn't exist.
         *
         * @param  array   $array
         * @param  string  $key
         * @param  mixed   $value
         * @return array
         */
        public static function add($array, $key, $value)
        {
        }
        /**
         * Build a new array using a callback.
         *
         * @param  array  $array
         * @param  callable  $callback
         * @return array
         *
         * @deprecated since version 5.2.
         */
        public static function build($array, callable $callback)
        {
        }
        /**
         * Collapse an array of arrays into a single array.
         *
         * @param  array  $array
         * @return array
         */
        public static function collapse($array)
        {
        }
        /**
         * Divide an array into two arrays. One with keys and the other with values.
         *
         * @param  array  $array
         * @return array
         */
        public static function divide($array)
        {
        }
        /**
         * Flatten a multi-dimensional associative array with dots.
         *
         * @param  array   $array
         * @param  string  $prepend
         * @return array
         */
        public static function dot($array, $prepend = '')
        {
        }
        /**
         * Get all of the given array except for a specified array of items.
         *
         * @param  array  $array
         * @param  array|string  $keys
         * @return array
         */
        public static function except($array, $keys)
        {
        }
        /**
         * Determine if the given key exists in the provided array.
         *
         * @param  \ArrayAccess|array  $array
         * @param  string|int  $key
         * @return bool
         */
        public static function exists($array, $key)
        {
        }
        /**
         * Return the first element in an array passing a given truth test.
         *
         * @param  array  $array
         * @param  callable|null  $callback
         * @param  mixed  $default
         * @return mixed
         */
        public static function first($array, callable $callback = null, $default = null)
        {
        }
        /**
         * Return the last element in an array passing a given truth test.
         *
         * @param  array  $array
         * @param  callable|null  $callback
         * @param  mixed  $default
         * @return mixed
         */
        public static function last($array, callable $callback = null, $default = null)
        {
        }
        /**
         * Flatten a multi-dimensional array into a single level.
         *
         * @param  array  $array
         * @param  int  $depth
         * @return array
         */
        public static function flatten($array, $depth = INF)
        {
        }
        /**
         * Remove one or many array items from a given array using "dot" notation.
         *
         * @param  array  $array
         * @param  array|string  $keys
         * @return void
         */
        public static function forget(&$array, $keys)
        {
        }
        /**
         * Get an item from an array using "dot" notation.
         *
         * @param  \ArrayAccess|array  $array
         * @param  string  $key
         * @param  mixed   $default
         * @return mixed
         */
        public static function get($array, $key, $default = null)
        {
        }
        /**
         * Check if an item exists in an array using "dot" notation.
         *
         * @param  \ArrayAccess|array  $array
         * @param  string  $key
         * @return bool
         */
        public static function has($array, $key)
        {
        }
        /**
         * Determines if an array is associative.
         *
         * An array is "associative" if it doesn't have sequential numerical keys beginning with zero.
         *
         * @param  array  $array
         * @return bool
         */
        public static function isAssoc(array $array)
        {
        }
        /**
         * Get a subset of the items from the given array.
         *
         * @param  array  $array
         * @param  array|string  $keys
         * @return array
         */
        public static function only($array, $keys)
        {
        }
        /**
         * Pluck an array of values from an array.
         *
         * @param  array  $array
         * @param  string|array  $value
         * @param  string|array|null  $key
         * @return array
         */
        public static function pluck($array, $value, $key = null)
        {
        }
        /**
         * Explode the "value" and "key" arguments passed to "pluck".
         *
         * @param  string|array  $value
         * @param  string|array|null  $key
         * @return array
         */
        protected static function explodePluckParameters($value, $key)
        {
        }
        /**
         * Push an item onto the beginning of an array.
         *
         * @param  array  $array
         * @param  mixed  $value
         * @param  mixed  $key
         * @return array
         */
        public static function prepend($array, $value, $key = null)
        {
        }
        /**
         * Get a value from the array, and remove it.
         *
         * @param  array   $array
         * @param  string  $key
         * @param  mixed   $default
         * @return mixed
         */
        public static function pull(&$array, $key, $default = null)
        {
        }
        /**
         * Set an array item to a given value using "dot" notation.
         *
         * If no key is given to the method, the entire array will be replaced.
         *
         * @param  array   $array
         * @param  string  $key
         * @param  mixed   $value
         * @return array
         */
        public static function set(&$array, $key, $value)
        {
        }
        /**
         * Sort the array using the given callback.
         *
         * @param  array  $array
         * @param  callable  $callback
         * @return array
         */
        public static function sort($array, callable $callback)
        {
        }
        /**
         * Recursively sort an array by keys and values.
         *
         * @param  array  $array
         * @return array
         */
        public static function sortRecursive($array)
        {
        }
        /**
         * Filter the array using the given callback.
         *
         * @param  array  $array
         * @param  callable  $callback
         * @return array
         */
        public static function where($array, callable $callback)
        {
        }
    }
}
namespace FluentForm\Framework\Helpers {
    class ArrayHelper extends \FluentForm\Framework\Support\Arr
    {
        /**
         * Return the default value of the given value.
         *
         * @param  mixed $value
         * @return mixed
         */
        public static function value($value)
        {
        }
        public static function isTrue($array, $key)
        {
        }
    }
}
namespace FluentForm\Framework\Http {
    class Route
    {
        protected $app = null;
        protected $restNamespace = null;
        protected $uri = null;
        protected $compiled = null;
        protected $name = '';
        protected $meta = [];
        protected $handler = null;
        protected $method = null;
        protected $options = [];
        protected $wheres = [];
        protected $policyHandler = null;
        protected $predefinedNamedRegx = ['int' => '[0-9]+', 'alpha' => '[a-zA-Z]+', 'alpha_num' => '[a-zA-Z0-9]+', 'alpha_num_dash' => '[a-zA-Z0-9-_]+'];
        public function __construct($app, $restNamespace, $uri, $handler, $method, $name = '')
        {
        }
        public static function create($app, $namespace, $uri, $handler, $method, $name)
        {
        }
        public function name($name)
        {
        }
        public function meta($meta)
        {
        }
        public function getMeta($key = '')
        {
        }
        public function where($identifier, $value = null)
        {
        }
        public function int($identifiers)
        {
        }
        public function alpha($identifiers)
        {
        }
        public function alphaNum($identifiers)
        {
        }
        public function alphaNumDash($identifiers)
        {
        }
        public function withPolicy($handler)
        {
        }
        public function register()
        {
        }
        protected function setOptions()
        {
        }
        protected function getValue($value)
        {
        }
        protected function getPolicyHandler($policyHandler)
        {
        }
        protected function compileRoute($uri)
        {
        }
        public function callback(\WP_REST_Request $request)
        {
        }
        public function permissionCallback(\WP_REST_Request $request)
        {
        }
        protected function setRestRequest($request)
        {
        }
        protected function sendWPError($response)
        {
        }
    }
    class Router
    {
        protected $app = null;
        protected $name = [];
        protected $prefix = [];
        protected $routes = [];
        protected $routeGroups = [];
        protected $groupStack = [];
        protected $policyHandler = null;
        public function __construct($app)
        {
        }
        public function prefix($prefix)
        {
        }
        public function name($name)
        {
        }
        public function group($attributes = [], \Closure $callback = null)
        {
        }
        public function withPolicy($handler)
        {
        }
        public function get($uri, $handler)
        {
        }
        public function post($uri, $handler)
        {
        }
        public function put($uri, $handler)
        {
        }
        public function patch($uri, $handler)
        {
        }
        public function delete($uri, $handler)
        {
        }
        public function any($uri, $handler)
        {
        }
        protected function newRoute($uri, $handler, $method)
        {
        }
        protected function getRestNamespace()
        {
        }
        protected function buildUriWithPrefix($uri)
        {
        }
        public function registerRoutes()
        {
        }
        public function getRoutes()
        {
        }
    }
}
namespace FluentForm\Framework\Support {
    interface Htmlable
    {
        /**
         * Get content as a string of HTML.
         *
         * @return string
         */
        public function toHtml();
    }
}
namespace FluentForm\Framework\Pagination {
    abstract class AbstractPaginator implements \FluentForm\Framework\Support\Htmlable
    {
        /**
         * All of the items being paginated.
         *
         * @var \FluentForm\Framework\Support\Collection
         */
        protected $items;
        /**
         * The number of items to be shown per page.
         *
         * @var int
         */
        protected $perPage;
        /**
         * The current page being "viewed".
         *
         * @var int
         */
        protected $currentPage;
        /**
         * The base path to assign to all URLs.
         *
         * @var string
         */
        protected $path = '/';
        /**
         * The query parameters to add to all URLs.
         *
         * @var array
         */
        protected $query = [];
        /**
         * The URL fragment to add to all URLs.
         *
         * @var string|null
         */
        protected $fragment = null;
        /**
         * The query string variable used to store the page.
         *
         * @var string
         */
        protected $pageName = 'page';
        /**
         * The current page resolver callback.
         *
         * @var \Closure
         */
        protected static $currentPathResolver;
        /**
         * The current page resolver callback.
         *
         * @var \Closure
         */
        protected static $currentPageResolver;
        /**
         * The default presenter resolver.
         *
         * @var \Closure
         */
        protected static $presenterResolver;
        /**
         * Determine if the given value is a valid page number.
         *
         * @param  int  $page
         * @return bool
         */
        protected function isValidPageNumber($page)
        {
        }
        /**
         * Create a range of pagination URLs.
         *
         * @param  int  $start
         * @param  int  $end
         * @return string
         */
        public function getUrlRange($start, $end)
        {
        }
        /**
         * Get a URL for a given page number.
         *
         * @param  int  $page
         * @return string
         */
        public function url($page)
        {
        }
        /**
         * Get the URL for the previous page.
         *
         * @return string|null
         */
        public function previousPageUrl()
        {
        }
        /**
         * Get / set the URL fragment to be appended to URLs.
         *
         * @param  string|null  $fragment
         * @return $this|string|null
         */
        public function fragment($fragment = null)
        {
        }
        /**
         * Add a set of query string values to the paginator.
         *
         * @param  array|string  $key
         * @param  string|null  $value
         * @return $this
         */
        public function appends($key, $value = null)
        {
        }
        /**
         * Add an array of query string values.
         *
         * @param  array  $keys
         * @return $this
         */
        protected function appendArray(array $keys)
        {
        }
        /**
         * Add a query string value to the paginator.
         *
         * @param  string  $key
         * @param  string  $value
         * @return $this
         */
        public function addQuery($key, $value)
        {
        }
        /**
         * Build the full fragment portion of a URL.
         *
         * @return string
         */
        protected function buildFragment()
        {
        }
        /**
         * Get the slice of items being paginated.
         *
         * @return array
         */
        public function items()
        {
        }
        /**
         * Get the number of the first item in the slice.
         *
         * @return int
         */
        public function firstItem()
        {
        }
        /**
         * Get the number of the last item in the slice.
         *
         * @return int
         */
        public function lastItem()
        {
        }
        /**
         * Get the number of items shown per page.
         *
         * @return int
         */
        public function perPage()
        {
        }
        /**
         * Get the current page.
         *
         * @return int
         */
        public function currentPage()
        {
        }
        /**
         * Determine if there are enough items to split into multiple pages.
         *
         * @return bool
         */
        public function hasPages()
        {
        }
        /**
         * Resolve the current request path or return the default value.
         *
         * @param  string  $default
         * @return string
         */
        public static function resolveCurrentPath($default = '/')
        {
        }
        /**
         * Set the current request path resolver callback.
         *
         * @param  \Closure  $resolver
         * @return void
         */
        public static function currentPathResolver(\Closure $resolver)
        {
        }
        /**
         * Resolve the current page or return the default value.
         *
         * @param  string  $pageName
         * @param  int  $default
         * @return int
         */
        public static function resolveCurrentPage($pageName = 'page', $default = 1)
        {
        }
        /**
         * Set the current page resolver callback.
         *
         * @param  \Closure  $resolver
         * @return void
         */
        public static function currentPageResolver(\Closure $resolver)
        {
        }
        /**
         * Set the default Presenter resolver.
         *
         * @param  \Closure  $resolver
         * @return void
         */
        public static function presenter(\Closure $resolver)
        {
        }
        /**
         * Get the query string variable used to store the page.
         *
         * @return string
         */
        public function getPageName()
        {
        }
        /**
         * Set the query string variable used to store the page.
         *
         * @param  string  $name
         * @return $this
         */
        public function setPageName($name)
        {
        }
        /**
         * Set the base path to assign to all URLs.
         *
         * @param  string  $path
         * @return $this
         */
        public function setPath($path)
        {
        }
        /**
         * Get an iterator for the items.
         *
         * @return \ArrayIterator
         */
        #[\ReturnTypeWillChange]
        public function getIterator()
        {
        }
        /**
         * Determine if the list of items is empty or not.
         *
         * @return bool
         */
        public function isEmpty()
        {
        }
        /**
         * Get the number of items for the current page.
         *
         * @return int
         */
        #[\ReturnTypeWillChange]
        public function count()
        {
        }
        /**
         * Get the paginator's underlying collection.
         *
         * @return \FluentForm\Framework\Support\Collection
         */
        public function getCollection()
        {
        }
        /**
         * Set the paginator's underlying collection.
         *
         * @param  \FluentForm\Framework\Support\Collection  $collection
         * @return $this
         */
        public function setCollection(\FluentForm\Framework\Support\Collection $collection)
        {
        }
        /**
         * Determine if the given item exists.
         *
         * @param  mixed  $key
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function offsetExists($key)
        {
        }
        /**
         * Get the item at the given offset.
         *
         * @param  mixed  $key
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($key)
        {
        }
        /**
         * Set the item at the given offset.
         *
         * @param  mixed  $key
         * @param  mixed  $value
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($key, $value)
        {
        }
        /**
         * Unset the item at the given key.
         *
         * @param  mixed  $key
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetUnset($key)
        {
        }
        /**
         * Render the contents of the paginator to HTML.
         *
         * @return string
         */
        public function toHtml()
        {
        }
        /**
         * Make dynamic calls into the collection.
         *
         * @param  string  $method
         * @param  array  $parameters
         * @return mixed
         */
        public function __call($method, $parameters)
        {
        }
        /**
         * Render the contents of the paginator when casting to string.
         *
         * @return string
         */
        public function __toString()
        {
        }
    }
    interface PaginatorInterface
    {
        /**
         * Get the URL for a given page.
         *
         * @param  int  $page
         * @return string
         */
        public function url($page);
        /**
         * Add a set of query string values to the paginator.
         *
         * @param  array|string  $key
         * @param  string|null  $value
         * @return $this
         */
        public function appends($key, $value = null);
        /**
         * Get / set the URL fragment to be appended to URLs.
         *
         * @param  string|null  $fragment
         * @return $this|string
         */
        public function fragment($fragment = null);
        /**
         * The the URL for the next page, or null.
         *
         * @return string|null
         */
        public function nextPageUrl();
        /**
         * Get the URL for the previous page, or null.
         *
         * @return string|null
         */
        public function previousPageUrl();
        /**
         * Get all of the items being paginated.
         *
         * @return array
         */
        public function items();
        /**
         * Get the "index" of the first item being paginated.
         *
         * @return int
         */
        public function firstItem();
        /**
         * Get the "index" of the last item being paginated.
         *
         * @return int
         */
        public function lastItem();
        /**
         * Determine how many items are being shown per page.
         *
         * @return int
         */
        public function perPage();
        /**
         * Determine the current page being paginated.
         *
         * @return int
         */
        public function currentPage();
        /**
         * Determine if there are enough items to split into multiple pages.
         *
         * @return bool
         */
        public function hasPages();
        /**
         * Determine if there is more items in the data store.
         *
         * @return bool
         */
        public function hasMorePages();
        /**
         * Determine if the list of items is empty or not.
         *
         * @return bool
         */
        public function isEmpty();
        /**
         * Render the paginator using a given Presenter.
         *
         * @param  \FluentForm\Framework\Pagination\Presenter|null  $presenter
         * @return string
         */
        public function render(\FluentForm\Framework\Pagination\Presenter $presenter = null);
    }
    interface LengthAwarePaginatorInterface extends \FluentForm\Framework\Pagination\PaginatorInterface
    {
        /**
         * Create a range of pagination URLs.
         *
         * @param  int  $start
         * @param  int  $end
         * @return array
         */
        public function getUrlRange($start, $end);
        /**
         * Determine the total number of items in the data store.
         *
         * @return int
         */
        public function total();
        /**
         * Get the page number of the last available page.
         *
         * @return int
         */
        public function lastPage();
    }
    class LengthAwarePaginator extends \FluentForm\Framework\Pagination\AbstractPaginator implements \FluentForm\Framework\Support\ArrayableInterface, \ArrayAccess, \Countable, \IteratorAggregate, \JsonSerializable, \FluentForm\Framework\Support\JsonableInterface, \FluentForm\Framework\Pagination\LengthAwarePaginatorInterface
    {
        /**
         * The total number of items before slicing.
         *
         * @var int
         */
        protected $total;
        /**
         * The last available page.
         *
         * @var int
         */
        protected $lastPage;
        /**
         * Create a new paginator instance.
         *
         * @param  mixed  $items
         * @param  int  $total
         * @param  int  $perPage
         * @param  int|null  $currentPage
         * @param  array  $options (path, query, fragment, pageName)
         * @return void
         */
        public function __construct($items, $total, $perPage, $currentPage = null, array $options = [])
        {
        }
        /**
         * Get the current page for the request.
         *
         * @param  int  $currentPage
         * @param  int  $lastPage
         * @return int
         */
        protected function setCurrentPage($currentPage, $lastPage)
        {
        }
        /**
         * Get the URL for the next page.
         *
         * @return string|null
         */
        public function nextPageUrl()
        {
        }
        /**
         * Determine if there are more items in the data source.
         *
         * @return bool
         */
        public function hasMorePages()
        {
        }
        /**
         * Get the total number of items being paginated.
         *
         * @return int
         */
        public function total()
        {
        }
        /**
         * Get the last page.
         *
         * @return int
         */
        public function lastPage()
        {
        }
        /**
         * Render the paginator using the given presenter.
         *
         * @param  \FluentForm\Framework\Pagination\Presenter|null  $presenter
         * @return string
         */
        public function links(\FluentForm\Framework\Pagination\Presenter $presenter = null)
        {
        }
        /**
         * Render the paginator using the given presenter.
         *
         * @param  \FluentForm\Framework\Pagination\Presenter|null  $presenter
         * @return string
         */
        public function render(\FluentForm\Framework\Pagination\Presenter $presenter = null)
        {
        }
        /**
         * Get the instance as an array.
         *
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array
         */
        #[\ReturnTypeWillChange]
        public function jsonSerialize()
        {
        }
        /**
         * Convert the object to its JSON representation.
         *
         * @param  int  $options
         * @return string
         */
        public function toJson($options = 0)
        {
        }
    }
    class Paginator extends \FluentForm\Framework\Pagination\AbstractPaginator implements \FluentForm\Framework\Support\ArrayableInterface, \ArrayAccess, \Countable, \IteratorAggregate, \JsonSerializable, \FluentForm\Framework\Support\JsonableInterface, \FluentForm\Framework\Pagination\PaginatorInterface
    {
        /**
         * Determine if there are more items in the data source.
         *
         * @return bool
         */
        protected $hasMore;
        /**
         * Create a new paginator instance.
         *
         * @param  mixed  $items
         * @param  int  $perPage
         * @param  int|null  $currentPage
         * @param  array  $options (path, query, fragment, pageName)
         * @return void
         */
        public function __construct($items, $perPage, $currentPage = null, array $options = [])
        {
        }
        /**
         * Get the current page for the request.
         *
         * @param  int  $currentPage
         * @return int
         */
        protected function setCurrentPage($currentPage)
        {
        }
        /**
         * Check for more pages. The last item will be sliced off.
         *
         * @return void
         */
        protected function checkForMorePages()
        {
        }
        /**
         * Get the URL for the next page.
         *
         * @return string|null
         */
        public function nextPageUrl()
        {
        }
        /**
         * Determine if there are more items in the data source.
         *
         * @return bool
         */
        public function hasMorePages()
        {
        }
        /**
         * Render the paginator using the given presenter.
         *
         * @param  \FluentForm\Framework\Pagination\Presenter|null  $presenter
         * @return string
         */
        public function links(\FluentForm\Framework\Pagination\Presenter $presenter = null)
        {
        }
        /**
         * Render the paginator using the given presenter.
         *
         * @param  \FluentForm\Framework\Pagination\Presenter|null  $presenter
         * @return string
         */
        public function render(\FluentForm\Framework\Pagination\Presenter $presenter = null)
        {
        }
        /**
         * Get the instance as an array.
         *
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array
         */
        #[\ReturnTypeWillChange]
        public function jsonSerialize()
        {
        }
        /**
         * Convert the object to its JSON representation.
         *
         * @param  int  $options
         * @return string
         */
        public function toJson($options = 0)
        {
        }
    }
    interface Presenter
    {
        /**
         * Render the given paginator.
         *
         * @return string
         */
        public function render();
        /**
         * Determine if the underlying paginator being presented has pages to show.
         *
         * @return bool
         */
        public function hasPages();
    }
}
namespace FluentForm\Framework\Request {
    trait Cleaner
    {
        /**
         * Clean up the request data.
         *
         * @param  array $data
         * @return array
         */
        public function clean($data)
        {
        }
        /**
         * Clean the data in the given array.
         *
         * @param  array $data
         * @return array
         */
        protected function cleanArray(array $data)
        {
        }
        /**
         * Clean the given value.
         *
         * @param  mixed $value
         * @return mixed
         */
        protected function cleanValue($value)
        {
        }
        /**
         * Transform the given value.
         *
         * @param  mixed $value
         * @return mixed
         */
        protected function transform($value)
        {
        }
    }
}
namespace FluentForm\Framework\Validator\Contracts {
    interface File
    {
        /**
         * Returns whether the file was uploaded successfully.
         *
         * @return bool
         */
        public function isValid();
        /**
         * Gets the path without filename
         *
         * @return string
         */
        public function getPath();
        /**
         * Take an educated guess of the file's extension.
         *
         * @return mixed|null
         */
        public function guessExtension();
        /**
         * Returns the original file extension.
         *
         * @return string
         */
        public function getClientOriginalExtension();
    }
}
namespace FluentForm\Framework\Request {
    class File extends \SplFileInfo implements \FluentForm\Framework\Validator\Contracts\File
    {
        /**
         * A map of mime types and their default extensions.
         *
         * This list has been placed under the public domain by the Apache HTTPD project.
         * This list has been updated from upstream on 2013-04-23.
         *
         * @see http://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types
         */
        protected $defaultExtensions = ['application/andrew-inset' => 'ez', 'application/applixware' => 'aw', 'application/atom+xml' => 'atom', 'application/atomcat+xml' => 'atomcat', 'application/atomsvc+xml' => 'atomsvc', 'application/ccxml+xml' => 'ccxml', 'application/cdmi-capability' => 'cdmia', 'application/cdmi-container' => 'cdmic', 'application/cdmi-domain' => 'cdmid', 'application/cdmi-object' => 'cdmio', 'application/cdmi-queue' => 'cdmiq', 'application/cu-seeme' => 'cu', 'application/davmount+xml' => 'davmount', 'application/docbook+xml' => 'dbk', 'application/dssc+der' => 'dssc', 'application/dssc+xml' => 'xdssc', 'application/ecmascript' => 'ecma', 'application/emma+xml' => 'emma', 'application/epub+zip' => 'epub', 'application/exi' => 'exi', 'application/font-tdpfr' => 'pfr', 'application/gml+xml' => 'gml', 'application/gpx+xml' => 'gpx', 'application/gxf' => 'gxf', 'application/hyperstudio' => 'stk', 'application/inkml+xml' => 'ink', 'application/ipfix' => 'ipfix', 'application/java-archive' => 'jar', 'application/java-serialized-object' => 'ser', 'application/java-vm' => 'class', 'application/javascript' => 'js', 'application/json' => 'json', 'application/jsonml+json' => 'jsonml', 'application/lost+xml' => 'lostxml', 'application/mac-binhex40' => 'hqx', 'application/mac-compactpro' => 'cpt', 'application/mads+xml' => 'mads', 'application/marc' => 'mrc', 'application/marcxml+xml' => 'mrcx', 'application/mathematica' => 'ma', 'application/mathml+xml' => 'mathml', 'application/mbox' => 'mbox', 'application/mediaservercontrol+xml' => 'mscml', 'application/metalink+xml' => 'metalink', 'application/metalink4+xml' => 'meta4', 'application/mets+xml' => 'mets', 'application/mods+xml' => 'mods', 'application/mp21' => 'm21', 'application/mp4' => 'mp4s', 'application/msword' => 'doc', 'application/mxf' => 'mxf', 'application/octet-stream' => 'bin', 'application/oda' => 'oda', 'application/oebps-package+xml' => 'opf', 'application/ogg' => 'ogx', 'application/omdoc+xml' => 'omdoc', 'application/onenote' => 'onetoc', 'application/oxps' => 'oxps', 'application/patch-ops-error+xml' => 'xer', 'application/pdf' => 'pdf', 'application/pgp-encrypted' => 'pgp', 'application/pgp-signature' => 'asc', 'application/pics-rules' => 'prf', 'application/pkcs10' => 'p10', 'application/pkcs7-mime' => 'p7m', 'application/pkcs7-signature' => 'p7s', 'application/pkcs8' => 'p8', 'application/pkix-attr-cert' => 'ac', 'application/pkix-cert' => 'cer', 'application/pkix-crl' => 'crl', 'application/pkix-pkipath' => 'pkipath', 'application/pkixcmp' => 'pki', 'application/pls+xml' => 'pls', 'application/postscript' => 'ai', 'application/prs.cww' => 'cww', 'application/pskc+xml' => 'pskcxml', 'application/rdf+xml' => 'rdf', 'application/reginfo+xml' => 'rif', 'application/relax-ng-compact-syntax' => 'rnc', 'application/resource-lists+xml' => 'rl', 'application/resource-lists-diff+xml' => 'rld', 'application/rls-services+xml' => 'rs', 'application/rpki-ghostbusters' => 'gbr', 'application/rpki-manifest' => 'mft', 'application/rpki-roa' => 'roa', 'application/rsd+xml' => 'rsd', 'application/rss+xml' => 'rss', 'application/rtf' => 'rtf', 'application/sbml+xml' => 'sbml', 'application/scvp-cv-request' => 'scq', 'application/scvp-cv-response' => 'scs', 'application/scvp-vp-request' => 'spq', 'application/scvp-vp-response' => 'spp', 'application/sdp' => 'sdp', 'application/set-payment-initiation' => 'setpay', 'application/set-registration-initiation' => 'setreg', 'application/shf+xml' => 'shf', 'application/smil+xml' => 'smi', 'application/sparql-query' => 'rq', 'application/sparql-results+xml' => 'srx', 'application/srgs' => 'gram', 'application/srgs+xml' => 'grxml', 'application/sru+xml' => 'sru', 'application/ssdl+xml' => 'ssdl', 'application/ssml+xml' => 'ssml', 'application/tei+xml' => 'tei', 'application/thraud+xml' => 'tfi', 'application/timestamped-data' => 'tsd', 'application/vnd.3gpp.pic-bw-large' => 'plb', 'application/vnd.3gpp.pic-bw-small' => 'psb', 'application/vnd.3gpp.pic-bw-var' => 'pvb', 'application/vnd.3gpp2.tcap' => 'tcap', 'application/vnd.3m.post-it-notes' => 'pwn', 'application/vnd.accpac.simply.aso' => 'aso', 'application/vnd.accpac.simply.imp' => 'imp', 'application/vnd.acucobol' => 'acu', 'application/vnd.acucorp' => 'atc', 'application/vnd.adobe.air-application-installer-package+zip' => 'air', 'application/vnd.adobe.formscentral.fcdt' => 'fcdt', 'application/vnd.adobe.fxp' => 'fxp', 'application/vnd.adobe.xdp+xml' => 'xdp', 'application/vnd.adobe.xfdf' => 'xfdf', 'application/vnd.ahead.space' => 'ahead', 'application/vnd.airzip.filesecure.azf' => 'azf', 'application/vnd.airzip.filesecure.azs' => 'azs', 'application/vnd.amazon.ebook' => 'azw', 'application/vnd.americandynamics.acc' => 'acc', 'application/vnd.amiga.ami' => 'ami', 'application/vnd.android.package-archive' => 'apk', 'application/vnd.anser-web-certificate-issue-initiation' => 'cii', 'application/vnd.anser-web-funds-transfer-initiation' => 'fti', 'application/vnd.antix.game-component' => 'atx', 'application/vnd.apple.installer+xml' => 'mpkg', 'application/vnd.apple.mpegurl' => 'm3u8', 'application/vnd.aristanetworks.swi' => 'swi', 'application/vnd.astraea-software.iota' => 'iota', 'application/vnd.audiograph' => 'aep', 'application/vnd.blueice.multipass' => 'mpm', 'application/vnd.bmi' => 'bmi', 'application/vnd.businessobjects' => 'rep', 'application/vnd.chemdraw+xml' => 'cdxml', 'application/vnd.chipnuts.karaoke-mmd' => 'mmd', 'application/vnd.cinderella' => 'cdy', 'application/vnd.claymore' => 'cla', 'application/vnd.cloanto.rp9' => 'rp9', 'application/vnd.clonk.c4group' => 'c4g', 'application/vnd.cluetrust.cartomobile-config' => 'c11amc', 'application/vnd.cluetrust.cartomobile-config-pkg' => 'c11amz', 'application/vnd.commonspace' => 'csp', 'application/vnd.contact.cmsg' => 'cdbcmsg', 'application/vnd.cosmocaller' => 'cmc', 'application/vnd.crick.clicker' => 'clkx', 'application/vnd.crick.clicker.keyboard' => 'clkk', 'application/vnd.crick.clicker.palette' => 'clkp', 'application/vnd.crick.clicker.template' => 'clkt', 'application/vnd.crick.clicker.wordbank' => 'clkw', 'application/vnd.criticaltools.wbs+xml' => 'wbs', 'application/vnd.ctc-posml' => 'pml', 'application/vnd.cups-ppd' => 'ppd', 'application/vnd.curl.car' => 'car', 'application/vnd.curl.pcurl' => 'pcurl', 'application/vnd.dart' => 'dart', 'application/vnd.data-vision.rdz' => 'rdz', 'application/vnd.dece.data' => 'uvf', 'application/vnd.dece.ttml+xml' => 'uvt', 'application/vnd.dece.unspecified' => 'uvx', 'application/vnd.dece.zip' => 'uvz', 'application/vnd.denovo.fcselayout-link' => 'fe_launch', 'application/vnd.dna' => 'dna', 'application/vnd.dolby.mlp' => 'mlp', 'application/vnd.dpgraph' => 'dpg', 'application/vnd.dreamfactory' => 'dfac', 'application/vnd.ds-keypoint' => 'kpxx', 'application/vnd.dvb.ait' => 'ait', 'application/vnd.dvb.service' => 'svc', 'application/vnd.dynageo' => 'geo', 'application/vnd.ecowin.chart' => 'mag', 'application/vnd.enliven' => 'nml', 'application/vnd.epson.esf' => 'esf', 'application/vnd.epson.msf' => 'msf', 'application/vnd.epson.quickanime' => 'qam', 'application/vnd.epson.salt' => 'slt', 'application/vnd.epson.ssf' => 'ssf', 'application/vnd.eszigno3+xml' => 'es3', 'application/vnd.ezpix-album' => 'ez2', 'application/vnd.ezpix-package' => 'ez3', 'application/vnd.fdf' => 'fdf', 'application/vnd.fdsn.mseed' => 'mseed', 'application/vnd.fdsn.seed' => 'seed', 'application/vnd.flographit' => 'gph', 'application/vnd.fluxtime.clip' => 'ftc', 'application/vnd.framemaker' => 'fm', 'application/vnd.frogans.fnc' => 'fnc', 'application/vnd.frogans.ltf' => 'ltf', 'application/vnd.fsc.weblaunch' => 'fsc', 'application/vnd.fujitsu.oasys' => 'oas', 'application/vnd.fujitsu.oasys2' => 'oa2', 'application/vnd.fujitsu.oasys3' => 'oa3', 'application/vnd.fujitsu.oasysgp' => 'fg5', 'application/vnd.fujitsu.oasysprs' => 'bh2', 'application/vnd.fujixerox.ddd' => 'ddd', 'application/vnd.fujixerox.docuworks' => 'xdw', 'application/vnd.fujixerox.docuworks.binder' => 'xbd', 'application/vnd.fuzzysheet' => 'fzs', 'application/vnd.genomatix.tuxedo' => 'txd', 'application/vnd.geogebra.file' => 'ggb', 'application/vnd.geogebra.tool' => 'ggt', 'application/vnd.geometry-explorer' => 'gex', 'application/vnd.geonext' => 'gxt', 'application/vnd.geoplan' => 'g2w', 'application/vnd.geospace' => 'g3w', 'application/vnd.gmx' => 'gmx', 'application/vnd.google-earth.kml+xml' => 'kml', 'application/vnd.google-earth.kmz' => 'kmz', 'application/vnd.grafeq' => 'gqf', 'application/vnd.groove-account' => 'gac', 'application/vnd.groove-help' => 'ghf', 'application/vnd.groove-identity-message' => 'gim', 'application/vnd.groove-injector' => 'grv', 'application/vnd.groove-tool-message' => 'gtm', 'application/vnd.groove-tool-template' => 'tpl', 'application/vnd.groove-vcard' => 'vcg', 'application/vnd.hal+xml' => 'hal', 'application/vnd.handheld-entertainment+xml' => 'zmm', 'application/vnd.hbci' => 'hbci', 'application/vnd.hhe.lesson-player' => 'les', 'application/vnd.hp-hpgl' => 'hpgl', 'application/vnd.hp-hpid' => 'hpid', 'application/vnd.hp-hps' => 'hps', 'application/vnd.hp-jlyt' => 'jlt', 'application/vnd.hp-pcl' => 'pcl', 'application/vnd.hp-pclxl' => 'pclxl', 'application/vnd.hydrostatix.sof-data' => 'sfd-hdstx', 'application/vnd.ibm.minipay' => 'mpy', 'application/vnd.ibm.modcap' => 'afp', 'application/vnd.ibm.rights-management' => 'irm', 'application/vnd.ibm.secure-container' => 'sc', 'application/vnd.iccprofile' => 'icc', 'application/vnd.igloader' => 'igl', 'application/vnd.immervision-ivp' => 'ivp', 'application/vnd.immervision-ivu' => 'ivu', 'application/vnd.insors.igm' => 'igm', 'application/vnd.intercon.formnet' => 'xpw', 'application/vnd.intergeo' => 'i2g', 'application/vnd.intu.qbo' => 'qbo', 'application/vnd.intu.qfx' => 'qfx', 'application/vnd.ipunplugged.rcprofile' => 'rcprofile', 'application/vnd.irepository.package+xml' => 'irp', 'application/vnd.is-xpr' => 'xpr', 'application/vnd.isac.fcs' => 'fcs', 'application/vnd.jam' => 'jam', 'application/vnd.jcp.javame.midlet-rms' => 'rms', 'application/vnd.jisp' => 'jisp', 'application/vnd.joost.joda-archive' => 'joda', 'application/vnd.kahootz' => 'ktz', 'application/vnd.kde.karbon' => 'karbon', 'application/vnd.kde.kchart' => 'chrt', 'application/vnd.kde.kformula' => 'kfo', 'application/vnd.kde.kivio' => 'flw', 'application/vnd.kde.kontour' => 'kon', 'application/vnd.kde.kpresenter' => 'kpr', 'application/vnd.kde.kspread' => 'ksp', 'application/vnd.kde.kword' => 'kwd', 'application/vnd.kenameaapp' => 'htke', 'application/vnd.kidspiration' => 'kia', 'application/vnd.kinar' => 'kne', 'application/vnd.koan' => 'skp', 'application/vnd.kodak-descriptor' => 'sse', 'application/vnd.las.las+xml' => 'lasxml', 'application/vnd.llamagraphics.life-balance.desktop' => 'lbd', 'application/vnd.llamagraphics.life-balance.exchange+xml' => 'lbe', 'application/vnd.lotus-1-2-3' => '123', 'application/vnd.lotus-approach' => 'apr', 'application/vnd.lotus-freelance' => 'pre', 'application/vnd.lotus-notes' => 'nsf', 'application/vnd.lotus-organizer' => 'org', 'application/vnd.lotus-screencam' => 'scm', 'application/vnd.lotus-wordpro' => 'lwp', 'application/vnd.macports.portpkg' => 'portpkg', 'application/vnd.mcd' => 'mcd', 'application/vnd.medcalcdata' => 'mc1', 'application/vnd.mediastation.cdkey' => 'cdkey', 'application/vnd.mfer' => 'mwf', 'application/vnd.mfmp' => 'mfm', 'application/vnd.micrografx.flo' => 'flo', 'application/vnd.micrografx.igx' => 'igx', 'application/vnd.mif' => 'mif', 'application/vnd.mobius.daf' => 'daf', 'application/vnd.mobius.dis' => 'dis', 'application/vnd.mobius.mbk' => 'mbk', 'application/vnd.mobius.mqy' => 'mqy', 'application/vnd.mobius.msl' => 'msl', 'application/vnd.mobius.plc' => 'plc', 'application/vnd.mobius.txf' => 'txf', 'application/vnd.mophun.application' => 'mpn', 'application/vnd.mophun.certificate' => 'mpc', 'application/vnd.mozilla.xul+xml' => 'xul', 'application/vnd.ms-artgalry' => 'cil', 'application/vnd.ms-cab-compressed' => 'cab', 'application/vnd.ms-excel' => 'xls', 'application/vnd.ms-excel.addin.macroenabled.12' => 'xlam', 'application/vnd.ms-excel.sheet.binary.macroenabled.12' => 'xlsb', 'application/vnd.ms-excel.sheet.macroenabled.12' => 'xlsm', 'application/vnd.ms-excel.template.macroenabled.12' => 'xltm', 'application/vnd.ms-fontobject' => 'eot', 'application/vnd.ms-htmlhelp' => 'chm', 'application/vnd.ms-ims' => 'ims', 'application/vnd.ms-lrm' => 'lrm', 'application/vnd.ms-officetheme' => 'thmx', 'application/vnd.ms-pki.seccat' => 'cat', 'application/vnd.ms-pki.stl' => 'stl', 'application/vnd.ms-powerpoint' => 'ppt', 'application/vnd.ms-powerpoint.addin.macroenabled.12' => 'ppam', 'application/vnd.ms-powerpoint.presentation.macroenabled.12' => 'pptm', 'application/vnd.ms-powerpoint.slide.macroenabled.12' => 'sldm', 'application/vnd.ms-powerpoint.slideshow.macroenabled.12' => 'ppsm', 'application/vnd.ms-powerpoint.template.macroenabled.12' => 'potm', 'application/vnd.ms-project' => 'mpp', 'application/vnd.ms-word.document.macroenabled.12' => 'docm', 'application/vnd.ms-word.template.macroenabled.12' => 'dotm', 'application/vnd.ms-works' => 'wps', 'application/vnd.ms-wpl' => 'wpl', 'application/vnd.ms-xpsdocument' => 'xps', 'application/vnd.mseq' => 'mseq', 'application/vnd.musician' => 'mus', 'application/vnd.muvee.style' => 'msty', 'application/vnd.mynfc' => 'taglet', 'application/vnd.neurolanguage.nlu' => 'nlu', 'application/vnd.nitf' => 'ntf', 'application/vnd.noblenet-directory' => 'nnd', 'application/vnd.noblenet-sealer' => 'nns', 'application/vnd.noblenet-web' => 'nnw', 'application/vnd.nokia.n-gage.data' => 'ngdat', 'application/vnd.nokia.n-gage.symbian.install' => 'n-gage', 'application/vnd.nokia.radio-preset' => 'rpst', 'application/vnd.nokia.radio-presets' => 'rpss', 'application/vnd.novadigm.edm' => 'edm', 'application/vnd.novadigm.edx' => 'edx', 'application/vnd.novadigm.ext' => 'ext', 'application/vnd.oasis.opendocument.chart' => 'odc', 'application/vnd.oasis.opendocument.chart-template' => 'otc', 'application/vnd.oasis.opendocument.database' => 'odb', 'application/vnd.oasis.opendocument.formula' => 'odf', 'application/vnd.oasis.opendocument.formula-template' => 'odft', 'application/vnd.oasis.opendocument.graphics' => 'odg', 'application/vnd.oasis.opendocument.graphics-template' => 'otg', 'application/vnd.oasis.opendocument.image' => 'odi', 'application/vnd.oasis.opendocument.image-template' => 'oti', 'application/vnd.oasis.opendocument.presentation' => 'odp', 'application/vnd.oasis.opendocument.presentation-template' => 'otp', 'application/vnd.oasis.opendocument.spreadsheet' => 'ods', 'application/vnd.oasis.opendocument.spreadsheet-template' => 'ots', 'application/vnd.oasis.opendocument.text' => 'odt', 'application/vnd.oasis.opendocument.text-master' => 'odm', 'application/vnd.oasis.opendocument.text-template' => 'ott', 'application/vnd.oasis.opendocument.text-web' => 'oth', 'application/vnd.olpc-sugar' => 'xo', 'application/vnd.oma.dd2+xml' => 'dd2', 'application/vnd.openofficeorg.extension' => 'oxt', 'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'pptx', 'application/vnd.openxmlformats-officedocument.presentationml.slide' => 'sldx', 'application/vnd.openxmlformats-officedocument.presentationml.slideshow' => 'ppsx', 'application/vnd.openxmlformats-officedocument.presentationml.template' => 'potx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.template' => 'xltx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.template' => 'dotx', 'application/vnd.osgeo.mapguide.package' => 'mgp', 'application/vnd.osgi.dp' => 'dp', 'application/vnd.osgi.subsystem' => 'esa', 'application/vnd.palm' => 'pdb', 'application/vnd.pawaafile' => 'paw', 'application/vnd.pg.format' => 'str', 'application/vnd.pg.osasli' => 'ei6', 'application/vnd.picsel' => 'efif', 'application/vnd.pmi.widget' => 'wg', 'application/vnd.pocketlearn' => 'plf', 'application/vnd.powerbuilder6' => 'pbd', 'application/vnd.previewsystems.box' => 'box', 'application/vnd.proteus.magazine' => 'mgz', 'application/vnd.publishare-delta-tree' => 'qps', 'application/vnd.pvi.ptid1' => 'ptid', 'application/vnd.quark.quarkxpress' => 'qxd', 'application/vnd.realvnc.bed' => 'bed', 'application/vnd.recordare.musicxml' => 'mxl', 'application/vnd.recordare.musicxml+xml' => 'musicxml', 'application/vnd.rig.cryptonote' => 'cryptonote', 'application/vnd.rim.cod' => 'cod', 'application/vnd.rn-realmedia' => 'rm', 'application/vnd.rn-realmedia-vbr' => 'rmvb', 'application/vnd.route66.link66+xml' => 'link66', 'application/vnd.sailingtracker.track' => 'st', 'application/vnd.seemail' => 'see', 'application/vnd.sema' => 'sema', 'application/vnd.semd' => 'semd', 'application/vnd.semf' => 'semf', 'application/vnd.shana.informed.formdata' => 'ifm', 'application/vnd.shana.informed.formtemplate' => 'itp', 'application/vnd.shana.informed.interchange' => 'iif', 'application/vnd.shana.informed.package' => 'ipk', 'application/vnd.simtech-mindmapper' => 'twd', 'application/vnd.smaf' => 'mmf', 'application/vnd.smart.teacher' => 'teacher', 'application/vnd.solent.sdkm+xml' => 'sdkm', 'application/vnd.spotfire.dxp' => 'dxp', 'application/vnd.spotfire.sfs' => 'sfs', 'application/vnd.stardivision.calc' => 'sdc', 'application/vnd.stardivision.draw' => 'sda', 'application/vnd.stardivision.impress' => 'sdd', 'application/vnd.stardivision.math' => 'smf', 'application/vnd.stardivision.writer' => 'sdw', 'application/vnd.stardivision.writer-global' => 'sgl', 'application/vnd.stepmania.package' => 'smzip', 'application/vnd.stepmania.stepchart' => 'sm', 'application/vnd.sun.xml.calc' => 'sxc', 'application/vnd.sun.xml.calc.template' => 'stc', 'application/vnd.sun.xml.draw' => 'sxd', 'application/vnd.sun.xml.draw.template' => 'std', 'application/vnd.sun.xml.impress' => 'sxi', 'application/vnd.sun.xml.impress.template' => 'sti', 'application/vnd.sun.xml.math' => 'sxm', 'application/vnd.sun.xml.writer' => 'sxw', 'application/vnd.sun.xml.writer.global' => 'sxg', 'application/vnd.sun.xml.writer.template' => 'stw', 'application/vnd.sus-calendar' => 'sus', 'application/vnd.svd' => 'svd', 'application/vnd.symbian.install' => 'sis', 'application/vnd.syncml+xml' => 'xsm', 'application/vnd.syncml.dm+wbxml' => 'bdm', 'application/vnd.syncml.dm+xml' => 'xdm', 'application/vnd.tao.intent-module-archive' => 'tao', 'application/vnd.tcpdump.pcap' => 'pcap', 'application/vnd.tmobile-livetv' => 'tmo', 'application/vnd.trid.tpt' => 'tpt', 'application/vnd.triscape.mxs' => 'mxs', 'application/vnd.trueapp' => 'tra', 'application/vnd.ufdl' => 'ufd', 'application/vnd.uiq.theme' => 'utz', 'application/vnd.umajin' => 'umj', 'application/vnd.unity' => 'unityweb', 'application/vnd.uoml+xml' => 'uoml', 'application/vnd.vcx' => 'vcx', 'application/vnd.visio' => 'vsd', 'application/vnd.visionary' => 'vis', 'application/vnd.vsf' => 'vsf', 'application/vnd.wap.wbxml' => 'wbxml', 'application/vnd.wap.wmlc' => 'wmlc', 'application/vnd.wap.wmlscriptc' => 'wmlsc', 'application/vnd.webturbo' => 'wtb', 'application/vnd.wolfram.player' => 'nbp', 'application/vnd.wordperfect' => 'wpd', 'application/vnd.wqd' => 'wqd', 'application/vnd.wt.stf' => 'stf', 'application/vnd.xara' => 'xar', 'application/vnd.xfdl' => 'xfdl', 'application/vnd.yamaha.hv-dic' => 'hvd', 'application/vnd.yamaha.hv-script' => 'hvs', 'application/vnd.yamaha.hv-voice' => 'hvp', 'application/vnd.yamaha.openscoreformat' => 'osf', 'application/vnd.yamaha.openscoreformat.osfpvg+xml' => 'osfpvg', 'application/vnd.yamaha.smaf-audio' => 'saf', 'application/vnd.yamaha.smaf-phrase' => 'spf', 'application/vnd.yellowriver-custom-menu' => 'cmp', 'application/vnd.zul' => 'zir', 'application/vnd.zzazz.deck+xml' => 'zaz', 'application/voicexml+xml' => 'vxml', 'application/widget' => 'wgt', 'application/winhlp' => 'hlp', 'application/wsdl+xml' => 'wsdl', 'application/wspolicy+xml' => 'wspolicy', 'application/x-7z-compressed' => '7z', 'application/x-abiword' => 'abw', 'application/x-ace-compressed' => 'ace', 'application/x-apple-diskimage' => 'dmg', 'application/x-authorware-bin' => 'aab', 'application/x-authorware-map' => 'aam', 'application/x-authorware-seg' => 'aas', 'application/x-bcpio' => 'bcpio', 'application/x-bittorrent' => 'torrent', 'application/x-blorb' => 'blb', 'application/x-bzip' => 'bz', 'application/x-bzip2' => 'bz2', 'application/x-cbr' => 'cbr', 'application/x-cdlink' => 'vcd', 'application/x-cfs-compressed' => 'cfs', 'application/x-chat' => 'chat', 'application/x-chess-pgn' => 'pgn', 'application/x-conference' => 'nsc', 'application/x-cpio' => 'cpio', 'application/x-csh' => 'csh', 'application/x-debian-package' => 'deb', 'application/x-dgc-compressed' => 'dgc', 'application/x-director' => 'dir', 'application/x-doom' => 'wad', 'application/x-dtbncx+xml' => 'ncx', 'application/x-dtbook+xml' => 'dtb', 'application/x-dtbresource+xml' => 'res', 'application/x-dvi' => 'dvi', 'application/x-envoy' => 'evy', 'application/x-eva' => 'eva', 'application/x-font-bdf' => 'bdf', 'application/x-font-ghostscript' => 'gsf', 'application/x-font-linux-psf' => 'psf', 'application/x-font-otf' => 'otf', 'application/x-font-pcf' => 'pcf', 'application/x-font-snf' => 'snf', 'application/x-font-ttf' => 'ttf', 'application/x-font-type1' => 'pfa', 'application/x-font-woff' => 'woff', 'application/x-freearc' => 'arc', 'application/x-futuresplash' => 'spl', 'application/x-gca-compressed' => 'gca', 'application/x-glulx' => 'ulx', 'application/x-gnumeric' => 'gnumeric', 'application/x-gramps-xml' => 'gramps', 'application/x-gtar' => 'gtar', 'application/x-hdf' => 'hdf', 'application/x-install-instructions' => 'install', 'application/x-iso9660-image' => 'iso', 'application/x-java-jnlp-file' => 'jnlp', 'application/x-latex' => 'latex', 'application/x-lzh-compressed' => 'lzh', 'application/x-mie' => 'mie', 'application/x-mobipocket-ebook' => 'prc', 'application/x-ms-application' => 'application', 'application/x-ms-shortcut' => 'lnk', 'application/x-ms-wmd' => 'wmd', 'application/x-ms-wmz' => 'wmz', 'application/x-ms-xbap' => 'xbap', 'application/x-msaccess' => 'mdb', 'application/x-msbinder' => 'obd', 'application/x-mscardfile' => 'crd', 'application/x-msclip' => 'clp', 'application/x-msdownload' => 'exe', 'application/x-msmediaview' => 'mvb', 'application/x-msmetafile' => 'wmf', 'application/x-msmoney' => 'mny', 'application/x-mspublisher' => 'pub', 'application/x-msschedule' => 'scd', 'application/x-msterminal' => 'trm', 'application/x-mswrite' => 'wri', 'application/x-netcdf' => 'nc', 'application/x-nzb' => 'nzb', 'application/x-pkcs12' => 'p12', 'application/x-pkcs7-certificates' => 'p7b', 'application/x-pkcs7-certreqresp' => 'p7r', 'application/x-rar-compressed' => 'rar', 'application/x-rar' => 'rar', 'application/x-research-info-systems' => 'ris', 'application/x-sh' => 'sh', 'application/x-shar' => 'shar', 'application/x-shockwave-flash' => 'swf', 'application/x-silverlight-app' => 'xap', 'application/x-sql' => 'sql', 'application/x-stuffit' => 'sit', 'application/x-stuffitx' => 'sitx', 'application/x-subrip' => 'srt', 'application/x-sv4cpio' => 'sv4cpio', 'application/x-sv4crc' => 'sv4crc', 'application/x-t3vm-image' => 't3', 'application/x-tads' => 'gam', 'application/x-tar' => 'tar', 'application/x-tcl' => 'tcl', 'application/x-tex' => 'tex', 'application/x-tex-tfm' => 'tfm', 'application/x-texinfo' => 'texinfo', 'application/x-tgif' => 'obj', 'application/x-ustar' => 'ustar', 'application/x-wais-source' => 'src', 'application/x-x509-ca-cert' => 'der', 'application/x-xfig' => 'fig', 'application/x-xliff+xml' => 'xlf', 'application/x-xpinstall' => 'xpi', 'application/x-xz' => 'xz', 'application/x-zmachine' => 'z1', 'application/xaml+xml' => 'xaml', 'application/xcap-diff+xml' => 'xdf', 'application/xenc+xml' => 'xenc', 'application/xhtml+xml' => 'xhtml', 'application/xml' => 'xml', 'application/xml-dtd' => 'dtd', 'application/xop+xml' => 'xop', 'application/xproc+xml' => 'xpl', 'application/xslt+xml' => 'xslt', 'application/xspf+xml' => 'xspf', 'application/xv+xml' => 'mxml', 'application/yang' => 'yang', 'application/yin+xml' => 'yin', 'application/zip' => 'zip', 'audio/adpcm' => 'adp', 'audio/basic' => 'au', 'audio/midi' => 'mid', 'audio/mp4' => 'mp4a', 'audio/mpeg' => 'mpga', 'audio/ogg' => 'oga', 'audio/s3m' => 's3m', 'audio/silk' => 'sil', 'audio/vnd.dece.audio' => 'uva', 'audio/vnd.digital-winds' => 'eol', 'audio/vnd.dra' => 'dra', 'audio/vnd.dts' => 'dts', 'audio/vnd.dts.hd' => 'dtshd', 'audio/vnd.lucent.voice' => 'lvp', 'audio/vnd.ms-playready.media.pya' => 'pya', 'audio/vnd.nuera.ecelp4800' => 'ecelp4800', 'audio/vnd.nuera.ecelp7470' => 'ecelp7470', 'audio/vnd.nuera.ecelp9600' => 'ecelp9600', 'audio/vnd.rip' => 'rip', 'audio/webm' => 'weba', 'audio/x-aac' => 'aac', 'audio/x-aiff' => 'aif', 'audio/x-caf' => 'caf', 'audio/x-flac' => 'flac', 'audio/x-matroska' => 'mka', 'audio/x-mpegurl' => 'm3u', 'audio/x-ms-wax' => 'wax', 'audio/x-ms-wma' => 'wma', 'audio/x-pn-realaudio' => 'ram', 'audio/x-pn-realaudio-plugin' => 'rmp', 'audio/x-wav' => 'wav', 'audio/xm' => 'xm', 'chemical/x-cdx' => 'cdx', 'chemical/x-cif' => 'cif', 'chemical/x-cmdf' => 'cmdf', 'chemical/x-cml' => 'cml', 'chemical/x-csml' => 'csml', 'chemical/x-xyz' => 'xyz', 'image/bmp' => 'bmp', 'image/x-ms-bmp' => 'bmp', 'image/cgm' => 'cgm', 'image/g3fax' => 'g3', 'image/gif' => 'gif', 'image/ief' => 'ief', 'image/jpeg' => 'jpeg', 'image/pjpeg' => 'jpeg', 'image/ktx' => 'ktx', 'image/png' => 'png', 'image/prs.btif' => 'btif', 'image/sgi' => 'sgi', 'image/svg+xml' => 'svg', 'image/tiff' => 'tiff', 'image/vnd.adobe.photoshop' => 'psd', 'image/vnd.dece.graphic' => 'uvi', 'image/vnd.dvb.subtitle' => 'sub', 'image/vnd.djvu' => 'djvu', 'image/vnd.dwg' => 'dwg', 'image/vnd.dxf' => 'dxf', 'image/vnd.fastbidsheet' => 'fbs', 'image/vnd.fpx' => 'fpx', 'image/vnd.fst' => 'fst', 'image/vnd.fujixerox.edmics-mmr' => 'mmr', 'image/vnd.fujixerox.edmics-rlc' => 'rlc', 'image/vnd.ms-modi' => 'mdi', 'image/vnd.ms-photo' => 'wdp', 'image/vnd.net-fpx' => 'npx', 'image/vnd.wap.wbmp' => 'wbmp', 'image/vnd.xiff' => 'xif', 'image/webp' => 'webp', 'image/x-3ds' => '3ds', 'image/x-cmu-raster' => 'ras', 'image/x-cmx' => 'cmx', 'image/x-freehand' => 'fh', 'image/x-icon' => 'ico', 'image/x-mrsid-image' => 'sid', 'image/x-pcx' => 'pcx', 'image/x-pict' => 'pic', 'image/x-portable-anymap' => 'pnm', 'image/x-portable-bitmap' => 'pbm', 'image/x-portable-graymap' => 'pgm', 'image/x-portable-pixmap' => 'ppm', 'image/x-rgb' => 'rgb', 'image/x-tga' => 'tga', 'image/x-xbitmap' => 'xbm', 'image/x-xpixmap' => 'xpm', 'image/x-xwindowdump' => 'xwd', 'message/rfc822' => 'eml', 'model/iges' => 'igs', 'model/mesh' => 'msh', 'model/vnd.collada+xml' => 'dae', 'model/vnd.dwf' => 'dwf', 'model/vnd.gdl' => 'gdl', 'model/vnd.gtw' => 'gtw', 'model/vnd.mts' => 'mts', 'model/vnd.vtu' => 'vtu', 'model/vrml' => 'wrl', 'model/x3d+binary' => 'x3db', 'model/x3d+vrml' => 'x3dv', 'model/x3d+xml' => 'x3d', 'text/cache-manifest' => 'appcache', 'text/calendar' => 'ics', 'text/css' => 'css', 'text/csv' => 'csv', 'text/html' => 'html', 'text/n3' => 'n3', 'text/plain' => 'txt', 'text/prs.lines.tag' => 'dsc', 'text/richtext' => 'rtx', 'text/rtf' => 'rtf', 'text/sgml' => 'sgml', 'text/tab-separated-values' => 'tsv', 'text/troff' => 't', 'text/turtle' => 'ttl', 'text/uri-list' => 'uri', 'text/vcard' => 'vcard', 'text/vnd.curl' => 'curl', 'text/vnd.curl.dcurl' => 'dcurl', 'text/vnd.curl.scurl' => 'scurl', 'text/vnd.curl.mcurl' => 'mcurl', 'text/vnd.dvb.subtitle' => 'sub', 'text/vnd.fly' => 'fly', 'text/vnd.fmi.flexstor' => 'flx', 'text/vnd.graphviz' => 'gv', 'text/vnd.in3d.3dml' => '3dml', 'text/vnd.in3d.spot' => 'spot', 'text/vnd.sun.j2me.app-descriptor' => 'jad', 'text/vnd.wap.wml' => 'wml', 'text/vnd.wap.wmlscript' => 'wmls', 'text/vtt' => 'vtt', 'text/x-asm' => 's', 'text/x-c' => 'c', 'text/x-fortran' => 'f', 'text/x-pascal' => 'p', 'text/x-java-source' => 'java', 'text/x-opml' => 'opml', 'text/x-nfo' => 'nfo', 'text/x-setext' => 'etx', 'text/x-sfv' => 'sfv', 'text/x-uuencode' => 'uu', 'text/x-vcalendar' => 'vcs', 'text/x-vcard' => 'vcf', 'video/3gpp' => '3gp', 'video/3gpp2' => '3g2', 'video/h261' => 'h261', 'video/h263' => 'h263', 'video/h264' => 'h264', 'video/jpeg' => 'jpgv', 'video/jpm' => 'jpm', 'video/mj2' => 'mj2', 'video/mp4' => 'mp4', 'video/mpeg' => 'mpeg', 'video/ogg' => 'ogv', 'video/quicktime' => 'qt', 'video/vnd.dece.hd' => 'uvh', 'video/vnd.dece.mobile' => 'uvm', 'video/vnd.dece.pd' => 'uvp', 'video/vnd.dece.sd' => 'uvs', 'video/vnd.dece.video' => 'uvv', 'video/vnd.dvb.file' => 'dvb', 'video/vnd.fvt' => 'fvt', 'video/vnd.mpegurl' => 'mxu', 'video/vnd.ms-playready.media.pyv' => 'pyv', 'video/vnd.uvvu.mp4' => 'uvu', 'video/vnd.vivo' => 'viv', 'video/webm' => 'webm', 'video/x-f4v' => 'f4v', 'video/x-fli' => 'fli', 'video/x-flv' => 'flv', 'video/x-m4v' => 'm4v', 'video/x-matroska' => 'mkv', 'video/x-mng' => 'mng', 'video/x-ms-asf' => 'asf', 'video/x-ms-vob' => 'vob', 'video/x-ms-wm' => 'wm', 'video/x-ms-wmv' => 'wmv', 'video/x-ms-wmx' => 'wmx', 'video/x-ms-wvx' => 'wvx', 'video/x-msvideo' => 'avi', 'video/x-sgi-movie' => 'movie', 'video/x-smv' => 'smv', 'x-conference/x-cooltalk' => 'ice'];
        /**
         * Original file name.
         *
         * @var string $originalName
         */
        private $originalName;
        /**
         * Mime type of the file.
         *
         * @var string $mimeType
         */
        private $mimeType;
        /**
         * File size in kilobyte.
         *
         * @var int|null $size
         */
        private $size;
        /**
         * File upload error.
         *
         * @var int $error
         */
        private $error;
        /**
         * HTTP File instantiator.
         *
         * @param $path
         * @param $originalName
         * @param null $mimeType
         * @param null $size
         * @param null $error
         */
        public function __construct($path, $originalName, $mimeType = null, $size = null, $error = null)
        {
        }
        /**
         * @taken from \Symfony\Component\HttpFoundation\File\File
         *
         * Returns locale independent base name of the given path.
         *
         * @param string $name The new file name
         *
         * @return string containing
         */
        public function getName($name)
        {
        }
        /**
         * Get the file upload error.
         *
         * @return int
         */
        public function getError()
        {
        }
        /**
         * Returns whether the file was uploaded successfully.
         *
         * @return bool True if the file has been uploaded with HTTP and no error occurred
         */
        public function isValid()
        {
        }
        /**
         * Returns the original file extension.
         *
         * It is extracted from the original file name that was uploaded.
         * Then it should not be considered as a safe value.
         *
         * @return string The extension
         */
        public function getClientOriginalExtension()
        {
        }
        /**
         * Take an educated guess of the file's extension.
         *
         * @return mixed|null
         */
        public function guessExtension()
        {
        }
        /**
         * Take an educated guess of the file's mime type.
         *
         * @return string
         */
        public function getMimeType()
        {
        }
        /**
         * Get original HTTP file array
         *
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Returns the contents of the file.
         *
         * @return string the contents of the file
         *
         * @throws \RuntimeException
         */
        public function getContents()
        {
        }
    }
    trait FileHandler
    {
        /**
         * Prepares HTTP files for Request
         *
         * @param array $files
         *
         * @return array
         */
        public function prepareFiles($files = [])
        {
        }
        /**
         * @taken from \Symfony\Component\HttpFoundation\FileBag
         *
         * Converts uploaded files to UploadedFile instances.
         *
         * @param array|File $file A (multi-dimensional) array of uploaded file information
         *
         * @return File[]|File|null A (multi-dimensional) array of File instances
         */
        protected function convertFileInformation($file)
        {
        }
        /**
         * @taken from \Symfony\Component\HttpFoundation\FileBag
         *
         * Fixes a malformed PHP $_FILES array.
         *
         * PHP has a bug that the format of the $_FILES array differs, depending on
         * whether the uploaded file fields had normal field names or array-like
         * field names ("normal" vs. "parent[child]").
         *
         * This method fixes the array to look like the "normal" $_FILES array.
         *
         * It's safe to pass an already converted array, in which case this method
         * just returns the original array unmodified.
         *
         * @return array
         */
        protected function fixPhpFilesArray($data)
        {
        }
        /**
         * Retrieve a file from the request.
         *
         * @param  string|null  $key
         * @param  mixed  $default
         * @return \FluentForm\Framework\Request\File|array|null
         */
        public function file($key = null, $default = null)
        {
        }
    }
    class Request
    {
        use \FluentForm\Framework\Request\FileHandler, \FluentForm\Framework\Request\Cleaner;
        protected $app = null;
        protected $headers = array();
        protected $server = array();
        protected $cookie = array();
        protected $json = array();
        protected $get = array();
        protected $post = array();
        protected $files = array();
        protected $request = array();
        protected $wpRestRequest = false;
        public function __construct(\FluentForm\Framework\Foundation\Application $app, $get, $post, $files)
        {
        }
        /**
         * Variable exists
         * @param  string $key
         * @return bool
         */
        public function exists($key)
        {
        }
        /**
         * Variable exists and has truthy value
         * @param  string $key
         * @return bool
         */
        public function has($key)
        {
        }
        public function set($key, $value)
        {
        }
        public function all()
        {
        }
        public function get($key = null, $default = null)
        {
        }
        public function getSafe($key = null, $callback = null, $default = null)
        {
        }
        /**
         * Get the files from the request.
         *
         * @return array
         */
        public function files()
        {
        }
        public function query($key = null, $default = null)
        {
        }
        public function post($key = null, $default = null)
        {
        }
        public function only($keys)
        {
        }
        public function except($args)
        {
        }
        public function merge(array $data = [])
        {
        }
        /**
         * Get all inputs
         * @return array $this->request
         */
        protected function inputs()
        {
        }
        /**
         * Get user ip address
         * @return string
         */
        public function getIp()
        {
        }
        public function server($key = null, $default = null)
        {
        }
        public function header($key = null, $default = null)
        {
        }
        public function cookie($key = null, $default = null)
        {
        }
        /**
         * Taken and modified from Symfony
         */
        public function setHeaders()
        {
        }
        public function method()
        {
        }
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string
         */
        public function url()
        {
        }
        /**
         * Validate the request.
         *
         * @param  string $key
         * @return mixed
         */
        public function validate(array $rules, array $messages = [])
        {
        }
        /**
         * Get an input element from the request.
         *
         * @param  string $key
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Dynamyc method calls (specially for WP_rest_request)
         * @param  string $method
         * @param  array $params
         * @return mixed
         */
        public function __call($method, $params)
        {
        }
    }
}
namespace FluentForm\Framework\Response {
    class Response
    {
        protected $app = null;
        public function __construct($app)
        {
        }
        public function json($data = null, $code = 200)
        {
        }
        public function send($data = null, $code = 200)
        {
        }
        public function sendSuccess($data = null, $code = 200)
        {
        }
        public function sendError($data = null, $code = 423)
        {
        }
    }
}
namespace FluentForm\Framework\Support {
    class Helper
    {
        /**
         * Create a collection from the given value.
         *
         * @param  mixed  $value
         * @return \FluentForm\Framework\Support\Collection
         */
        public static function collect($value = null)
        {
        }
        /**
         * Fill in data where it's missing.
         *
         * @param  mixed  $target
         * @param  string|array  $key
         * @param  mixed  $value
         * @return mixed
         */
        function dataFill(&$target, $key, $value)
        {
        }
        /**
         * Get an item from an array or object using "dot" notation.
         *
         * @param  mixed  $target
         * @param  string|array|int|null  $key
         * @param  mixed  $default
         * @return mixed
         */
        public static function dataGet($target, $key, $default = null)
        {
        }
        /**
         * Set an item on an array or object using dot notation.
         *
         * @param  mixed  $target
         * @param  string|array  $key
         * @param  mixed  $value
         * @param  bool  $overwrite
         * @return mixed
         */
        public static function dataSet(&$target, $key, $value, $overwrite = true)
        {
        }
        /**
         * Get the first element of an array. Useful for method chaining.
         *
         * @param  array  $array
         * @return mixed
         */
        public static function head($array)
        {
        }
        /**
         * Get the last element from an array.
         *
         * @param  array  $array
         * @return mixed
         */
        public static function last($array)
        {
        }
        /**
         * Return the default value of the given value.
         *
         * @param  mixed  $value
         * @return mixed
         */
        public static function value($value, ...$args)
        {
        }
    }
    class Pluralizer
    {
        /**
         * Plural word form rules.
         *
         * @var array
         */
        public static $plural = array('/(quiz)$/i' => "\$1zes", '/^(ox)$/i' => "\$1en", '/([m|l])ouse$/i' => "\$1ice", '/(matr|vert|ind)ix$|ex$/i' => "\$1ices", '/(stoma|epo|monar|matriar|patriar|oligar|eunu)ch$/i' => "\$1chs", '/(x|ch|ss|sh)$/i' => "\$1es", '/([^aeiouy]|qu)y$/i' => "\$1ies", '/(hive)$/i' => "\$1s", '/(?:([^f])fe|([lr])f)$/i' => "\$1\$2ves", '/(shea|lea|loa|thie)f$/i' => "\$1ves", '/sis$/i' => "ses", '/([ti])um$/i' => "\$1a", '/(torped|embarg|tomat|potat|ech|her|vet)o$/i' => "\$1oes", '/(bu)s$/i' => "\$1ses", '/(alias)$/i' => "\$1es", '/(fung)us$/i' => "\$1i", '/(ax|test)is$/i' => "\$1es", '/(us)$/i' => "\$1es", '/s$/i' => "s", '/$/' => "s");
        /**
         * Singular word form rules.
         *
         * @var array
         */
        public static $singular = array('/(quiz)zes$/i' => "\$1", '/(matr)ices$/i' => "\$1ix", '/(vert|vort|ind)ices$/i' => "\$1ex", '/^(ox)en$/i' => "\$1", '/(alias)es$/i' => "\$1", '/(octop|vir|fung)i$/i' => "\$1us", '/(cris|ax|test)es$/i' => "\$1is", '/(shoe)s$/i' => "\$1", '/(o)es$/i' => "\$1", '/(bus)es$/i' => "\$1", '/([m|l])ice$/i' => "\$1ouse", '/(x|ch|ss|sh)es$/i' => "\$1", '/(m)ovies$/i' => "\$1ovie", '/(s)eries$/i' => "\$1eries", '/([^aeiouy]|qu)ies$/i' => "\$1y", '/([lr])ves$/i' => "\$1f", '/(tive)s$/i' => "\$1", '/(hive)s$/i' => "\$1", '/(li|wi|kni)ves$/i' => "\$1fe", '/(shea|loa|lea|thie)ves$/i' => "\$1f", '/(^analy)ses$/i' => "\$1sis", '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => "\$1\$2sis", '/([ti])a$/i' => "\$1um", '/(n)ews$/i' => "\$1ews", '/(h|bl)ouses$/i' => "\$1ouse", '/(corpse)s$/i' => "\$1", '/(gallows|headquarters)$/i' => "\$1", '/(us)es$/i' => "\$1", '/(us|ss)$/i' => "\$1", '/s$/i' => "");
        /**
         * Irregular word forms.
         *
         * @var array
         */
        public static $irregular = array('child' => 'children', 'corpus' => 'corpora', 'criterion' => 'criteria', 'foot' => 'feet', 'freshman' => 'freshmen', 'goose' => 'geese', 'genus' => 'genera', 'human' => 'humans', 'man' => 'men', 'move' => 'moves', 'nucleus' => 'nuclei', 'ovum' => 'ova', 'person' => 'people', 'phenomenon' => 'phenomena', 'radius' => 'radii', 'sex' => 'sexes', 'stimulus' => 'stimuli', 'syllabus' => 'syllabi', 'tax' => 'taxes', 'tech' => 'techs', 'tooth' => 'teeth', 'viscus' => 'viscera');
        /**
         * Uncountable word forms.
         *
         * @var array
         */
        public static $uncountable = array('audio', 'bison', 'chassis', 'compensation', 'coreopsis', 'data', 'deer', 'education', 'equipment', 'fish', 'gold', 'information', 'money', 'moose', 'offspring', 'plankton', 'police', 'rice', 'series', 'sheep', 'species', 'swine', 'traffic');
        /**
         * The cached copies of the plural inflections.
         *
         * @var array
         */
        protected static $pluralCache = array();
        /**
         * The cached copies of the singular inflections.
         *
         * @var array
         */
        protected static $singularCache = array();
        /**
         * Get the singular form of the given word.
         *
         * @param  string  $value
         * @return string
         */
        public static function singular($value)
        {
        }
        /**
         * Get the plural form of the given word.
         *
         * @param  string  $value
         * @param  int     $count
         * @return string
         */
        public static function plural($value, $count = 2)
        {
        }
        /**
         * Perform auto inflection on an English word.
         *
         * @param  string  $value
         * @param  array   $source
         * @param  array   $irregular
         * @return string
         */
        protected static function inflect($value, $source, $irregular)
        {
        }
        /**
         * Determine if the given value is uncountable.
         *
         * @param  string  $value
         * @return bool
         */
        protected static function uncountable($value)
        {
        }
        /**
         * Attempt to match the case on two strings.
         *
         * @param  string  $value
         * @param  string  $comparison
         * @return string
         */
        protected static function matchCase($value, $comparison)
        {
        }
    }
    class Sanitizer
    {
        public static function sanitizeEmail($arg)
        {
        }
        public static function sanitizeFileName($arg)
        {
        }
        public static function sanitizeHtmlClass($arg)
        {
        }
        public static function sanitizeKey($arg)
        {
        }
        public static function sanitizeMeta($arg)
        {
        }
        public static function sanitizeMimeType($arg)
        {
        }
        public static function sanitizeOption($arg)
        {
        }
        public static function sanitizeSqlOrderby($arg)
        {
        }
        public static function sanitizeTextField($arg)
        {
        }
        public static function sanitizeTitle($arg)
        {
        }
        public static function sanitizeTitleForQuery($arg)
        {
        }
        public static function sanitizeTitleWithDashes($arg)
        {
        }
        public static function sanitizeUser($arg)
        {
        }
        public static function wpFilterPostKses($arg)
        {
        }
        public static function wpFilterNohtmlKses($arg)
        {
        }
        public static function escAttr($arg)
        {
        }
        public static function escHtml($arg)
        {
        }
        public static function escJs($arg)
        {
        }
        public static function escTextarea($arg)
        {
        }
        public static function escUrl($arg)
        {
        }
        public static function escUrlRaw($arg)
        {
        }
        public static function escXml($arg)
        {
        }
        public static function kses($arg)
        {
        }
        public static function ksesPost($arg)
        {
        }
        public static function ksesData($arg)
        {
        }
        public static function escHtml__($arg)
        {
        }
        public static function escAttr__($arg)
        {
        }
        public static function escHtmlE($arg)
        {
        }
        public static function escAttrE($arg)
        {
        }
        public static function escHtmlX($arg)
        {
        }
        public static function escAttrX($arg)
        {
        }
        public static function sanitize(array $data = [], array $rules = [])
        {
        }
    }
    class Str
    {
        use \FluentForm\Framework\Support\MacroableTrait;
        /**
         * The cache of snake-cased words.
         *
         * @var array
         */
        protected static $snakeCache = [];
        /**
         * The cache of camel-cased words.
         *
         * @var array
         */
        protected static $camelCache = [];
        /**
         * The cache of studly-cased words.
         *
         * @var array
         */
        protected static $studlyCache = [];
        /**
         * Transliterate a UTF-8 value to ASCII.
         *
         * @param  string  $value
         * @return string
         */
        public static function ascii($value)
        {
        }
        /**
         * Convert a value to camel case.
         *
         * @param  string  $value
         * @return string
         */
        public static function camel($value)
        {
        }
        /**
         * Determine if a given string contains a given substring.
         *
         * @param  string  $haystack
         * @param  string|array  $needles
         * @return bool
         */
        public static function contains($haystack, $needles)
        {
        }
        /**
         * Determine if a given string ends with a given substring.
         *
         * @param  string  $haystack
         * @param  string|array  $needles
         * @return bool
         */
        public static function endsWith($haystack, $needles)
        {
        }
        /**
         * Cap a string with a single instance of a given value.
         *
         * @param  string  $value
         * @param  string  $cap
         * @return string
         */
        public static function finish($value, $cap)
        {
        }
        /**
         * Determine if a given string matches a given pattern.
         *
         * @param  string  $pattern
         * @param  string  $value
         * @return bool
         */
        public static function is($pattern, $value)
        {
        }
        /**
         * Return the length of the given string.
         *
         * @param  string  $value
         * @return int
         */
        public static function length($value)
        {
        }
        /**
         * Limit the number of characters in a string.
         *
         * @param  string  $value
         * @param  int     $limit
         * @param  string  $end
         * @return string
         */
        public static function limit($value, $limit = 100, $end = '...')
        {
        }
        /**
         * Convert the given string to lower-case.
         *
         * @param  string  $value
         * @return string
         */
        public static function lower($value)
        {
        }
        /**
         * Limit the number of words in a string.
         *
         * @param  string  $value
         * @param  int     $words
         * @param  string  $end
         * @return string
         */
        public static function words($value, $words = 100, $end = '...')
        {
        }
        /**
         * Parse a Class@method style callback into class and method.
         *
         * @param  string  $callback
         * @param  string  $default
         * @return array
         */
        public static function parseCallback($callback, $default)
        {
        }
        /**
         * Get the plural form of an English word.
         *
         * @param  string  $value
         * @param  int     $count
         * @return string
         */
        public static function plural($value, $count = 2)
        {
        }
        /**
         * Generate a more truly "random" alpha-numeric string.
         *
         * @param  int  $length
         * @return string
         */
        public static function random($length = 16)
        {
        }
        /**
         * Generate a more truly "random" bytes.
         *
         * @param  int  $length
         * @return string
         *
         * @deprecated since version 5.2. Use random_bytes instead.
         */
        public static function randomBytes($length = 16)
        {
        }
        /**
         * Generate a "random" alpha-numeric string.
         *
         * Should not be considered sufficient for cryptography, etc.
         *
         * @param  int  $length
         * @return string
         */
        public static function quickRandom($length = 16)
        {
        }
        /**
         * Compares two strings using a constant-time algorithm.
         *
         * Note: This method will leak length information.
         *
         * Note: Adapted from Symfony\Component\Security\Core\Util\StringUtils.
         *
         * @param  string  $knownString
         * @param  string  $userInput
         * @return bool
         *
         * @deprecated since version 5.2. Use hash_equals instead.
         */
        public static function equals($knownString, $userInput)
        {
        }
        /**
         * Replace the first occurrence of a given value in the string.
         *
         * @param  string  $search
         * @param  string  $replace
         * @param  string  $subject
         * @return string
         */
        public static function replaceFirst($search, $replace, $subject)
        {
        }
        /**
         * Replace the last occurrence of a given value in the string.
         *
         * @param  string  $search
         * @param  string  $replace
         * @param  string  $subject
         * @return string
         */
        public static function replaceLast($search, $replace, $subject)
        {
        }
        /**
         * Convert the given string to upper-case.
         *
         * @param  string  $value
         * @return string
         */
        public static function upper($value)
        {
        }
        /**
         * Convert the given string to title case.
         *
         * @param  string  $value
         * @return string
         */
        public static function title($value)
        {
        }
        /**
         * Get the singular form of an English word.
         *
         * @param  string  $value
         * @return string
         */
        public static function singular($value)
        {
        }
        /**
         * Generate a URL friendly "slug" from a given string.
         *
         * @param  string  $title
         * @param  string  $separator
         * @return string
         */
        public static function slug($title, $separator = '-')
        {
        }
        /**
         * Convert a string to snake case.
         *
         * @param  string  $value
         * @param  string  $delimiter
         * @return string
         */
        public static function snake($value, $delimiter = '_')
        {
        }
        /**
         * Determine if a given string starts with a given substring.
         *
         * @param  string  $haystack
         * @param  string|array  $needles
         * @return bool
         */
        public static function startsWith($haystack, $needles)
        {
        }
        /**
         * Convert a value to studly caps case.
         *
         * @param  string  $value
         * @return string
         */
        public static function studly($value)
        {
        }
        /**
         * Returns the portion of string specified by the start and length parameters.
         *
         * @param  string  $string
         * @param  int  $start
         * @param  int|null  $length
         * @return string
         */
        public static function substr($string, $start, $length = null)
        {
        }
        /**
         * Make a string's first character uppercase.
         *
         * @param  string  $string
         * @return string
         */
        public static function ucfirst($string)
        {
        }
        /**
         * An alternative for mb_strpos function to overcome some issues in some servers.
         *
         * @param  $haystack string
         * @param  $needle string
         * @param  $offset int optional
         * @param  $encoding string optional
         * @return string mixed
         */
        public static function mb_strpos($haystack, $needle, $offset = 0, $encoding = '')
        {
        }
        /**
         * Returns the replacements for the ascii method.
         *
         * Note: Adapted from Stringy\Stringy.
         *
         * @see https://github.com/danielstjules/Stringy/blob/2.3.1/LICENSE.txt
         *
         * @return array
         */
        protected static function charsArray()
        {
        }
    }
}
namespace FluentForm\Framework\Validator {
    trait MessageBag
    {
        /**
         * The default message bag.
         *
         * @var array
         */
        protected $bag = ['alpha' => 'The :attribute must contain only alphabetic characters.', 'alphanum' => 'The :attribute must contain only alphanumeric characters.', 'alphadash' => 'The :attribute must contain only alphanumeric and _- characters.', 'email' => 'The :attribute must be a valid email address.', 'max' => ['numeric' => 'The :attribute may not be greater than :max.', 'file' => 'The :attribute may not be greater than :max kilobytes.', 'string' => 'The :attribute may not be greater than :max characters.', 'array' => 'The :attribute may not have more than :max items.'], 'mimes' => 'The :attribute must be a file of type: :values.', 'mimetypes' => 'The :attribute must be a file of type: :values.', 'min' => ['numeric' => 'The :attribute must be at least :min.', 'file' => 'The :attribute must be at least :min kilobytes.', 'string' => 'The :attribute must be at least :min characters.', 'array' => 'The :attribute must have at least :min items.'], 'numeric' => 'The :attribute must be a number.', 'required' => 'The :attribute field is required.', 'required_if' => 'The :attribute field is required when :other is :value.', 'same' => 'The :attribute and :other must match.', 'size' => ['numeric' => 'The :attribute must be :size.', 'file' => 'The :attribute must be :size kilobytes.', 'string' => 'The :attribute must be :size characters.', 'array' => 'The :attribute must contain :size items.'], 'url' => 'The :attribute format is invalid.', 'unique' => 'The :attribute attribute is already taken and must be unique.', 'digits' => 'The :attribute must be :digits characters.'];
        /**
         * Generate a validation error message.
         *
         * @param $attribute
         * @param $rule
         * @param $parameters
         *
         * @return mixed
         */
        protected function generate($attribute, $rule, $parameters)
        {
        }
        /**
         * Get the replacement text of the error message.
         *
         * @param $customMessagesKey
         * @param $bagAccessor
         *
         * @return string
         */
        protected function getReplacementText($customMessagesKey, $bagAccessor)
        {
        }
        /**
         * Make bag accessor key.
         *
         * @param $attribute
         * @param $rule
         *
         * @return string
         */
        protected function makeBagKey($attribute, $rule)
        {
        }
        /**
         * Replace all place-holders for the alpha rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceAlpha($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the alphanum rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceAlphanum($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the alphadash rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceAlphadash($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the required rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceRequired($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the required if rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceRequiredIf($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the email rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceEmail($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the size rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceSize($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the min rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceMin($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the max rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceMax($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the min rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceSame($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the url rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceUrl($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the numeric rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceNumeric($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the mimes rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceMimes($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the mimetypes rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceMimetypes($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the unique rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceUnique($attribute, $parameters)
        {
        }
        /**
         * Replace all place-holders for the digits rule.
         *
         * @param $attribute
         * @param $parameters
         *
         * @return string
         */
        protected function replaceDigits($attribute, $parameters)
        {
        }
    }
    trait ValidatesAttributes
    {
        /**
         * Require a certain number of parameters to be present.
         *
         * @param int $count
         * @param array $parameters
         * @param string $rule
         *
         * @return void
         *
         * @throws \InvalidArgumentException
         */
        protected function requireParameterCount($count, $parameters, $rule)
        {
        }
        /**
         * Get the size of an attribute.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return mixed
         */
        protected function getSize($attribute, $value)
        {
        }
        /**
         * Deduce the value type of an attribute.
         *
         * @param $value
         *
         * @return string
         */
        protected function deduceType($value)
        {
        }
        /**
         * Convert the given values to boolean if they are string "true" / "false".
         *
         * @param array $values
         *
         * @return array
         */
        protected function convertValuesToBoolean($values)
        {
        }
        /**
         * Validate that a required attribute exists.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateRequired($attribute, $value)
        {
        }
        /**
         * Validate that an attribute exists when another attribute has a given value.
         *
         * @param string $attribute
         * @param mixed $value
         * @param mixed $parameters
         *
         * @return bool
         */
        protected function validateRequiredIf($attribute, $value, $parameters)
        {
        }
        /**
         * Validate that an attribute is a valid e-mail address.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateEmail($attribute, $value)
        {
        }
        /**
         * Validate the size of an attribute.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateSize($attribute, $value, $parameters)
        {
        }
        /**
         * Validate the size of an attribute is greater than a minimum value.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateMin($attribute, $value, $parameters)
        {
        }
        /**
         * Validate the size of an attribute is less than a maximum value.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateMax($attribute, $value, $parameters)
        {
        }
        /**
         * Validate that two attributes match.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateSame($attribute, $value, $parameters)
        {
        }
        /**
         * Validate that an attribute is a valid URL.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateUrl($attribute, $value)
        {
        }
        /**
         * Validate that an attribute is numeric.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateNumeric($attribute, $value)
        {
        }
        /**
         * Validate that an attribute is alphabetic.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateAlpha($attribute, $value)
        {
        }
        /**
         * Validate that an attribute is alphanum.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateAlphanum($attribute, $value)
        {
        }
        /**
         * Validate that an attribute is alphanum and -_.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validateAlphadash($attribute, $value)
        {
        }
        /**
         * Validate the guessed extension of a file upload is in a set of file extensions.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateMimes($attribute, $value, $parameters)
        {
        }
        /**
         * Validate the MIME type of a file upload attribute is in a set of MIME types.
         *
         * @param  string $attribute
         * @param  mixed  $value
         * @param  array  $parameters
         * @return bool
         */
        protected function validateMimetypes($attribute, $value, $parameters)
        {
        }
        /**
         * Check that the given value is a valid file instance.
         *
         * @param mixed $value
         *
         * @return bool
         */
        public function isValidFileInstance($value)
        {
        }
        /**
         * Check if PHP uploads are explicitly allowed.
         *
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function shouldBlockPhpUpload($value, $parameters)
        {
        }
        /**
         * Validate that an attribute exists even if not filled.
         *
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function validatePresent($attribute, $value)
        {
        }
        /**
         * Validate that an attribute is unique in a given table
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         *
         * @return bool
         */
        protected function validateUnique($attribute, $value, $parameters)
        {
        }
        /**
         * Validate that an attribute has a given number of digits.
         *
         * @param string $attribute
         * @param mixed $value
         * @param array $parameters
         * 
         * @return bool
         */
        public function validateDigits($attribute, $value, $parameters)
        {
        }
    }
    class ValidationData
    {
        public static function initializeAndGatherData($attribute, $masterData)
        {
        }
        /**
         * Gather a copy of the attribute data filled with any missing attributes.
         *
         * @param string $attribute
         * @param array $masterData
         *
         * @return array
         */
        protected static function initializeAttributeOnData($attribute, $masterData)
        {
        }
        /**
         * Get all of the exact attribute values for a given wildcard attribute.
         *
         * @param array $masterData
         * @param array $data
         * @param string $attribute
         *
         * @return array
         */
        protected static function extractValuesForWildcards($masterData, $data, $attribute)
        {
        }
        /**
         * Extract data based on the given dot-notated path.
         *
         * Used to extract a sub-section of the data for faster iteration.
         *
         * @param string $attribute
         * @param array $masterData
         *
         * @return array
         */
        public static function extractDataFromPath($attribute, $masterData)
        {
        }
        /**
         * Get the explicit part of the attribute name.
         *
         * E.g. 'foo.bar.*.baz' -> 'foo.bar'
         *
         * Allows us to not spin through all of the flattened data for some operations.
         *
         * @param string $attribute
         *
         * @return string
         */
        public static function getLeadingExplicitAttributePath($attribute)
        {
        }
    }
    class ValidationException extends \Exception
    {
        private $errors;
        public function __construct($message = '', $code = 0, \Exception $previous = null, $errors = [])
        {
        }
        public function errors()
        {
        }
    }
    class ValidationRuleParser
    {
        /**
         * The data being validated.
         *
         * @var array
         */
        public $data;
        /**
         * Create a new validation rule parser.
         *
         * @param array $data
         *
         * @return void
         */
        public function __construct(array $data)
        {
        }
        /**
         * Parse the human-friendly rules into a full rules array for the validator.
         *
         * @param $rules
         *
         * @return array
         */
        public function explode($rules)
        {
        }
        /**
         * Explode the rules into an array of explicit rules.
         *
         * @param array $rules
         *
         * @return array
         */
        protected function explodeRules($rules)
        {
        }
        /**
         * Explode the explicit rule into an array if necessary.
         *
         * @param mixed $rule
         *
         * @return array
         */
        protected function explodeExplicitRule($rule)
        {
        }
        /**
         * Define a set of rules that apply to each element in an array attribute.
         *
         * @param array $results
         * @param string $attribute
         * @param string|array $rules
         *
         * @return array
         */
        protected function explodeWildcardRules($results, $attribute, $rules)
        {
        }
        /**
         * Merge additional rules into a given attribute(s).
         *
         * @param array $results
         * @param string|array $attribute
         * @param string|array $rules
         *
         * @return array
         */
        public function mergeRules($results, $attribute, $rules = [])
        {
        }
        /**
         * Merge additional rules into a given attribute.
         *
         * @param array $results
         * @param string $attribute
         * @param string|array $rules
         *
         * @return array
         */
        protected function mergeRulesForAttribute($results, $attribute, $rules)
        {
        }
        /**
         * Extract the rule name and parameters from a rule.
         *
         * @param $rule
         *
         * @return array
         */
        public static function parse($rule)
        {
        }
    }
    class Validator
    {
        use \FluentForm\Framework\Validator\ValidatesAttributes, \FluentForm\Framework\Validator\MessageBag;
        /**
         * The data under validation.
         *
         * @var array
         */
        protected $data;
        /**
         * The rules to be applied to the data.
         *
         * @var array
         */
        protected $rules = [];
        /**
         * All of the error messages.
         *
         * @var array
         */
        protected $messages;
        /**
         * All of the user provided messages.
         *
         * @var array
         */
        protected $customMessages = [];
        /**
         * The validation rules that imply the field is required.
         *
         * @var array
         */
        protected $implicitRules = ['Required', 'Filled', 'RequiredWith', 'RequiredWithAll', 'RequiredWithout', 'RequiredWithoutAll', 'RequiredIf', 'RequiredUnless', 'Accepted', 'Present'];
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         *
         * @return void
         */
        public function __construct(array $data = [], array $rules = [], array $messages = [])
        {
        }
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         *
         * @return \FluentForm\Framework\Validator\Validator
         */
        public function make(array $data = [], array $rules = [], array $messages = [])
        {
        }
        protected function init(array $data = [], array $rules = [], array $messages = [])
        {
        }
        /**
         * Set the validation rules.
         *
         * @param array $rules
         *
         * @return $this
         */
        protected function setRules(array $rules = [])
        {
        }
        /**
         * Validate the data against the provided rules.
         *
         * @return $this
         */
        public function validate()
        {
        }
        /**
         * Validate each of the attribute of the data.
         *
         * @param $attribute
         * @param $rule
         *
         * @return void
         */
        protected function validateAttribute($attribute, $rule)
        {
        }
        /**
         * Access the data by attribute name.
         *
         * @param $attribute
         *
         * @return mixed
         */
        protected function getValue($attribute)
        {
        }
        /**
         * Add error message upon validation failed of an attribute.
         *
         * @param $attribute
         * @param $rule
         * @param $parameters
         *
         * @return void
         */
        protected function addFailure($attribute, $rule, $parameters)
        {
        }
        /**
         * Get all of the validation error messages.
         *
         * @return array
         */
        public function errors()
        {
        }
        /**
         * Determine if the data passes the validation rules.
         *
         * @return bool
         */
        public function passes()
        {
        }
        /**
         * Determine if the data fails the validation rules.
         *
         * @return bool
         */
        public function fails()
        {
        }
        /**
         * Add conditions to a given field based on a Closure.
         *
         * @param string|array $attribute
         * @param string|array $rules
         * @param callable $callback
         *
         * @return $this
         */
        public function sometimes($attribute, $rules, callable $callback)
        {
        }
        /**
         * Determine if the attribute has a required rule.
         *
         * @param $attribute
         *
         * @return bool
         */
        public function hasRequired($attribute)
        {
        }
        /**
         * Determine if the attribute should be validated.
         *
         * @param $method
         * @param $attribute
         * @param $value
         *
         * @return bool
         */
        public function shouldValidate($method, $rule, $attribute, $value)
        {
        }
        /**
         * Determines if this object has this method.
         *
         * @param $method
         *
         * @return bool
         */
        public function hasMethod($method)
        {
        }
        /**
         * Determine if a given rule implies the attribute is required.
         *
         * @param string $rule
         *
         * @return bool
         */
        protected function isImplicit($rule)
        {
        }
        /**
         * Determine if the field is present, or the rule implies required.
         *
         * @param string $rule
         * @param string $attribute
         * @param mixed $value
         *
         * @return bool
         */
        protected function presentOrRuleIsImplicit($rule, $attribute, $value)
        {
        }
    }
}
namespace FluentForm\Framework\View {
    class View
    {
        protected $app;
        protected $path;
        protected $data = [];
        protected static $sharedData = [];
        public function __construct($app)
        {
        }
        /**
         * Generate and echo/print a view file
         * @param  string $path
         * @param  array  $data
         * @return void
         */
        public function render($path, $data = [])
        {
        }
        /**
         * Generate a view file
         * @param  string $path
         * @param  array  $data
         * @return string [generated html]
         * @throws Exception
         */
        public function make($path, $data = [])
        {
        }
        /**
         * Resolve the view file path
         * @param  string $path
         * @return string
         */
        protected function resolveFilePath($path)
        {
        }
        /**
         * Evaluate the view file
         * @param  string $path
         * @param  string $data
         * @return $this
         */
        protected function renderContent()
        {
        }
        /**
         * Gether shared & view data
         * @return array
         */
        protected function gatherData()
        {
        }
        /**
         * Share global data for any view
         * @param  string $key
         * @param  mixed $value
         * @return void
         */
        public function share($key, $value)
        {
        }
        /**
         * Provides a fluent interface to set data
         * @param  mixed $key
         * @param  mixed $data
         * @return $this
         */
        public function with($name, $data = [])
        {
        }
        /**
         * Setter for the view
         * @param string $key
         * @param mixed $value
         */
        public function __set($key, $value)
        {
        }
        /**
         * Dump the view result
         * @return string
         */
        public function __toString()
        {
        }
    }
}
namespace {
    function fluentform_after_submission_api_response_success($form, $entryId, $data, $feed, $res, $msg = '')
    {
    }
    function fluentform_after_submission_api_response_failed($form, $entryId, $data, $feed, $res, $msg = '')
    {
    }
    /**
     * Get fluentform instance or other core modules
     *
     * @param string $key
     *
     * @return mixed
     */
    function wpFluentForm($key = \null)
    {
    }
    /**
     * Generate URL for static assets
     *
     * @param string $path
     *
     * @return string
     */
    function fluentFormMix($path = '')
    {
    }
    /**
     * @return \FluentForm\Framework\Database\Query\Builder|\FluentForm\Framework\Database\Query\WPDBConnection
     */
    function wpFluent()
    {
    }
    function wpFluentFormAddComponent(\FluentForm\App\Modules\Component\BaseComponent $component)
    {
    }
    /**
     * Sanitize form inputs recursively.
     *
     * @param $input
     *
     * @return mixed $input
     */
    function fluentFormSanitizer($input, $attribute = \null, $fields = [])
    {
    }
    function fluentFormEditorShortCodes()
    {
    }
    function fluentFormGetAllEditorShortCodes($form)
    {
    }
    /**
     * Recursively implode a multi-dimentional array
     *
     * @param string $glue
     * @param array  $array
     *
     * @return string
     */
    function fluentImplodeRecursive($glue, array $array)
    {
    }
    function fluentform_get_active_theme_slug()
    {
    }
    function getFluentFormCountryList()
    {
    }
    function fluentFormWasSubmitted($action = 'fluentform_submit')
    {
    }
    function isWpAsyncRequest($action)
    {
    }
    function fluentFormIsHandlingSubmission()
    {
    }
    function fluentform_mb_strpos($haystack, $needle)
    {
    }
    function fluentFormHandleScheduledTasks()
    {
    }
    function fluentFormHandleScheduledEmailReport()
    {
    }
    function fluentform_upgrade_url()
    {
    }
    function fluentform_integrations_url()
    {
    }
    function fluentFormApi($module = 'forms')
    {
    }
    function fluentFormGetRandomPhoto()
    {
    }
    function fluentFormRender($atts)
    {
    }
    /**
     * Print internal content (not user input) without escaping.
     */
    function fluentFormPrintUnescapedInternalString($string)
    {
    }
    function fluentform_options_sanitize($options)
    {
    }
    function fluentform_sanitize_html($html)
    {
    }
    function fluentform_kses_js($content)
    {
    }
    /**
     * Sanitize inputs recursively.
     *
     * @param array $input
     * @param array $sanitizeMap
     *
     * @return array $input
     */
    function fluentform_backend_sanitizer($inputs, $sanitizeMap = [])
    {
    }
    /**
     * Sanitizes CSS.
     *
     * @return mixed $css
     */
    function fluentformSanitizeCSS($css)
    {
    }
    function fluentformCanUnfilteredHTML()
    {
    }
    function fluentformLoadFile($path)
    {
    }
    function fluentValidator($data = [], $rules = [], $messages = [])
    {
    }
    function fluentformGetPages()
    {
    }
    function fluentform_eql()
    {
    }
    function fluentform_gql()
    {
    }
}