<?php
/**
 * Generated stub declarations for Fluent Forms.
 * @see https://fluentforms.com/
 * @see https://github.com/mralaminahamed/phpstan-fluent-forms-stubs
 */

namespace FluentForm\App\Databases {
    class DatabaseMigrator
    {
        public static function run()
        {
        }
    }
}
namespace FluentForm\App\Databases\Migrations {
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
    class FormSubmissionMeta
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
    class FormSubmissions
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
    class FormTransactions
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
}
namespace FluentForm\App\Helpers {
    class Helper
    {
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
    }
    class Str
    {
        /**
         * Determine if a given string starts with a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool
         */
        public static function startsWith($haystack, $needles)
        {
        }
        /**
         * Determine if a given string ends with a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool
         */
        public static function endsWith($haystack, $needles)
        {
        }
        /**
         * Determine if a given string contains a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool
         */
        public static function contains($haystack, $needles)
        {
        }
    }
}
namespace FluentForm\App\Modules\Acl {
    class Acl
    {
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
         * @param null $formId
         * @param string $message
         * @param bool $json
         *
         * @throws \Exception
         */
        public static function verify($permission, $formId = null, $message = 'You do not have permission to perform this action.', $json = true)
        {
        }
        public static function hasPermission($permission, $formId = false)
        {
        }
        public static function hasAnyFormPermission($form_id = false)
        {
        }
    }
}
namespace FluentForm\App\Modules {
    class Activator
    {
        /**
         * This method will be called on plugin activation
         * @return void
         */
        public function handleActivation()
        {
        }
        private function setDefaultGlobalSettings()
        {
        }
        private function setCurrentVersion()
        {
        }
    }
}
namespace FluentForm\App\Modules\Component {
    class Component
    {
        /**
         * FluentForm\Framework\Foundation\Application
         * @var $app
         */
        protected $app = null;
        /**
         * Biuld the instance of this class
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Get all the available components
         * @return  void
         * @throws \Exception
         * @throws \FluentForm\Framework\Exception\UnResolveableEntityException
         */
        public function index()
        {
        }
        /**
         * Get disabled components
         * @return array
         */
        private function getDisabledComponents()
        {
        }
        /**
         * Get available shortcodes for editor
         * @return void
         * @throws \Exception
         */
        public function getEditorShortcodes()
        {
        }
        /**
         * Register the form renderer shortcode
         * @return  void
         */
        public function addFluentFormShortCode()
        {
        }
        /**
         * Register renderer actions for compiling each element
         * @return  void
         */
        public function addRendererActions()
        {
        }
        /**
         * Register dynamic value shortcode parser (filter default value)
         * @return  void
         */
        public function addFluentFormDefaultValueParser()
        {
        }
        /**
         * Register filter to check whether the form is renderable
         * @return  mixed
         */
        public function addIsRenderableFilter()
        {
        }
        /**
         * Check if limit is set on form submits and it's valid yet
         * @param  array $restrictions
         * @return bool
         */
        private function limitNumberOfEntries($restrictions, $form, &$isRenderable)
        {
        }
        /**
         * Check if form has scheduled date and open for submission
         * @param  array $restrictions
         * @return bool
         */
        private function scheduleForm($restrictions, $form, &$isRenderable)
        {
        }
        /**
         * * Check if form requires loged in user and user is logged in
         * @param  array $restrictions
         * @return bool
         */
        private function requireLogin($restrictions, $form, &$isRenderable)
        {
        }
        /**
         * Register fluentform_submission_inserted action
         * @return  void
         */
        public function addFluentformSubmissionInsertedFilter()
        {
        }
        /**
         * Add inline scripts [Add localized script using same var]
         * @param array $vars
         * @param int $form_id
         * @return  void
         */
        private function addInlineVars($vars, $form_id)
        {
        }
    }
}
namespace FluentForm\App\Modules {
    class Deactivator
    {
        /**
         * This method will be called on plugin deactivation
         * @return void
         */
        public function handleDeactivation()
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
        public function __construct()
        {
        }
        public function getResponses()
        {
        }
        public function getResponse($entryId, $operator = null, $currentSerialNo = null)
        {
        }
        public function groupCount($form_id)
        {
        }
    }
    class Entries extends \FluentForm\App\Modules\Entries\EntryQuery
    {
        protected $responseMetaModel;
        /**
         * Entries constructor.
         * @throws \Exception
         */
        public function __construct()
        {
        }
        public function renderEntries($form_id)
        {
        }
        public function getEntriesGroup()
        {
        }
        public function getEntries()
        {
        }
        public function getEntry()
        {
        }
        /**
         * @param $formId
         * @todo: Implement Caching mechanism so we don't have to parse these things for every request
         * @return array
         */
        private function getFormInputsAndLabels($form)
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
        public function favoriteChange()
        {
        }
        public function handleBulkAction()
        {
        }
    }
    class Export
    {
        /**
         * @var \FluentForm\Framework\Request\Request
         */
        protected $request;
        /**
         * Export constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $application
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Exports form entries as CSV.
         *
         * @todo:: refactor.
         */
        public function index()
        {
        }
    }
}
namespace FluentForm\App\Modules\Form {
    class Analytics
    {
        /**
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
         * 
         * @return json respoonse
         */
        public function record()
        {
        }
        /**
         * Save form view analytics data
         * @return void
         */
        private function saveViewAnalytics()
        {
        }
        /**
         * Store (create/update) total view of a form
         * @param  int $formId
         * @return void
         */
        private function increaseTotalViews($formId)
        {
        }
    }
    class Form
    {
        /**
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
         * Set this value when we need predefined form fields.
         *
         * @var array $formFields
         */
        protected $formFields;
        /**
         * Form constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $application
         *
         * @throws \Exception
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get all forms from database
         *
         * @return  void
         * @throws \Exception
         */
        public function index()
        {
        }
        private function getFormViewCount($formId)
        {
        }
        private function getSubmissionCount($formID)
        {
        }
        private function getConversionRate($form)
        {
        }
        /**
         * Create a form from backend/editor
         * @return void
         */
        public function store()
        {
        }
        private function getFormsDefaultSettings($formId = false)
        {
        }
        /**
         * Find/Read a from from the database
         * @return void
         */
        public function find()
        {
        }
        /**
         * Save/update a form from backend/editor
         * @return void
         */
        public function update()
        {
        }
        /**
         * Delete a from from database
         * @return void
         */
        public function delete()
        {
        }
        /**
         * Validate a form only by form title
         * @return void
         */
        private function validate()
        {
        }
        private function getAdminPermalink($route, $formId)
        {
        }
        public function getAllForms()
        {
        }
    }
    class FormDataParser
    {
        protected static $data = null;
        public static function parseFormEntries($entries, $form, $fields = null)
        {
        }
        public static function parseFormEntry($entry, $form, $fields = null)
        {
        }
        public static function parseFormSubmission($submission, $form, $fields)
        {
        }
        public static function parseData($response, $fields, $formId)
        {
        }
        public static function formatValue($value)
        {
        }
    }
    /**
     * @method array getShortCodeInputs(\stdClass $form, array $with = ['admin_label'])
     * @method array getValidations(\stdClass $form, array $inputs, array $fields = [])
     * @method array getElement(\stdClass $form, string $name, array $with = [])
     * @method boolean hasElement(\stdClass $form, string $name)
     * @method boolean hasRequiredFields(\stdClass $form, array $fields)
     * @method array|null getField(\stdClass $form, string|array $element, string|array $attribute, array $with = [])
     */
    class FormFieldsParser
    {
        protected static $forms = [];
        public static function getFields($form, $asArray = false)
        {
        }
        public static function getInputs($form, $with = [])
        {
        }
        public static function getEntryInputs($form, $with = ['admin_label'])
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
         * @param  string $method
         * @param  array  $parameters
         * @return mixed
         */
        public static function __callStatic($method, $parameters)
        {
        }
    }
    class FormHandler
    {
        /**
         * @var \FluentForm\Framework\Foundation\Application
         */
        protected $app;
        /**
         * @var \FluentForm\Framework\Request\Request
         */
        protected $request;
        /**
         * @var array $formData
         */
        protected $formData;
        /**
         * The fluent form object.
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
        /**
         * Prepare response and do actions/filters
         * and send the response to the client.
         *
         * @param int $insertId
         */
        private function sendResponse($insertId)
        {
        }
        /**
         * Validate form data.
         *
         * @param $fields
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
        /**
         * Validate reCaptcha.
         */
        private function validateReCaptcha()
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
        private function handleDenyEmptySubmission($settings = [], &$fields)
        {
        }
        /**
         * Prepare the data to be inserted to the database.
         *
         * @param  boolean $formData
         * @return array
         */
        public function prepareInsertData($formData = false)
        {
        }
        /**
         * Delegate the validation rules & messages to the
         * ones that the validation library recognizes.
         *
         * @param  $rules
         * @param  $messages
         * @return array
         */
        protected function delegateValidations($rules, $messages, $search = [], $replace = [])
        {
        }
    }
    class Inputs
    {
        /**
         * @var \FluentForm\Framework\Request\Request
         */
        private $request;
        /**
         * Build the class instance
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
    }
    class Predefined extends \FluentForm\App\Modules\Form\Form
    {
        /**
         * all JSON data will be stored here
         * @return  array
         */
        private function getPredefinedForms()
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
         * @param $name
         */
        public function create()
        {
        }
    }
}
namespace FluentForm\App\Modules\Form\Settings {
    class ExtraSettings
    {
        /**
         * @var \FluentForm\Framework\Request\Request $request
         */
        protected $request;
        /**
         * @var \WpFluent\QueryBuilder\QueryBuilderHandler
         */
        protected $form_model;
        /**
         * Construct the object
         * @throws \Exception
         * @return  void
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get extra settig navigations
         * @return void
         */
        public function getExtraSettingNavs()
        {
        }
        /**
         * Get extra settigs component
         * @return void
         */
        public function getExtraSettingsComponent()
        {
        }
        /**
         * Get trello settigs
         * @return void
         */
        public function getTrelloSettingsComponent($component, $formId)
        {
        }
    }
    class FormSettings
    {
        /**
         * @var \FluentForm\Framework\Request\Request
         */
        private $request;
        /**
         * @var int form ID.
         */
        private $formId;
        /**
         * The settings (fluentform_form_meta) query builder.
         *
         * @var \WpFluent\QueryBuilder\QueryBuilderHandler
         */
        private $settingsQuery;
        /**
         * Construct the object
         * @throws \Exception
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        /**
         * Get settings for a particular form by id
         * @return void
         */
        public function index()
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
         * @return void
         */
        public function remove()
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
         * @param \FluentValidator\Validator $validator
         *
         * @return \FluentValidator\Validator
         */
        public static function conditionalValidations(\FluentValidator\Validator $validator)
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
         * @param \FluentValidator\Validator $validator
         *
         * @return \FluentValidator\Validator
         */
        public static function conditionalValidations(\FluentValidator\Validator $validator)
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
         * @param \FluentValidator\Validator $validator
         *
         * @return \FluentValidator\Validator
         */
        public static function conditionalValidations(\FluentValidator\Validator $validator)
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
    class Transfer
    {
        /**
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
    }
}
namespace FluentForm\App\Modules\Integration {
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
        public function deleteAll()
        {
        }
        private function getFormattedValue($setting)
        {
        }
    }
}
namespace FluentForm\App\Modules\Integration\ActiveCampaign {
    class Integrator extends \FluentForm\App\Modules\Integration\BaseIntegration
    {
        /**
         * Option `key` for Active Campaign List settings.
         *
         * @var string $key
         */
        private $key = 'activecampaign_details';
        /**
         * Application instance
         *
         * @var \FluentForm\Framework\Foundation\Application $app
         */
        private $app;
        /**
         * Global settings for the integration.
         *
         * @var array $settings
         */
        protected $settings;
        /**
         * Active Campaign integration constructor.
         *
         * @param \FluentForm\Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Get all of the integrations.
         *
         * @return void
         */
        public function index()
        {
        }
        /**
         * Determine if the integration is active.
         *
         * @return boolean
         */
        private function isActive()
        {
        }
        /**
         * Get all available lists.
         *
         * @return void
         */
        public function getLists()
        {
        }
        /**
         * Format the lists excluding some keys so that we only have
         * the plain array of the lists containing each list info.
         *
         * @param array $lists
         * @return array
         */
        private function formatLists($lists)
        {
        }
    }
}
namespace FluentForm\App\Modules\Integration {
    trait MailChimpSubscriber
    {
        /**
         * Enabled MailChimp feed settings.
         *
         * @var array $feeds
         */
        protected $feeds = [];
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
         * @param $formData
         */
        public function subscribe($formData)
        {
        }
    }
    class MailChimpIntegration extends \FluentForm\App\Modules\Integration\BaseIntegration
    {
        /**
         * MailChimp Subscriber that handles & process all the subscribing logics.
         */
        use \FluentForm\App\Modules\Integration\MailChimpSubscriber;
        private $key = 'mailchimp_feeds';
        private $app;
        public function __construct(\FluentForm\Framework\Foundation\Application $application)
        {
        }
        public function getMailChimpSettings()
        {
        }
        public function getMailChimpLists()
        {
        }
        public function getMailChimpList()
        {
        }
        public function saveNotification()
        {
        }
        public function deleteNotification()
        {
        }
        private function isConfigured()
        {
        }
        private function validate($notification)
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
         * @param  WP_Query $query
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
        public static function validate($token, $secret = null)
        {
        }
    }
}
namespace FluentForm\App\Modules\Registerer {
    class Menu
    {
        /**
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
        public function renderSettings($form_id)
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
        private function getFormPreviewUrl($form_id)
        {
        }
        public function addPreviewButton($formId)
        {
        }
    }
}
namespace FluentForm\App\Modules\Renderer\GlobalSettings {
    class Settings
    {
        /**
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
    class Settings
    {
        /**
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
        public function storeSaveGlobalLayoutSettings()
        {
        }
        public function storeMailChimpSettings()
        {
        }
        public function storeActiveCampaignSettings()
        {
        }
    }
}
namespace FluentForm\App\Modules\Track {
    class TrackModule
    {
        private $apiUrl = 'https://wpfluentform.com';
        private $initialConsentKey = '_fluentform_notice_pref';
        private $newsletterDelayTimeStamp = 172800;
        // 7 days
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
namespace FluentForm\Framework\Foundation {
    abstract class Provider
    {
        /**
         * $app \Framework\Foundation\Application
         * @var null
         */
        protected $app = null;
        /**
         * Build the instance
         * @param \Framework\Foundation\Application $app
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Booted method for any provider
         * @return void
         */
        public function booted()
        {
        }
        /**
         * Abstract booting method for provider
         * @return void
         */
        public abstract function booting();
    }
}
namespace FluentForm\App\Providers {
    class ActiveCampaignApiProvider extends \FluentForm\Framework\Foundation\Provider
    {
        public function booting()
        {
        }
    }
    class AdminNoticeProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    /**
     * This provider will be loaded only on backend (admin)
     */
    class BackendProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    class BackgroundProcessingProvider extends \FluentForm\Framework\Foundation\Provider
    {
        public function booting()
        {
        }
    }
    class CommonProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    class CsvProvider extends \FluentForm\Framework\Foundation\Provider
    {
        public function booting()
        {
        }
    }
    class FluentValidatorProvider extends \FluentForm\Framework\Foundation\Provider
    {
        public function booting()
        {
        }
    }
    class FormBuilderProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    /**
     * This provider will be loaded only on frontend (public)
     */
    class FrontendProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    class MenuProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function booting()
        {
        }
    }
    class WpFluentProvider extends \FluentForm\Framework\Foundation\Provider
    {
        public function booting()
        {
        }
    }
}
namespace FluentForm\App\Services {
    class AdminNotices
    {
        private $notice = false;
        private $noticeKey = false;
        private $noticeDisabledTime = 172800;
        // 7 days
        private $noticePrefKey = '_fluentform_notice_pref';
        private $app;
        private $pref = false;
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
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
}
namespace {
    /**
     * Abstract WP_Async_Request class.
     *
     * @abstract
     */
    abstract class WP_Async_Request
    {
        /**
         * Prefix
         *
         * (default value: 'wp')
         *
         * @var string
         * @access protected
         */
        protected $prefix = 'wp';
        /**
         * Action
         *
         * (default value: 'async_request')
         *
         * @var string
         * @access protected
         */
        protected $action = 'async_request';
        /**
         * Identifier
         *
         * @var mixed
         * @access protected
         */
        protected $identifier;
        /**
         * Data
         *
         * (default value: array())
         *
         * @var array
         * @access protected
         */
        protected $data = array();
        /**
         * Initiate new async request
         */
        public function __construct()
        {
        }
        /**
         * Set data used during the request
         *
         * @param array $data Data.
         *
         * @return $this
         */
        public function data($data)
        {
        }
        /**
         * Dispatch the async request
         *
         * @return array|WP_Error
         */
        public function dispatch()
        {
        }
        /**
         * Get query args
         *
         * @return array
         */
        protected function get_query_args()
        {
        }
        /**
         * Get query URL
         *
         * @return string
         */
        protected function get_query_url()
        {
        }
        /**
         * Get post args
         *
         * @return array
         */
        protected function get_post_args()
        {
        }
        /**
         * Maybe handle
         *
         * Check for correct nonce and pass to handler.
         */
        public function maybe_handle()
        {
        }
        /**
         * Handle
         *
         * Override this method to perform any actions required
         * during the async request.
         */
        protected abstract function handle();
    }
    /**
     * Abstract WP_Background_Process class.
     *
     * @abstract
     * @extends WP_Async_Request
     */
    abstract class WP_Background_Process extends \WP_Async_Request
    {
        /**
         * Action
         *
         * (default value: 'background_process')
         *
         * @var string
         * @access protected
         */
        protected $action = 'background_process';
        /**
         * Start time of current process.
         *
         * (default value: 0)
         *
         * @var int
         * @access protected
         */
        protected $start_time = 0;
        /**
         * Cron_hook_identifier
         *
         * @var mixed
         * @access protected
         */
        protected $cron_hook_identifier;
        /**
         * Cron_interval_identifier
         *
         * @var mixed
         * @access protected
         */
        protected $cron_interval_identifier;
        /**
         * Initiate new background process
         */
        public function __construct()
        {
        }
        /**
         * Dispatch
         *
         * @access public
         * @return void
         */
        public function dispatch()
        {
        }
        /**
         * Push to queue
         *
         * @param mixed $data Data.
         *
         * @return $this
         */
        public function push_to_queue($data)
        {
        }
        /**
         * Save queue
         *
         * @return $this
         */
        public function save()
        {
        }
        /**
         * Update queue
         *
         * @param string $key Key.
         * @param array  $data Data.
         *
         * @return $this
         */
        public function update($key, $data)
        {
        }
        /**
         * Delete queue
         *
         * @param string $key Key.
         *
         * @return $this
         */
        public function delete($key)
        {
        }
        /**
         * Generate key
         *
         * Generates a unique key based on microtime. Queue items are
         * given a unique key so that they can be merged upon save.
         *
         * @param int $length Length.
         *
         * @return string
         */
        protected function generate_key($length = 64)
        {
        }
        /**
         * Maybe process queue
         *
         * Checks whether data exists within the queue and that
         * the process is not already running.
         */
        public function maybe_handle()
        {
        }
        /**
         * Is queue empty
         *
         * @return bool
         */
        protected function is_queue_empty()
        {
        }
        /**
         * Is process running
         *
         * Check whether the current process is already running
         * in a background process.
         */
        protected function is_process_running()
        {
        }
        /**
         * Lock process
         *
         * Lock the process so that multiple instances can't run simultaneously.
         * Override if applicable, but the duration should be greater than that
         * defined in the time_exceeded() method.
         */
        protected function lock_process()
        {
        }
        /**
         * Unlock process
         *
         * Unlock the process so that other instances can spawn.
         *
         * @return $this
         */
        protected function unlock_process()
        {
        }
        /**
         * Get batch
         *
         * @return stdClass Return the first batch from the queue
         */
        protected function get_batch()
        {
        }
        /**
         * Handle
         *
         * Pass each queue item to the task handler, while remaining
         * within server memory and time limit constraints.
         */
        protected function handle()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90%
         * of the maximum WordPress memory.
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * Get memory limit
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Time exceeded.
         *
         * Ensures the batch never exceeds a sensible time limit.
         * A timeout limit of 30s is common on shared hosting.
         *
         * @return bool
         */
        protected function time_exceeded()
        {
        }
        /**
         * Complete.
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
        /**
         * Schedule cron healthcheck
         *
         * @access public
         * @param mixed $schedules Schedules.
         * @return mixed
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Handle cron healthcheck
         *
         * Restart the background process if not already running
         * and data exists in the queue.
         */
        public function handle_cron_healthcheck()
        {
        }
        /**
         * Schedule event
         */
        protected function schedule_event()
        {
        }
        /**
         * Clear scheduled event
         */
        protected function clear_scheduled_event()
        {
        }
        /**
         * Cancel Process
         *
         * Stop processing queue items, clear cronjob and delete batch.
         *
         */
        public function cancel_process()
        {
        }
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param mixed $item Queue item to iterate over.
         *
         * @return mixed
         */
        protected abstract function task($item);
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
namespace FluentForm\App\Services\FormBuilder {
    class Components implements \JsonSerializable
    {
        /**
         * $items [Components list]
         * @var array
         */
        protected $items = array();
        /**
         * Build the object instance
         * @param array $items
         */
        public function __construct(array $items)
        {
        }
        /**
         * Add a component into list [$items]
         * @param string $name
         * @param array  $component
         * @param string $group ['general'|'advanced']
         * @return $this
         */
        public function add($name, array $component, $group)
        {
        }
        /**
         * Remove a component from the list [$items]
         * @param  string $name
         * @param  string $group ['general'|'advanced']
         * @return $this
         */
        public function remove($name, $group)
        {
        }
        /**
         * Modify an existing component
         * @param  string $name
         * @param  Closure $callback [to modify the component within]
         * @param  string $group
         * @return $this
         */
        public function update($name, \Closure $callback, $group)
        {
        }
        /**
         * Sort the components in list [$items]
         * @param  string $sortBy [key to sort by]
         * @return $this
         */
        public function sort($sortBy = 'index')
        {
        }
        /**
         * Return array [$items]
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Return array [$items]
         * @return array
         */
        public function jsonSerialize()
        {
        }
        /**
         * Getter to hook proxy call
         * @return mixed
         */
        public function __get($key)
        {
        }
    }
}
namespace FluentForm\App\Services\FormBuilder\Components {
    class BaseComponent
    {
        /**
         * $app Application Instance
         * @var Framework\Foundation\Application
         */
        protected $app = null;
        /**
         * Construct the base component object
         */
        public function __construct()
        {
        }
        /**
         * Build unique ID concating form id and name attribute
         * @param  array $data $form
         * @return string for id value
         */
        protected function makeElementId($data, $form)
        {
        }
        /**
         * Build attributes for any html element
         * @param  array $attributes
         * @return string [Compiled key='value' attributes]
         */
        protected function buildAttributes($attributes, $form = null)
        {
        }
        /**
         * Extract value attribute from attribute list
         * @param  array &$element
         * @return string
         */
        protected function extractValueFromAttributes(&$element)
        {
        }
        /**
         * Determine if the given element has conditions bound
         * @param  array $element [Html element being compiled]
         * @return boolean
         */
        protected function hasConditions($element)
        {
        }
        /**
         * Generate a unique id for an element
         * @param  string $str [preix]
         * @return string [Unique id]
         */
        protected function getUniqueId($str)
        {
        }
        /**
         * Get a default class for each form element wrapper
         * @return string
         */
        protected function getDefaultContainerClass()
        {
        }
        /**
         * Get required class for form element wrapper
         * @param  array $rules [Validation rules]
         * @return mixed
         */
        protected function getRequiredClass($rules)
        {
        }
        /**
         * Generate a label for any element
         * @param  array $data
         * @return string [label Html element]
         */
        protected function buildElementLabel($data)
        {
        }
        /**
         * Generate html/markup for any element
         * @param  string $elMarkup [Predifined partial markup]
         * @param  array $data
         * @param  StdClass $form [Form object]
         * @return string [Compiled markup]
         */
        protected function buildElementMarkup($elMarkup, $data, $form)
        {
        }
        /**
         * Generate a help message for any element beside label
         * @param  array $data
         * @return string [Html]
         */
        protected function getLabelHelpMessage($data)
        {
        }
        /**
         * Generate a help message for any element beside form element
         * @param  array $data
         * @return string [Html]
         */
        protected function getInputHelpMessage($data)
        {
        }
    }
    class Address extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Wrapper class for address element
         * @var string
         */
        protected $wrapperClass = 'fluent-address';
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class Checkable extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class Container extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Max columns for container
         * @var integer
         */
        protected $maxColumns = 12;
        /**
         * Container column class
         * @var string
         */
        protected $columnClass = 'ff-t-cell';
        /**
         * Container wrapper class
         * @var string
         */
        protected $wrapperClass = 'ff-t-container';
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class CustomHtml extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class DateTime extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
        /**
         * Enqueue style and script for datetime element
         * @return void
         */
        protected function enqueueStyleAndScripts()
        {
        }
    }
    class Name extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class Recaptcha extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class SectionBreak extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class Select extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
        /**
         * Build options for select
         * @param  array $options
         * @return string/html [compiled options]
         */
        protected function buildOptions($options, $defaultValues)
        {
        }
    }
    class SelectCountry extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
        /**
         * Load countt list from file
         * @param  array $data
         * @return array
         */
        protected function loadCountries($data)
        {
        }
        /**
         * Build options for country list/select
         * @param  array $options
         * @return string/html [compiled options]
         */
        protected function buildOptions($options, $defaultValues)
        {
        }
    }
    class SubmitButton extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class TermsAndConditions extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class Text extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
    class TextArea extends \FluentForm\App\Services\FormBuilder\Components\BaseComponent
    {
        /**
         * Compile and echo the html element
         * @param  array $data [element data]
         * @param  stdClass $form [Form Object]
         * @return viod
         */
        public function compile($data, $form)
        {
        }
    }
}
namespace FluentForm\App\Services\FormBuilder {
    class EditorShortcodeParser
    {
        /**
         * Available dynamic short codes
         * @var null
         */
        private static $dynamicShortcodes = null;
        /**
         * mappings of methods to parse the shortcode
         * @var array
         */
        private static $handlers = array('ip' => 'parseIp', 'date.m/d/Y' => 'parseDate', 'date.d/m/Y' => 'parseDate', 'embed_post.ID' => 'parsePostProperties', 'embed_post.post_title' => 'parsePostProperties', 'embed_post.permalink' => 'parsePostProperties', 'user.ID' => 'parseUserProperties', 'user.display_name' => 'parseUserProperties', 'user.first_name' => 'parseUserProperties', 'user.last_name' => 'parseUserProperties', 'user.user_email' => 'parseUserProperties', 'user.user_login' => 'parseUserProperties', 'browser.name' => 'parseBrowserProperties', 'browser.platform' => 'parseBrowserProperties');
        /**
         * Filter dynamic shortcodes in input value
         * @param  string $value
         * @return string
         */
        public static function filter($value, $form)
        {
        }
        /**
         * Parse the curly braced shortcode into array
         * @param  string $value
         * @return mixed
         */
        private static function parseValue($value)
        {
        }
        /**
         * Declare all parsers and must be [private] static methods
         */
        /**
         * Parse loggedin user properties
         * @param  string $value
         * @return string
         */
        private static function parseUserProperties($value, $form = null)
        {
        }
        /**
         * Parse loggedin user properties
         * @param  string $value
         * @return string
         */
        private static function parsePostProperties($value, $form = null)
        {
        }
        /**
         * Parse browser/user-agent properties
         * @param  string $value
         * @return string
         */
        private static function parseBrowserProperties($value, $form = null)
        {
        }
        /**
         * Parse ip shortcode
         * @param  string $value
         * @return string
         */
        private static function parseIp($value, $form = null)
        {
        }
        /**
         * Parse date shortcode
         * @param  string $value
         * @return string
         */
        private static function parseDate($value, $form = null)
        {
        }
    }
    class FormBuilder
    {
        /**
         * The Applivcation instance
         * @var Framework\Foundation\Application
         */
        protected $app = null;
        /**
         * Conditional logic for elements
         * @var array
         */
        public $conditions = array();
        /**
         * Validation rules for elements
         * @var array
         */
        public $validationRules = array();
        /**
         * Construct the form builder instance
         * @param Framework\Foundation\Application $app
         */
        public function __construct($app)
        {
        }
        /**
         * Render the form
         * @param  StdClass $form [Form entry from database]
         * @return mixed
         */
        public function build($form)
        {
        }
        /**
         * Set unique name/data-name for an element
         * @param array &$item
         * @return  void
         */
        protected function setUniqueIdentifier(&$item)
        {
        }
        /**
         * Recursively extract validation rules from a given element
         * @param array $item
         * @return void
         */
        protected function extractValidationRules($item)
        {
        }
        /**
         * Extract validation rules from a given element
         * @param array $item
         * @return void
         */
        protected function extractValidationRule($item)
        {
        }
        /**
         * Extract conditipnal logic from a given element
         * @param array $item
         * @return void
         */
        protected function extractConditionalLogic($item)
        {
        }
    }
    class GroupSetterProxy
    {
        /**
         * Element group
         * @var string
         */
        protected $group = null;
        /**
         * FluentForm\App\Services\FormBuilder\Components
         * @var object
         */
        protected $collection = null;
        public function __construct($collection, $group)
        {
        }
        /**
         * Dynamic call method
         * @param  string $method
         * @param  array $params
         * @return FluentForm\App\Services\FormBuilder\Components
         */
        public function __call($method, $params)
        {
        }
    }
    class MessageShortCodeParser
    {
        protected static $data = null;
        /**
         * Parse Norifications
         * @param array $notifications
         * @param int $insertId
         * @param array $data
         * @param object $form
         * @return  array $notifications
         */
        public static function parseMessageShortCode($notifications, $insertId, $data, $form, $cache = true)
        {
        }
        public static function parsePropertiesFor($parsableFields, $notifications)
        {
        }
        public static function setFormProperties(&$formattedProperties, $formProperties, $data, $form, $insertId)
        {
        }
        public static function setUserProperties(&$formattedProperties, $userProperties, $data, $form, $insertId)
        {
        }
        public static function setPostProperties(&$formattedProperties, $postProperties, $data, $form, $insetId)
        {
        }
        public static function setOtherProperties(&$formattedProperties, $others, $data, $form, $insertId)
        {
        }
    }
}
namespace FluentForm\App\Services\FormBuilder\Notifications {
    class EmailNotification
    {
        /**
         * FluentForm\Framework\Foundation\Application
         * @var $app
         */
        protected $app = null;
        /**
         * Biuld the instance of this class
         * @param FluentForm\Framework\Foundation\Application $app
         * @return  $this
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app)
        {
        }
        /**
         * Send the email notification
         * @param  array $notification [Notification settings from form meta]
         * @param  array $submittedData [User submitted form data]
         * @param  StdClass $form [The form object from database]
         * @return bool
         */
        public function notify($notification, $submittedData, $form)
        {
        }
        /**
         * @param $formId
         * @todo: Implement Caching mechanism so we don't have to parse these things for every request
         * @return array
         */
        private function getFormInputsAndLabels($form)
        {
        }
    }
}
namespace FluentForm\App\Services\Integrations {
    /**
     * Super-simple, minimum abstraction MailChimp API v3 wrapper
     * MailChimp API v3: http://developer.mailchimp.com
     * This wrapper: https://github.com/drewm/mailchimp-api
     *
     * @author Drew McLellan <drew.mclellan@gmail.com>
     * @version 2.4
     */
    class MailChimp
    {
        private $api_key;
        private $api_endpoint = 'https://<dc>.api.mailchimp.com/3.0';
        const TIMEOUT = 10;
        /*  SSL Verification
                Read before disabling:
                http://snippets.webaware.com.au/howto/stop-turning-off-curlopt_ssl_verifypeer-and-fix-your-php-config/
            */
        public $verify_ssl = true;
        private $request_successful = false;
        private $last_error = '';
        private $last_response = array();
        private $last_request = array();
        /**
         * Create a new instance
         * @param string $api_key Your MailChimp API key
         * @param string $api_endpoint Optional custom API endpoint
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
         * @param   string $email The subscriber's email address
         * @return  string          Hashed version of the input
         */
        public function subscriberHash($email)
        {
        }
        /**
         * Was the last request successful?
         * @return bool  True for success, false for failure
         */
        public function success()
        {
        }
        /**
         * Get the last error returned by either the network transport, or by the API.
         * If something didn't work, this should contain the string describing the problem.
         * @return  string|false  describing the error
         */
        public function getLastError()
        {
        }
        /**
         * Get an array containing the HTTP headers and the body of the API response.
         * @return array  Assoc array with keys 'headers' and 'body'
         */
        public function getLastResponse()
        {
        }
        /**
         * Get an array containing the HTTP headers and the body of the API request.
         * @return array  Assoc array
         */
        public function getLastRequest()
        {
        }
        /**
         * Make an HTTP DELETE request - for deleting data
         * @param   string $method URL of the API request method
         * @param   array $args Assoc array of arguments (if any)
         * @param   int $timeout Timeout limit for request in seconds
         * @return  array|false   Assoc array of API response, decoded from JSON
         */
        public function delete($method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP GET request - for retrieving data
         * @param   string $method URL of the API request method
         * @param   array $args Assoc array of arguments (usually your data)
         * @param   int $timeout Timeout limit for request in seconds
         * @return  array|false   Assoc array of API response, decoded from JSON
         */
        public function get($method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP PATCH request - for performing partial updates
         * @param   string $method URL of the API request method
         * @param   array $args Assoc array of arguments (usually your data)
         * @param   int $timeout Timeout limit for request in seconds
         * @return  array|false   Assoc array of API response, decoded from JSON
         */
        public function patch($method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP POST request - for creating and updating items
         * @param   string $method URL of the API request method
         * @param   array $args Assoc array of arguments (usually your data)
         * @param   int $timeout Timeout limit for request in seconds
         * @return  array|false   Assoc array of API response, decoded from JSON
         */
        public function post($method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
        /**
         * Make an HTTP PUT request - for creating new items
         * @param   string $method URL of the API request method
         * @param   array $args Assoc array of arguments (usually your data)
         * @param   int $timeout Timeout limit for request in seconds
         * @return  array|false   Assoc array of API response, decoded from JSON
         */
        public function put($method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
        /**
         * Performs the underlying HTTP request. Not very exciting.
         * @param  string $http_verb The HTTP verb to use: get, post, put, patch, delete
         * @param  string $method The API method to be called
         * @param  array $args Assoc array of parameters to be passed
         * @param int $timeout
         * @return array|false Assoc array of decoded result
         * @throws \Exception
         */
        private function makeRequest($http_verb, $method, $args = array(), $timeout = self::TIMEOUT)
        {
        }
        /**
         * @param string $http_verb
         * @param string $method
         * @param string $url
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
         * @return array
         */
        private function getLinkHeaderAsArray($linkHeaderAsString)
        {
        }
        /**
         * Encode the data and attach it to the request
         * @param   resource $ch cURL session handle, used by reference
         * @param   array $data Assoc array of data to attach
         */
        private function attachRequestPayload(&$ch, $data)
        {
        }
        /**
         * Decode the response and format any error messages for debugging
         * @param array $response The response from the curl request
         * @return array|false    The JSON decoded into an array
         */
        private function formatResponse($response)
        {
        }
        /**
         * Do post-request formatting and setting state from the response
         * @param array $response The response from the curl request
         * @param string $responseContent The body of the response from the curl request
         * * @return array    The modified response
         */
        private function setResponseState($response, $responseContent, $ch)
        {
        }
        /**
         * Check if the response was successful or a failure. If it failed, store the error.
         * @param array $response The response from the curl request
         * @param array|false $formattedResponse The response body payload from the curl request
         * @param int $timeout The timeout supplied to the curl request.
         * @return bool     If the request was successful
         */
        private function determineSuccess($response, $formattedResponse, $timeout)
        {
        }
        /**
         * Find the HTTP status code from the headers or API response body
         * @param array $response The response from the curl request
         * @param array|false $formattedResponse The response body payload from the curl request
         * @return int  HTTP status code
         */
        private function findHTTPStatus($response, $formattedResponse)
        {
        }
    }
}
namespace {
    /**
     * Class AC_Connector
     */
    class AC_Connector
    {
        /**
         * Default curl timeout
         */
        const DEFAULT_TIMEOUT = 30;
        /**
         * @var string
         */
        public $url;
        /**
         * @var
         */
        public $api_key;
        /**
         * @var string
         */
        public $output = "json";
        /**
         * @var int
         */
        private $timeout = self::DEFAULT_TIMEOUT;
        /**
         * AC_Connector constructor.
         *
         * @param        $url
         * @param        $api_key
         * @param string $api_user
         * @param string $api_pass
         */
        function __construct($url, $api_key, $api_user = "", $api_pass = "")
        {
        }
        /**
         * Test the api credentials
         *
         * @return bool|mixed
         * @throws \RequestException
         */
        public function credentials_test()
        {
        }
        /**
         * Debug helper function
         *
         * @param        $var
         * @param int    $continue
         * @param string $element
         * @param string $extra
         */
        public function dbg($var, $continue = 0, $element = "pre", $extra = "")
        {
        }
        /**
         * Set curl timeout
         *
         * @param $seconds
         */
        public function set_curl_timeout($seconds)
        {
        }
        /**
         * Get curl timeout
         *
         * @return int
         */
        public function get_curl_timeout()
        {
        }
        /**
         * Make the curl request
         *
         * @param        $url
         * @param array  $params_data
         * @param string $verb
         * @param string $custom_method
         *
         * @return mixed
         * @throws \RequestException
         */
        public function curl($url, $params_data = array(), $verb = "", $custom_method = "")
        {
        }
        /**
         * Throw the request exception
         *
         * @param $message
         *
         * @throws \RequestException
         */
        protected function throwRequestException($message)
        {
        }
    }
    /**
     * Class ActiveCampaign
     */
    class ActiveCampaign extends \AC_Connector
    {
        /**
         * @var
         */
        public $url_base;
        /**
         * @var
         */
        public $url;
        /**
         * @var
         */
        public $api_key;
        /**
         * @var
         */
        public $track_email;
        /**
         * @var
         */
        public $track_actid;
        /**
         * @var
         */
        public $track_key;
        /**
         * @var int
         */
        public $version = 1;
        /**
         * @var bool
         */
        public $debug = \false;
        /**
         * @var string
         */
        public $curl_response_error = "";
        /**
         * ActiveCampaign constructor.
         *
         * @param        $url
         * @param        $api_key
         * @param string $api_user
         * @param string $api_pass
         */
        function __construct($url, $api_key, $api_user = "", $api_pass = "")
        {
        }
        /**
         * Set the version on the url
         *
         * @param $version
         */
        function version($version)
        {
        }
        /**
         * Make api calls
         *
         * @param       $path
         * @param array $post_data
         *
         * @return mixed
         */
        function api($path, $post_data = array())
        {
        }
    }
    class AC_Account extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function add($params, $post_data)
        {
        }
        function cancel($params)
        {
        }
        function edit($params, $post_data)
        {
        }
        function list_($params)
        {
        }
        function name_check($params)
        {
        }
        function plans($params)
        {
        }
        function status($params)
        {
        }
        function status_set($params)
        {
        }
        function view()
        {
        }
    }
    class AC_Auth extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function singlesignon($params)
        {
        }
    }
    class AC_Automation extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function list_($params)
        {
        }
        function contact_add($params, $post_data)
        {
        }
        function contact_remove($params, $post_data)
        {
        }
        function contact_list($params)
        {
        }
        function contact_view($params)
        {
        }
    }
    class AC_Campaign extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function create($params, $post_data)
        {
        }
        function delete_list($params)
        {
        }
        function delete($params)
        {
        }
        function list_($params)
        {
        }
        function paginator($params)
        {
        }
        function report_bounce_list($params)
        {
        }
        function report_bounce_totals($params)
        {
        }
        function report_forward_list($params)
        {
        }
        function report_forward_totals($params)
        {
        }
        function report_link_list($params)
        {
        }
        function report_link_totals($params)
        {
        }
        function report_open_list($params)
        {
        }
        function report_open_totals($params)
        {
        }
        function report_totals($params)
        {
        }
        function report_unopen_list($params)
        {
        }
        function report_unsubscription_list($params)
        {
        }
        function report_unsubscription_totals($params)
        {
        }
        function send($params)
        {
        }
        function status($params)
        {
        }
    }
    class AC_Contact extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function add($params, $post_data)
        {
        }
        function automation_list($params)
        {
        }
        function delete_list($params)
        {
        }
        function delete($params)
        {
        }
        function edit($params, $post_data)
        {
        }
        function list_($params)
        {
        }
        function note_add($params, $post_data)
        {
        }
        function note_edit($params, $post_data)
        {
        }
        function note_delete($params)
        {
        }
        function paginator($params)
        {
        }
        function sync($params, $post_data)
        {
        }
        function tag_add($params, $post_data)
        {
        }
        function tag_remove($params, $post_data)
        {
        }
        function view($params)
        {
        }
    }
    class AC_Deal extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function add($params, $post_data)
        {
        }
        function edit($params, $post_data)
        {
        }
        function delete($params, $post_data)
        {
        }
        function get($params)
        {
        }
        function list_($params)
        {
        }
        function note_add($params, $post_data)
        {
        }
        function note_edit($params, $post_data)
        {
        }
        function pipeline_add($params, $post_data)
        {
        }
        function pipeline_edit($params, $post_data)
        {
        }
        function pipeline_delete($params, $post_data)
        {
        }
        function pipeline_list($params)
        {
        }
        function stage_add($params, $post_data)
        {
        }
        function stage_edit($params, $post_data)
        {
        }
        function stage_delete($params, $post_data)
        {
        }
        function stage_list($params)
        {
        }
        function task_add($params, $post_data)
        {
        }
        function task_edit($params, $post_data)
        {
        }
        function tasktype_add($params, $post_data)
        {
        }
        function tasktype_edit($params, $post_data)
        {
        }
        function tasktype_delete($params, $post_data)
        {
        }
    }
    class AC_Design extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function edit($params, $post_data)
        {
        }
        function view($params, $post_data)
        {
        }
    }
    class AC_Form extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function getforms($params)
        {
        }
        function html($params)
        {
        }
        function embed($params)
        {
        }
        function process($params)
        {
        }
    }
    class AC_Group extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function add($params, $post_data)
        {
        }
        function delete_list($params)
        {
        }
        function delete($params)
        {
        }
        function edit($params, $post_data)
        {
        }
        function list_($params)
        {
        }
        function view($params)
        {
        }
    }
    class AC_List_ extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function add($params, $post_data)
        {
        }
        function delete_list($params)
        {
        }
        function delete($params)
        {
        }
        function edit($params, $post_data)
        {
        }
        function field_add($params, $post_data)
        {
        }
        function field_delete($params)
        {
        }
        function field_edit($params, $post_data)
        {
        }
        function field_view($params)
        {
        }
        function list_($params, $post_data)
        {
        }
        function paginator($params)
        {
        }
        function view($params)
        {
        }
    }
    class AC_Message extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function add($params, $post_data)
        {
        }
        function delete_list($params)
        {
        }
        function delete($params)
        {
        }
        function edit($params, $post_data)
        {
        }
        function list_($params)
        {
        }
        function template_add($params, $post_data)
        {
        }
        function template_delete_list($params)
        {
        }
        function template_delete($params)
        {
        }
        function template_edit($params, $post_data)
        {
        }
        function template_export($params)
        {
        }
        function template_import($params, $post_data)
        {
        }
        function template_list($params)
        {
        }
        function template_view($params)
        {
        }
        function view($params)
        {
        }
    }
    class AC_Organization extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function list_($params, $post_data)
        {
        }
    }
    class AC_Segment extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function list_($params)
        {
        }
    }
    class AC_Settings extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function edit($params, $post_data)
        {
        }
    }
    class AC_Subscriber extends \AC_Contact
    {
    }
    class AC_Tag extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function list_($params)
        {
        }
    }
    class AC_Tracking extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        /*
         * Update the status (enabled or disabled) for site tracking.
         */
        function site_status($params, $post_data)
        {
        }
        /*
         * Update the status (enabled or disabled) for event tracking.
         */
        function event_status($params, $post_data)
        {
        }
        /*
         * Returns existing whitelisted domains.
         */
        function site_list($params)
        {
        }
        /*
         * Returns existing tracked events.
         */
        function event_list($params)
        {
        }
        /*
         * Adds a domain to the site tracking whitelist.
         */
        function whitelist($params, $post_data)
        {
        }
        /*
         * Removes a domain from the site tracking whitelist.
         */
        function whitelist_remove($params, $post_data)
        {
        }
        /*
         * Removes an event.
         */
        function event_remove($params, $post_data)
        {
        }
        /*
         * Adds a new event.
         */
        function log($params, $post_data)
        {
        }
    }
    class AC_User extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function add($params, $post_data)
        {
        }
        function delete_list($params)
        {
        }
        function delete($params)
        {
        }
        function edit($params, $post_data)
        {
        }
        function list_($params)
        {
        }
        function me()
        {
        }
        function view($params)
        {
        }
    }
    class AC_Webhook extends \ActiveCampaign
    {
        public $version;
        public $url_base;
        public $url;
        public $api_key;
        function __construct($version, $url_base, $url, $api_key)
        {
        }
        function add($params, $post_data)
        {
        }
        function delete($params)
        {
        }
        function delete_list($params)
        {
        }
        function edit($params, $post_data)
        {
        }
        function list_($params)
        {
        }
        function view($params)
        {
        }
        function events($params)
        {
        }
        function process($params)
        {
        }
    }
    class RequestException extends \Exception
    {
        private $failedRequestMessage;
        /**
         * @param string message	Response error message from the server.
         *
         * Set the failure message for this exception.
         */
        public function setFailedMessage($message)
        {
        }
        /**
         * @return string	Response error message from the server.
         *
         * Get the failure message for this exception.
         */
        public function getFailedMessage()
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
         * The supported form input types defined for Fluent Form.
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
         * @param  array                                $types
         * @return \FluentForm\App\Services\Parser\Form $this
         */
        public function setInputTypes($types = [])
        {
        }
        /**
         * Get form fields.
         *
         * @param  boolean $asArray
         * @return array
         */
        public function getFields($asArray = false)
        {
        }
        /**
         * Get flatten form inputs. Flatten implies that all
         * of the form fields will be in a simple array.
         *
         * @param  array $with
         * @return array
         */
        public function getInputs($with = [])
        {
        }
        /**
         * Get the inputs just as they setup in the form editor.
         * e.g. `names` as `names` not with the child fields.
         *
         * @param  array $with
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
         * @param  array $fields
         * @return array
         */
        public function getAdminLabels($fields = [])
        {
        }
        /**
         * Get admin labels of the form fields.
         *
         * @param  array $inputs
         * @param  array $fields
         * @return array
         */
        public function getValidations($inputs, $fields = [])
        {
        }
        /**
         * Get an element by it's name.
         *
         * @param  string|array $name
         * @param  array        $with
         * @return array
         */
        public function getElement($name, $with = [])
        {
        }
        /**
         * Determine whether the form has an element.
         *
         * @param  string $name
         * @return bool
         */
        public function hasElement($name)
        {
        }
        /**
         * Determine whether the form has any required fields.
         *
         * @param  array $fields
         * @return bool
         */
        public function hasRequiredFields($fields = [])
        {
        }
        /**
         * Get an specific field for an element type.
         *
         * @param $element
         * @param $attribute
         * @param  array      $with
         * @return array|null
         */
        public function getField($element, $attribute, $with = [])
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
         * Determines if the filed is applicable for extracting validations.
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
namespace FluentForm\App\Services {
    class Slack
    {
        /**
         * The slack integration settings of the form.
         *
         * @var array $settings
         */
        protected $settings = [];
        /**
         * Determine whether the slack notification should be sent or not.
         *
         * @param $formId
         *
         * @return boolean
         */
        public function shouldApply($formId)
        {
        }
        /**
         * Handle slack notifier.
         *
         * @param $submissionId
         * @param $formData
         * @param $form
         */
        public function handle($submissionId, $formData, $form)
        {
        }
        /**
         * Invoke slack notifier.
         *
         * @param $submissionId
         * @param $formData
         * @param $form
         */
        public static function notify($submissionId, $formData, $form)
        {
        }
    }
}
namespace League\Csv\Config {
    /**
     *  A trait to configure and check CSV file and content
     *
     * @package League.csv
     * @since  6.0.0
     *
     */
    trait Controls
    {
        /**
         * the field delimiter (one character only)
         *
         * @var string
         */
        protected $delimiter = ',';
        /**
         * the field enclosure character (one character only)
         *
         * @var string
         */
        protected $enclosure = '"';
        /**
         * the field escape character (one character only)
         *
         * @var string
         */
        protected $escape = '\\';
        /**
         * the \SplFileObject flags holder
         *
         * @var int
         */
        protected $flags;
        /**
         * newline character
         *
         * @var string
         */
        protected $newline = "\n";
        /**
         * Sets the field delimiter
         *
         * @param string $delimiter
         *
         * @throws InvalidArgumentException If $delimiter is not a single character
         *
         * @return $this
         */
        public function setDelimiter($delimiter)
        {
        }
        /**
         * Tell whether the submitted string is a valid CSV Control character
         *
         * @param string $str The submitted string
         *
         * @return bool
         */
        protected function isValidCsvControls($str)
        {
        }
        /**
         * Returns the current field delimiter
         *
         * @return string
         */
        public function getDelimiter()
        {
        }
        /**
         * Detects the CSV file delimiters
         *
         * Returns a associative array where each key represents
         * the number of occurences and each value a delimiter with the
         * given occurence
         *
         * This method returns incorrect informations when two delimiters
         * have the same occurrence count
         *
         * DEPRECATION WARNING! This method will be removed in the next major point release
         *
         * @deprecated deprecated since version 7.2
         *
         * @param int      $nb_rows
         * @param string[] $delimiters additional delimiters
         *
         * @return string[]
         */
        public function detectDelimiterList($nb_rows = 1, array $delimiters = [])
        {
        }
        /**
         * Detect Delimiters occurences in the CSV
         *
         * Returns a associative array where each key represents
         * a valid delimiter and each value the number of occurences
         *
         * @param string[] $delimiters the delimiters to consider
         * @param int      $nb_rows    Detection is made using $nb_rows of the CSV
         *
         * @throws InvalidArgumentException If $nb_rows value is invalid
         *
         * @return array
         */
        public function fetchDelimitersOccurrence(array $delimiters, $nb_rows = 1)
        {
        }
        /**
         * Returns the CSV Iterator
         *
         * @return SplFileObject
         */
        public abstract function getIterator();
        /**
         * Sets the field enclosure
         *
         * @param string $enclosure
         *
         * @throws InvalidArgumentException If $enclosure is not a single character
         *
         * @return $this
         */
        public function setEnclosure($enclosure)
        {
        }
        /**
         * Returns the current field enclosure
         *
         * @return string
         */
        public function getEnclosure()
        {
        }
        /**
         * Sets the field escape character
         *
         * @param string $escape
         *
         * @throws InvalidArgumentException If $escape is not a single character
         *
         * @return $this
         */
        public function setEscape($escape)
        {
        }
        /**
         * Returns the current field escape character
         *
         * @return string
         */
        public function getEscape()
        {
        }
        /**
         * Sets the Flags associated to the CSV SplFileObject
         *
         * @param int $flags
         *
         * @throws InvalidArgumentException If the argument is not a valid integer
         *
         * @return $this
         */
        public function setFlags($flags)
        {
        }
        /**
         * @inheritdoc
         */
        protected abstract function filterInteger($int, $minValue, $errorMessage);
        /**
         * Returns the file Flags
         *
         * @return int
         */
        public function getFlags()
        {
        }
        /**
         * Sets the newline sequence characters
         *
         * @param string $newline
         *
         * @return static
         */
        public function setNewline($newline)
        {
        }
        /**
         * Returns the current newline sequence characters
         *
         * @return string
         */
        public function getNewline()
        {
        }
    }
    /**
     *  A trait to output CSV
     *
     * @package League.csv
     * @since  6.3.0
     *
     */
    trait Output
    {
        /**
         * Charset Encoding for the CSV
         *
         * @var string
         */
        protected $encodingFrom = 'UTF-8';
        /**
         * The Input file BOM character
         * @var string
         */
        protected $input_bom;
        /**
         * The Output file BOM character
         * @var string
         */
        protected $output_bom;
        /**
         * Returns the CSV Iterator
         *
         * @return Iterator
         */
        protected abstract function getConversionIterator();
        /**
         * Returns the CSV Iterator
         *
         * @return Iterator
         */
        public abstract function getIterator();
        /**
         * Sets the CSV encoding charset
         *
         * @param string $str
         *
         * @return static
         */
        public function setEncodingFrom($str)
        {
        }
        /**
         * Gets the source CSV encoding charset
         *
         * @return string
         */
        public function getEncodingFrom()
        {
        }
        /**
         * Sets the BOM sequence to prepend the CSV on output
         *
         * @param string $str The BOM sequence
         *
         * @return static
         */
        public function setOutputBOM($str = null)
        {
        }
        /**
         * Returns the BOM sequence in use on Output methods
         *
         * @return string
         */
        public function getOutputBOM()
        {
        }
        /**
         * Returns the BOM sequence of the given CSV
         *
         * @return string
         */
        public function getInputBOM()
        {
        }
        /**
         * Outputs all data on the CSV file
         *
         * @param string $filename CSV downloaded name if present adds extra headers
         *
         * @return int Returns the number of characters read from the handle
         *             and passed through to the output.
         */
        public function output($filename = null)
        {
        }
        /**
         * Outputs all data from the CSV
         *
         * @return int Returns the number of characters read from the handle
         *             and passed through to the output.
         */
        protected function fpassthru()
        {
        }
        /**
         * Retrieves the CSV content
         *
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * JsonSerializable Interface
         *
         * @return array
         */
        public function jsonSerialize()
        {
        }
        /**
         * Convert Csv file into UTF-8
         *
         * @param Iterator $iterator
         *
         * @return Iterator
         */
        protected function convertToUtf8(\Iterator $iterator)
        {
        }
        /**
         * Returns a HTML table representation of the CSV Table
         *
         * @param string $class_name optional classname
         *
         * @return string
         */
        public function toHTML($class_name = 'table-csv-data')
        {
        }
        /**
         * Transforms a CSV into a XML
         *
         * @param string $root_name XML root node name
         * @param string $row_name  XML row node name
         * @param string $cell_name XML cell node name
         *
         * @return DomDocument
         */
        public function toXML($root_name = 'csv', $row_name = 'row', $cell_name = 'cell')
        {
        }
    }
}
namespace League\Csv\Modifier {
    /**
     *  A Trait to Query rows against a SplFileObject
     *
     * @package League.csv
     * @since  4.2.1
     *
     */
    trait QueryFilter
    {
        /**
         * Callables to filter the iterator
         *
         * @var callable[]
         */
        protected $iterator_filters = [];
        /**
         * Callables to sort the iterator
         *
         * @var callable[]
         */
        protected $iterator_sort_by = [];
        /**
         * iterator Offset
         *
         * @var int
         */
        protected $iterator_offset = 0;
        /**
         * iterator maximum length
         *
         * @var int
         */
        protected $iterator_limit = -1;
        /**
         * Stripping BOM status
         *
         * @var boolean
         */
        protected $strip_bom = false;
        /**
         * Stripping BOM setter
         *
         * @param bool $status
         *
         * @return $this
         */
        public function stripBom($status)
        {
        }
        /**
         * Tell whether we can strip or not the leading BOM sequence
         *
         * @return bool
         */
        protected function isBomStrippable()
        {
        }
        /**
         * {@inheritdoc}
         */
        public abstract function getInputBom();
        /**
         * Set LimitIterator Offset
         *
         * @param $offset
         *
         * @return $this
         */
        public function setOffset($offset = 0)
        {
        }
        /**
         * @inheritdoc
         */
        protected abstract function filterInteger($int, $minValue, $errorMessage);
        /**
         * Set LimitIterator Count
         *
         * @param int $limit
         *
         * @return $this
         */
        public function setLimit($limit = -1)
        {
        }
        /**
         * Set an Iterator sorting callable function
         *
         * @param callable $callable
         *
         * @return $this
         */
        public function addSortBy(callable $callable)
        {
        }
        /**
         * Remove a callable from the collection
         *
         * @param callable $callable
         *
         * @return $this
         */
        public function removeSortBy(callable $callable)
        {
        }
        /**
         * Detect if the callable is already registered
         *
         * @param callable $callable
         *
         * @return bool
         */
        public function hasSortBy(callable $callable)
        {
        }
        /**
         * Remove all registered callable
         *
         * @return $this
         */
        public function clearSortBy()
        {
        }
        /**
         * Set the Iterator filter method
         *
         * @param callable $callable
         *
         * @return $this
         */
        public function addFilter(callable $callable)
        {
        }
        /**
         * Remove a filter from the callable collection
         *
         * @param callable $callable
         *
         * @return $this
         */
        public function removeFilter(callable $callable)
        {
        }
        /**
         * Detect if the callable filter is already registered
         *
         * @param callable $callable
         *
         * @return bool
         */
        public function hasFilter(callable $callable)
        {
        }
        /**
         * Remove all registered callable filter
         *
         * @return $this
         */
        public function clearFilter()
        {
        }
        /**
         * Remove the BOM sequence from the CSV
         *
         * @param Iterator $iterator
         *
         * @return \Iterator
         */
        protected function applyBomStripping(\Iterator $iterator)
        {
        }
        /**
         * Return the Iterator without the BOM sequence
         *
         * @param Iterator $iterator
         *
         * @return Iterator
         */
        protected function getStripBomIterator(\Iterator $iterator)
        {
        }
        /**
         * {@inheritdoc}
         */
        public abstract function getEnclosure();
        /**
         * Filter the Iterator
         *
         * @param \Iterator $iterator
         *
         * @return \Iterator
         */
        protected function applyIteratorFilter(\Iterator $iterator)
        {
        }
        /**
         * Sort the Iterator
         *
         * @param \Iterator $iterator
         *
         * @return \Iterator
         */
        protected function applyIteratorInterval(\Iterator $iterator)
        {
        }
        /**
         * Sort the Iterator
         *
         * @param \Iterator $iterator
         *
         * @return \Iterator
         */
        protected function applyIteratorSortBy(\Iterator $iterator)
        {
        }
    }
    /**
     *  A Trait to ease PHP Stream Filters manipulation
     *  with a SplFileObject
     *
     * @package League.csv
     * @since  6.0.0
     *
     */
    trait StreamFilter
    {
        /**
         * collection of stream filters
         *
         * @var array
         */
        protected $stream_filters = [];
        /**
         * Stream filtering mode to apply on all filters
         *
         * @var int
         */
        protected $stream_filter_mode = STREAM_FILTER_ALL;
        /**
         *the real path
         *
         * @var string the real path to the file
         *
         */
        protected $stream_uri;
        /**
         * PHP Stream Filter Regex
         *
         * @var string
         */
        protected $stream_regex = ',^
        php://filter/
        (?P<mode>:?read=|write=)?  # The resource open mode
        (?P<filters>.*?)           # The resource registered filters
        /resource=(?P<resource>.*) # The resource path
        $,ix';
        /**
         * Internal path setter
         *
         * The path must be an SplFileInfo object
         * an object that implements the `__toString` method
         * a path to a file
         *
         * @param \SplFileObject|string $path The file path
         */
        protected function initStreamFilter($path)
        {
        }
        /**
         * Get the stream mode
         *
         * @param string $mode
         *
         * @return int
         */
        protected function fetchStreamModeAsInt($mode)
        {
        }
        /**
         * Check if the trait methods can be used
         *
         * @throws LogicException If the API can not be use
         */
        protected function assertStreamable()
        {
        }
        /**
         * Tells whether the stream filter capabilities can be used
         *
         * @return bool
         */
        public function isActiveStreamFilter()
        {
        }
        /**
         * stream filter mode Setter
         *
         * Set the new Stream Filter mode and remove all
         * previously attached stream filters
         *
         * @param int $mode
         *
         * @throws OutOfBoundsException If the mode is invalid
         *
         * @return $this
         */
        public function setStreamFilterMode($mode)
        {
        }
        /**
         * stream filter mode getter
         *
         * @return int
         */
        public function getStreamFilterMode()
        {
        }
        /**
         * append a stream filter
         *
         * @param string $filter_name a string or an object that implements the '__toString' method
         *
         * @return $this
         */
        public function appendStreamFilter($filter_name)
        {
        }
        /**
         * prepend a stream filter
         *
         * @param string $filter_name a string or an object that implements the '__toString' method
         *
         * @return $this
         */
        public function prependStreamFilter($filter_name)
        {
        }
        /**
         * Sanitize the stream filter name
         *
         * @param string $filter_name the stream filter name
         *
         * @return string
         */
        protected function sanitizeStreamFilter($filter_name)
        {
        }
        /**
         * Detect if the stream filter is already present
         *
         * @param string $filter_name
         *
         * @return bool
         */
        public function hasStreamFilter($filter_name)
        {
        }
        /**
         * Remove a filter from the collection
         *
         * @param string $filter_name
         *
         * @return $this
         */
        public function removeStreamFilter($filter_name)
        {
        }
        /**
         * Remove all registered stream filter
         *
         * @return $this
         */
        public function clearStreamFilter()
        {
        }
        /**
         * Return the filter path
         *
         * @return string
         */
        protected function getStreamFilterPath()
        {
        }
        /**
         * Return PHP stream filter prefix
         *
         * @return string
         */
        protected function getStreamFilterPrefix()
        {
        }
    }
}
namespace League\Csv {
    /**
     *  An abstract class to enable basic CSV manipulation
     *
     * @package League.csv
     * @since  4.0.0
     *
     */
    abstract class AbstractCsv implements \JsonSerializable, \IteratorAggregate
    {
        use \League\Csv\Config\Controls;
        use \League\Csv\Config\Output;
        use \League\Csv\Modifier\QueryFilter;
        use \League\Csv\Modifier\StreamFilter;
        /**
         *  UTF-8 BOM sequence
         */
        const BOM_UTF8 = "﻿";
        /**
         * UTF-16 BE BOM sequence
         */
        const BOM_UTF16_BE = "\xfe\xff";
        /**
         * UTF-16 LE BOM sequence
         */
        const BOM_UTF16_LE = "\xff\xfe";
        /**
         * UTF-32 BE BOM sequence
         */
        const BOM_UTF32_BE = "\x00\x00\xfe\xff";
        /**
         * UTF-32 LE BOM sequence
         */
        const BOM_UTF32_LE = "\x00\x00\xff\xfe";
        /**
         * The constructor path
         *
         * can be a SplFileInfo object or the string path to a file
         *
         * @var SplFileObject|string
         */
        protected $path;
        /**
         * The file open mode flag
         *
         * @var string
         */
        protected $open_mode;
        /**
         * Default SplFileObject flags settings
         *
         * @var int
         */
        protected $defaultFlags;
        /**
         * Creates a new instance
         *
         * The path must be an SplFileInfo object
         * an object that implements the `__toString` method
         * a path to a file
         *
         * @param SplFileObject|string $path      The file path
         * @param string               $open_mode the file open mode flag
         */
        protected function __construct($path, $open_mode = 'r+')
        {
        }
        /**
         * The destructor
         */
        public function __destruct()
        {
        }
        /**
         * Returns the CSV Iterator
         *
         * @return SplFileObject
         */
        public function getIterator()
        {
        }
        /**
         * Returns the CSV Iterator for conversion
         *
         * @return Iterator
         */
        protected function getConversionIterator()
        {
        }
        /**
         * Creates a {@link AbstractCsv} from a string
         *
         * The path can be:
         * - an SplFileInfo,
         * - a SplFileObject,
         * - an object that implements the `__toString` method,
         * - a string
         *
         * BUT NOT a SplTempFileObject
         *
         * <code>
         *<?php
         * $csv = new Reader::createFromPath('/path/to/file.csv', 'a+');
         * $csv = new Reader::createFromPath(new SplFileInfo('/path/to/file.csv'));
         * $csv = new Reader::createFromPath(new SplFileObject('/path/to/file.csv'), 'rb');
         *
         * ?>
         * </code>
         *
         * @param mixed  $path      file path
         * @param string $open_mode the file open mode flag
         *
         * @throws InvalidArgumentException If $path is a \SplTempFileObject object
         *
         * @return static
         */
        public static function createFromPath($path, $open_mode = 'r+')
        {
        }
        /**
         * validate a string
         *
         * @param mixed $str the value to evaluate as a string
         *
         * @throws InvalidArgumentException if the submitted data can not be converted to string
         *
         * @return string
         */
        protected static function validateString($str)
        {
        }
        /**
         * Creates a {@link AbstractCsv} from a SplFileObject
         *
         * The path can be:
         * - a SplFileObject,
         * - a SplTempFileObject
         *
         * <code>
         *<?php
         * $csv = new Writer::createFromFileObject(new SplFileInfo('/path/to/file.csv'));
         * $csv = new Writer::createFromFileObject(new SplTempFileObject);
         *
         * ?>
         * </code>
         *
         * @param SplFileObject $file
         *
         * @return static
         */
        public static function createFromFileObject(\SplFileObject $file)
        {
        }
        /**
         * Creates a {@link AbstractCsv} from a string
         *
         * The string must be an object that implements the `__toString` method,
         * or a string
         *
         * @param string $str     the string
         * @param string $newline the newline character
         *
         * @return static
         */
        public static function createFromString($str, $newline = "\n")
        {
        }
        /**
         * Creates a {@link AbstractCsv} instance from another {@link AbstractCsv} object
         *
         * @param string $class_name the class to be instantiated
         * @param string $open_mode  the file open mode flag
         *
         * @return static
         */
        protected function newInstance($class_name, $open_mode)
        {
        }
        /**
         * Creates a {@link Writer} instance from a {@link AbstractCsv} object
         *
         * @param string $open_mode the file open mode flag
         *
         * @return Writer
         */
        public function newWriter($open_mode = 'r+')
        {
        }
        /**
         * Creates a {@link Reader} instance from a {@link AbstractCsv} object
         *
         * @param string $open_mode the file open mode flag
         *
         * @return Reader
         */
        public function newReader($open_mode = 'r+')
        {
        }
        /**
         * Validate the submitted integer
         *
         * @param int    $int
         * @param int    $minValue
         * @param string $errorMessage
         *
         * @throws InvalidArgumentException If the value is invalid
         *
         * @return int
         */
        protected function filterInteger($int, $minValue, $errorMessage)
        {
        }
    }
}
namespace League\Csv\Exception {
    /**
     *  Thrown when a data is not validated prior to insertion
     *
     * @package League.csv
     * @since  7.0.0
     *
     */
    class InvalidRowException extends \InvalidArgumentException
    {
        /**
         * Validator which did not validated the data
         * @var string
         */
        private $name;
        /**
         * Validator Data which caused the error
         * @var array
         */
        private $data;
        /**
         * New Instance
         *
         * @param string $name    validator name
         * @param array  $data    invalid  data
         * @param string $message exception message
         */
        public function __construct($name, array $data = [], $message = '')
        {
        }
        /**
         * return the validator name
         *
         * @return string
         */
        public function getName()
        {
        }
        /**
         * return the invalid data submitted
         *
         * @return array
         */
        public function getData()
        {
        }
    }
}
namespace League\Csv\Modifier {
    /**
     *  A simple MapIterator
     *
     * @package League.csv
     * @since  3.3.0
     * @internal used internally to modify CSV content
     *
     */
    class MapIterator extends \IteratorIterator
    {
        /**
         * The function to be apply on all InnerIterator element
         *
         * @var callable
         */
        private $callable;
        /**
         * The Constructor
         *
         * @param Iterator $iterator
         * @param callable $callable
         */
        public function __construct(\Iterator $iterator, callable $callable)
        {
        }
        /**
         * Get the value of the current element
         */
        public function current()
        {
        }
    }
    /**
     *  Trait to format and validate the row before insertion
     *
     * @package League.csv
     * @since  7.0.0
     *
     */
    trait RowFilter
    {
        /**
         * Callables to validate the row before insertion
         *
         * @var callable[]
         */
        protected $validators = [];
        /**
         * Callables to format the row before insertion
         *
         * @var callable[]
         */
        protected $formatters = [];
        /**
         * add a formatter to the collection
         *
         * @param callable $callable
         *
         * @return $this
         */
        public function addFormatter(callable $callable)
        {
        }
        /**
         * Remove a formatter from the collection
         *
         * @param callable $callable
         *
         * @return $this
         */
        public function removeFormatter(callable $callable)
        {
        }
        /**
         * Detect if the formatter is already registered
         *
         * @param callable $callable
         *
         * @return bool
         */
        public function hasFormatter(callable $callable)
        {
        }
        /**
         * Remove all registered formatter
         *
         * @return $this
         */
        public function clearFormatters()
        {
        }
        /**
         * add a Validator to the collection
         *
         * @param callable $callable
         * @param string   $name     the rule name
         *
         * @return $this
         */
        public function addValidator(callable $callable, $name)
        {
        }
        /**
         * Remove a validator from the collection
         *
         * @param string $name the validator name
         *
         * @return $this
         */
        public function removeValidator($name)
        {
        }
        /**
         * Detect if a validator is already registered
         *
         * @param string $name the validator name
         *
         * @return bool
         */
        public function hasValidator($name)
        {
        }
        /**
         * Remove all registered validators
         *
         * @return $this
         */
        public function clearValidators()
        {
        }
        /**
         * Format the given row
         *
         * @param array|string $row
         *
         * @return array
         */
        protected function formatRow(array $row)
        {
        }
        /**
         * validate a row
         *
         * @param array $row
         *
         * @throws InvalidRowException If the validation failed
         */
        protected function validateRow(array $row)
        {
        }
    }
}
namespace League\Csv\Plugin {
    /**
     *  A class to manage column consistency on data insertion into a CSV
     *
     * @package League.csv
     * @since  7.0.0
     *
     */
    class ColumnConsistencyValidator
    {
        /**
         * The number of column per row
         *
         * @var int
         */
        private $columns_count = -1;
        /**
         * should the class detect the column count based the inserted row
         *
         * @var bool
         */
        private $detect_columns_count = false;
        /**
         * Set Inserted row column count
         *
         * @param int $value
         *
         * @throws InvalidArgumentException If $value is lesser than -1
         *
         */
        public function setColumnsCount($value)
        {
        }
        /**
         * Column count getter
         *
         * @return int
         */
        public function getColumnsCount()
        {
        }
        /**
         * The method will set the $columns_count property according to the next inserted row
         * and therefore will also validate the next line whatever length it has no matter
         * the current $columns_count property value.
         *
         */
        public function autodetectColumnsCount()
        {
        }
        /**
         * Is the submitted row valid
         *
         * @param array $row
         *
         * @return bool
         */
        public function __invoke(array $row)
        {
        }
    }
    /**
     *  A class to validate null value handling on data insertion into a CSV
     *
     * @package League.csv
     * @since  7.0.0
     *
     */
    class ForbiddenNullValuesValidator
    {
        /**
         * Is the submitted row valid
         *
         * @param array $row
         *
         * @return bool
         */
        public function __invoke(array $row)
        {
        }
    }
    /**
     *  A class to remove null value from data before insertion into a CSV
     *
     * @package League.csv
     * @since  7.0.0
     *
     */
    class SkipNullValuesFormatter
    {
        /**
         * remove null value form the submitted array
         *
         * @param array $row
         *
         * @return array
         */
        public function __invoke(array $row)
        {
        }
    }
}
namespace League\Csv {
    /**
     *  A class to manage extracting and filtering a CSV
     *
     * @package League.csv
     * @since  3.0.0
     *
     */
    class Reader extends \League\Csv\AbstractCsv
    {
        /**
         * @inheritdoc
         */
        protected $stream_filter_mode = STREAM_FILTER_READ;
        /**
         * Returns a Filtered Iterator
         *
         * DEPRECATION WARNING! This method will be removed in the next major point release
         *
         * @deprecated deprecated since version 7.2
         *
         * @return Iterator
         */
        public function query(callable $callable = null)
        {
        }
        /**
         * Return a Filtered Iterator
         *
         * @param callable $callable a callable function to be applied to each Iterator item
         *
         * @return Iterator
         */
        public function fetch(callable $callable = null)
        {
        }
        /**
         * Applies a callback function on the CSV
         *
         * The callback function must return TRUE in order to continue
         * iterating over the iterator.
         *
         * @param callable $callable The callback function
         *
         * @return int the iteration count
         */
        public function each(callable $callable)
        {
        }
        /**
         * Returns a single row from the CSV
         *
         * @param int $offset
         *
         * @throws InvalidArgumentException If the $offset is not a valid Integer
         *
         * @return array
         */
        public function fetchOne($offset = 0)
        {
        }
        /**
         * Returns a sequential array of all CSV lines
         *
         * The callable function will be applied to each Iterator item
         *
         * @param callable $callable a callable function
         *
         * @return array
         */
        public function fetchAll(callable $callable = null)
        {
        }
        /**
         * Returns a single column from the CSV data
         *
         * The callable function will be applied to each value to be return
         *
         * @param int      $column_index field Index
         * @param callable $callable     a callable function
         *
         * @throws InvalidArgumentException If the column index is not a positive integer or 0
         *
         * @return array
         */
        public function fetchColumn($column_index = 0, callable $callable = null)
        {
        }
        /**
         * Returns a sequential array of all CSV lines;
         *
         * The rows are presented as associated arrays
         * The callable function will be applied to each Iterator item
         *
         * @param int|array $offset_or_keys the name for each key member OR the row Index to be
         *                                  used as the associated named keys
         *
         * @param callable $callable a callable function
         *
         * @throws InvalidArgumentException If the submitted keys are invalid
         *
         * @return Iterator
         */
        public function fetchAssoc($offset_or_keys = 0, callable $callable = null)
        {
        }
        /**
         * Selects the array to be used as key for the fetchAssoc method
         *
         * @param int|array $offset_or_keys the assoc key OR the row Index to be used
         *                                  as the key index
         *
         * @throws InvalidArgumentException If the row index and/or the resulting array is invalid
         *
         * @return array
         */
        protected function getAssocKeys($offset_or_keys)
        {
        }
        /**
         * Validates the array to be used by the fetchAssoc method
         *
         * @param array $keys
         *
         * @throws InvalidArgumentException If the submitted array fails the assertion
         */
        protected function validateAssocKeys(array $keys)
        {
        }
        /**
         * Returns a single row from the CSV without filtering
         *
         * @param int $offset
         *
         * @throws InvalidArgumentException If the $offset is not valid or the row does not exist
         *
         * @return array
         */
        protected function getRow($offset)
        {
        }
    }
    /**
     *  A class to manage data insertion into a CSV
     *
     * @package League.csv
     * @since  4.0.0
     *
     */
    class Writer extends \League\Csv\AbstractCsv
    {
        use \League\Csv\Modifier\RowFilter;
        /**
         * @inheritdoc
         */
        protected $stream_filter_mode = STREAM_FILTER_WRITE;
        /**
         * The CSV object holder
         *
         * @var \SplFileObject
         */
        protected $csv;
        /**
         * fputcsv method from SplFileObject
         *
         * @var ReflectionMethod
         */
        protected static $fputcsv;
        /**
         * Nb parameters for SplFileObject::fputcsv method
         *
         * @var integer
         */
        protected static $fputcsv_param_count;
        /**
         * @inheritdoc
         */
        protected function __construct($path, $open_mode = 'r+')
        {
        }
        /**
         * initiate a SplFileObject::fputcsv method
         */
        protected static function initFputcsv()
        {
        }
        /**
         * Adds multiple lines to the CSV document
         *
         * a simple wrapper method around insertOne
         *
         * @param Traversable|array $rows a multidimensional array or a Traversable object
         *
         * @throws InvalidArgumentException If the given rows format is invalid
         *
         * @return static
         */
        public function insertAll($rows)
        {
        }
        /**
         * Adds a single line to a CSV document
         *
         * @param string[]|string $row a string, an array or an object implementing to '__toString' method
         *
         * @return static
         */
        public function insertOne($row)
        {
        }
        /**
         * returns the parameters for SplFileObject::fputcsv
         *
         * @param array $fields The fields to be add
         *
         * @return array
         */
        protected function getFputcsvParameters(array $fields)
        {
        }
        /**
         *  {@inheritdoc}
         */
        public function isActiveStreamFilter()
        {
        }
        /**
         *  {@inheritdoc}
         */
        public function __destruct()
        {
        }
    }
}
namespace FluentValidator {
    /**
     * Class Arr: Taken from Illuminate\Support\Arr (Laravel Framework)
     *
     * @package FluentValidator
     */
    class Arr
    {
        /**
         * Check if an item or items exist in an array using "dot" notation.
         *
         * @param \ArrayAccess|array $array
         * @param string|array $keys
         *
         * @return bool
         */
        public static function has($array, $keys)
        {
        }
        /**
         * Get an item from an array using "dot" notation.
         *
         * @param \ArrayAccess|array $array
         * @param string $key
         * @param mixed $default
         *
         * @return mixed
         */
        public static function get($array, $key, $default = null)
        {
        }
        /**
         * Set an array item to a given value using "dot" notation.
         *
         * If no key is given to the method, the entire array will be replaced.
         *
         * @param array $array
         * @param string $key
         * @param mixed $value
         *
         * @return array
         */
        public static function set(&$array, $key, $value)
        {
        }
        /**
         * Get a subset of the items from the given array.
         *
         * @param array $array
         * @param array|string $keys
         *
         * @return array
         */
        public static function only($array, $keys)
        {
        }
        /**
         * Get all of the given array except for a specified array of items.
         *
         * @param array $array
         * @param array|string $keys
         *
         * @return array
         */
        public static function except($array, $keys)
        {
        }
        /**
         * Remove one or many array items from a given array using "dot" notation.
         *
         * @param array $array
         * @param array|string $keys
         *
         * @return void
         */
        public static function forget(&$array, $keys)
        {
        }
        /**
         * Determine whether the given value is array accessible.
         *
         * @param mixed $value
         *
         * @return bool
         */
        public static function accessible($value)
        {
        }
        /**
         * Determine if the given key exists in the provided array.
         *
         * @param \ArrayAccess|array $array
         * @param string|int $key
         *
         * @return bool
         */
        public static function exists($array, $key)
        {
        }
        /**
         * Return the default value of the given value.
         *
         * @param mixed $value
         *
         * @return mixed
         */
        public static function value($value)
        {
        }
        /**
         * Flatten a multi-dimensional associative array with dots.
         *
         * @param array $array
         * @param string $prepend
         *
         * @return array
         */
        public static function dot($array, $prepend = '')
        {
        }
    }
    trait MessageBag
    {
        /**
         * The default message bag.
         *
         * @var array
         */
        protected $bag = ['email' => 'The :attribute must be a valid email address.', 'max' => ['numeric' => 'The :attribute may not be greater than :max.', 'file' => 'The :attribute may not be greater than :max kilobytes.', 'string' => 'The :attribute may not be greater than :max characters.', 'array' => 'The :attribute may not have more than :max items.'], 'mimes' => 'The :attribute must be a file of type: :values.', 'mimetypes' => 'The :attribute must be a file of type: :values.', 'min' => ['numeric' => 'The :attribute must be at least :min.', 'file' => 'The :attribute must be at least :min kilobytes.', 'string' => 'The :attribute must be at least :min characters.', 'array' => 'The :attribute must have at least :min items.'], 'numeric' => 'The :attribute must be a number.', 'required' => 'The :attribute field is required.', 'required_if' => 'The :attribute field is required when :other is :value.', 'same' => 'The :attribute and :other must match.', 'size' => ['numeric' => 'The :attribute must be :size.', 'file' => 'The :attribute must be :size kilobytes.', 'string' => 'The :attribute must be :size characters.', 'array' => 'The :attribute must contain :size items.'], 'url' => 'The :attribute format is invalid.'];
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
        /**
         * Set an item on an array or object using dot notation.
         *
         * @param mixed $target
         * @param string|array $key
         * @param mixed $value
         * @param bool $overwrite
         *
         * @return mixed
         */
        function data_set(&$target, $key, $value, $overwrite = true)
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
        use \FluentValidator\ValidatesAttributes, \FluentValidator\MessageBag;
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
         * @return \FluentValidator\Validator
         */
        public static function make(array $data = [], array $rules = [], array $messages = [])
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
namespace Viocon {
    /**
     * This class gives the ability to access non-static methods statically
     *
     * Class AliasFacade
     *
     * @package Viocon
     */
    class AliasFacade
    {
        /**
         * @var Container
         */
        protected static $vioconInstance;
        /**
         * @param $method
         * @param $args
         *
         * @return mixed
         */
        public static function __callStatic($method, $args)
        {
        }
        /**
         * @param Container $instance
         */
        public static function setVioconInstance(\Viocon\Container $instance)
        {
        }
        /**
         * @return \Viocon\Container $instance
         */
        public static function getVioconInstance()
        {
        }
    }
    class Container
    {
        /**
         * @var array
         */
        public $registry = array();
        /**
         * Singleton instances
         *
         * @var array
         */
        public $singletons = array();
        public function __construct($alias = null)
        {
        }
        /**
         * Register an object with a key
         *
         * @param  string $key
         * @param  mixed  $object
         * @param  bool   $singleton
         *
         * @return void
         */
        public function set($key, $object, $singleton = false)
        {
        }
        /**
         * If we have a registry for the given key
         *
         * @param  string $key
         *
         * @return bool
         */
        public function has($key)
        {
        }
        /**
         * Register as singleton.
         *
         * @param  string $key
         * @param  mixed  $object
         *
         * @return void
         */
        public function singleton($key, $object)
        {
        }
        /**
         * Register or replace an instance as a singleton.
         * Useful for replacing with Mocked instance
         *
         * @param  string $key
         * @param  mixed  $instance
         *
         * @return void
         */
        public function setInstance($key, $instance)
        {
        }
        /**
         * Build from the given key.
         * If there is a class registered with Container::set() then it's instance
         * will be returned. If a closure is registered, a closure's return value
         * will be returned. If nothing is registered then it will try to build an
         * instance with new $key(...).
         *
         * $parameters will be passed to closure or class constructor.
         *
         *
         * @param  string $key
         * @param  array  $parameters
         *
         * @return mixed
         */
        public function build($key, $parameters = array())
        {
        }
        /**
         * Instantiate an instance of the given type.
         *
         * @param  string $key
         * @param  array  $parameters
         *
         * @throws \Exception
         * @return mixed
         */
        protected function instanciate($key, $parameters = null)
        {
        }
    }
    class VioconException extends \Exception
    {
    }
}
namespace WpFluent {
    /**
     * This class gives the ability to access non-static methods statically
     *
     * Class AliasFacade
     *
     * @package WpFluent
     */
    class AliasFacade
    {
        /**
         * @var QueryBuilderHandler
         */
        protected static $queryBuilderInstance;
        /**
         * @param $method
         * @param $args
         *
         * @return mixed
         */
        public static function __callStatic($method, $args)
        {
        }
        /**
         * @param QueryBuilderHandler $queryBuilderInstance
         */
        public static function setQueryBuilderInstance($queryBuilderInstance)
        {
        }
    }
    class Connection
    {
        /**
         * @var Container
         */
        protected $container;
        /**
         * @var string
         */
        protected $adapter;
        /**
         * @var array
         */
        protected $adapterConfig;
        /**
         * @var \wpdb $wpdb
         */
        protected $dbInstance;
        /**
         * @var \wpdb $wpdb
         */
        protected $wpdb;
        /**
         * @var Connection
         */
        protected static $storedConnection;
        /**
         * @var EventHandler
         */
        protected $eventHandler;
        /**
         * @param                $wpdb
         * @param array          $adapterConfig
         * @param null|string    $alias
         * @param null|Container $container
         */
        public function __construct($wpdb, array $config = array(), $alias = null, \Viocon\Container $container = null)
        {
        }
        /**
         * Create an easily accessible query builder alias
         *
         * @param $alias
         */
        public function createAlias($alias)
        {
        }
        /**
         * Returns an instance of Query Builder
         */
        public function getQueryBuilder()
        {
        }
        /**
         * Create the connection adapter
         */
        protected function connect()
        {
        }
        /**
         * @param $db
         *
         * @return $this
         */
        public function setDbInstance($db)
        {
        }
        /**
         * @return \wpdb
         */
        public function getDbInstance()
        {
        }
        /**
         * @param $adapter
         *
         * @return $this
         */
        public function setAdapter($adapter = 'mysql')
        {
        }
        /**
         * @return string
         */
        public function getAdapter()
        {
        }
        /**
         * @param array $adapterConfig
         *
         * @return $this
         */
        public function setAdapterConfig(array $adapterConfig)
        {
        }
        /**
         * @return array
         */
        public function getAdapterConfig()
        {
        }
        /**
         * @return Container
         */
        public function getContainer()
        {
        }
        /**
         * @return EventHandler
         */
        public function getEventHandler()
        {
        }
        /**
         * @return Connection
         */
        public static function getStoredConnection()
        {
        }
    }
    class EventHandler
    {
        /**
         * @var array
         */
        protected $events = array();
        /**
         * @var array
         */
        protected $firedEvents = array();
        /**
         * @return array
         */
        public function getEvents()
        {
        }
        /**
         * @param $event
         * @param $table
         *
         * @return callable|null
         */
        public function getEvent($event, $table = ':any')
        {
        }
        /**
         * @param          $event
         * @param string   $table
         * @param callable $action
         *
         * @return void
         */
        public function registerEvent($event, $table, \Closure $action)
        {
        }
        /**
         * @param          $event
         * @param string   $table
         *
         * @return void
         */
        public function removeEvent($event, $table = ':any')
        {
        }
        /**
         * @param QueryBuilderHandler $queryBuilder
         * @param                     $event
         * @return mixed
         */
        public function fireEvents($queryBuilder, $event)
        {
        }
    }
    class Exception extends \Exception
    {
    }
}
namespace WpFluent\QueryBuilder\Adapters {
    abstract class BaseAdapter
    {
        /**
         * @var \WpFluent\Connection
         */
        protected $connection;
        /**
         * @var \Viocon\Container
         */
        protected $container;
        public function __construct(\WpFluent\Connection $connection)
        {
        }
        /**
         * Build select query string and bindings
         *
         * @param $statements
         *
         * @throws Exception
         * @return array
         */
        public function select($statements)
        {
        }
        /**
         * Build just criteria part of the query
         *
         * @param      $statements
         * @param bool $bindValues
         *
         * @return array
         */
        public function criteriaOnly($statements, $bindValues = true)
        {
        }
        /**
         * Build a generic insert/ignore/replace query
         *
         * @param       $statements
         * @param array $data
         *
         * @return array
         * @throws Exception
         */
        private function doInsert($statements, array $data, $type)
        {
        }
        /**
         * Build Insert query
         *
         * @param       $statements
         * @param array $data
         *
         * @return array
         * @throws Exception
         */
        public function insert($statements, array $data)
        {
        }
        /**
         * Build Insert Ignore query
         *
         * @param       $statements
         * @param array $data
         *
         * @return array
         * @throws Exception
         */
        public function insertIgnore($statements, array $data)
        {
        }
        /**
         * Build Insert Ignore query
         *
         * @param       $statements
         * @param array $data
         *
         * @return array
         * @throws Exception
         */
        public function replace($statements, array $data)
        {
        }
        /**
         * Build fields assignment part of SET ... or ON DUBLICATE KEY UPDATE ... statements
         *
         * @param array $data
         *
         * @return array
         */
        private function getUpdateStatement($data)
        {
        }
        /**
         * Build update query
         *
         * @param       $statements
         * @param array $data
         *
         * @return array
         * @throws Exception
         */
        public function update($statements, array $data)
        {
        }
        /**
         * Build delete query
         *
         * @param $statements
         *
         * @return array
         * @throws Exception
         */
        public function delete($statements)
        {
        }
        /**
         * Array concatenating method, like implode.
         * But it does wrap sanitizer and trims last glue
         *
         * @param array $pieces
         * @param       $glue
         * @param bool  $wrapSanitizer
         *
         * @return string
         */
        protected function arrayStr(array $pieces, $glue, $wrapSanitizer = true)
        {
        }
        /**
         * Join different part of queries with a space.
         *
         * @param array $pieces
         *
         * @return string
         */
        protected function concatenateQuery(array $pieces)
        {
        }
        /**
         * Build generic criteria string and bindings from statements, like "a = b and c = ?"
         *
         * @param      $statements
         * @param bool $bindValues
         *
         * @return array
         */
        protected function buildCriteria($statements, $bindValues = true)
        {
        }
        /**
         * Wrap values with adapter's sanitizer like, '`'
         *
         * @param $value
         *
         * @return string
         */
        public function wrapSanitizer($value)
        {
        }
        /**
         * Build criteria string and binding with various types added, like WHERE and Having
         *
         * @param      $statements
         * @param      $key
         * @param      $type
         * @param bool $bindValues
         *
         * @return array
         */
        protected function buildCriteriaWithType($statements, $key, $type, $bindValues = true)
        {
        }
        /**
         * Build join string
         *
         * @param $statements
         *
         * @return array|string
         */
        protected function buildJoin($statements)
        {
        }
    }
    class Mysql extends \WpFluent\QueryBuilder\Adapters\BaseAdapter
    {
        /**
         * @var string
         */
        protected $sanitizer = '`';
    }
}
namespace WpFluent\QueryBuilder {
    class QueryBuilderHandler
    {
        /**
         * @var \Viocon\Container
         */
        protected $container;
        /**
         * @var Connection
         */
        protected $connection;
        /**
         * @var array
         */
        protected $statements = array();
        /**
         * @var \wpdb
         */
        protected $db;
        /**
         * @var null|string
         */
        protected $dbStatement = null;
        /**
         * @var null|string
         */
        protected $tablePrefix = null;
        /**
         * @var \WpFluent\QueryBuilder\Adapters\BaseAdapter
         */
        protected $adapterInstance;
        /**
         * The PDO fetch parameters to use
         *
         * @var array
         */
        protected $fetchParameters = array(\PDO::FETCH_OBJ);
        /**
         * @param null|\WpFluent\Connection $connection
         *
         * @throws \WpFluent\Exception
         */
        public function __construct(\WpFluent\Connection $connection = null)
        {
        }
        /**
         * Set the fetch mode
         *
         * @param $mode
         * @return $this
         */
        public function setFetchMode($mode)
        {
        }
        /**
         * Fetch query results as object of specified type
         *
         * @param $className
         * @param array $constructorArgs
         * @return QueryBuilderHandler
         */
        public function asObject($className, $constructorArgs = array())
        {
        }
        /**
         * @param null|\WpFluent\Connection $connection
         *
         * @return static
         */
        public function newQuery(\WpFluent\Connection $connection = null)
        {
        }
        /**
         * @param       $sql
         * @param array $bindings
         *
         * @return $this
         */
        public function query($sql, $bindings = array())
        {
        }
        /**
         * @param $rawSql
         *
         * @return float execution time
         */
        public function statement($rawSql)
        {
        }
        /**
         * Get all rows
         *
         * @return array|object|null
         * @throws \WpFluent\Exception
         */
        public function get()
        {
        }
        /**
         * Get first row
         *
         * @return \stdClass|null
         */
        public function first()
        {
        }
        /**
         * @param        $value
         * @param string $fieldName
         *
         * @return null|\stdClass
         */
        public function findAll($fieldName, $value)
        {
        }
        /**
         * @param        $value
         * @param string $fieldName
         *
         * @return null|\stdClass
         */
        public function find($value, $fieldName = 'id')
        {
        }
        /**
         * Get count of rows
         *
         * @return int
         */
        public function count()
        {
        }
        /**
         * @param $type
         *
         * @return int
         */
        protected function aggregate($type)
        {
        }
        /**
         * @param string $type
         * @param array  $dataToBePassed
         *
         * @return mixed
         * @throws Exception
         */
        public function getQuery($type = 'select', $dataToBePassed = array())
        {
        }
        /**
         * @param QueryBuilderHandler $queryBuilder
         * @param null                $alias
         *
         * @return Raw
         */
        public function subQuery(\WpFluent\QueryBuilder\QueryBuilderHandler $queryBuilder, $alias = null)
        {
        }
        /**
         * @param $data
         *
         * @return array|string
         * @throws \WpFluent\Exception
         */
        private function doInsert($data, $type)
        {
        }
        /**
         * @param $data
         *
         * @return array|string
         */
        public function insert($data)
        {
        }
        /**
         * @param $data
         *
         * @return array|string
         */
        public function insertIgnore($data)
        {
        }
        /**
         * @param $data
         *
         * @return array|string
         */
        public function replace($data)
        {
        }
        /**
         * @param $data
         *
         * @throws \WpFluent\Exception
         */
        public function update($data)
        {
        }
        /**
         * @param $data
         *
         * @return array|string
         */
        public function updateOrInsert($data)
        {
        }
        /**
         * @param $data
         *
         * @return $this
         */
        public function onDuplicateKeyUpdate($data)
        {
        }
        /**
         * @return mixed
         * @throws \WpFluent\Exception
         */
        public function delete()
        {
        }
        /**
         * @param string|array $tables Single table or multiple tables
         *                             as an array or as multiple parameters
         *
         * @return static
         */
        public function table($tables)
        {
        }
        /**
         * @param $tables
         *
         * @return $this
         */
        public function from($tables)
        {
        }
        /**
         * @param $fields
         *
         * @return $this
         */
        public function select($fields)
        {
        }
        /**
         * @param $fields
         *
         * @return $this
         */
        public function selectDistinct($fields)
        {
        }
        /**
         * @param $field
         *
         * @return $this
         */
        public function groupBy($field)
        {
        }
        /**
         * @param        $fields
         * @param string $defaultDirection
         *
         * @return $this
         */
        public function orderBy($fields, $defaultDirection = 'ASC')
        {
        }
        /**
         * @param $limit
         *
         * @return $this
         */
        public function limit($limit)
        {
        }
        /**
         * @param $offset
         *
         * @return $this
         */
        public function offset($offset)
        {
        }
        /**
         * @param        $key
         * @param        $operator
         * @param        $value
         * @param string $joiner
         *
         * @return $this
         */
        public function having($key, $operator, $value, $joiner = 'AND')
        {
        }
        /**
         * @param        $key
         * @param        $operator
         * @param        $value
         *
         * @return $this
         */
        public function orHaving($key, $operator, $value)
        {
        }
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function where($key, $operator = null, $value = null)
        {
        }
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function orWhere($key, $operator = null, $value = null)
        {
        }
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function whereNot($key, $operator = null, $value = null)
        {
        }
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function orWhereNot($key, $operator = null, $value = null)
        {
        }
        /**
         * @param       $key
         * @param array $values
         *
         * @return $this
         */
        public function whereIn($key, $values)
        {
        }
        /**
         * @param       $key
         * @param array $values
         *
         * @return $this
         */
        public function whereNotIn($key, $values)
        {
        }
        /**
         * @param       $key
         * @param array $values
         *
         * @return $this
         */
        public function orWhereIn($key, $values)
        {
        }
        /**
         * @param       $key
         * @param array $values
         *
         * @return $this
         */
        public function orWhereNotIn($key, $values)
        {
        }
        /**
         * @param $key
         * @param $valueFrom
         * @param $valueTo
         *
         * @return $this
         */
        public function whereBetween($key, $valueFrom, $valueTo)
        {
        }
        /**
         * @param $key
         * @param $valueFrom
         * @param $valueTo
         *
         * @return $this
         */
        public function orWhereBetween($key, $valueFrom, $valueTo)
        {
        }
        /**
         * @param $key
         * @return QueryBuilderHandler
         */
        public function whereNull($key)
        {
        }
        /**
         * @param $key
         * @return QueryBuilderHandler
         */
        public function whereNotNull($key)
        {
        }
        /**
         * @param $key
         * @return QueryBuilderHandler
         */
        public function orWhereNull($key)
        {
        }
        /**
         * @param $key
         * @return QueryBuilderHandler
         */
        public function orWhereNotNull($key)
        {
        }
        protected function whereNullHandler($key, $prefix = '', $operator = '')
        {
        }
        /**
         * @param        $table
         * @param        $key
         * @param        $operator
         * @param        $value
         * @param string $type
         *
         * @return $this
         */
        public function join($table, $key, $operator = null, $value = null, $type = 'inner')
        {
        }
        /**
         * Runs a transaction
         *
         * @param $callback
         *
         * @return $this
         */
        public function transaction(\Closure $callback)
        {
        }
        /**
         * @param      $table
         * @param      $key
         * @param null $operator
         * @param null $value
         *
         * @return $this
         */
        public function leftJoin($table, $key, $operator = null, $value = null)
        {
        }
        /**
         * @param      $table
         * @param      $key
         * @param null $operator
         * @param null $value
         *
         * @return $this
         */
        public function rightJoin($table, $key, $operator = null, $value = null)
        {
        }
        /**
         * @param      $table
         * @param      $key
         * @param null $operator
         * @param null $value
         *
         * @return $this
         */
        public function innerJoin($table, $key, $operator = null, $value = null)
        {
        }
        /**
         * Add a raw query
         *
         * @param $value
         * @param $bindings
         *
         * @return mixed
         */
        public function raw($value, $bindings = array())
        {
        }
        /**
         * Return db instance
         *
         * @return \wpdb
         */
        public function db()
        {
        }
        /**
         * @param Connection $connection
         *
         * @return $this
         */
        public function setConnection(\WpFluent\Connection $connection)
        {
        }
        /**
         * @return Connection
         */
        public function getConnection()
        {
        }
        /**
         * @param        $key
         * @param        $operator
         * @param        $value
         * @param string $joiner
         *
         * @return $this
         */
        protected function whereHandler($key, $operator = null, $value = null, $joiner = 'AND')
        {
        }
        /**
         * Add table prefix (if given) on given string.
         *
         * @param      $values
         * @param bool $tableFieldMix If we have mixes of field and table names with a "."
         *
         * @return array|mixed
         */
        public function addTablePrefix($values, $tableFieldMix = true)
        {
        }
        /**
         * @param $key
         * @param $value
         */
        protected function addStatement($key, $value)
        {
        }
        /**
         * @param $event
         * @param $table
         *
         * @return callable|null
         */
        public function getEvent($event, $table = ':any')
        {
        }
        /**
         * @param          $event
         * @param string   $table
         * @param callable $action
         *
         * @return void
         */
        public function registerEvent($event, $table, \Closure $action)
        {
        }
        /**
         * @param          $event
         * @param string   $table
         *
         * @return void
         */
        public function removeEvent($event, $table = ':any')
        {
        }
        /**
         * @param      $event
         * @return mixed
         */
        public function fireEvents($event)
        {
        }
        /**
         * @return array
         */
        public function getStatements()
        {
        }
        /**
         * Get the paginated rows.
         *
         * @param null $perPage
         * @param array $columns
         *
         * @return array
         */
        public function paginate($perPage = null, $columns = array('*'))
        {
        }
        /**
         * Apply the callback's query changes if the given "value" is true.
         *
         * @param mixed $value
         * @param callable $callback
         * @param callable $default
         * @return mixed
         */
        public function when($value, $callback, $default = null)
        {
        }
    }
    class JoinBuilder extends \WpFluent\QueryBuilder\QueryBuilderHandler
    {
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function on($key, $operator, $value)
        {
        }
        /**
         * @param $key
         * @param $operator
         * @param $value
         *
         * @return $this
         */
        public function orOn($key, $operator, $value)
        {
        }
        /**
         * @param        $key
         * @param null   $operator
         * @param null   $value
         * @param string $joiner
         *
         * @return $this
         */
        protected function joinHandler($key, $operator = null, $value = null, $joiner = 'AND')
        {
        }
    }
    class NestedCriteria extends \WpFluent\QueryBuilder\QueryBuilderHandler
    {
        /**
         * @param        $key
         * @param null   $operator
         * @param null   $value
         * @param string $joiner
         *
         * @return $this
         */
        protected function whereHandler($key, $operator = null, $value = null, $joiner = 'AND')
        {
        }
    }
    class QueryObject
    {
        /**
         * @var string
         */
        protected $sql;
        /**
         * @var \wpdb
         */
        protected $db;
        /**
         * @var array
         */
        protected $bindings = array();
        public function __construct($sql, array $bindings)
        {
        }
        /**
         * @return string
         */
        public function getSql()
        {
        }
        /**
         * @return array
         */
        public function getBindings()
        {
        }
        /**
         * Get the raw/bound sql
         *
         * @return string
         */
        public function getRawSql()
        {
        }
        /**
         * Replaces any parameter placeholders in a query with the value of that
         * parameter. Useful for debugging. Assumes anonymous parameters from
         * $params are are in the same order as specified in $query
         *
         * Reference: http://stackoverflow.com/a/1376838/656489
         *
         * @param string $query  The sql query with parameter placeholders
         * @param array  $params The array of substitution parameters
         *
         * @return string The interpolated query
         */
        protected function interpolateQuery($query, $params)
        {
        }
        private function getPlaceHolder($value)
        {
        }
    }
    class Raw
    {
        /**
         * @var string
         */
        protected $value;
        /**
         * @var array
         */
        protected $bindings;
        public function __construct($value, $bindings = array())
        {
        }
        public function getBindings()
        {
        }
        /**
         * @return string
         */
        public function __toString()
        {
        }
    }
    class Transaction extends \WpFluent\QueryBuilder\QueryBuilderHandler
    {
        /**
         * Commit the database changes
         */
        public function commit()
        {
        }
        /**
         * Rollback the database changes
         */
        public function rollback()
        {
        }
    }
    class TransactionHaltException extends \Exception
    {
    }
}
namespace FluentForm\Framework\Config {
    class Config implements \ArrayAccess
    {
        /**
         * All array items from all files from /config directory
         * @var array
         */
        protected $repository = array();
        /**
         * Initiate the instance
         * @param array $repository
         */
        public function __construct($repository = array())
        {
        }
        /**
         * Determine if the given configuration value exists.
         *
         * @param  string  $key
         * @return bool
         */
        public function has($key)
        {
        }
        /**
         * Get all of the configuration items for the application.
         *
         * @return array
         */
        public function all()
        {
        }
        /**
         * Get the specified configuration value.
         *
         * @param  array|string  $key
         * @param  mixed   $default
         * @return mixed
         */
        public function get($key = null, $default = null)
        {
        }
        /**
         * Set a given configuration value.
         *
         * @param  array|string  $key
         * @param  mixed   $value
         * @return void
         */
        public function set($key, $value)
        {
        }
        /**
         * Dynamic Getter
         * @param  string $key
         * @return mixed
         */
        public function __get($key = null)
        {
        }
        /**
         * Dynamic Setter
         * @param  string $key
         * @param  mixed $key
         * @return void
         */
        public function __set($key, $value)
        {
        }
        /**
         * Determine if the given item exists.
         *
         * @param  string  $key
         * @return bool
         */
        public function offsetExists($key)
        {
        }
        /**
         * Get an item.
         *
         * @param  string  $key
         * @return mixed
         */
        public function offsetGet($key)
        {
        }
        /**
         * Set an item.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return void
         */
        public function offsetSet($key, $value)
        {
        }
        /**
         * Unset an item.
         *
         * @param  string  $key
         * @return void
         */
        public function offsetUnset($key)
        {
        }
    }
    class ConfigProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
        /**
         * Loads all configuration files from config directory
         * @return void
         */
        public function loadConfig()
        {
        }
        /**
         * Get nested directory names joined by a "."
         * @param  string $file [A config file]
         * @param  string $configPath
         * @return string
         */
        protected function getDirectory($file, $configPath)
        {
        }
    }
}
namespace FluentForm\Framework\Exception {
    class ExceptionHandler
    {
        const APPEND_TO_LOG_FILE = 3;
        /**
         * framework\App\Application
         * @var Object
         */
        protected $app = null;
        public function __construct($app)
        {
        }
        public function registerHandlers()
        {
        }
        public function handleError($severity, $message, $file = '', $line = 0)
        {
        }
        public function handleException($e)
        {
        }
        public function handleShutdown()
        {
        }
        public function report($e)
        {
        }
        public function render($e)
        {
        }
        protected function isFatal($type)
        {
        }
    }
    class UnResolveableEntityException extends \Exception
    {
        // ...
    }
}
namespace FluentForm\Framework\Foundation {
    abstract class AppFacade
    {
        /**
         * $instance Application
         * @var FluentForm\Framework\Foundation\Application
         */
        static $instance = null;
        /**
         * Sets the app instance from Application
         * @param FluentForm\Framework\Foundation\Application $instance
         */
        public static function setApplication($instance)
        {
        }
        /**
         * Get the app instance stored earlier during the bootstrap
         * @param FluentForm\Framework\Foundation\Application $instance
         */
        public static function getApplication()
        {
        }
        /**
         * Resolve the aliased class dynamically
         * @param  string $method
         * @param  string $params
         * @return mixed
         */
        public static function __callStatic($method, $params)
        {
        }
    }
    class AppProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
        /**
         * The provider booted method to be called after booting
         * @return void
         */
        public function booted()
        {
        }
    }
    class Container implements \ArrayAccess
    {
        /**
         * $container The service container
         * @var array
         */
        protected static $container = array('facades' => array(), 'aliases' => array(), 'resolved' => array(), 'bindings' => array(), 'singletons' => array());
        /**
         * Bind an instance into service container
         * @param  string $key identifier
         * @param  mixed $concrete
         * @param  string $facade [optional facade]
         * @param  string $alias [optional alias]
         * @return void
         */
        public function bind($key, $concrete = null, $facade = null, $alias = null, $shared = false)
        {
        }
        /**
         * Bind a singleton instance into service container
         * @param  string $key identifier
         * @param  mixed $concrete
         * @param  string $facade [optional facade]
         * @param  string $alias [optional alias]
         * @return void
         */
        public function bindSingleton($key, $concrete = null, $facade = null, $alias = null)
        {
        }
        /**
         * Bind a singleton instance into service container
         * @param  string $key identifier
         * @param  mixed $concrete
         * @param  string $facade [optional facade]
         * @param  string $alias [optional alias]
         * @return void
         */
        public function bindInstance($key, $concrete, $facade = null, $alias = null)
        {
        }
        /**
         * Register a facade for a registered instance
         * @param  string $key
         * @param  string $facade
         * @return string
         */
        public function facade($key, $facade)
        {
        }
        /**
         * Register an alias for a registered instance
         * @param  string $key
         * @param  string $alias
         * @return string
         */
        public function alias($key, $aliases)
        {
        }
        /**
         * Resolve an instance from container
         * @param  string $key
         * @return mixed
         * @throws \FluentForm\Framework\Exception\UnResolveableEntityException
         */
        public function make($key = null, array $params = [])
        {
        }
        /**
         * Resolve an item from the container
         * @param  mixed $value
         * @return mixed
         */
        protected function resolve($value, $params = [])
        {
        }
        /**
         * Build a concrete class with all dependencies
         * @param string $value FQN class name
         * @return mixed resolved instance
         */
        protected function build($value, $params = [])
        {
        }
        /**
         * Resolve all dependencies of a single class
         * @param  array $dependencies Constructor Parameters
         * @return array An array of all the resolved dependencies of one class
         */
        protected function resolveDependencies(array $dependencies)
        {
        }
        /**
         * Resolves a single class instance
         * @param  ReflectionParameter $parameter
         * @return mixed
         * @throws Exception
         */
        protected function resolveClass(\ReflectionParameter $parameter)
        {
        }
        /**
         * Get the alias for a key if available.
         * @param  string  $key
         * @return string
         */
        public function getAlias($key)
        {
        }
        /**
         * Check if a given class/interface exists
         * @param  string $key
         * @return bool
         */
        protected function classExists($key)
        {
        }
        /**
         * Check if an item exists at a given offset
         * @param  string  $offset
         * @return bool
         */
        public function bound($offset)
        {
        }
        /**
         * Check if an item exists at a given offset
         * @param  string  $offset
         * @return bool
         */
        public function has($offset)
        {
        }
        /**
         * Check if an item exists at a given offset
         * @param  string  $offset
         * @return bool
         */
        public function offsetExists($offset)
        {
        }
        /**
         * Get the value from given offset
         * @param  string  $offset
         * @param  mixed   $value
         * @return void
         */
        public function offsetGet($offset)
        {
        }
        /**
         * Set the value at a given offset
         * @param  string  $offset
         * @param  mixed   $value
         * @return void
         */
        public function offsetSet($offset, $value)
        {
        }
        /**
         * Unset the value at a given offset
         * @param  string  $offset
         * @return void
         */
        public function offsetUnset($offset)
        {
        }
    }
    trait PathsAndUrlsTrait
    {
        /**
         * Get plugin's main file path
         * @return string [plugin file path]
         */
        public function baseFile()
        {
        }
        /**
         * Get plugin's root path
         * @param  string $path
         * @return string
         */
        public function path($path = '')
        {
        }
        /**
         * Get plugin's /app path
         * @param  string $path
         * @return string
         */
        public function appPath($path = '')
        {
        }
        /**
         * Get plugin's /config path
         * @param  string $path
         * @return string
         */
        public function configPath($path = '')
        {
        }
        /**
         * Get plugin's /framework path
         * @param  string $path
         * @return string
         */
        public function frameworkPath($path = '')
        {
        }
        /**
         * Get plugin's /resources path
         * @param  string $path
         * @return string
         */
        public function resourcePath($path = '')
        {
        }
        /**
         * Get plugin's /resources/languages path
         * @param  string $path
         * @return string
         */
        public function languagePath($path = '')
        {
        }
        /**
         * Get plugin's /storage path
         * @param  string $path
         * @return string
         */
        public function storagePath($path = '')
        {
        }
        /**
         * Get plugin's /resources/views path
         * @param  string $path
         * @return string
         */
        public function viewPath($path = '')
        {
        }
        /**
         * Get plugin's /resources/assets path
         * @param  string $path
         * @return string
         */
        public function assetPath($path = '')
        {
        }
        /**
         * Get plugin's /public path
         * @param  string $path
         * @return string
         */
        public function publicPath($path = '')
        {
        }
        /**
         * Get plugin's root url
         * @param  string $url
         * @return string
         */
        public function url($url = '')
        {
        }
        /**
         * Get plugin's /public url
         * @param  string $url
         * @return string
         */
        public function publicUrl($url = '')
        {
        }
        /**
         * Get plugin's /resources url
         * @param  string $url
         * @return string
         */
        public function resourceUrl($url = '')
        {
        }
        /**
         * Get plugin's /resources/assets url
         * @param  string $url
         * @return string
         */
        public function assetUrl($url = '')
        {
        }
    }
    trait SetGetAttributesTrait
    {
        /**
         * Dynamic getter for application
         * @param string $key
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Dynamic setter for application
         * @param string $key
         * @param mixed $value
         */
        public function __set($key, $value)
        {
        }
        /**
         * Getter for retrieving plugin's base file path
         * @return string
         */
        public function getBaseFile()
        {
        }
        /**
         * Get application's main config
         * @return array
         */
        public function getAppConfig()
        {
        }
        /**
         * Get application's providers
         * @param  string $type [core|plugin]
         * @return array
         */
        public function getProviders($type = null)
        {
        }
        /**
         * Get plugin name
         * @return string
         */
        public function getName()
        {
        }
        /**
         * Get plugin slug
         * @return string
         */
        public function getSlug()
        {
        }
        /**
         * Get plugin version
         * @return string
         */
        public function getVersion()
        {
        }
        /**
         * Get plugin root namespace
         * @return string
         */
        public function getNamespace()
        {
        }
        /**
         * Get plugin text domain
         * @return string
         */
        public function getTextDomain()
        {
        }
        /**
         * Get application evironment
         * @return string
         */
        public function getEnv()
        {
        }
    }
    trait FacadeLoaderTrait
    {
        /**
         * Register facade/alias loader
         * @return void
         */
        protected function registerAppFacadeLoader()
        {
        }
        /**
         * Facad/Alias loader
         * @param  [type] $class [description]
         * @return [type]        [description]
         */
        protected function aliasLoader($class)
        {
        }
        /**
         * Retrieve facade file content
         * @param  string $alias
         * @param  string $key
         * @return string
         */
        protected function getFileData($alias, $key)
        {
        }
    }
    trait HelpersTrait
    {
        /**
         * $hookReference Current action reference
         * @var null
         */
        protected $hookReference = null;
        /**
         * Load a file using include_once
         * @return boolean
         */
        public function load($file)
        {
        }
        /**
         * Checks if the user is on wp-admin area (visiting backend)
         * (It doesn't check whether user is authenticated ro not)
         * @return boolean
         */
        public function isUserOnAdminArea()
        {
        }
        /**
         * Application's callbacks parser
         * @param  mixed $args
         * @return mixed
         */
        public function parseHandler($args)
        {
        }
        /**
         * Make a unique key/hook with the application slug prefix
         * @param  string $tag
         * @param  string $prefix [optional prefix instead of app slug]
         * @return string
         */
        public function makeKey($tag, $prefix = null)
        {
        }
        /**
         * Add/Register an ajax action
         * @param string $tag [action name]
         * @param mixed $handler
         * @param integer $priority [optional]
         * @param string $scope [specify the scope of the ajax action|internal use]
         * @return Framework\Foundation\HookReference
         */
        private function addAjaxAction($tag, $handler, $priority = 10, $scope)
        {
        }
        /**
         * Add an ajax action for authenticated user
         * @param string $tag [action name]
         * @param mixed $handler
         * @param integer $priority [optional]
         * @return mixed [a reference to the handler to remove the action later]
         */
        public function addAdminAjaxAction($tag, $handler, $priority = 10)
        {
        }
        /**
         * Add an ajax action for unauthenticated user
         * @param string $tag [action name]
         * @param mixed $handler
         * @param integer $priority [optional]
         * @return mixed [a reference to the handler to remove the action later]
         */
        public function addPublicAjaxAction($tag, $handler, $priority = 10)
        {
        }
        /**
         * Remove/Unregister a registered ajax action
         * @param string $tag [action name]
         * @param mixed $handler [previously stored reference when added the action]
         * @param integer $priority [optional]
         * @param string $scope [specify the scope of the ajax action|internal use]
         * @return mixed [a reference to the handler to remove the action later]
         */
        private function removeAjaxAction($tag, $handler, $priority = 10, $scope)
        {
        }
        /**
         * Remove an ajax action for authenticated user
         * @param string $tag [action name]
         * @param mixed $handler [previously stored reference when added the action]
         * @param integer $priority [optional]
         * @return bool [true on success or false on failure]
         */
        public function removeAdminAjaxAction($tag, $handler, $priority = 10)
        {
        }
        /**
         * Remove an ajax action for unauthenticated user
         * @param string $tag [action name]
         * @param mixed $handler [previously stored reference when added the action]
         * @param integer $priority [optional]
         * @return bool [true on success or false on failure]
         */
        public function removePublicAjaxAction($tag, $handler, $priority = 10)
        {
        }
        /**
         * Add WordPress Filter
         * @param  string $tag
         * @param  mixed $handler
         * @param  integer $priority
         * @param  integer $acceptedArgs
         * @return Framework\Foundation\HookReference
         */
        public function addfilter($tag, $handler, $priority = 10, $acceptedArgs = 1)
        {
        }
        /**
         * Remove WordPress Filter.
         * @param  string $tag
         * @param  mixed  $handler
         * @param  integer $priority
         * @return true
         */
        public function removeFilter($tag, $handler, $priority = 10)
        {
        }
        /**
         * Remove WordPress' All Filters.
         * @param  string $tag
         * @param  boolean $priority
         * @return bool
         */
        public function removeFilters($tag, $priority = false)
        {
        }
        /**
         * Apply WordPress Filter.
         * @return mixed [filtered content]
         */
        public function applyFilters()
        {
        }
        /**
         * Add WordPress Action
         * @param  string $tag
         * @param  mixed $handler
         * @param  integer $priority
         * @param  integer $acceptedArgs
         * @return Framework\Foundation\HookReference
         */
        public function addAction($tag, $handler, $priority = 10, $acceptedArgs = 1)
        {
        }
        /**
         * Remove WordPress' Action.
         * @param  string $tag
         * @param  boolean $priority
         * @return bool
         */
        public function removeAction($tag, $handler, $priority = 10)
        {
        }
        /**
         * Remove WordPress' All Actions.
         * @param  string $tag
         * @param  boolean $priority
         * @return bool
         */
        public function removeActions($tag, $priority = false)
        {
        }
        /**
         * Do WordPress Action.
         * @return void
         */
        public function doAction()
        {
        }
        /**
         * Add WordPress Short Code.
         * @param string $tag
         * @param mixed $handler
         */
        public function addShortCode($tag, $handler)
        {
        }
        /**
         * Remove WordPress Short Code.
         * @param string $content
         * @param bool $ignoreHtml
         */
        public function removeShortCode($tag)
        {
        }
        /**
         * Do WordPress Short Code.
         * @param string $content
         * @param bool $ignoreHtml
         */
        public function doShortCode($tag, $atts, $content = null, $ignoreHtml = false)
        {
        }
        /**
         * Format the short content (make shortcode content string)
         * @param  string $tag
         * @param  array $atts
         * @param  string $content
         * @return string
         */
        public function formatShortCode($tag, $atts, $content = null)
        {
        }
        /**
         * Store a reference of last action handler
         * @param reference $ref (Reference of registered function/handler)
         * @param string $tag
         * @return $this
         */
        public function setHookReference($ref, $tag)
        {
        }
        /**
         * Save the hook's handler reference
         * @param  string $key
         * @return reference
         */
        public function saveReference($key = null)
        {
        }
        /**
         * Register any callback/middleware to run before ajax callback
         * @param  string $actionName
         * @param  mixed $fn (WordPress permission name/closure)
         * @return $this
         */
        public function before($action, $fn)
        {
        }
    }
    class Application extends \FluentForm\Framework\Foundation\Container
    {
        use \FluentForm\Framework\Foundation\PathsAndUrlsTrait, \FluentForm\Framework\Foundation\SetGetAttributesTrait, \FluentForm\Framework\Foundation\FacadeLoaderTrait, \FluentForm\Framework\Foundation\HelpersTrait;
        /**
         * Framework Version
         */
        const VERSION = '1.0.0';
        /**
         * $baseFile root plugin file path
         * @var string
         */
        protected $baseFile = null;
        /**
         * The app config (/config/app.php)
         * @var array
         */
        protected $appConfig = null;
        /**
         * Callbacks for framework's booted event
         * @var array
         */
        protected $engineBootedCallbacks = array();
        /**
         * Callbacks for framework's ready event
         * @var array
         */
        protected $pluginReadyCallbacks = array();
        /**
         * A flag to register the dynamic facade loader once
         * @var boolean
         */
        protected $isFacadeLoaderRegistered = false;
        /**
         * Get application version
         * @return string
         */
        public function version()
        {
        }
        /**
         * Init the application
         * @param string $baseFile (root plugin file path)
         * @param array $appConfig (/config/app.php)
         */
        public function __construct($baseFile, $appConfig)
        {
        }
        /**
         * Bootup the application
         * @param string $baseFile (root plugin file path)
         * @param array $appConfig (/config/app.php)
         * @return void
         */
        protected function bootstrapApplication()
        {
        }
        /**
         * Register application base bindings
         * @return  void
         */
        protected function setAppBaseBindings()
        {
        }
        /**
         * Bind application instance
         * @return  void
         */
        protected function bindAppInstance()
        {
        }
        /**
         * Set Application paths
         * @return void
         */
        protected function registerAppPaths()
        {
        }
        /**
         * Set Application urls
         * @return void
         */
        protected function registerAppUrls()
        {
        }
        /**
         * Set Application Exception Handler
         * @return void
         */
        protected function setExceptionHandler()
        {
        }
        /**
         * load languages path for i18n pot files
         * @return bool
         */
        protected function loadApplicationTextDomain()
        {
        }
        /**
         * Boot application with providers
         * @param  array $providers
         * @return void
         */
        public function bootstrapWith(array $providers)
        {
        }
        /**
         * Get engine/core providers
         * @return array
         */
        public function getEngineProviders()
        {
        }
        /**
         * Get plugin providers (Common)
         * @return array
         */
        public function getCommonProviders()
        {
        }
        /**
         * Get plugin providers (Backend|Frontend)
         * @return array
         */
        public function getPluginProviders()
        {
        }
        /**
         * Register booted events
         * @param  mixed $callback
         * @return void
         */
        public function booted($callback)
        {
        }
        /**
         * Register ready events
         * @param  mixed $callback
         * @return void
         */
        public function ready($callback)
        {
        }
        /**
         * Fire application event's handlers
         * @param  array  $callbacks
         * @return void
         */
        public function fireCallbacks(array $callbacks)
        {
        }
    }
    class Bootstrap
    {
        /**
         * The main plugin file path
         * @var strring
         */
        protected static $file = null;
        /**
         * The base dir path of the plugin
         * @var strring
         */
        protected static $basePath = null;
        /**
         * The app config (/config/app.php)
         * @var strring
         */
        protected static $config = array();
        /**
         * Conveniently start the framework
         * @param  string $file
         * @return $ */
        public static function run($file)
        {
        }
        /**
         * Initialize the framework
         * @param  string $file [the main plugin file path]
         * @return void
         */
        public static function init($file)
        {
        }
        /**
         * Register activation/deactivation hooks
         * @return void
         */
        public static function registerHooks()
        {
        }
        /**
         * Register activation hook
         * @return bool
         */
        public static function registerActivationHook()
        {
        }
        /**
         * Register deactivation hook
         * @return bool
         */
        public static function registerDeactivationHook()
        {
        }
        /**
         * Validate and activate the plugin
         * @return void
         */
        public static function activate()
        {
        }
        /**
         * Deactivate the plugin
         * @return void
         */
        public static function deactivate()
        {
        }
        /**
         * Validate the plugin by checking all rquired files/settings
         * @return void
         */
        public static function validatePlugin()
        {
        }
        /**
         * Register the autoloader
         * @return void
         */
        public static function registerAutoLoader()
        {
        }
        /**
         * Framework's custom autoloader
         * @param  string $class
         * @return mixed
         */
        public static function loader($class)
        {
        }
        /**
         * Register "plugins_loaded" hook to run the plugin
         * @return void
         */
        public static function registerApplication()
        {
        }
    }
    class HookReference
    {
        /**
         * $ref reference for any hook
         * @var null
         */
        private $ref = null;
        /**
         * construct the instance
         * @param Application $app
         * @param reference $ref
         * @param string $key
         */
        public function __construct(\FluentForm\Framework\Foundation\Application $app, $ref, $key = null)
        {
        }
        /**
         * Save the hook's handler reference
         * @param  string $key
         * @return reference
         */
        public function saveReference($key = null)
        {
        }
        /**
         * Get the reference
         * @return reference
         */
        public function reference()
        {
        }
    }
}
namespace FluentForm\Framework\Helpers {
    class ArrayHelper
    {
        /**
         * Taken from Illuminate\Support\Arr (Laravel Framework)
         */
        /**
         * Check if an item or items exist in an array using "dot" notation.
         *
         * @param  \ArrayAccess|array  $array
         * @param  string|array  $keys
         * @return bool
         */
        public static function has($array, $keys)
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
         * Determine whether the given value is array accessible.
         *
         * @param  mixed  $value
         * @return bool
         */
        public static function accessible($value)
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
         * Return the default value of the given value.
         *
         * @param  mixed  $value
         * @return mixed
         */
        public static function value($value)
        {
        }
        /**
         * Flatten a multi-dimensional associative array with dots.
         *
         * @param array $array
         * @param string $prepend
         *
         * @return array
         */
        public static function dot($array, $prepend = '')
        {
        }
    }
}
namespace FluentForm\Framework\Request {
    class File extends \SplFileInfo
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
    }
    class Request
    {
        /**
         * Handles HTTP files.
         */
        use \FluentForm\Framework\Request\FileHandler;
        protected $app = null;
        protected $headers = array();
        protected $server = array();
        protected $cookie = array();
        protected $json = array();
        protected $get = array();
        protected $post = array();
        protected $files = array();
        protected $request = array();
        public function __construct($app, $get, $post, $files)
        {
        }
        public function clean($request)
        {
        }
        public function trimAndStrip($value)
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
        /**
         * Get the files from the request.
         *
         * @return array
         */
        public function files()
        {
        }
        public function query($key = null)
        {
        }
        public function post($key = null)
        {
        }
        public function only($args)
        {
        }
        public function except($args)
        {
        }
        public function merge(array $data = [])
        {
        }
        /**
         * Get user ip address
         * @return string
         */
        public function getIp()
        {
        }
        public function server($key = null)
        {
        }
        public function header($key = null)
        {
        }
        public function cookie($key = null)
        {
        }
        /**
         * Taken and modified from Symfony
         */
        public function setHeaders()
        {
        }
    }
    class RequestProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
    }
}
namespace FluentForm\Framework\View {
    class View
    {
        protected $app = null;
        public function __construct($app)
        {
        }
        public function make($path, $data = [])
        {
        }
        public function render($path, $data = [])
        {
        }
    }
    class ViewProvider extends \FluentForm\Framework\Foundation\Provider
    {
        /**
         * The provider booting method to boot this provider
         * @return void
         */
        public function booting()
        {
        }
    }
}
namespace FluentForm {
    class AdminNotice extends \FluentForm\Framework\Foundation\AppFacade
    {
        static $key = 'adminNotice';
    }
    class App extends \FluentForm\Framework\Foundation\AppFacade
    {
        static $key = 'app';
    }
    class Config extends \FluentForm\Framework\Foundation\AppFacade
    {
        static $key = 'config';
    }
    class Request extends \FluentForm\Framework\Foundation\AppFacade
    {
        static $key = 'request';
    }
    class View extends \FluentForm\Framework\Foundation\AppFacade
    {
        static $key = 'view';
    }
}
namespace {
    function dd()
    {
    }
    /**
     * Get the path to a versioned Mix file.
     *
     * @param string $path
     * @param string $manifestDirectory
     *
     * @return string
     * @throws \Exception
     */
    function fluentformMix($path, $manifestDirectory = '')
    {
    }
    /**
     * Sanitize form inputs recursively.
     *
     * @param $input
     *
     * @return string $input
     */
    function fluentFormSanitizer($input, $attribute = \null, $fields = [])
    {
    }
    function fluentFormEditorShortCodes()
    {
    }
    /**
     * Recursively implode a multi-dimentional array
     * @param string $glue
     * @param array $array
     * @return string
     */
    function implodeRecursive($glue, array $array)
    {
    }
    function fluentValidator($data = [], $rules = [], $messages = [])
    {
    }
    /**
     * @return \WpFluent\QueryBuilder\QueryBuilderHandler
     */
    function wpFluent()
    {
    }
}