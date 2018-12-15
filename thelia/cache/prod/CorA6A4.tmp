<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class CoreProdProjectContainer extends \Thelia\Core\DependencyInjection\TheliaContainer
{
    private $parameters;
    private $targetDirs = array();
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'assetic.asset.manager' => 'getAssetic_Asset_ManagerService',
            'base_http_kernel' => 'getBaseHttpKernelService',
            'compass.assetic.filter' => 'getCompass_Assetic_FilterService',
            'controller.default' => 'getController_DefaultService',
            'controller.listener' => 'getController_ListenerService',
            'controller_resolver' => 'getControllerResolverService',
            'cssembed.assetic.filter' => 'getCssembed_Assetic_FilterService',
            'cssimport.assetic.filter' => 'getCssimport_Assetic_FilterService',
            'cssrewrite.assetic.filter' => 'getCssrewrite_Assetic_FilterService',
            'currency.converter' => 'getCurrency_ConverterService',
            'currency.converter.ecbprovider' => 'getCurrency_Converter_EcbproviderService',
            'error.listener' => 'getError_ListenerService',
            'esi' => 'getEsiService',
            'esi_listener' => 'getEsiListenerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'hookadminhome.hook.block_information' => 'getHookadminhome_Hook_BlockInformationService',
            'hookadminhome.hook.block_news' => 'getHookadminhome_Hook_BlockNewsService',
            'hookadminhome.hook.block_sales_statistics' => 'getHookadminhome_Hook_BlockSalesStatisticsService',
            'hookadminhome.hook.block_statistics' => 'getHookadminhome_Hook_BlockStatisticsService',
            'hookadminhome.hook.block_thelia_informations' => 'getHookadminhome_Hook_BlockTheliaInformationsService',
            'hookadminhome.hook.css' => 'getHookadminhome_Hook_CssService',
            'hookanalytics.hook.back' => 'getHookanalytics_Hook_BackService',
            'hookanalytics.hook.front' => 'getHookanalytics_Hook_FrontService',
            'hookcart.hook.front' => 'getHookcart_Hook_FrontService',
            'hookcontact.hook.front' => 'getHookcontact_Hook_FrontService',
            'hookcurrency.hook.front' => 'getHookcurrency_Hook_FrontService',
            'hookcustomer.hook.front' => 'getHookcustomer_Hook_FrontService',
            'hooklang.hook.front' => 'getHooklang_Hook_FrontService',
            'hooklinks.hook.front' => 'getHooklinks_Hook_FrontService',
            'hooknavigation.hook.front' => 'getHooknavigation_Hook_FrontService',
            'hooknewsletter.hook.front' => 'getHooknewsletter_Hook_FrontService',
            'hookproductsnew.hook.front' => 'getHookproductsnew_Hook_FrontService',
            'hookproductsoffer.hook.front' => 'getHookproductsoffer_Hook_FrontService',
            'hooksearch.hook.front' => 'getHooksearch_Hook_FrontService',
            'hooksocial.hook.back' => 'getHooksocial_Hook_BackService',
            'hooksocial.hook.front' => 'getHooksocial_Hook_FrontService',
            'http_kernel' => 'getHttpKernelService',
            'initparam.middleware' => 'getInitparam_MiddlewareService',
            'intellij.hook.menu' => 'getIntellij_Hook_MenuService',
            'kernel' => 'getKernelService',
            'less.assetic.filter' => 'getLess_Assetic_FilterService',
            'listener.router' => 'getListener_RouterService',
            'mailer' => 'getMailerService',
            'module.front' => 'getModule_FrontService',
            'module.hookadminhome' => 'getModule_HookadminhomeService',
            'module.hookanalytics' => 'getModule_HookanalyticsService',
            'module.hookcart' => 'getModule_HookcartService',
            'module.hookcontact' => 'getModule_HookcontactService',
            'module.hookcurrency' => 'getModule_HookcurrencyService',
            'module.hookcustomer' => 'getModule_HookcustomerService',
            'module.hooklang' => 'getModule_HooklangService',
            'module.hooklinks' => 'getModule_HooklinksService',
            'module.hooknavigation' => 'getModule_HooknavigationService',
            'module.hooknewsletter' => 'getModule_HooknewsletterService',
            'module.hookproductsnew' => 'getModule_HookproductsnewService',
            'module.hookproductsoffer' => 'getModule_HookproductsofferService',
            'module.hooksearch' => 'getModule_HooksearchService',
            'module.hooksocial' => 'getModule_HooksocialService',
            'module.intellij' => 'getModule_IntellijService',
            'module.theliasmarty' => 'getModule_TheliasmartyService',
            'module.virtualproductcontrol' => 'getModule_VirtualproductcontrolService',
            'request' => 'getRequestService',
            'request.context' => 'getRequest_ContextService',
            'request_stack' => 'getRequestStackService',
            'response.listener' => 'getResponse_ListenerService',
            'router.admin' => 'getRouter_AdminService',
            'router.api' => 'getRouter_ApiService',
            'router.chainrequest' => 'getRouter_ChainrequestService',
            'router.filelocator' => 'getRouter_FilelocatorService',
            'router.front' => 'getRouter_FrontService',
            'router.hookadminhome' => 'getRouter_HookadminhomeService',
            'router.hookanalytics' => 'getRouter_HookanalyticsService',
            'router.hooknavigation' => 'getRouter_HooknavigationService',
            'router.hooksocial' => 'getRouter_HooksocialService',
            'router.intellij' => 'getRouter_IntellijService',
            'router.module.filelocator' => 'getRouter_Module_FilelocatorService',
            'router.module.xmlloader' => 'getRouter_Module_XmlloaderService',
            'router.rewrite' => 'getRouter_RewriteService',
            'router.xmlloader' => 'getRouter_XmlloaderService',
            'sass.assetic.filter' => 'getSass_Assetic_FilterService',
            'service_container' => 'getServiceContainerService',
            'session.listener' => 'getSession_ListenerService',
            'session.middleware' => 'getSession_MiddlewareService',
            'smart.plugin.form' => 'getSmart_Plugin_FormService',
            'smarty.plugin.adminutilities' => 'getSmarty_Plugin_AdminutilitiesService',
            'smarty.plugin.assets' => 'getSmarty_Plugin_AssetsService',
            'smarty.plugin.cache' => 'getSmarty_Plugin_CacheService',
            'smarty.plugin.cartpostage' => 'getSmarty_Plugin_CartpostageService',
            'smarty.plugin.dataaccess' => 'getSmarty_Plugin_DataaccessService',
            'smarty.plugin.esi' => 'getSmarty_Plugin_EsiService',
            'smarty.plugin.flashmessage' => 'getSmarty_Plugin_FlashmessageService',
            'smarty.plugin.format' => 'getSmarty_Plugin_FormatService',
            'smarty.plugin.hook' => 'getSmarty_Plugin_HookService',
            'smarty.plugin.module' => 'getSmarty_Plugin_ModuleService',
            'smarty.plugin.render' => 'getSmarty_Plugin_RenderService',
            'smarty.plugin.security' => 'getSmarty_Plugin_SecurityService',
            'smarty.plugin.thelialoop' => 'getSmarty_Plugin_ThelialoopService',
            'smarty.plugin.translation' => 'getSmarty_Plugin_TranslationService',
            'smarty.plugin.type' => 'getSmarty_Plugin_TypeService',
            'smarty.url.module' => 'getSmarty_Url_ModuleService',
            'stack_factory' => 'getStackFactoryService',
            'test.client' => 'getTest_ClientService',
            'test.client.cookiejar' => 'getTest_Client_CookiejarService',
            'test.client.history' => 'getTest_Client_HistoryService',
            'thelia.action.address' => 'getThelia_Action_AddressService',
            'thelia.action.administrator' => 'getThelia_Action_AdministratorService',
            'thelia.action.api' => 'getThelia_Action_ApiService',
            'thelia.action.area' => 'getThelia_Action_AreaService',
            'thelia.action.attribute' => 'getThelia_Action_AttributeService',
            'thelia.action.attributeav' => 'getThelia_Action_AttributeavService',
            'thelia.action.brand' => 'getThelia_Action_BrandService',
            'thelia.action.cache' => 'getThelia_Action_CacheService',
            'thelia.action.cart' => 'getThelia_Action_CartService',
            'thelia.action.category' => 'getThelia_Action_CategoryService',
            'thelia.action.config' => 'getThelia_Action_ConfigService',
            'thelia.action.content' => 'getThelia_Action_ContentService',
            'thelia.action.country' => 'getThelia_Action_CountryService',
            'thelia.action.coupon' => 'getThelia_Action_CouponService',
            'thelia.action.currency' => 'getThelia_Action_CurrencyService',
            'thelia.action.customer' => 'getThelia_Action_CustomerService',
            'thelia.action.customer_title' => 'getThelia_Action_CustomerTitleService',
            'thelia.action.document' => 'getThelia_Action_DocumentService',
            'thelia.action.export' => 'getThelia_Action_ExportService',
            'thelia.action.feature' => 'getThelia_Action_FeatureService',
            'thelia.action.featureav' => 'getThelia_Action_FeatureavService',
            'thelia.action.file' => 'getThelia_Action_FileService',
            'thelia.action.folder' => 'getThelia_Action_FolderService',
            'thelia.action.hook' => 'getThelia_Action_HookService',
            'thelia.action.httpexception' => 'getThelia_Action_HttpexceptionService',
            'thelia.action.image' => 'getThelia_Action_ImageService',
            'thelia.action.import' => 'getThelia_Action_ImportService',
            'thelia.action.lang' => 'getThelia_Action_LangService',
            'thelia.action.mailing_system' => 'getThelia_Action_MailingSystemService',
            'thelia.action.message' => 'getThelia_Action_MessageService',
            'thelia.action.module' => 'getThelia_Action_ModuleService',
            'thelia.action.module.delivery' => 'getThelia_Action_Module_DeliveryService',
            'thelia.action.module.payment' => 'getThelia_Action_Module_PaymentService',
            'thelia.action.modulehook' => 'getThelia_Action_ModulehookService',
            'thelia.action.newsletter' => 'getThelia_Action_NewsletterService',
            'thelia.action.order' => 'getThelia_Action_OrderService',
            'thelia.action.order_status' => 'getThelia_Action_OrderStatusService',
            'thelia.action.pdf' => 'getThelia_Action_PdfService',
            'thelia.action.product' => 'getThelia_Action_ProductService',
            'thelia.action.product_sale_element' => 'getThelia_Action_ProductSaleElementService',
            'thelia.action.profile' => 'getThelia_Action_ProfileService',
            'thelia.action.redirectexception' => 'getThelia_Action_RedirectexceptionService',
            'thelia.action.sale' => 'getThelia_Action_SaleService',
            'thelia.action.shippingzone' => 'getThelia_Action_ShippingzoneService',
            'thelia.action.state' => 'getThelia_Action_StateService',
            'thelia.action.tax' => 'getThelia_Action_TaxService',
            'thelia.action.taxrule' => 'getThelia_Action_TaxruleService',
            'thelia.action.template' => 'getThelia_Action_TemplateService',
            'thelia.action.translation' => 'getThelia_Action_TranslationService',
            'thelia.admin.base_controller' => 'getThelia_Admin_BaseControllerService',
            'thelia.admin.resources' => 'getThelia_Admin_ResourcesService',
            'thelia.archiver.bz2' => 'getThelia_Archiver_Bz2Service',
            'thelia.archiver.manager' => 'getThelia_Archiver_ManagerService',
            'thelia.archiver.tar' => 'getThelia_Archiver_TarService',
            'thelia.archiver.tgz' => 'getThelia_Archiver_TgzService',
            'thelia.archiver.zip' => 'getThelia_Archiver_ZipService',
            'thelia.cache' => 'getThelia_CacheService',
            'thelia.condition.cart_contains_categories' => 'getThelia_Condition_CartContainsCategoriesService',
            'thelia.condition.cart_contains_products' => 'getThelia_Condition_CartContainsProductsService',
            'thelia.condition.factory' => 'getThelia_Condition_FactoryService',
            'thelia.condition.for_some_customers' => 'getThelia_Condition_ForSomeCustomersService',
            'thelia.condition.match_billing_countries' => 'getThelia_Condition_MatchBillingCountriesService',
            'thelia.condition.match_delivery_countries' => 'getThelia_Condition_MatchDeliveryCountriesService',
            'thelia.condition.match_for_everyone' => 'getThelia_Condition_MatchForEveryoneService',
            'thelia.condition.match_for_total_amount' => 'getThelia_Condition_MatchForTotalAmountService',
            'thelia.condition.match_for_x_articles' => 'getThelia_Condition_MatchForXArticlesService',
            'thelia.condition.match_for_x_articles_include_quantity' => 'getThelia_Condition_MatchForXArticlesIncludeQuantityService',
            'thelia.condition.start_date' => 'getThelia_Condition_StartDateService',
            'thelia.condition.validator' => 'getThelia_Condition_ValidatorService',
            'thelia.coupon.factory' => 'getThelia_Coupon_FactoryService',
            'thelia.coupon.manager' => 'getThelia_Coupon_ManagerService',
            'thelia.coupon.type.free_product' => 'getThelia_Coupon_Type_FreeProductService',
            'thelia.coupon.type.remove_amount_on_attribute_av' => 'getThelia_Coupon_Type_RemoveAmountOnAttributeAvService',
            'thelia.coupon.type.remove_amount_on_categories' => 'getThelia_Coupon_Type_RemoveAmountOnCategoriesService',
            'thelia.coupon.type.remove_amount_on_products' => 'getThelia_Coupon_Type_RemoveAmountOnProductsService',
            'thelia.coupon.type.remove_percentage_on_attribute_av' => 'getThelia_Coupon_Type_RemovePercentageOnAttributeAvService',
            'thelia.coupon.type.remove_percentage_on_categories' => 'getThelia_Coupon_Type_RemovePercentageOnCategoriesService',
            'thelia.coupon.type.remove_percentage_on_products' => 'getThelia_Coupon_Type_RemovePercentageOnProductsService',
            'thelia.coupon.type.remove_x_amount' => 'getThelia_Coupon_Type_RemoveXAmountService',
            'thelia.coupon.type.remove_x_percent' => 'getThelia_Coupon_Type_RemoveXPercentService',
            'thelia.export.handler' => 'getThelia_Export_HandlerService',
            'thelia.facade' => 'getThelia_FacadeService',
            'thelia.file_manager' => 'getThelia_FileManagerService',
            'thelia.form.type.customer_title' => 'getThelia_Form_Type_CustomerTitleService',
            'thelia.form.type.customer_title_i18n' => 'getThelia_Form_Type_CustomerTitleI18nService',
            'thelia.form.type.field.accessory_id' => 'getThelia_Form_Type_Field_AccessoryIdService',
            'thelia.form.type.field.address_id' => 'getThelia_Form_Type_Field_AddressIdService',
            'thelia.form.type.field.admin_id' => 'getThelia_Form_Type_Field_AdminIdService',
            'thelia.form.type.field.admin_log_id' => 'getThelia_Form_Type_Field_AdminLogIdService',
            'thelia.form.type.field.api_id' => 'getThelia_Form_Type_Field_ApiIdService',
            'thelia.form.type.field.area_delivery_module_id' => 'getThelia_Form_Type_Field_AreaDeliveryModuleIdService',
            'thelia.form.type.field.area_id' => 'getThelia_Form_Type_Field_AreaIdService',
            'thelia.form.type.field.attribute_av' => 'getThelia_Form_Type_Field_AttributeAvService',
            'thelia.form.type.field.attribute_id' => 'getThelia_Form_Type_Field_AttributeIdService',
            'thelia.form.type.field.attribute_template_id' => 'getThelia_Form_Type_Field_AttributeTemplateIdService',
            'thelia.form.type.field.brand_id' => 'getThelia_Form_Type_Field_BrandIdService',
            'thelia.form.type.field.cart_id' => 'getThelia_Form_Type_Field_CartIdService',
            'thelia.form.type.field.cart_item_id' => 'getThelia_Form_Type_Field_CartItemIdService',
            'thelia.form.type.field.category_associated_content_id' => 'getThelia_Form_Type_Field_CategoryAssociatedContentIdService',
            'thelia.form.type.field.category_id' => 'getThelia_Form_Type_Field_CategoryIdService',
            'thelia.form.type.field.content_id' => 'getThelia_Form_Type_Field_ContentIdService',
            'thelia.form.type.field.country_id' => 'getThelia_Form_Type_Field_CountryIdService',
            'thelia.form.type.field.coupon_id' => 'getThelia_Form_Type_Field_CouponIdService',
            'thelia.form.type.field.currency_id' => 'getThelia_Form_Type_Field_CurrencyIdService',
            'thelia.form.type.field.customer_id' => 'getThelia_Form_Type_Field_CustomerIdService',
            'thelia.form.type.field.customer_title_id' => 'getThelia_Form_Type_Field_CustomerTitleIdService',
            'thelia.form.type.field.export_category_id' => 'getThelia_Form_Type_Field_ExportCategoryIdService',
            'thelia.form.type.field.export_id' => 'getThelia_Form_Type_Field_ExportIdService',
            'thelia.form.type.field.feature_av_id' => 'getThelia_Form_Type_Field_FeatureAvIdService',
            'thelia.form.type.field.feature_id' => 'getThelia_Form_Type_Field_FeatureIdService',
            'thelia.form.type.field.feature_product_id' => 'getThelia_Form_Type_Field_FeatureProductIdService',
            'thelia.form.type.field.feature_template_id' => 'getThelia_Form_Type_Field_FeatureTemplateIdService',
            'thelia.form.type.field.folder_id' => 'getThelia_Form_Type_Field_FolderIdService',
            'thelia.form.type.field.form_firewall_id' => 'getThelia_Form_Type_Field_FormFirewallIdService',
            'thelia.form.type.field.hook_id' => 'getThelia_Form_Type_Field_HookIdService',
            'thelia.form.type.field.import_category_id' => 'getThelia_Form_Type_Field_ImportCategoryIdService',
            'thelia.form.type.field.import_id' => 'getThelia_Form_Type_Field_ImportIdService',
            'thelia.form.type.field.lang_id' => 'getThelia_Form_Type_Field_LangIdService',
            'thelia.form.type.field.message_id' => 'getThelia_Form_Type_Field_MessageIdService',
            'thelia.form.type.field.meta_data_id' => 'getThelia_Form_Type_Field_MetaDataIdService',
            'thelia.form.type.field.module_config_id' => 'getThelia_Form_Type_Field_ModuleConfigIdService',
            'thelia.form.type.field.module_hook_id' => 'getThelia_Form_Type_Field_ModuleHookIdService',
            'thelia.form.type.field.module_id' => 'getThelia_Form_Type_Field_ModuleIdService',
            'thelia.form.type.field.newsletter_id' => 'getThelia_Form_Type_Field_NewsletterIdService',
            'thelia.form.type.field.order_address_id' => 'getThelia_Form_Type_Field_OrderAddressIdService',
            'thelia.form.type.field.order_coupon_id' => 'getThelia_Form_Type_Field_OrderCouponIdService',
            'thelia.form.type.field.order_id' => 'getThelia_Form_Type_Field_OrderIdService',
            'thelia.form.type.field.order_product_attribute_combination_id' => 'getThelia_Form_Type_Field_OrderProductAttributeCombinationIdService',
            'thelia.form.type.field.order_product_id' => 'getThelia_Form_Type_Field_OrderProductIdService',
            'thelia.form.type.field.order_product_tax_id' => 'getThelia_Form_Type_Field_OrderProductTaxIdService',
            'thelia.form.type.field.order_status_id' => 'getThelia_Form_Type_Field_OrderStatusIdService',
            'thelia.form.type.field.product_associated_content_id' => 'getThelia_Form_Type_Field_ProductAssociatedContentIdService',
            'thelia.form.type.field.product_id' => 'getThelia_Form_Type_Field_ProductIdService',
            'thelia.form.type.field.product_sale_elements_id' => 'getThelia_Form_Type_Field_ProductSaleElementsIdService',
            'thelia.form.type.field.profile_id' => 'getThelia_Form_Type_Field_ProfileIdService',
            'thelia.form.type.field.resource_id' => 'getThelia_Form_Type_Field_ResourceIdService',
            'thelia.form.type.field.rewriting_url_id' => 'getThelia_Form_Type_Field_RewritingUrlIdService',
            'thelia.form.type.field.sale_id' => 'getThelia_Form_Type_Field_SaleIdService',
            'thelia.form.type.field.sale_product_id' => 'getThelia_Form_Type_Field_SaleProductIdService',
            'thelia.form.type.field.state_id' => 'getThelia_Form_Type_Field_StateIdService',
            'thelia.form.type.field.tax_id' => 'getThelia_Form_Type_Field_TaxIdService',
            'thelia.form.type.field.tax_rule_id' => 'getThelia_Form_Type_Field_TaxRuleIdService',
            'thelia.form.type.field.template_id' => 'getThelia_Form_Type_Field_TemplateIdService',
            'thelia.form.type.image' => 'getThelia_Form_Type_ImageService',
            'thelia.form.type.product_sale_elements' => 'getThelia_Form_Type_ProductSaleElementsService',
            'thelia.form.type.standard_fields' => 'getThelia_Form_Type_StandardFieldsService',
            'thelia.form.type.tax_rule' => 'getThelia_Form_Type_TaxRuleService',
            'thelia.form.type.tax_rule_i18n' => 'getThelia_Form_Type_TaxRuleI18nService',
            'thelia.form_factory' => 'getThelia_FormFactoryService',
            'thelia.form_factory_builder' => 'getThelia_FormFactoryBuilderService',
            'thelia.form_validator' => 'getThelia_FormValidatorService',
            'thelia.forms.extension.core_extension' => 'getThelia_Forms_Extension_CoreExtensionService',
            'thelia.forms.extension.http_foundation_extension' => 'getThelia_Forms_Extension_HttpFoundationExtensionService',
            'thelia.forms.validator_builder' => 'getThelia_Forms_ValidatorBuilderService',
            'thelia.hookhelper' => 'getThelia_HookhelperService',
            'thelia.import.handler' => 'getThelia_Import_HandlerService',
            'thelia.listener.view' => 'getThelia_Listener_ViewService',
            'thelia.logger' => 'getThelia_LoggerService',
            'thelia.metadata' => 'getThelia_MetadataService',
            'thelia.parser' => 'getThelia_ParserService',
            'thelia.parser.asset.resolver' => 'getThelia_Parser_Asset_ResolverService',
            'thelia.parser.context' => 'getThelia_Parser_ContextService',
            'thelia.parser.helper' => 'getThelia_Parser_HelperService',
            'thelia.securitycontext' => 'getThelia_SecuritycontextService',
            'thelia.serializer.csv' => 'getThelia_Serializer_CsvService',
            'thelia.serializer.json' => 'getThelia_Serializer_JsonService',
            'thelia.serializer.manager' => 'getThelia_Serializer_ManagerService',
            'thelia.serializer.xml' => 'getThelia_Serializer_XmlService',
            'thelia.taxengine' => 'getThelia_TaxengineService',
            'thelia.template_helper' => 'getThelia_TemplateHelperService',
            'thelia.token_provider' => 'getThelia_TokenProviderService',
            'thelia.translator' => 'getThelia_TranslatorService',
            'thelia.url.manager' => 'getThelia_Url_ManagerService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'validators.translator' => 'getValidators_TranslatorService',
            'virtualproductcontrol.hook' => 'getVirtualproductcontrol_HookService',
        );
        $this->aliases = array();
    }
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }
    protected function getAssetic_Asset_ManagerService()
    {
        $this->services['assetic.asset.manager'] = $instance = new \Thelia\Core\Template\Assets\AsseticAssetManager(false);
        $instance->registerAssetFilter('less', $this->get('less.assetic.filter'));
        $instance->registerAssetFilter('sass', $this->get('sass.assetic.filter'));
        $instance->registerAssetFilter('cssembed', $this->get('cssembed.assetic.filter'));
        $instance->registerAssetFilter('cssrewrite', $this->get('cssrewrite.assetic.filter'));
        $instance->registerAssetFilter('cssimport', $this->get('cssimport.assetic.filter'));
        $instance->registerAssetFilter('compass', $this->get('compass.assetic.filter'));
        return $instance;
    }
    protected function getBaseHttpKernelService()
    {
        return $this->services['base_http_kernel'] = new \Thelia\Core\TheliaHttpKernel($this->get('event_dispatcher'), $this, $this->get('controller_resolver'), $this->get('request_stack'));
    }
    protected function getCompass_Assetic_FilterService()
    {
        return $this->services['compass.assetic.filter'] = new \Assetic\Filter\CompassFilter();
    }
    protected function getController_DefaultService()
    {
        return $this->services['controller.default'] = new \Thelia\Controller\DefaultController();
    }
    protected function getController_ListenerService()
    {
        return $this->services['controller.listener'] = new \Thelia\Core\EventListener\ControllerListener($this->get('thelia.securitycontext'));
    }
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Thelia\Core\Controller\ControllerResolver($this);
    }
    protected function getCssembed_Assetic_FilterService()
    {
        return $this->services['cssembed.assetic.filter'] = new \Assetic\Filter\PhpCssEmbedFilter();
    }
    protected function getCssimport_Assetic_FilterService()
    {
        return $this->services['cssimport.assetic.filter'] = new \Assetic\Filter\CssImportFilter();
    }
    protected function getCssrewrite_Assetic_FilterService()
    {
        return $this->services['cssrewrite.assetic.filter'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getCurrency_ConverterService()
    {
        $this->services['currency.converter'] = $instance = new \Thelia\CurrencyConverter\CurrencyConverter();
        $instance->setProvider($this->get('currency.converter.ecbprovider'));
        return $instance;
    }
    protected function getCurrency_Converter_EcbproviderService()
    {
        return $this->services['currency.converter.ecbprovider'] = new \Thelia\CurrencyConverter\Provider\ECBProvider();
    }
    protected function getError_ListenerService()
    {
        return $this->services['error.listener'] = new \Thelia\Core\EventListener\ErrorListener('prod', $this->get('thelia.parser'), $this->get('thelia.securitycontext'), $this->get('event_dispatcher'));
    }
    protected function getEsiService()
    {
        return $this->services['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi();
    }
    protected function getEsiListenerService()
    {
        return $this->services['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\EsiListener($this->get('esi', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addSubscriberService('thelia.action.module', 'Thelia\\Action\\Module');
        $instance->addSubscriberService('thelia.action.hook', 'Thelia\\Action\\Hook');
        $instance->addSubscriberService('thelia.action.modulehook', 'Thelia\\Action\\ModuleHook');
        $instance->addSubscriberService('thelia.action.order', 'Thelia\\Action\\Order');
        $instance->addSubscriberService('thelia.action.order_status', 'Thelia\\Action\\OrderStatus');
        $instance->addSubscriberService('thelia.action.coupon', 'Thelia\\Action\\Coupon');
        $instance->addSubscriberService('thelia.action.httpexception', 'Thelia\\Action\\HttpException');
        $instance->addSubscriberService('thelia.action.redirectexception', 'Thelia\\Action\\RedirectException');
        $instance->addSubscriberService('thelia.action.customer', 'Thelia\\Action\\Customer');
        $instance->addSubscriberService('thelia.action.address', 'Thelia\\Action\\Address');
        $instance->addSubscriberService('thelia.action.administrator', 'Thelia\\Action\\Administrator');
        $instance->addSubscriberService('thelia.action.cart', 'Thelia\\Action\\Cart');
        $instance->addSubscriberService('thelia.action.file', 'Thelia\\Action\\File');
        $instance->addSubscriberService('thelia.action.image', 'Thelia\\Action\\Image');
        $instance->addSubscriberService('thelia.action.document', 'Thelia\\Action\\Document');
        $instance->addSubscriberService('thelia.action.category', 'Thelia\\Action\\Category');
        $instance->addSubscriberService('thelia.action.product', 'Thelia\\Action\\Product');
        $instance->addSubscriberService('thelia.action.product_sale_element', 'Thelia\\Action\\ProductSaleElement');
        $instance->addSubscriberService('thelia.action.config', 'Thelia\\Action\\Config');
        $instance->addSubscriberService('thelia.action.message', 'Thelia\\Action\\Message');
        $instance->addSubscriberService('thelia.action.currency', 'Thelia\\Action\\Currency');
        $instance->addSubscriberService('thelia.action.template', 'Thelia\\Action\\Template');
        $instance->addSubscriberService('thelia.action.attribute', 'Thelia\\Action\\Attribute');
        $instance->addSubscriberService('thelia.action.feature', 'Thelia\\Action\\Feature');
        $instance->addSubscriberService('thelia.action.attributeav', 'Thelia\\Action\\AttributeAv');
        $instance->addSubscriberService('thelia.action.featureav', 'Thelia\\Action\\FeatureAv');
        $instance->addSubscriberService('thelia.action.folder', 'Thelia\\Action\\Folder');
        $instance->addSubscriberService('thelia.action.taxrule', 'Thelia\\Action\\TaxRule');
        $instance->addSubscriberService('thelia.action.tax', 'Thelia\\Action\\Tax');
        $instance->addSubscriberService('thelia.action.content', 'Thelia\\Action\\Content');
        $instance->addSubscriberService('thelia.action.brand', 'Thelia\\Action\\Brand');
        $instance->addSubscriberService('thelia.action.pdf', 'Thelia\\Action\\Pdf');
        $instance->addSubscriberService('thelia.action.country', 'Thelia\\Action\\Country');
        $instance->addSubscriberService('thelia.action.state', 'Thelia\\Action\\State');
        $instance->addSubscriberService('thelia.action.area', 'Thelia\\Action\\Area');
        $instance->addSubscriberService('thelia.action.shippingzone', 'Thelia\\Action\\ShippingZone');
        $instance->addSubscriberService('thelia.action.cache', 'Thelia\\Action\\Cache');
        $instance->addSubscriberService('thelia.action.profile', 'Thelia\\Action\\Profile');
        $instance->addSubscriberService('thelia.action.mailing_system', 'Thelia\\Action\\MailingSystem');
        $instance->addSubscriberService('thelia.action.newsletter', 'Thelia\\Action\\Newsletter');
        $instance->addSubscriberService('thelia.action.lang', 'Thelia\\Action\\Lang');
        $instance->addSubscriberService('thelia.action.export', 'Thelia\\Action\\Export');
        $instance->addSubscriberService('thelia.action.import', 'Thelia\\Action\\Import');
        $instance->addSubscriberService('thelia.action.sale', 'Thelia\\Action\\Sale');
        $instance->addSubscriberService('thelia.metadata', 'Thelia\\Action\\MetaData');
        $instance->addSubscriberService('thelia.action.api', 'Thelia\\Action\\Api');
        $instance->addSubscriberService('thelia.action.customer_title', 'Thelia\\Action\\CustomerTitle');
        $instance->addSubscriberService('thelia.action.translation', 'Thelia\\Action\\Translation');
        $instance->addSubscriberService('thelia.action.module.delivery', 'Thelia\\Action\\Delivery');
        $instance->addSubscriberService('thelia.action.module.payment', 'Thelia\\Action\\Payment');
        $instance->addSubscriberService('esi_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\EsiListener');
        $instance->addSubscriberService('less.assetic.filter', 'Thelia\\Core\\Template\\Assets\\Filter\\LessDotPhpFilter');
        $instance->addSubscriberService('response.listener', 'Thelia\\Core\\EventListener\\ResponseListener');
        $instance->addSubscriberService('session.listener', 'Thelia\\Core\\EventListener\\SessionListener');
        $instance->addSubscriberService('controller.listener', 'Thelia\\Core\\EventListener\\ControllerListener');
        $instance->addSubscriberService('error.listener', 'Thelia\\Core\\EventListener\\ErrorListener');
        $instance->addSubscriberService('thelia.listener.view', 'Thelia\\Core\\EventListener\\ViewListener');
        $instance->addSubscriberService('listener.router', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('validators.translator', 'Thelia\\Core\\EventListener\\RequestListener');
        $instance->addListenerService('hook.1.main.head-bottom', array(0 => 'hooksearch.hook.front', 1 => 'insertTemplate'), 999);
        $instance->addListenerService('hook.1.main.head-bottom', array(0 => 'hookcustomer.hook.front', 1 => 'insertTemplate'), 998);
        $instance->addListenerService('hook.1.main.head-bottom', array(0 => 'hookcart.hook.front', 1 => 'insertTemplate'), 997);
        $instance->addListenerService('hook.1.main.head-bottom', array(0 => 'hookanalytics.hook.front', 1 => 'onMainHeadBottom'), 996);
        $instance->addListenerService('hook.1.main.navbar-secondary', array(0 => 'hookcurrency.hook.front', 1 => 'insertTemplate'), 999);
        $instance->addListenerService('hook.1.main.navbar-secondary', array(0 => 'hooklang.hook.front', 1 => 'insertTemplate'), 998);
        $instance->addListenerService('hook.1.main.navbar-secondary', array(0 => 'hooksearch.hook.front', 1 => 'insertTemplate'), 997);
        $instance->addListenerService('hook.1.main.navbar-secondary', array(0 => 'hookcustomer.hook.front', 1 => 'insertTemplate'), 996);
        $instance->addListenerService('hook.1.main.navbar-secondary', array(0 => 'hookcart.hook.front', 1 => 'insertTemplate'), 995);
        $instance->addListenerService('hook.1.main.navbar-primary', array(0 => 'hooknavigation.hook.front', 1 => 'insertTemplate'), 998);
        $instance->addListenerService('hook.1.main.footer-body', array(0 => 'hookcontact.hook.front', 1 => 'onMainFooterBody'), 999);
        $instance->addListenerService('hook.1.main.footer-body', array(0 => 'hooklinks.hook.front', 1 => 'onMainFooterBody'), 998);
        $instance->addListenerService('hook.1.main.footer-body', array(0 => 'hooknavigation.hook.front', 1 => 'onMainFooterBody'), 997);
        $instance->addListenerService('hook.1.main.footer-body', array(0 => 'hooknewsletter.hook.front', 1 => 'onMainFooterBody'), 996);
        $instance->addListenerService('hook.1.main.footer-body', array(0 => 'hooksocial.hook.front', 1 => 'onMainFooterBody'), 995);
        $instance->addListenerService('hook.1.main.footer-bottom', array(0 => 'hooknavigation.hook.front', 1 => 'onMainFooterBottom'), 999);
        $instance->addListenerService('hook.1.home.body', array(0 => 'hookproductsnew.hook.front', 1 => 'insertTemplate'), 999);
        $instance->addListenerService('hook.1.home.body', array(0 => 'hookproductsoffer.hook.front', 1 => 'insertTemplate'), 998);
        $instance->addListenerService('hook.1.mini-cart', array(0 => 'hookcart.hook.front', 1 => 'insertTemplate'), 999);
        $instance->addListenerService('hook.2.home.top', array(0 => 'hookadminhome.hook.block_information', 1 => 'insertTemplate'), 999);
        $instance->addListenerService('hook.2.home.top', array(0 => 'hookadminhome.hook.block_statistics', 1 => 'blockStatistics'), 998);
        $instance->addListenerService('hook.2.home.js', array(0 => 'hookadminhome.hook.block_statistics', 1 => 'blockStatisticsJs'), 999);
        $instance->addListenerService('hook.2.home.js', array(0 => 'hookadminhome.hook.block_news', 1 => 'insertTemplate'), 998);
        $instance->addListenerService('hook.2.module.configuration.12', array(0 => 'hookanalytics.hook.back', 1 => 'insertTemplate'), 999);
        $instance->addListenerService('hook.2.module.configuration.16', array(0 => 'hooksocial.hook.back', 1 => 'insertTemplate'), 998);
        $instance->addListenerService('hook.2.module.config-js.12', array(0 => 'hookanalytics.hook.back', 1 => 'insertTemplate'), 999);
        $instance->addListenerService('hook.2.module.config-js.16', array(0 => 'hooksocial.hook.back', 1 => 'insertTemplate'), 998);
        $instance->addListenerService('hook.2.main.head-css', array(0 => 'hookadminhome.hook.css', 1 => 'insertTemplate'), 999);
        $instance->addListenerService('hook.2.main.in-top-menu-items', array(0 => 'intellij.hook.menu', 1 => 'renderMenuItem'), 999);
        $instance->addListenerService('hook.2.home.block', array(0 => 'hookadminhome.hook.block_sales_statistics', 1 => 'blockSalesStatistics'), 999);
        $instance->addListenerService('hook.2.home.block', array(0 => 'hookadminhome.hook.block_news', 1 => 'blockNews'), 998);
        $instance->addListenerService('hook.2.home.block', array(0 => 'hookadminhome.hook.block_thelia_informations', 1 => 'blockTheliaInformation'), 997);
        $instance->addListenerService('hook.2.main.before-content', array(0 => 'virtualproductcontrol.hook', 1 => 'onMainBeforeContent'), 999);
        return $instance;
    }
    protected function getFragment_Renderer_EsiService()
    {
        return $this->services['fragment.renderer.esi'] = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer($this->get('esi'), $this->get('fragment.renderer.inline'));
    }
    protected function getFragment_Renderer_InlineService()
    {
        return $this->services['fragment.renderer.inline'] = new \Thelia\Core\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'));
    }
    protected function getHookadminhome_Hook_BlockInformationService()
    {
        $this->services['hookadminhome.hook.block_information'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.2.home.top', 'render:block-information.html');
        $instance->module = $this->get('module.hookadminhome');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookadminhome_Hook_BlockNewsService()
    {
        $this->services['hookadminhome.hook.block_news'] = $instance = new \HookAdminHome\Hook\AdminHook();
        $instance->addTemplate('hook.2.home.js', 'render:block-news-js.html');
        $instance->module = $this->get('module.hookadminhome');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookadminhome_Hook_BlockSalesStatisticsService()
    {
        $this->services['hookadminhome.hook.block_sales_statistics'] = $instance = new \HookAdminHome\Hook\AdminHook();
        $instance->module = $this->get('module.hookadminhome');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookadminhome_Hook_BlockStatisticsService()
    {
        $this->services['hookadminhome.hook.block_statistics'] = $instance = new \HookAdminHome\Hook\AdminHook();
        $instance->module = $this->get('module.hookadminhome');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookadminhome_Hook_BlockTheliaInformationsService()
    {
        $this->services['hookadminhome.hook.block_thelia_informations'] = $instance = new \HookAdminHome\Hook\AdminHook();
        $instance->module = $this->get('module.hookadminhome');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookadminhome_Hook_CssService()
    {
        $this->services['hookadminhome.hook.css'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.2.main.head-css', 'css:assets/css/home.css');
        $instance->module = $this->get('module.hookadminhome');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookanalytics_Hook_BackService()
    {
        $this->services['hookanalytics.hook.back'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.2.module.configuration.12', 'render:module_configuration.html');
        $instance->addTemplate('hook.2.module.config-js.12', 'js:assets/js/module-configuration.js');
        $instance->module = $this->get('module.hookanalytics');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookanalytics_Hook_FrontService()
    {
        $this->services['hookanalytics.hook.front'] = $instance = new \HookAnalytics\Hook\FrontHook();
        $instance->module = $this->get('module.hookanalytics');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookcart_Hook_FrontService()
    {
        $this->services['hookcart.hook.front'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.1.main.head-bottom', 'css:assets/css/styles.css');
        $instance->addTemplate('hook.1.main.navbar-secondary', 'main-navbar-secondary.html');
        $instance->addTemplate('hook.1.mini-cart', 'render:mini-cart.html');
        $instance->module = $this->get('module.hookcart');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookcontact_Hook_FrontService()
    {
        $this->services['hookcontact.hook.front'] = $instance = new \HookContact\Hook\FrontHook();
        $instance->module = $this->get('module.hookcontact');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookcurrency_Hook_FrontService()
    {
        $this->services['hookcurrency.hook.front'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.1.main.navbar-secondary', 'render:main-navbar-secondary.html');
        $instance->module = $this->get('module.hookcurrency');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookcustomer_Hook_FrontService()
    {
        $this->services['hookcustomer.hook.front'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.1.main.head-bottom', 'css:assets/css/styles.css');
        $instance->addTemplate('hook.1.main.navbar-secondary', 'render:main-navbar-secondary.html');
        $instance->module = $this->get('module.hookcustomer');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHooklang_Hook_FrontService()
    {
        $this->services['hooklang.hook.front'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.1.main.navbar-secondary', 'render:main-navbar-secondary.html');
        $instance->module = $this->get('module.hooklang');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHooklinks_Hook_FrontService()
    {
        $this->services['hooklinks.hook.front'] = $instance = new \HookLinks\Hook\FrontHook();
        $instance->module = $this->get('module.hooklinks');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHooknavigation_Hook_FrontService()
    {
        $this->services['hooknavigation.hook.front'] = $instance = new \HookNavigation\Hook\FrontHook();
        $instance->addTemplate('hook.1.main.navbar-primary', 'render:main-navbar-primary.html');
        $instance->module = $this->get('module.hooknavigation');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHooknewsletter_Hook_FrontService()
    {
        $this->services['hooknewsletter.hook.front'] = $instance = new \HookNewsletter\Hook\FrontHook();
        $instance->module = $this->get('module.hooknewsletter');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookproductsnew_Hook_FrontService()
    {
        $this->services['hookproductsnew.hook.front'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.1.home.body', 'render:home-body.html');
        $instance->module = $this->get('module.hookproductsnew');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHookproductsoffer_Hook_FrontService()
    {
        $this->services['hookproductsoffer.hook.front'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.1.home.body', 'render:home-body.html');
        $instance->module = $this->get('module.hookproductsoffer');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHooksearch_Hook_FrontService()
    {
        $this->services['hooksearch.hook.front'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.1.main.head-bottom', 'css:assets/css/styles.css');
        $instance->addTemplate('hook.1.main.navbar-secondary', 'render:main-navbar-secondary.html');
        $instance->module = $this->get('module.hooksearch');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHooksocial_Hook_BackService()
    {
        $this->services['hooksocial.hook.back'] = $instance = new \Thelia\Core\Hook\DefaultHook();
        $instance->addTemplate('hook.2.module.configuration.16', 'render:module_configuration.html');
        $instance->addTemplate('hook.2.module.config-js.16', 'js:assets/js/module-configuration.js');
        $instance->module = $this->get('module.hooksocial');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHooksocial_Hook_FrontService()
    {
        $this->services['hooksocial.hook.front'] = $instance = new \HookSocial\Hook\FrontHook();
        $instance->module = $this->get('module.hooksocial');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = $this->get('stack_factory')->resolve($this->get('base_http_kernel'));
    }
    protected function getInitparam_MiddlewareService()
    {
        return $this->services['initparam.middleware'] = new \Thelia\Core\Stack\ParamInitMiddleware($this->get('thelia.url.manager'), $this->get('thelia.translator'), $this->get('event_dispatcher'));
    }
    protected function getIntellij_Hook_MenuService()
    {
        $this->services['intellij.hook.menu'] = $instance = new \IntelliJ\Hook\MenuHook();
        $instance->module = $this->get('module.intellij');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getLess_Assetic_FilterService()
    {
        return $this->services['less.assetic.filter'] = new \Thelia\Core\Template\Assets\Filter\LessDotPhpFilter('prod');
    }
    protected function getListener_RouterService()
    {
        return $this->services['listener.router'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router.chainrequest'));
    }
    protected function getMailerService()
    {
        return $this->services['mailer'] = new \Thelia\Mailer\MailerFactory($this->get('event_dispatcher'), $this->get('thelia.parser'));
    }
    protected function getModule_FrontService()
    {
        $this->services['module.front'] = $instance = new \Front\Front();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HookadminhomeService()
    {
        $this->services['module.hookadminhome'] = $instance = new \HookAdminHome\HookAdminHome();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HookanalyticsService()
    {
        $this->services['module.hookanalytics'] = $instance = new \HookAnalytics\HookAnalytics();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HookcartService()
    {
        $this->services['module.hookcart'] = $instance = new \HookCart\HookCart();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HookcontactService()
    {
        $this->services['module.hookcontact'] = $instance = new \HookContact\HookContact();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HookcurrencyService()
    {
        $this->services['module.hookcurrency'] = $instance = new \HookCurrency\HookCurrency();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HookcustomerService()
    {
        $this->services['module.hookcustomer'] = $instance = new \HookCustomer\HookCustomer();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HooklangService()
    {
        $this->services['module.hooklang'] = $instance = new \HookLang\HookLang();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HooklinksService()
    {
        $this->services['module.hooklinks'] = $instance = new \HookLinks\HookLinks();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HooknavigationService()
    {
        $this->services['module.hooknavigation'] = $instance = new \HookNavigation\HookNavigation();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HooknewsletterService()
    {
        $this->services['module.hooknewsletter'] = $instance = new \HookNewsletter\HookNewsletter();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HookproductsnewService()
    {
        $this->services['module.hookproductsnew'] = $instance = new \HookProductsNew\HookProductsNew();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HookproductsofferService()
    {
        $this->services['module.hookproductsoffer'] = $instance = new \HookProductsOffer\HookProductsOffer();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HooksearchService()
    {
        $this->services['module.hooksearch'] = $instance = new \HookSearch\HookSearch();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_HooksocialService()
    {
        $this->services['module.hooksocial'] = $instance = new \HookSocial\HookSocial();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_IntellijService()
    {
        $this->services['module.intellij'] = $instance = new \IntelliJ\IntelliJ();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_TheliasmartyService()
    {
        $this->services['module.theliasmarty'] = $instance = new \TheliaSmarty\TheliaSmarty();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getModule_VirtualproductcontrolService()
    {
        $this->services['module.virtualproductcontrol'] = $instance = new \VirtualProductControl\VirtualProductControl();
        $instance->setContainer($this);
        return $instance;
    }
    protected function getRequestService()
    {
        return $this->services['request'] = new \Thelia\Core\HttpFoundation\Request();
    }
    protected function getRequest_ContextService()
    {
        return $this->services['request.context'] = new \Symfony\Component\Routing\RequestContext();
    }
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }
    protected function getResponse_ListenerService()
    {
        return $this->services['response.listener'] = new \Thelia\Core\EventListener\ResponseListener();
    }
    protected function getRouter_AdminService()
    {
        $this->services['router.admin'] = $instance = new \Symfony\Component\Routing\Router($this->get('router.xmlloader'), 'admin.xml', array('cache_dir' => __DIR__, 'debug' => false), $this->get('request.context'));
        $instance->setOption('matcher_cache_class', 'ProjectUrlMatcherrouter_Admin');
        $instance->setOption('generator_cache_class', 'ProjectUrlGeneratorrouter_Admin');
        return $instance;
    }
    protected function getRouter_ApiService()
    {
        $this->services['router.api'] = $instance = new \Symfony\Component\Routing\Router($this->get('router.xmlloader'), 'api.xml', array('cache_dir' => __DIR__, 'debug' => false), $this->get('request.context'));
        $instance->setOption('matcher_cache_class', 'ProjectUrlMatcherrouter_Api');
        $instance->setOption('generator_cache_class', 'ProjectUrlGeneratorrouter_Api');
        return $instance;
    }
    protected function getRouter_ChainrequestService()
    {
        $this->services['router.chainrequest'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter();
        $instance->setContext($this->get('request.context'));
        $instance->add($this->get('router.admin'), 0);
        $instance->add($this->get('router.api'), 0);
        $instance->add($this->get('router.rewrite'), 255);
        $instance->add($this->get('router.front'), 128);
        $instance->add($this->get('router.hookanalytics'), 158);
        $instance->add($this->get('router.hooknavigation'), 161);
        $instance->add($this->get('router.hooksocial'), 163);
        $instance->add($this->get('router.hookadminhome'), 168);
        $instance->add($this->get('router.intellij'), 171);
        return $instance;
    }
    protected function getRouter_FilelocatorService()
    {
        return $this->services['router.filelocator'] = new \Symfony\Component\Config\FileLocator(($this->targetDirs[2].'\\core\\lib\\Thelia/Config/Resources/routing'));
    }
    protected function getRouter_FrontService()
    {
        $this->services['router.front'] = $instance = new \Symfony\Component\Routing\Router($this->get('router.module.xmlloader'), 'Front/Config/front.xml', array('cache_dir' => __DIR__, 'debug' => false), $this->get('request.context'));
        $instance->setOption('matcher_cache_class', 'ProjectUrlMatcherrouter_Front');
        $instance->setOption('generator_cache_class', 'ProjectUrlGeneratorrouter_Front');
        return $instance;
    }
    protected function getRouter_HookadminhomeService()
    {
        return $this->services['router.hookadminhome'] = new \Symfony\Component\Routing\Router($this->get('router.module.xmlloader'), ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\Config\\routing.xml'), array('cache_dir' => __DIR__, 'debug' => false, 'matcher_cache_class' => 'ProjectUrlMatcherHookAdminHome', 'generator_cache_class' => 'ProjectUrlGeneratorHookAdminHome'), $this->get('request.context'));
    }
    protected function getRouter_HookanalyticsService()
    {
        return $this->services['router.hookanalytics'] = new \Symfony\Component\Routing\Router($this->get('router.module.xmlloader'), ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\Config\\routing.xml'), array('cache_dir' => __DIR__, 'debug' => false, 'matcher_cache_class' => 'ProjectUrlMatcherHookAnalytics', 'generator_cache_class' => 'ProjectUrlGeneratorHookAnalytics'), $this->get('request.context'));
    }
    protected function getRouter_HooknavigationService()
    {
        return $this->services['router.hooknavigation'] = new \Symfony\Component\Routing\Router($this->get('router.module.xmlloader'), ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\Config\\routing.xml'), array('cache_dir' => __DIR__, 'debug' => false, 'matcher_cache_class' => 'ProjectUrlMatcherHookNavigation', 'generator_cache_class' => 'ProjectUrlGeneratorHookNavigation'), $this->get('request.context'));
    }
    protected function getRouter_HooksocialService()
    {
        return $this->services['router.hooksocial'] = new \Symfony\Component\Routing\Router($this->get('router.module.xmlloader'), ($this->targetDirs[2].'\\local\\modules\\HookSocial\\Config\\routing.xml'), array('cache_dir' => __DIR__, 'debug' => false, 'matcher_cache_class' => 'ProjectUrlMatcherHookSocial', 'generator_cache_class' => 'ProjectUrlGeneratorHookSocial'), $this->get('request.context'));
    }
    protected function getRouter_IntellijService()
    {
        return $this->services['router.intellij'] = new \Symfony\Component\Routing\Router($this->get('router.module.xmlloader'), ($this->targetDirs[2].'\\local\\modules\\IntelliJ\\Config\\routing.xml'), array('cache_dir' => __DIR__, 'debug' => false, 'matcher_cache_class' => 'ProjectUrlMatcherIntelliJ', 'generator_cache_class' => 'ProjectUrlGeneratorIntelliJ'), $this->get('request.context'));
    }
    protected function getRouter_Module_FilelocatorService()
    {
        return $this->services['router.module.filelocator'] = new \Symfony\Component\Config\FileLocator(($this->targetDirs[2].'\\local\\modules\\'));
    }
    protected function getRouter_Module_XmlloaderService()
    {
        return $this->services['router.module.xmlloader'] = new \Symfony\Component\Routing\Loader\XmlFileLoader($this->get('router.module.filelocator'));
    }
    protected function getRouter_RewriteService()
    {
        $this->services['router.rewrite'] = $instance = new \Thelia\Core\Routing\RewritingRouter();
        $instance->setOption('matcher_cache_class', 'ProjectUrlMatcherrouter_Rewrite');
        $instance->setOption('generator_cache_class', 'ProjectUrlGeneratorrouter_Rewrite');
        return $instance;
    }
    protected function getRouter_XmlloaderService()
    {
        return $this->services['router.xmlloader'] = new \Symfony\Component\Routing\Loader\XmlFileLoader($this->get('router.filelocator'));
    }
    protected function getSass_Assetic_FilterService()
    {
        return $this->services['sass.assetic.filter'] = new \Assetic\Filter\Sass\SassFilter();
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSession_ListenerService()
    {
        return $this->services['session.listener'] = new \Thelia\Core\EventListener\SessionListener();
    }
    protected function getSession_MiddlewareService()
    {
        return $this->services['session.middleware'] = new \Thelia\Core\Stack\SessionMiddleware($this->get('event_dispatcher'), __DIR__, false, 'prod');
    }
    protected function getSmart_Plugin_FormService()
    {
        $this->services['smart.plugin.form'] = $instance = new \TheliaSmarty\Template\Plugins\Form($this->get('thelia.form_factory'), $this->get('thelia.parser.context'), $this->get('thelia.parser'));
        $instance->setFormDefinition(array('thelia.api.empty' => 'Thelia\\Form\\Api\\ApiEmptyForm', 'thelia.api.customer.create' => 'Thelia\\Form\\Api\\Customer\\CustomerCreateForm', 'thelia.api.customer.update' => 'Thelia\\Form\\Api\\Customer\\CustomerUpdateForm', 'thelia.api.customer.login' => 'Thelia\\Form\\Api\\Customer\\CustomerLogin', 'thelia.api.category.create' => 'Thelia\\Form\\Api\\Category\\CategoryCreationForm', 'thelia.api.category.update' => 'Thelia\\Form\\Api\\Category\\CategoryModificationForm', 'thelia.api.product_sale_elements' => 'Thelia\\Form\\Api\\ProductSaleElements\\ProductSaleElementsForm', 'thelia.api.product.creation' => 'Thelia\\Form\\Api\\Product\\ProductCreationForm', 'thelia.api.product.modification' => 'Thelia\\Form\\Api\\Product\\ProductModificationForm', 'thelia.front.customer.login' => 'Thelia\\Form\\CustomerLogin', 'thelia.front.customer.lostpassword' => 'Thelia\\Form\\CustomerLostPasswordForm', 'thelia.front.customer.create' => 'Thelia\\Form\\CustomerCreateForm', 'thelia.front.customer.profile.update' => 'Thelia\\Form\\CustomerProfileUpdateForm', 'thelia.front.customer.password.update' => 'Thelia\\Form\\CustomerPasswordUpdateForm', 'thelia.front.address.create' => 'Thelia\\Form\\AddressCreateForm', 'thelia.front.address.update' => 'Thelia\\Form\\AddressUpdateForm', 'thelia.front.contact' => 'Thelia\\Form\\ContactForm', 'thelia.front.newsletter' => 'Thelia\\Form\\NewsletterForm', 'thelia.front.newsletter.unsubscribe' => 'Thelia\\Form\\NewsletterUnsubscribeForm', 'thelia.admin.login' => 'Thelia\\Form\\AdminLogin', 'thelia.admin.lostpassword' => 'Thelia\\Form\\AdminLostPassword', 'thelia.admin.createpassword' => 'Thelia\\Form\\AdminCreatePassword', 'thelia.admin.seo' => 'Thelia\\Form\\SeoForm', 'thelia.admin.customer.create' => 'Thelia\\Form\\CustomerCreateForm', 'thelia.admin.customer.update' => 'Thelia\\Form\\CustomerUpdateForm', 'thelia.admin.address.create' => 'Thelia\\Form\\AddressCreateForm', 'thelia.admin.address.update' => 'Thelia\\Form\\AddressUpdateForm', 'thelia.admin.category.creation' => 'Thelia\\Form\\CategoryCreationForm', 'thelia.admin.category.modification' => 'Thelia\\Form\\CategoryModificationForm', 'thelia.admin.category.image.modification' => 'Thelia\\Form\\CategoryImageModification', 'thelia.admin.category.document.modification' => 'Thelia\\Form\\CategoryDocumentModification', 'thelia.admin.product.creation' => 'Thelia\\Form\\ProductCreationForm', 'thelia.admin.product.clone' => 'Thelia\\Form\\ProductCloneForm', 'thelia.admin.product.modification' => 'Thelia\\Form\\ProductModificationForm', 'thelia.admin.product.details.modification' => 'Thelia\\Form\\ProductDetailsModificationForm', 'thelia.admin.product.image.modification' => 'Thelia\\Form\\ProductImageModification', 'thelia.admin.product.document.modification' => 'Thelia\\Form\\ProductDocumentModification', 'thelia.admin.product_sale_element.update' => 'Thelia\\Form\\ProductSaleElementUpdateForm', 'thelia.admin.product_default_sale_element.update' => 'Thelia\\Form\\ProductDefaultSaleElementUpdateForm', 'thelia.admin.product_combination.build' => 'Thelia\\Form\\ProductCombinationGenerationForm', 'thelia.admin.product.deletion' => 'Thelia\\Form\\ProductModificationForm', 'thelia.admin.folder.creation' => 'Thelia\\Form\\FolderCreationForm', 'thelia.admin.folder.modification' => 'Thelia\\Form\\FolderModificationForm', 'thelia.admin.folder.image.modification' => 'Thelia\\Form\\FolderImageModification', 'thelia.admin.folder.document.modification' => 'Thelia\\Form\\FolderDocumentModification', 'thelia.admin.content.creation' => 'Thelia\\Form\\ContentCreationForm', 'thelia.admin.content.modification' => 'Thelia\\Form\\ContentModificationForm', 'thelia.admin.content.image.modification' => 'Thelia\\Form\\ContentImageModification', 'thelia.admin.content.document.modification' => 'Thelia\\Form\\ContentDocumentModification', 'thelia.admin.brand.creation' => 'Thelia\\Form\\Brand\\BrandCreationForm', 'thelia.admin.brand.modification' => 'Thelia\\Form\\Brand\\BrandModificationForm', 'thelia.admin.brand.image.modification' => 'Thelia\\Form\\Brand\\BrandImageModification', 'thelia.admin.brand.document.modification' => 'Thelia\\Form\\Brand\\BrandDocumentModification', 'thelia.cart.add' => 'Thelia\\Form\\CartAdd', 'thelia.order.delivery' => 'Thelia\\Form\\OrderDelivery', 'thelia.order.payment' => 'Thelia\\Form\\OrderPayment', 'thelia.order.update.address' => 'Thelia\\Form\\OrderUpdateAddress', 'thelia.order.coupon' => 'Thelia\\Form\\CouponCode', 'thelia.admin.config.creation' => 'Thelia\\Form\\ConfigCreationForm', 'thelia.admin.config.modification' => 'Thelia\\Form\\ConfigModificationForm', 'thelia.admin.message.creation' => 'Thelia\\Form\\MessageCreationForm', 'thelia.admin.message.modification' => 'Thelia\\Form\\MessageModificationForm', 'thelia.admin.message.send-sample' => 'Thelia\\Form\\MessageSendSampleForm', 'thelia.admin.currency.creation' => 'Thelia\\Form\\CurrencyCreationForm', 'thelia.admin.currency.modification' => 'Thelia\\Form\\CurrencyModificationForm', 'thelia.admin.coupon.creation' => 'Thelia\\Form\\CouponCreationForm', 'thelia.admin.attribute.creation' => 'Thelia\\Form\\AttributeCreationForm', 'thelia.admin.attribute.modification' => 'Thelia\\Form\\AttributeModificationForm', 'thelia.admin.feature.creation' => 'Thelia\\Form\\FeatureCreationForm', 'thelia.admin.feature.modification' => 'Thelia\\Form\\FeatureModificationForm', 'thelia.admin.attributeav.creation' => 'Thelia\\Form\\AttributeAvCreationForm', 'thelia.admin.attributeav.modification' => 'Thelia\\Form\\AttributeAvCreationForm', 'thelia.admin.featureav.creation' => 'Thelia\\Form\\FeatureAvCreationForm', 'thelia.admin.taxrule.modification' => 'Thelia\\Form\\TaxRuleModificationForm', 'thelia.admin.taxrule.taxlistupdate' => 'Thelia\\Form\\TaxRuleTaxListUpdateForm', 'thelia.admin.taxrule.add' => 'Thelia\\Form\\TaxRuleCreationForm', 'thelia.admin.tax.modification' => 'Thelia\\Form\\TaxModificationForm', 'thelia.admin.tax.taxlistupdate' => 'Thelia\\Form\\TaxTaxListUpdateForm', 'thelia.admin.tax.add' => 'Thelia\\Form\\TaxCreationForm', 'thelia.admin.profile.add' => 'Thelia\\Form\\ProfileCreationForm', 'thelia.admin.profile.modification' => 'Thelia\\Form\\ProfileModificationForm', 'thelia.admin.profile.resource-access.modification' => 'Thelia\\Form\\ProfileUpdateResourceAccessForm', 'thelia.admin.profile.module-access.modification' => 'Thelia\\Form\\ProfileUpdateModuleAccessForm', 'thelia.admin.administrator.add' => 'Thelia\\Form\\AdministratorCreationForm', 'thelia.admin.administrator.update' => 'Thelia\\Form\\AdministratorModificationForm', 'thelia.admin.mailing-system.update' => 'Thelia\\Form\\MailingSystemModificationForm', 'thelia.admin.template.creation' => 'Thelia\\Form\\TemplateCreationForm', 'thelia.admin.template.modification' => 'Thelia\\Form\\TemplateModificationForm', 'thelia.admin.country.creation' => 'Thelia\\Form\\CountryCreationForm', 'thelia.admin.country.modification' => 'Thelia\\Form\\CountryModificationForm', 'thelia.admin.state.creation' => 'Thelia\\Form\\State\\StateCreationForm', 'thelia.admin.state.modification' => 'Thelia\\Form\\State\\StateModificationForm', 'thelia.admin.area.create' => 'Thelia\\Form\\Area\\AreaCreateForm', 'thelia.admin.area.modification' => 'Thelia\\Form\\Area\\AreaModificationForm', 'thelia.admin.area.country' => 'Thelia\\Form\\Area\\AreaCountryForm', 'thelia.admin.area.delete.country' => 'Thelia\\Form\\Area\\AreaDeleteCountryForm', 'thelia.admin.area.postage' => 'Thelia\\Form\\Area\\AreaPostageForm', 'thelia.shopping_zone_area' => 'Thelia\\Form\\ShippingZone\\ShippingZoneAddArea', 'thelia.shipping_zone_area' => 'Thelia\\Form\\ShippingZone\\ShippingZoneAddArea', 'thelia.shopping_zone_remove_area' => 'Thelia\\Form\\ShippingZone\\ShippingZoneRemoveArea', 'thelia.lang.update' => 'Thelia\\Form\\Lang\\LangUpdateForm', 'thelia.lang.create' => 'Thelia\\Form\\Lang\\LangCreateForm', 'thelia.lang.defaultBehavior' => 'Thelia\\Form\\Lang\\LangDefaultBehaviorForm', 'thelia.lang.url' => 'Thelia\\Form\\Lang\\LangUrlForm', 'thelia.configuration.store' => 'Thelia\\Form\\ConfigStoreForm', 'thelia.system-logs.configuration' => 'Thelia\\Form\\SystemLogConfigurationForm', 'thelia.admin.module.modification' => 'Thelia\\Form\\ModuleModificationForm', 'thelia.admin.module.image.modification' => 'Thelia\\Form\\ModuleImageModification', 'thelia.admin.module.install' => 'Thelia\\Form\\ModuleInstallForm', 'thelia.admin.hook.creation' => 'Thelia\\Form\\HookCreationForm', 'thelia.admin.hook.modification' => 'Thelia\\Form\\HookModificationForm', 'thelia.admin.module-hook.creation' => 'Thelia\\Form\\ModuleHookCreationForm', 'thelia.admin.module-hook.modification' => 'Thelia\\Form\\ModuleHookModificationForm', 'thelia.cache.flush' => 'Thelia\\Form\\Cache\\CacheFlushForm', 'thelia.assets.flush' => 'Thelia\\Form\\Cache\\AssetsFlushForm', 'thelia.images-and-documents-cache.flush' => 'Thelia\\Form\\Cache\\ImagesAndDocumentsCacheFlushForm', 'thelia.export' => 'Thelia\\Form\\ExportForm', 'thelia.import' => 'Thelia\\Form\\ImportForm', 'thelia.admin.sale.creation' => 'Thelia\\Form\\Sale\\SaleCreationForm', 'thelia.admin.sale.modification' => 'Thelia\\Form\\Sale\\SaleModificationForm', 'thelia.empty' => 'Thelia\\Form\\EmptyForm', 'thelia_api_create' => 'Thelia\\Form\\Api\\ApiCreateForm', 'thelia_api_update' => 'Thelia\\Form\\Api\\ApiUpdateForm', 'thelia.admin.order-status.creation' => 'Thelia\\Form\\OrderStatus\\OrderStatusCreationForm', 'thelia.admin.order-status.modification' => 'Thelia\\Form\\OrderStatus\\OrderStatusModificationForm', 'hookanalytics.configuration.form' => 'HookAnalytics\\Form\\Configuration', 'hooknavigation.configuration' => 'HookNavigation\\Form\\HookNavigationConfigForm', 'hooksocial.configuration.form' => 'HookSocial\\Form\\Configuration'));
        return $instance;
    }
    protected function getSmarty_Plugin_AdminutilitiesService()
    {
        return $this->services['smarty.plugin.adminutilities'] = new \TheliaSmarty\Template\Plugins\AdminUtilities($this->get('thelia.securitycontext'), $this->get('thelia.template_helper'));
    }
    protected function getSmarty_Plugin_AssetsService()
    {
        return $this->services['smarty.plugin.assets'] = new \TheliaSmarty\Template\Plugins\Assets($this->get('assetic.asset.manager'), $this->get('thelia.parser.asset.resolver'));
    }
    protected function getSmarty_Plugin_CacheService()
    {
        return $this->services['smarty.plugin.cache'] = new \TheliaSmarty\Template\Plugins\Cache($this->get('thelia.cache'), $this->get('request_stack'), false);
    }
    protected function getSmarty_Plugin_CartpostageService()
    {
        return $this->services['smarty.plugin.cartpostage'] = new \TheliaSmarty\Template\Plugins\CartPostage($this);
    }
    protected function getSmarty_Plugin_DataaccessService()
    {
        return $this->services['smarty.plugin.dataaccess'] = new \TheliaSmarty\Template\Plugins\DataAccessFunctions($this->get('request_stack'), $this->get('thelia.securitycontext'), $this->get('thelia.taxengine'), $this->get('thelia.parser.context'), $this->get('event_dispatcher'), $this->get('thelia.coupon.manager'));
    }
    protected function getSmarty_Plugin_EsiService()
    {
        return $this->services['smarty.plugin.esi'] = new \TheliaSmarty\Template\Plugins\Esi($this->get('fragment.renderer.esi'), $this->get('request_stack'));
    }
    protected function getSmarty_Plugin_FlashmessageService()
    {
        return $this->services['smarty.plugin.flashmessage'] = new \TheliaSmarty\Template\Plugins\FlashMessage($this->get('request_stack'), $this->get('thelia.translator'));
    }
    protected function getSmarty_Plugin_FormatService()
    {
        return $this->services['smarty.plugin.format'] = new \TheliaSmarty\Template\Plugins\Format($this->get('request_stack'));
    }
    protected function getSmarty_Plugin_HookService()
    {
        return $this->services['smarty.plugin.hook'] = new \TheliaSmarty\Template\Plugins\Hook(false, $this->get('event_dispatcher'));
    }
    protected function getSmarty_Plugin_ModuleService()
    {
        return $this->services['smarty.plugin.module'] = new \TheliaSmarty\Template\Plugins\Module(false, $this->get('request_stack'));
    }
    protected function getSmarty_Plugin_RenderService()
    {
        return $this->services['smarty.plugin.render'] = new \TheliaSmarty\Template\Plugins\Render($this->get('controller_resolver'), $this->get('request_stack'), $this);
    }
    protected function getSmarty_Plugin_SecurityService()
    {
        return $this->services['smarty.plugin.security'] = new \TheliaSmarty\Template\Plugins\Security($this->get('request_stack'), $this->get('event_dispatcher'), $this->get('thelia.securitycontext'));
    }
    protected function getSmarty_Plugin_ThelialoopService()
    {
        $this->services['smarty.plugin.thelialoop'] = $instance = new \TheliaSmarty\Template\Plugins\TheliaLoop($this);
        $instance->setLoopList(array('accessory' => 'Thelia\\Core\\Template\\Loop\\Accessory', 'address' => 'Thelia\\Core\\Template\\Loop\\Address', 'admin' => 'Thelia\\Core\\Template\\Loop\\Admin', 'area' => 'Thelia\\Core\\Template\\Loop\\Area', 'associated_content' => 'Thelia\\Core\\Template\\Loop\\AssociatedContent', 'attribute' => 'Thelia\\Core\\Template\\Loop\\Attribute', 'attribute_availability' => 'Thelia\\Core\\Template\\Loop\\AttributeAvailability', 'attribute_combination' => 'Thelia\\Core\\Template\\Loop\\AttributeCombination', 'auth' => 'Thelia\\Core\\Template\\Loop\\Auth', 'brand' => 'Thelia\\Core\\Template\\Loop\\Brand', 'category' => 'Thelia\\Core\\Template\\Loop\\Category', 'content' => 'Thelia\\Core\\Template\\Loop\\Content', 'country' => 'Thelia\\Core\\Template\\Loop\\Country', 'country-area' => 'Thelia\\Core\\Template\\Loop\\CountryArea', 'state' => 'Thelia\\Core\\Template\\Loop\\State', 'currency' => 'Thelia\\Core\\Template\\Loop\\Currency', 'customer' => 'Thelia\\Core\\Template\\Loop\\Customer', 'feature' => 'Thelia\\Core\\Template\\Loop\\Feature', 'feature-availability' => 'Thelia\\Core\\Template\\Loop\\FeatureAvailability', 'feature_value' => 'Thelia\\Core\\Template\\Loop\\FeatureValue', 'folder' => 'Thelia\\Core\\Template\\Loop\\Folder', 'folder-path' => 'Thelia\\Core\\Template\\Loop\\FolderPath', 'module' => 'Thelia\\Core\\Template\\Loop\\Module', 'hook' => 'Thelia\\Core\\Template\\Loop\\Hook', 'module_hook' => 'Thelia\\Core\\Template\\Loop\\ModuleHook', 'order' => 'Thelia\\Core\\Template\\Loop\\Order', 'order_address' => 'Thelia\\Core\\Template\\Loop\\OrderAddress', 'order_product' => 'Thelia\\Core\\Template\\Loop\\OrderProduct', 'order_product_tax' => 'Thelia\\Core\\Template\\Loop\\OrderProductTax', 'order_coupon' => 'Thelia\\Core\\Template\\Loop\\OrderCoupon', 'order_product_attribute_combination' => 'Thelia\\Core\\Template\\Loop\\OrderProductAttributeCombination', 'order-status' => 'Thelia\\Core\\Template\\Loop\\OrderStatus', 'category-path' => 'Thelia\\Core\\Template\\Loop\\CategoryPath', 'payment' => 'Thelia\\Core\\Template\\Loop\\Payment', 'product' => 'Thelia\\Core\\Template\\Loop\\Product', 'product_sale_elements' => 'Thelia\\Core\\Template\\Loop\\ProductSaleElements', 'profile' => 'Thelia\\Core\\Template\\Loop\\Profile', 'resource' => 'Thelia\\Core\\Template\\Loop\\Resource', 'feed' => 'Thelia\\Core\\Template\\Loop\\Feed', 'title' => 'Thelia\\Core\\Template\\Loop\\Title', 'lang' => 'Thelia\\Core\\Template\\Loop\\Lang', 'category-tree' => 'Thelia\\Core\\Template\\Loop\\CategoryTree', 'folder-tree' => 'Thelia\\Core\\Template\\Loop\\FolderTree', 'cart' => 'Thelia\\Core\\Template\\Loop\\Cart', 'image' => 'Thelia\\Core\\Template\\Loop\\Image', 'document' => 'Thelia\\Core\\Template\\Loop\\Document', 'config' => 'Thelia\\Core\\Template\\Loop\\Config', 'coupon' => 'Thelia\\Core\\Template\\Loop\\Coupon', 'message' => 'Thelia\\Core\\Template\\Loop\\Message', 'delivery' => 'Thelia\\Core\\Template\\Loop\\Delivery', 'product-template' => 'Thelia\\Core\\Template\\Loop\\ProductTemplate', 'template' => 'Thelia\\Core\\Template\\Loop\\Template', 'tax' => 'Thelia\\Core\\Template\\Loop\\Tax', 'tax-rule' => 'Thelia\\Core\\Template\\Loop\\TaxRule', 'tax-rule-country' => 'Thelia\\Core\\Template\\Loop\\TaxRuleCountry', 'serializer' => 'Thelia\\Core\\Template\\Loop\\Serializer', 'archiver' => 'Thelia\\Core\\Template\\Loop\\Archiver', 'import-category' => 'Thelia\\Core\\Template\\Loop\\ImportCategory', 'export-category' => 'Thelia\\Core\\Template\\Loop\\ExportCategory', 'import' => 'Thelia\\Core\\Template\\Loop\\Import', 'export' => 'Thelia\\Core\\Template\\Loop\\Export', 'sale' => 'Thelia\\Core\\Template\\Loop\\Sale', 'module-config' => 'Thelia\\Core\\Template\\Loop\\ModuleConfig', 'product-sale-elements-document' => 'Thelia\\Core\\Template\\Loop\\ProductSaleElementsDocument', 'product-sale-elements-image' => 'Thelia\\Core\\Template\\Loop\\ProductSaleElementsImage'));
        return $instance;
    }
    protected function getSmarty_Plugin_TranslationService()
    {
        return $this->services['smarty.plugin.translation'] = new \TheliaSmarty\Template\Plugins\Translation($this->get('thelia.translator'));
    }
    protected function getSmarty_Plugin_TypeService()
    {
        return $this->services['smarty.plugin.type'] = new \TheliaSmarty\Template\Plugins\Type();
    }
    protected function getSmarty_Url_ModuleService()
    {
        return $this->services['smarty.url.module'] = new \TheliaSmarty\Template\Plugins\UrlGenerator($this->get('request_stack'), $this->get('thelia.token_provider'), $this);
    }
    protected function getStackFactoryService()
    {
        $a = $this->get('event_dispatcher');
        $this->services['stack_factory'] = $instance = new \Stack\Builder();
        $instance->push('Thelia\\Core\\Stack\\SessionMiddleware', $a, __DIR__, false, 'prod');
        $instance->push('Thelia\\Core\\Stack\\ParamInitMiddleware', $this->get('thelia.url.manager'), $this->get('thelia.translator'), $a);
        return $instance;
    }
    protected function getTest_ClientService()
    {
        return $this->services['test.client'] = new \Thelia\Core\HttpKernel\Client($this->get('kernel'), array(), $this->get('test.client.history'), $this->get('test.client.cookiejar'));
    }
    protected function getTest_Client_CookiejarService()
    {
        return $this->services['test.client.cookiejar'] = new \Symfony\Component\BrowserKit\CookieJar();
    }
    protected function getTest_Client_HistoryService()
    {
        return $this->services['test.client.history'] = new \Symfony\Component\BrowserKit\History();
    }
    protected function getThelia_Action_AddressService()
    {
        return $this->services['thelia.action.address'] = new \Thelia\Action\Address();
    }
    protected function getThelia_Action_AdministratorService()
    {
        return $this->services['thelia.action.administrator'] = new \Thelia\Action\Administrator($this->get('mailer'), $this->get('thelia.token_provider'));
    }
    protected function getThelia_Action_ApiService()
    {
        return $this->services['thelia.action.api'] = new \Thelia\Action\Api();
    }
    protected function getThelia_Action_AreaService()
    {
        return $this->services['thelia.action.area'] = new \Thelia\Action\Area();
    }
    protected function getThelia_Action_AttributeService()
    {
        return $this->services['thelia.action.attribute'] = new \Thelia\Action\Attribute();
    }
    protected function getThelia_Action_AttributeavService()
    {
        return $this->services['thelia.action.attributeav'] = new \Thelia\Action\AttributeAv();
    }
    protected function getThelia_Action_BrandService()
    {
        return $this->services['thelia.action.brand'] = new \Thelia\Action\Brand();
    }
    protected function getThelia_Action_CacheService()
    {
        return $this->services['thelia.action.cache'] = new \Thelia\Action\Cache($this->get('thelia.cache'));
    }
    protected function getThelia_Action_CartService()
    {
        return $this->services['thelia.action.cart'] = new \Thelia\Action\Cart($this->get('request_stack'), $this->get('thelia.token_provider'));
    }
    protected function getThelia_Action_CategoryService()
    {
        return $this->services['thelia.action.category'] = new \Thelia\Action\Category();
    }
    protected function getThelia_Action_ConfigService()
    {
        return $this->services['thelia.action.config'] = new \Thelia\Action\Config();
    }
    protected function getThelia_Action_ContentService()
    {
        return $this->services['thelia.action.content'] = new \Thelia\Action\Content();
    }
    protected function getThelia_Action_CountryService()
    {
        return $this->services['thelia.action.country'] = new \Thelia\Action\Country();
    }
    protected function getThelia_Action_CouponService()
    {
        return $this->services['thelia.action.coupon'] = new \Thelia\Action\Coupon($this->get('request_stack'), $this->get('thelia.coupon.factory'), $this->get('thelia.coupon.manager'), $this->get('thelia.condition.match_for_everyone'), $this->get('thelia.condition.factory'));
    }
    protected function getThelia_Action_CurrencyService()
    {
        return $this->services['thelia.action.currency'] = new \Thelia\Action\Currency($this->get('currency.converter'));
    }
    protected function getThelia_Action_CustomerService()
    {
        return $this->services['thelia.action.customer'] = new \Thelia\Action\Customer($this->get('thelia.securitycontext'), $this->get('mailer'));
    }
    protected function getThelia_Action_CustomerTitleService()
    {
        return $this->services['thelia.action.customer_title'] = new \Thelia\Action\CustomerTitle();
    }
    protected function getThelia_Action_DocumentService()
    {
        return $this->services['thelia.action.document'] = new \Thelia\Action\Document($this->get('thelia.file_manager'));
    }
    protected function getThelia_Action_ExportService()
    {
        return $this->services['thelia.action.export'] = new \Thelia\Action\Export($this->get('thelia.export.handler'));
    }
    protected function getThelia_Action_FeatureService()
    {
        return $this->services['thelia.action.feature'] = new \Thelia\Action\Feature();
    }
    protected function getThelia_Action_FeatureavService()
    {
        return $this->services['thelia.action.featureav'] = new \Thelia\Action\FeatureAv();
    }
    protected function getThelia_Action_FileService()
    {
        return $this->services['thelia.action.file'] = new \Thelia\Action\File();
    }
    protected function getThelia_Action_FolderService()
    {
        return $this->services['thelia.action.folder'] = new \Thelia\Action\Folder();
    }
    protected function getThelia_Action_HookService()
    {
        return $this->services['thelia.action.hook'] = new \Thelia\Action\Hook(__DIR__);
    }
    protected function getThelia_Action_HttpexceptionService()
    {
        return $this->services['thelia.action.httpexception'] = new \Thelia\Action\HttpException($this->get('thelia.parser'));
    }
    protected function getThelia_Action_ImageService()
    {
        return $this->services['thelia.action.image'] = new \Thelia\Action\Image($this->get('thelia.file_manager'));
    }
    protected function getThelia_Action_ImportService()
    {
        return $this->services['thelia.action.import'] = new \Thelia\Action\Import($this->get('thelia.import.handler'));
    }
    protected function getThelia_Action_LangService()
    {
        return $this->services['thelia.action.lang'] = new \Thelia\Action\Lang($this->get('thelia.template_helper'), $this->get('request_stack'));
    }
    protected function getThelia_Action_MailingSystemService()
    {
        return $this->services['thelia.action.mailing_system'] = new \Thelia\Action\MailingSystem();
    }
    protected function getThelia_Action_MessageService()
    {
        return $this->services['thelia.action.message'] = new \Thelia\Action\Message();
    }
    protected function getThelia_Action_ModuleService()
    {
        return $this->services['thelia.action.module'] = new \Thelia\Action\Module($this);
    }
    protected function getThelia_Action_Module_DeliveryService()
    {
        return $this->services['thelia.action.module.delivery'] = new \Thelia\Action\Delivery();
    }
    protected function getThelia_Action_Module_PaymentService()
    {
        return $this->services['thelia.action.module.payment'] = new \Thelia\Action\Payment();
    }
    protected function getThelia_Action_ModulehookService()
    {
        return $this->services['thelia.action.modulehook'] = new \Thelia\Action\ModuleHook(__DIR__);
    }
    protected function getThelia_Action_NewsletterService()
    {
        return $this->services['thelia.action.newsletter'] = new \Thelia\Action\Newsletter($this->get('mailer'), $this->get('event_dispatcher'));
    }
    protected function getThelia_Action_OrderService()
    {
        return $this->services['thelia.action.order'] = new \Thelia\Action\Order($this->get('request_stack'), $this->get('mailer'), $this->get('thelia.securitycontext'));
    }
    protected function getThelia_Action_OrderStatusService()
    {
        return $this->services['thelia.action.order_status'] = new \Thelia\Action\OrderStatus();
    }
    protected function getThelia_Action_PdfService()
    {
        return $this->services['thelia.action.pdf'] = new \Thelia\Action\Pdf();
    }
    protected function getThelia_Action_ProductService()
    {
        return $this->services['thelia.action.product'] = new \Thelia\Action\Product($this->get('event_dispatcher'));
    }
    protected function getThelia_Action_ProductSaleElementService()
    {
        return $this->services['thelia.action.product_sale_element'] = new \Thelia\Action\ProductSaleElement($this->get('event_dispatcher'));
    }
    protected function getThelia_Action_ProfileService()
    {
        return $this->services['thelia.action.profile'] = new \Thelia\Action\Profile();
    }
    protected function getThelia_Action_RedirectexceptionService()
    {
        return $this->services['thelia.action.redirectexception'] = new \Thelia\Action\RedirectException($this->get('thelia.url.manager'));
    }
    protected function getThelia_Action_SaleService()
    {
        return $this->services['thelia.action.sale'] = new \Thelia\Action\Sale();
    }
    protected function getThelia_Action_ShippingzoneService()
    {
        return $this->services['thelia.action.shippingzone'] = new \Thelia\Action\ShippingZone();
    }
    protected function getThelia_Action_StateService()
    {
        return $this->services['thelia.action.state'] = new \Thelia\Action\State();
    }
    protected function getThelia_Action_TaxService()
    {
        return $this->services['thelia.action.tax'] = new \Thelia\Action\Tax();
    }
    protected function getThelia_Action_TaxruleService()
    {
        return $this->services['thelia.action.taxrule'] = new \Thelia\Action\TaxRule();
    }
    protected function getThelia_Action_TemplateService()
    {
        return $this->services['thelia.action.template'] = new \Thelia\Action\Template();
    }
    protected function getThelia_Action_TranslationService()
    {
        return $this->services['thelia.action.translation'] = new \Thelia\Action\Translation($this);
    }
    protected function getThelia_Admin_BaseControllerService()
    {
        return $this->services['thelia.admin.base_controller'] = new \Thelia\Admin\Controller\BaseAdminController($this->get('thelia.parser'));
    }
    protected function getThelia_Admin_ResourcesService()
    {
        return $this->services['thelia.admin.resources'] = new \Thelia\Core\Security\Resource\AdminResources(array('thelia' => array('SUPERADMINISTRATOR' => 'SUPERADMINISTRATOR', 'ADDRESS' => 'admin.address', 'ADMINISTRATOR' => 'admin.configuration.administrator', 'ADVANCED_CONFIGURATION' => 'admin.configuration.advanced', 'AREA' => 'admin.configuration.area', 'ATTRIBUTE' => 'admin.configuration.attribute', 'BRAND' => 'admin.brand', 'CATEGORY' => 'admin.category', 'CONFIG' => 'admin.configuration"', 'CONTENT' => 'admin.content', 'COUNTRY' => 'admin.configuration.country', 'STATE' => 'admin.configuration.state', 'COUPON' => 'admin.coupon', 'CURRENCY' => 'admin.configuration.currency', 'CUSTOMER' => 'admin.customer', 'FEATURE' => 'admin.configuration.feature', 'FOLDER' => 'admin.folder', 'HOME' => 'admin.home', 'LANGUAGE' => 'admin.configuration.language', 'MAILING_SYSTEM' => 'admin.configuration.mailing-system', 'MESSAGE' => 'admin.configuration.message', 'MODULE' => 'admin.module', 'HOOK' => 'admin.hook', 'MODULE_HOOK' => 'admin.module-hook', 'ORDER' => 'admin.order', 'ORDER_STATUS' => 'admin.configuration.order-status', 'PRODUCT' => 'admin.product', 'PROFILE' => 'admin.configuration.profile', 'SHIPPING_ZONE' => 'admin.configuration.shipping-zone', 'TAX' => 'admin.configuration.tax', 'TEMPLATE' => 'admin.configuration.template', 'SYSTEM_LOG' => 'admin.configuration.system-logs', 'ADMIN_LOG' => 'admin.configuration.admin-logs', 'STORE' => 'admin.configuration.store', 'TRANSLATIONS' => 'admin.configuration.translations', 'UPDATE' => 'admin.configuration.update', 'EXPORT' => 'admin.export', 'IMPORT' => 'admin.import', 'TOOLS' => 'admin.tools', 'SALES' => 'admin.sales', 'API' => 'admin.configuration.api', 'TITLE' => 'admin.customer.title')));
    }
    protected function getThelia_Archiver_Bz2Service()
    {
        return $this->services['thelia.archiver.bz2'] = new \Thelia\Core\Archiver\Archiver\TarBz2Archiver();
    }
    protected function getThelia_Archiver_ManagerService()
    {
        $this->services['thelia.archiver.manager'] = $instance = new \Thelia\Core\Archiver\ArchiverManager();
        $instance->add($this->get('thelia.archiver.zip'));
        $instance->add($this->get('thelia.archiver.tar'));
        $instance->add($this->get('thelia.archiver.tgz'));
        $instance->add($this->get('thelia.archiver.bz2'));
        return $instance;
    }
    protected function getThelia_Archiver_TarService()
    {
        return $this->services['thelia.archiver.tar'] = new \Thelia\Core\Archiver\Archiver\TarArchiver();
    }
    protected function getThelia_Archiver_TgzService()
    {
        return $this->services['thelia.archiver.tgz'] = new \Thelia\Core\Archiver\Archiver\TarGzArchiver();
    }
    protected function getThelia_Archiver_ZipService()
    {
        return $this->services['thelia.archiver.zip'] = new \Thelia\Core\Archiver\Archiver\ZipArchiver();
    }
    protected function getThelia_CacheService()
    {
        return $this->services['thelia.cache'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('thelia_cache', 600, __DIR__);
    }
    protected function getThelia_Condition_CartContainsCategoriesService()
    {
        return $this->services['thelia.condition.cart_contains_categories'] = new \Thelia\Condition\Implementation\CartContainsCategories($this->get('thelia.facade'));
    }
    protected function getThelia_Condition_CartContainsProductsService()
    {
        return $this->services['thelia.condition.cart_contains_products'] = new \Thelia\Condition\Implementation\CartContainsProducts($this->get('thelia.facade'));
    }
    protected function getThelia_Condition_FactoryService()
    {
        return $this->services['thelia.condition.factory'] = new \Thelia\Condition\ConditionFactory($this);
    }
    protected function getThelia_Condition_ForSomeCustomersService()
    {
        return $this->services['thelia.condition.for_some_customers'] = new \Thelia\Condition\Implementation\ForSomeCustomers($this->get('thelia.facade'));
    }
    protected function getThelia_Condition_MatchBillingCountriesService()
    {
        return $this->services['thelia.condition.match_billing_countries'] = new \Thelia\Condition\Implementation\MatchBillingCountries($this->get('thelia.facade'));
    }
    protected function getThelia_Condition_MatchDeliveryCountriesService()
    {
        return $this->services['thelia.condition.match_delivery_countries'] = new \Thelia\Condition\Implementation\MatchDeliveryCountries($this->get('thelia.facade'));
    }
    protected function getThelia_Condition_MatchForEveryoneService()
    {
        return $this->services['thelia.condition.match_for_everyone'] = new \Thelia\Condition\Implementation\MatchForEveryone($this->get('thelia.facade'));
    }
    protected function getThelia_Condition_MatchForTotalAmountService()
    {
        return $this->services['thelia.condition.match_for_total_amount'] = new \Thelia\Condition\Implementation\MatchForTotalAmount($this->get('thelia.facade'));
    }
    protected function getThelia_Condition_MatchForXArticlesService()
    {
        return $this->services['thelia.condition.match_for_x_articles'] = new \Thelia\Condition\Implementation\MatchForXArticles($this->get('thelia.facade'));
    }
    protected function getThelia_Condition_MatchForXArticlesIncludeQuantityService()
    {
        return $this->services['thelia.condition.match_for_x_articles_include_quantity'] = new \Thelia\Condition\Implementation\MatchForXArticlesIncludeQuantity($this->get('thelia.facade'));
    }
    protected function getThelia_Condition_StartDateService()
    {
        return $this->services['thelia.condition.start_date'] = new \Thelia\Condition\Implementation\StartDate($this->get('thelia.facade'));
    }
    protected function getThelia_Condition_ValidatorService()
    {
        return $this->services['thelia.condition.validator'] = new \Thelia\Condition\ConditionEvaluator();
    }
    protected function getThelia_Coupon_FactoryService()
    {
        return $this->services['thelia.coupon.factory'] = new \Thelia\Coupon\CouponFactory($this);
    }
    protected function getThelia_Coupon_ManagerService()
    {
        $this->services['thelia.coupon.manager'] = $instance = new \Thelia\Coupon\CouponManager($this);
        $instance->addAvailableCoupon($this->get('thelia.coupon.type.remove_x_amount'));
        $instance->addAvailableCoupon($this->get('thelia.coupon.type.remove_x_percent'));
        $instance->addAvailableCoupon($this->get('thelia.coupon.type.remove_amount_on_categories'));
        $instance->addAvailableCoupon($this->get('thelia.coupon.type.remove_percentage_on_categories'));
        $instance->addAvailableCoupon($this->get('thelia.coupon.type.remove_amount_on_products'));
        $instance->addAvailableCoupon($this->get('thelia.coupon.type.remove_percentage_on_products'));
        $instance->addAvailableCoupon($this->get('thelia.coupon.type.remove_amount_on_attribute_av'));
        $instance->addAvailableCoupon($this->get('thelia.coupon.type.remove_percentage_on_attribute_av'));
        $instance->addAvailableCoupon($this->get('thelia.coupon.type.free_product'));
        $instance->addAvailableCondition($this->get('thelia.condition.match_for_everyone'));
        $instance->addAvailableCondition($this->get('thelia.condition.match_for_total_amount'));
        $instance->addAvailableCondition($this->get('thelia.condition.match_for_x_articles'));
        $instance->addAvailableCondition($this->get('thelia.condition.match_for_x_articles_include_quantity'));
        $instance->addAvailableCondition($this->get('thelia.condition.match_delivery_countries'));
        $instance->addAvailableCondition($this->get('thelia.condition.match_billing_countries'));
        $instance->addAvailableCondition($this->get('thelia.condition.start_date'));
        $instance->addAvailableCondition($this->get('thelia.condition.cart_contains_categories'));
        $instance->addAvailableCondition($this->get('thelia.condition.cart_contains_products'));
        $instance->addAvailableCondition($this->get('thelia.condition.for_some_customers'));
        return $instance;
    }
    protected function getThelia_Coupon_Type_FreeProductService()
    {
        return $this->services['thelia.coupon.type.free_product'] = new \Thelia\Coupon\Type\FreeProduct($this->get('thelia.facade'));
    }
    protected function getThelia_Coupon_Type_RemoveAmountOnAttributeAvService()
    {
        return $this->services['thelia.coupon.type.remove_amount_on_attribute_av'] = new \Thelia\Coupon\Type\RemoveAmountOnAttributeValues($this->get('thelia.facade'));
    }
    protected function getThelia_Coupon_Type_RemoveAmountOnCategoriesService()
    {
        return $this->services['thelia.coupon.type.remove_amount_on_categories'] = new \Thelia\Coupon\Type\RemoveAmountOnCategories($this->get('thelia.facade'));
    }
    protected function getThelia_Coupon_Type_RemoveAmountOnProductsService()
    {
        return $this->services['thelia.coupon.type.remove_amount_on_products'] = new \Thelia\Coupon\Type\RemoveAmountOnProducts($this->get('thelia.facade'));
    }
    protected function getThelia_Coupon_Type_RemovePercentageOnAttributeAvService()
    {
        return $this->services['thelia.coupon.type.remove_percentage_on_attribute_av'] = new \Thelia\Coupon\Type\RemovePercentageOnAttributeValues($this->get('thelia.facade'));
    }
    protected function getThelia_Coupon_Type_RemovePercentageOnCategoriesService()
    {
        return $this->services['thelia.coupon.type.remove_percentage_on_categories'] = new \Thelia\Coupon\Type\RemovePercentageOnCategories($this->get('thelia.facade'));
    }
    protected function getThelia_Coupon_Type_RemovePercentageOnProductsService()
    {
        return $this->services['thelia.coupon.type.remove_percentage_on_products'] = new \Thelia\Coupon\Type\RemovePercentageOnProducts($this->get('thelia.facade'));
    }
    protected function getThelia_Coupon_Type_RemoveXAmountService()
    {
        return $this->services['thelia.coupon.type.remove_x_amount'] = new \Thelia\Coupon\Type\RemoveXAmount($this->get('thelia.facade'));
    }
    protected function getThelia_Coupon_Type_RemoveXPercentService()
    {
        return $this->services['thelia.coupon.type.remove_x_percent'] = new \Thelia\Coupon\Type\RemoveXPercent($this->get('thelia.facade'));
    }
    protected function getThelia_Export_HandlerService()
    {
        return $this->services['thelia.export.handler'] = new \Thelia\Handler\ExportHandler($this->get('event_dispatcher'), $this);
    }
    protected function getThelia_FacadeService()
    {
        return $this->services['thelia.facade'] = new \Thelia\Coupon\BaseFacade($this);
    }
    protected function getThelia_FileManagerService()
    {
        return $this->services['thelia.file_manager'] = new \Thelia\Files\FileManager(array('document.product' => 'Thelia\\Model\\ProductDocument', 'image.product' => 'Thelia\\Model\\ProductImage', 'document.category' => 'Thelia\\Model\\CategoryDocument', 'image.category' => 'Thelia\\Model\\CategoryImage', 'document.content' => 'Thelia\\Model\\ContentDocument', 'image.content' => 'Thelia\\Model\\ContentImage', 'document.folder' => 'Thelia\\Model\\FolderDocument', 'image.folder' => 'Thelia\\Model\\FolderImage', 'document.brand' => 'Thelia\\Model\\BrandDocument', 'image.brand' => 'Thelia\\Model\\BrandImage', 'image.module' => 'Thelia\\Model\\ModuleImage'));
    }
    protected function getThelia_Form_Type_CustomerTitleService()
    {
        return $this->services['thelia.form.type.customer_title'] = new \Thelia\Core\Form\Type\CustomerTitleType($this->get('thelia.form.type.field.customer_title_id'));
    }
    protected function getThelia_Form_Type_CustomerTitleI18nService()
    {
        return $this->services['thelia.form.type.customer_title_i18n'] = new \Thelia\Core\Form\Type\CustomerTitleI18nType();
    }
    protected function getThelia_Form_Type_Field_AccessoryIdService()
    {
        return $this->services['thelia.form.type.field.accessory_id'] = new \Thelia\Core\Form\Type\Field\AccessoryIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_AddressIdService()
    {
        return $this->services['thelia.form.type.field.address_id'] = new \Thelia\Core\Form\Type\Field\AddressIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_AdminIdService()
    {
        return $this->services['thelia.form.type.field.admin_id'] = new \Thelia\Core\Form\Type\Field\AdminIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_AdminLogIdService()
    {
        return $this->services['thelia.form.type.field.admin_log_id'] = new \Thelia\Core\Form\Type\Field\AdminLogIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ApiIdService()
    {
        return $this->services['thelia.form.type.field.api_id'] = new \Thelia\Core\Form\Type\Field\ApiIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_AreaDeliveryModuleIdService()
    {
        return $this->services['thelia.form.type.field.area_delivery_module_id'] = new \Thelia\Core\Form\Type\Field\AreaDeliveryModuleIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_AreaIdService()
    {
        return $this->services['thelia.form.type.field.area_id'] = new \Thelia\Core\Form\Type\Field\AreaIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_AttributeAvService()
    {
        return $this->services['thelia.form.type.field.attribute_av'] = new \Thelia\Core\Form\Type\Field\AttributeAvIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_AttributeIdService()
    {
        return $this->services['thelia.form.type.field.attribute_id'] = new \Thelia\Core\Form\Type\Field\AttributeIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_AttributeTemplateIdService()
    {
        return $this->services['thelia.form.type.field.attribute_template_id'] = new \Thelia\Core\Form\Type\Field\AttributeTemplateIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_BrandIdService()
    {
        return $this->services['thelia.form.type.field.brand_id'] = new \Thelia\Core\Form\Type\Field\BrandIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_CartIdService()
    {
        return $this->services['thelia.form.type.field.cart_id'] = new \Thelia\Core\Form\Type\Field\CartIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_CartItemIdService()
    {
        return $this->services['thelia.form.type.field.cart_item_id'] = new \Thelia\Core\Form\Type\Field\CartItemIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_CategoryAssociatedContentIdService()
    {
        return $this->services['thelia.form.type.field.category_associated_content_id'] = new \Thelia\Core\Form\Type\Field\CategoryAssociatedContentIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_CategoryIdService()
    {
        return $this->services['thelia.form.type.field.category_id'] = new \Thelia\Core\Form\Type\Field\CategoryIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ContentIdService()
    {
        return $this->services['thelia.form.type.field.content_id'] = new \Thelia\Core\Form\Type\Field\ContentIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_CountryIdService()
    {
        return $this->services['thelia.form.type.field.country_id'] = new \Thelia\Core\Form\Type\Field\CountryIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_CouponIdService()
    {
        return $this->services['thelia.form.type.field.coupon_id'] = new \Thelia\Core\Form\Type\Field\CouponIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_CurrencyIdService()
    {
        return $this->services['thelia.form.type.field.currency_id'] = new \Thelia\Core\Form\Type\Field\CurrencyIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_CustomerIdService()
    {
        return $this->services['thelia.form.type.field.customer_id'] = new \Thelia\Core\Form\Type\Field\CustomerIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_CustomerTitleIdService()
    {
        return $this->services['thelia.form.type.field.customer_title_id'] = new \Thelia\Core\Form\Type\Field\CustomerTitleIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ExportCategoryIdService()
    {
        return $this->services['thelia.form.type.field.export_category_id'] = new \Thelia\Core\Form\Type\Field\ExportCategoryIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ExportIdService()
    {
        return $this->services['thelia.form.type.field.export_id'] = new \Thelia\Core\Form\Type\Field\ExportIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_FeatureAvIdService()
    {
        return $this->services['thelia.form.type.field.feature_av_id'] = new \Thelia\Core\Form\Type\Field\FeatureAvIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_FeatureIdService()
    {
        return $this->services['thelia.form.type.field.feature_id'] = new \Thelia\Core\Form\Type\Field\FeatureIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_FeatureProductIdService()
    {
        return $this->services['thelia.form.type.field.feature_product_id'] = new \Thelia\Core\Form\Type\Field\FeatureProductIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_FeatureTemplateIdService()
    {
        return $this->services['thelia.form.type.field.feature_template_id'] = new \Thelia\Core\Form\Type\Field\FeatureTemplateIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_FolderIdService()
    {
        return $this->services['thelia.form.type.field.folder_id'] = new \Thelia\Core\Form\Type\Field\FolderIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_FormFirewallIdService()
    {
        return $this->services['thelia.form.type.field.form_firewall_id'] = new \Thelia\Core\Form\Type\Field\FormFirewallIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_HookIdService()
    {
        return $this->services['thelia.form.type.field.hook_id'] = new \Thelia\Core\Form\Type\Field\HookIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ImportCategoryIdService()
    {
        return $this->services['thelia.form.type.field.import_category_id'] = new \Thelia\Core\Form\Type\Field\ImportCategoryIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ImportIdService()
    {
        return $this->services['thelia.form.type.field.import_id'] = new \Thelia\Core\Form\Type\Field\ImportIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_LangIdService()
    {
        return $this->services['thelia.form.type.field.lang_id'] = new \Thelia\Core\Form\Type\Field\LangIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_MessageIdService()
    {
        return $this->services['thelia.form.type.field.message_id'] = new \Thelia\Core\Form\Type\Field\MessageIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_MetaDataIdService()
    {
        return $this->services['thelia.form.type.field.meta_data_id'] = new \Thelia\Core\Form\Type\Field\MetaDataIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ModuleConfigIdService()
    {
        return $this->services['thelia.form.type.field.module_config_id'] = new \Thelia\Core\Form\Type\Field\ModuleConfigIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ModuleHookIdService()
    {
        return $this->services['thelia.form.type.field.module_hook_id'] = new \Thelia\Core\Form\Type\Field\ModuleHookIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ModuleIdService()
    {
        return $this->services['thelia.form.type.field.module_id'] = new \Thelia\Core\Form\Type\Field\ModuleIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_NewsletterIdService()
    {
        return $this->services['thelia.form.type.field.newsletter_id'] = new \Thelia\Core\Form\Type\Field\NewsletterIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_OrderAddressIdService()
    {
        return $this->services['thelia.form.type.field.order_address_id'] = new \Thelia\Core\Form\Type\Field\OrderAddressIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_OrderCouponIdService()
    {
        return $this->services['thelia.form.type.field.order_coupon_id'] = new \Thelia\Core\Form\Type\Field\OrderCouponIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_OrderIdService()
    {
        return $this->services['thelia.form.type.field.order_id'] = new \Thelia\Core\Form\Type\Field\OrderIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_OrderProductAttributeCombinationIdService()
    {
        return $this->services['thelia.form.type.field.order_product_attribute_combination_id'] = new \Thelia\Core\Form\Type\Field\OrderProductAttributeCombinationIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_OrderProductIdService()
    {
        return $this->services['thelia.form.type.field.order_product_id'] = new \Thelia\Core\Form\Type\Field\OrderProductIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_OrderProductTaxIdService()
    {
        return $this->services['thelia.form.type.field.order_product_tax_id'] = new \Thelia\Core\Form\Type\Field\OrderProductTaxIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_OrderStatusIdService()
    {
        return $this->services['thelia.form.type.field.order_status_id'] = new \Thelia\Core\Form\Type\Field\OrderStatusIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ProductAssociatedContentIdService()
    {
        return $this->services['thelia.form.type.field.product_associated_content_id'] = new \Thelia\Core\Form\Type\Field\ProductAssociatedContentIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ProductIdService()
    {
        return $this->services['thelia.form.type.field.product_id'] = new \Thelia\Core\Form\Type\Field\ProductIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ProductSaleElementsIdService()
    {
        return $this->services['thelia.form.type.field.product_sale_elements_id'] = new \Thelia\Core\Form\Type\Field\ProductSaleElementsIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ProfileIdService()
    {
        return $this->services['thelia.form.type.field.profile_id'] = new \Thelia\Core\Form\Type\Field\ProfileIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_ResourceIdService()
    {
        return $this->services['thelia.form.type.field.resource_id'] = new \Thelia\Core\Form\Type\Field\ResourceIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_RewritingUrlIdService()
    {
        return $this->services['thelia.form.type.field.rewriting_url_id'] = new \Thelia\Core\Form\Type\Field\RewritingUrlIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_SaleIdService()
    {
        return $this->services['thelia.form.type.field.sale_id'] = new \Thelia\Core\Form\Type\Field\SaleIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_SaleProductIdService()
    {
        return $this->services['thelia.form.type.field.sale_product_id'] = new \Thelia\Core\Form\Type\Field\SaleProductIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_StateIdService()
    {
        return $this->services['thelia.form.type.field.state_id'] = new \Thelia\Core\Form\Type\Field\StateIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_TaxIdService()
    {
        return $this->services['thelia.form.type.field.tax_id'] = new \Thelia\Core\Form\Type\Field\TaxIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_TaxRuleIdService()
    {
        return $this->services['thelia.form.type.field.tax_rule_id'] = new \Thelia\Core\Form\Type\Field\TaxRuleIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_Field_TemplateIdService()
    {
        return $this->services['thelia.form.type.field.template_id'] = new \Thelia\Core\Form\Type\Field\TemplateIdType($this->get('thelia.translator'));
    }
    protected function getThelia_Form_Type_ImageService()
    {
        return $this->services['thelia.form.type.image'] = new \Thelia\Core\Form\Type\ImageType();
    }
    protected function getThelia_Form_Type_ProductSaleElementsService()
    {
        return $this->services['thelia.form.type.product_sale_elements'] = new \Thelia\Core\Form\Type\ProductSaleElementsType($this->get('thelia.form.type.field.product_id'), $this->get('thelia.form.type.field.product_sale_elements_id'));
    }
    protected function getThelia_Form_Type_StandardFieldsService()
    {
        return $this->services['thelia.form.type.standard_fields'] = new \Thelia\Core\Form\Type\StandardFieldsType();
    }
    protected function getThelia_Form_Type_TaxRuleService()
    {
        return $this->services['thelia.form.type.tax_rule'] = new \Thelia\Core\Form\Type\TaxRuleType($this->get('thelia.form.type.field.tax_rule_id'));
    }
    protected function getThelia_Form_Type_TaxRuleI18nService()
    {
        return $this->services['thelia.form.type.tax_rule_i18n'] = new \Thelia\Core\Form\Type\TaxRuleI18nType();
    }
    protected function getThelia_FormFactoryService()
    {
        return $this->services['thelia.form_factory'] = new \Thelia\Core\Form\TheliaFormFactory($this->get('request_stack'), $this, array('thelia.api.empty' => 'Thelia\\Form\\Api\\ApiEmptyForm', 'thelia.api.customer.create' => 'Thelia\\Form\\Api\\Customer\\CustomerCreateForm', 'thelia.api.customer.update' => 'Thelia\\Form\\Api\\Customer\\CustomerUpdateForm', 'thelia.api.customer.login' => 'Thelia\\Form\\Api\\Customer\\CustomerLogin', 'thelia.api.category.create' => 'Thelia\\Form\\Api\\Category\\CategoryCreationForm', 'thelia.api.category.update' => 'Thelia\\Form\\Api\\Category\\CategoryModificationForm', 'thelia.api.product_sale_elements' => 'Thelia\\Form\\Api\\ProductSaleElements\\ProductSaleElementsForm', 'thelia.api.product.creation' => 'Thelia\\Form\\Api\\Product\\ProductCreationForm', 'thelia.api.product.modification' => 'Thelia\\Form\\Api\\Product\\ProductModificationForm', 'thelia.front.customer.login' => 'Thelia\\Form\\CustomerLogin', 'thelia.front.customer.lostpassword' => 'Thelia\\Form\\CustomerLostPasswordForm', 'thelia.front.customer.create' => 'Thelia\\Form\\CustomerCreateForm', 'thelia.front.customer.profile.update' => 'Thelia\\Form\\CustomerProfileUpdateForm', 'thelia.front.customer.password.update' => 'Thelia\\Form\\CustomerPasswordUpdateForm', 'thelia.front.address.create' => 'Thelia\\Form\\AddressCreateForm', 'thelia.front.address.update' => 'Thelia\\Form\\AddressUpdateForm', 'thelia.front.contact' => 'Thelia\\Form\\ContactForm', 'thelia.front.newsletter' => 'Thelia\\Form\\NewsletterForm', 'thelia.front.newsletter.unsubscribe' => 'Thelia\\Form\\NewsletterUnsubscribeForm', 'thelia.admin.login' => 'Thelia\\Form\\AdminLogin', 'thelia.admin.lostpassword' => 'Thelia\\Form\\AdminLostPassword', 'thelia.admin.createpassword' => 'Thelia\\Form\\AdminCreatePassword', 'thelia.admin.seo' => 'Thelia\\Form\\SeoForm', 'thelia.admin.customer.create' => 'Thelia\\Form\\CustomerCreateForm', 'thelia.admin.customer.update' => 'Thelia\\Form\\CustomerUpdateForm', 'thelia.admin.address.create' => 'Thelia\\Form\\AddressCreateForm', 'thelia.admin.address.update' => 'Thelia\\Form\\AddressUpdateForm', 'thelia.admin.category.creation' => 'Thelia\\Form\\CategoryCreationForm', 'thelia.admin.category.modification' => 'Thelia\\Form\\CategoryModificationForm', 'thelia.admin.category.image.modification' => 'Thelia\\Form\\CategoryImageModification', 'thelia.admin.category.document.modification' => 'Thelia\\Form\\CategoryDocumentModification', 'thelia.admin.product.creation' => 'Thelia\\Form\\ProductCreationForm', 'thelia.admin.product.clone' => 'Thelia\\Form\\ProductCloneForm', 'thelia.admin.product.modification' => 'Thelia\\Form\\ProductModificationForm', 'thelia.admin.product.details.modification' => 'Thelia\\Form\\ProductDetailsModificationForm', 'thelia.admin.product.image.modification' => 'Thelia\\Form\\ProductImageModification', 'thelia.admin.product.document.modification' => 'Thelia\\Form\\ProductDocumentModification', 'thelia.admin.product_sale_element.update' => 'Thelia\\Form\\ProductSaleElementUpdateForm', 'thelia.admin.product_default_sale_element.update' => 'Thelia\\Form\\ProductDefaultSaleElementUpdateForm', 'thelia.admin.product_combination.build' => 'Thelia\\Form\\ProductCombinationGenerationForm', 'thelia.admin.product.deletion' => 'Thelia\\Form\\ProductModificationForm', 'thelia.admin.folder.creation' => 'Thelia\\Form\\FolderCreationForm', 'thelia.admin.folder.modification' => 'Thelia\\Form\\FolderModificationForm', 'thelia.admin.folder.image.modification' => 'Thelia\\Form\\FolderImageModification', 'thelia.admin.folder.document.modification' => 'Thelia\\Form\\FolderDocumentModification', 'thelia.admin.content.creation' => 'Thelia\\Form\\ContentCreationForm', 'thelia.admin.content.modification' => 'Thelia\\Form\\ContentModificationForm', 'thelia.admin.content.image.modification' => 'Thelia\\Form\\ContentImageModification', 'thelia.admin.content.document.modification' => 'Thelia\\Form\\ContentDocumentModification', 'thelia.admin.brand.creation' => 'Thelia\\Form\\Brand\\BrandCreationForm', 'thelia.admin.brand.modification' => 'Thelia\\Form\\Brand\\BrandModificationForm', 'thelia.admin.brand.image.modification' => 'Thelia\\Form\\Brand\\BrandImageModification', 'thelia.admin.brand.document.modification' => 'Thelia\\Form\\Brand\\BrandDocumentModification', 'thelia.cart.add' => 'Thelia\\Form\\CartAdd', 'thelia.order.delivery' => 'Thelia\\Form\\OrderDelivery', 'thelia.order.payment' => 'Thelia\\Form\\OrderPayment', 'thelia.order.update.address' => 'Thelia\\Form\\OrderUpdateAddress', 'thelia.order.coupon' => 'Thelia\\Form\\CouponCode', 'thelia.admin.config.creation' => 'Thelia\\Form\\ConfigCreationForm', 'thelia.admin.config.modification' => 'Thelia\\Form\\ConfigModificationForm', 'thelia.admin.message.creation' => 'Thelia\\Form\\MessageCreationForm', 'thelia.admin.message.modification' => 'Thelia\\Form\\MessageModificationForm', 'thelia.admin.message.send-sample' => 'Thelia\\Form\\MessageSendSampleForm', 'thelia.admin.currency.creation' => 'Thelia\\Form\\CurrencyCreationForm', 'thelia.admin.currency.modification' => 'Thelia\\Form\\CurrencyModificationForm', 'thelia.admin.coupon.creation' => 'Thelia\\Form\\CouponCreationForm', 'thelia.admin.attribute.creation' => 'Thelia\\Form\\AttributeCreationForm', 'thelia.admin.attribute.modification' => 'Thelia\\Form\\AttributeModificationForm', 'thelia.admin.feature.creation' => 'Thelia\\Form\\FeatureCreationForm', 'thelia.admin.feature.modification' => 'Thelia\\Form\\FeatureModificationForm', 'thelia.admin.attributeav.creation' => 'Thelia\\Form\\AttributeAvCreationForm', 'thelia.admin.attributeav.modification' => 'Thelia\\Form\\AttributeAvCreationForm', 'thelia.admin.featureav.creation' => 'Thelia\\Form\\FeatureAvCreationForm', 'thelia.admin.taxrule.modification' => 'Thelia\\Form\\TaxRuleModificationForm', 'thelia.admin.taxrule.taxlistupdate' => 'Thelia\\Form\\TaxRuleTaxListUpdateForm', 'thelia.admin.taxrule.add' => 'Thelia\\Form\\TaxRuleCreationForm', 'thelia.admin.tax.modification' => 'Thelia\\Form\\TaxModificationForm', 'thelia.admin.tax.taxlistupdate' => 'Thelia\\Form\\TaxTaxListUpdateForm', 'thelia.admin.tax.add' => 'Thelia\\Form\\TaxCreationForm', 'thelia.admin.profile.add' => 'Thelia\\Form\\ProfileCreationForm', 'thelia.admin.profile.modification' => 'Thelia\\Form\\ProfileModificationForm', 'thelia.admin.profile.resource-access.modification' => 'Thelia\\Form\\ProfileUpdateResourceAccessForm', 'thelia.admin.profile.module-access.modification' => 'Thelia\\Form\\ProfileUpdateModuleAccessForm', 'thelia.admin.administrator.add' => 'Thelia\\Form\\AdministratorCreationForm', 'thelia.admin.administrator.update' => 'Thelia\\Form\\AdministratorModificationForm', 'thelia.admin.mailing-system.update' => 'Thelia\\Form\\MailingSystemModificationForm', 'thelia.admin.template.creation' => 'Thelia\\Form\\TemplateCreationForm', 'thelia.admin.template.modification' => 'Thelia\\Form\\TemplateModificationForm', 'thelia.admin.country.creation' => 'Thelia\\Form\\CountryCreationForm', 'thelia.admin.country.modification' => 'Thelia\\Form\\CountryModificationForm', 'thelia.admin.state.creation' => 'Thelia\\Form\\State\\StateCreationForm', 'thelia.admin.state.modification' => 'Thelia\\Form\\State\\StateModificationForm', 'thelia.admin.area.create' => 'Thelia\\Form\\Area\\AreaCreateForm', 'thelia.admin.area.modification' => 'Thelia\\Form\\Area\\AreaModificationForm', 'thelia.admin.area.country' => 'Thelia\\Form\\Area\\AreaCountryForm', 'thelia.admin.area.delete.country' => 'Thelia\\Form\\Area\\AreaDeleteCountryForm', 'thelia.admin.area.postage' => 'Thelia\\Form\\Area\\AreaPostageForm', 'thelia.shopping_zone_area' => 'Thelia\\Form\\ShippingZone\\ShippingZoneAddArea', 'thelia.shipping_zone_area' => 'Thelia\\Form\\ShippingZone\\ShippingZoneAddArea', 'thelia.shopping_zone_remove_area' => 'Thelia\\Form\\ShippingZone\\ShippingZoneRemoveArea', 'thelia.lang.update' => 'Thelia\\Form\\Lang\\LangUpdateForm', 'thelia.lang.create' => 'Thelia\\Form\\Lang\\LangCreateForm', 'thelia.lang.defaultBehavior' => 'Thelia\\Form\\Lang\\LangDefaultBehaviorForm', 'thelia.lang.url' => 'Thelia\\Form\\Lang\\LangUrlForm', 'thelia.configuration.store' => 'Thelia\\Form\\ConfigStoreForm', 'thelia.system-logs.configuration' => 'Thelia\\Form\\SystemLogConfigurationForm', 'thelia.admin.module.modification' => 'Thelia\\Form\\ModuleModificationForm', 'thelia.admin.module.image.modification' => 'Thelia\\Form\\ModuleImageModification', 'thelia.admin.module.install' => 'Thelia\\Form\\ModuleInstallForm', 'thelia.admin.hook.creation' => 'Thelia\\Form\\HookCreationForm', 'thelia.admin.hook.modification' => 'Thelia\\Form\\HookModificationForm', 'thelia.admin.module-hook.creation' => 'Thelia\\Form\\ModuleHookCreationForm', 'thelia.admin.module-hook.modification' => 'Thelia\\Form\\ModuleHookModificationForm', 'thelia.cache.flush' => 'Thelia\\Form\\Cache\\CacheFlushForm', 'thelia.assets.flush' => 'Thelia\\Form\\Cache\\AssetsFlushForm', 'thelia.images-and-documents-cache.flush' => 'Thelia\\Form\\Cache\\ImagesAndDocumentsCacheFlushForm', 'thelia.export' => 'Thelia\\Form\\ExportForm', 'thelia.import' => 'Thelia\\Form\\ImportForm', 'thelia.admin.sale.creation' => 'Thelia\\Form\\Sale\\SaleCreationForm', 'thelia.admin.sale.modification' => 'Thelia\\Form\\Sale\\SaleModificationForm', 'thelia.empty' => 'Thelia\\Form\\EmptyForm', 'thelia_api_create' => 'Thelia\\Form\\Api\\ApiCreateForm', 'thelia_api_update' => 'Thelia\\Form\\Api\\ApiUpdateForm', 'thelia.admin.order-status.creation' => 'Thelia\\Form\\OrderStatus\\OrderStatusCreationForm', 'thelia.admin.order-status.modification' => 'Thelia\\Form\\OrderStatus\\OrderStatusModificationForm', 'hookanalytics.configuration.form' => 'HookAnalytics\\Form\\Configuration', 'hooknavigation.configuration' => 'HookNavigation\\Form\\HookNavigationConfigForm', 'hooksocial.configuration.form' => 'HookSocial\\Form\\Configuration'));
    }
    protected function getThelia_FormFactoryBuilderService()
    {
        $this->services['thelia.form_factory_builder'] = $instance = new \Symfony\Component\Form\FormFactoryBuilder();
        $instance->addExtension($this->get('thelia.forms.extension.http_foundation_extension'));
        $instance->addExtension($this->get('thelia.forms.extension.core_extension'));
        $instance->addType($this->get('thelia.form.type.standard_fields'));
        $instance->addType($this->get('thelia.form.type.product_sale_elements'));
        $instance->addType($this->get('thelia.form.type.customer_title'));
        $instance->addType($this->get('thelia.form.type.customer_title_i18n'));
        $instance->addType($this->get('thelia.form.type.tax_rule'));
        $instance->addType($this->get('thelia.form.type.tax_rule_i18n'));
        $instance->addType($this->get('thelia.form.type.image'));
        $instance->addType($this->get('thelia.form.type.field.category_id'));
        $instance->addType($this->get('thelia.form.type.field.product_id'));
        $instance->addType($this->get('thelia.form.type.field.product_sale_elements_id'));
        $instance->addType($this->get('thelia.form.type.field.folder_id'));
        $instance->addType($this->get('thelia.form.type.field.content_id'));
        $instance->addType($this->get('thelia.form.type.field.currency_id'));
        $instance->addType($this->get('thelia.form.type.field.area_id'));
        $instance->addType($this->get('thelia.form.type.field.tax_rule_id'));
        $instance->addType($this->get('thelia.form.type.field.attribute_av'));
        $instance->addType($this->get('thelia.form.type.field.customer_title_id'));
        $instance->addType($this->get('thelia.form.type.field.country_id'));
        $instance->addType($this->get('thelia.form.type.field.state_id'));
        $instance->addType($this->get('thelia.form.type.field.tax_id'));
        $instance->addType($this->get('thelia.form.type.field.customer_id'));
        $instance->addType($this->get('thelia.form.type.field.lang_id'));
        $instance->addType($this->get('thelia.form.type.field.accessory_id'));
        $instance->addType($this->get('thelia.form.type.field.address_id'));
        $instance->addType($this->get('thelia.form.type.field.admin_log_id'));
        $instance->addType($this->get('thelia.form.type.field.admin_id'));
        $instance->addType($this->get('thelia.form.type.field.api_id'));
        $instance->addType($this->get('thelia.form.type.field.area_delivery_module_id'));
        $instance->addType($this->get('thelia.form.type.field.attribute_id'));
        $instance->addType($this->get('thelia.form.type.field.attribute_template_id'));
        $instance->addType($this->get('thelia.form.type.field.brand_id'));
        $instance->addType($this->get('thelia.form.type.field.cart_item_id'));
        $instance->addType($this->get('thelia.form.type.field.cart_id'));
        $instance->addType($this->get('thelia.form.type.field.category_associated_content_id'));
        $instance->addType($this->get('thelia.form.type.field.coupon_id'));
        $instance->addType($this->get('thelia.form.type.field.export_category_id'));
        $instance->addType($this->get('thelia.form.type.field.export_id'));
        $instance->addType($this->get('thelia.form.type.field.feature_av_id'));
        $instance->addType($this->get('thelia.form.type.field.feature_product_id'));
        $instance->addType($this->get('thelia.form.type.field.feature_id'));
        $instance->addType($this->get('thelia.form.type.field.feature_template_id'));
        $instance->addType($this->get('thelia.form.type.field.form_firewall_id'));
        $instance->addType($this->get('thelia.form.type.field.hook_id'));
        $instance->addType($this->get('thelia.form.type.field.import_category_id'));
        $instance->addType($this->get('thelia.form.type.field.import_id'));
        $instance->addType($this->get('thelia.form.type.field.message_id'));
        $instance->addType($this->get('thelia.form.type.field.meta_data_id'));
        $instance->addType($this->get('thelia.form.type.field.module_config_id'));
        $instance->addType($this->get('thelia.form.type.field.module_hook_id'));
        $instance->addType($this->get('thelia.form.type.field.module_id'));
        $instance->addType($this->get('thelia.form.type.field.newsletter_id'));
        $instance->addType($this->get('thelia.form.type.field.order_address_id'));
        $instance->addType($this->get('thelia.form.type.field.order_coupon_id'));
        $instance->addType($this->get('thelia.form.type.field.order_product_attribute_combination_id'));
        $instance->addType($this->get('thelia.form.type.field.order_product_id'));
        $instance->addType($this->get('thelia.form.type.field.order_product_tax_id'));
        $instance->addType($this->get('thelia.form.type.field.order_id'));
        $instance->addType($this->get('thelia.form.type.field.order_status_id'));
        $instance->addType($this->get('thelia.form.type.field.product_associated_content_id'));
        $instance->addType($this->get('thelia.form.type.field.profile_id'));
        $instance->addType($this->get('thelia.form.type.field.resource_id'));
        $instance->addType($this->get('thelia.form.type.field.rewriting_url_id'));
        $instance->addType($this->get('thelia.form.type.field.sale_product_id'));
        $instance->addType($this->get('thelia.form.type.field.sale_id'));
        $instance->addType($this->get('thelia.form.type.field.template_id'));
        return $instance;
    }
    protected function getThelia_FormValidatorService()
    {
        return $this->services['thelia.form_validator'] = new \Thelia\Core\Form\TheliaFormValidator($this->get('thelia.translator'), 'prod');
    }
    protected function getThelia_Forms_Extension_CoreExtensionService()
    {
        return $this->services['thelia.forms.extension.core_extension'] = new \Symfony\Component\Form\Extension\Core\CoreExtension();
    }
    protected function getThelia_Forms_Extension_HttpFoundationExtensionService()
    {
        return $this->services['thelia.forms.extension.http_foundation_extension'] = new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension();
    }
    protected function getThelia_Forms_ValidatorBuilderService()
    {
        $this->services['thelia.forms.validator_builder'] = $instance = new \Symfony\Component\Validator\ValidatorBuilder();
        $instance->setTranslationDomain('validators');
        $instance->setTranslator($this->get('thelia.translator'));
        return $instance;
    }
    protected function getThelia_HookhelperService()
    {
        return $this->services['thelia.hookhelper'] = new \Thelia\Core\Hook\HookHelper($this->get('thelia.parser.helper'));
    }
    protected function getThelia_Import_HandlerService()
    {
        return $this->services['thelia.import.handler'] = new \Thelia\Handler\ImportHandler($this->get('event_dispatcher'), $this->get('thelia.serializer.manager'), $this->get('thelia.archiver.manager'), $this);
    }
    protected function getThelia_Listener_ViewService()
    {
        return $this->services['thelia.listener.view'] = new \Thelia\Core\EventListener\ViewListener($this, $this->get('event_dispatcher'));
    }
    protected function getThelia_LoggerService()
    {
        return $this->services['thelia.logger'] = \Thelia\Log\Tlog::getInstance();
    }
    protected function getThelia_MetadataService()
    {
        return $this->services['thelia.metadata'] = new \Thelia\Action\MetaData();
    }
    protected function getThelia_ParserService()
    {
        $this->services['thelia.parser'] = $instance = new \TheliaSmarty\Template\SmartyParser($this->get('request_stack'), $this->get('event_dispatcher'), $this->get('thelia.parser.context'), $this->get('thelia.template_helper'), 'prod', false);
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookCurrency\\templates\\frontOffice\\default'), 'HookCurrency');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookLang\\templates\\frontOffice\\default'), 'HookLang');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookSearch\\templates\\frontOffice\\default'), 'HookSearch');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookCustomer\\templates\\frontOffice\\default'), 'HookCustomer');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookCart\\templates\\frontOffice\\default'), 'HookCart');
        $instance->addTemplateDirectory(2, 'default', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\templates\\backOffice\\default'), 'HookAnalytics');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookContact\\templates\\frontOffice\\default'), 'HookContact');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\templates\\frontOffice\\default'), 'HookLinks');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\templates\\frontOffice\\default'), 'HookNavigation');
        $instance->addTemplateDirectory(2, 'default', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\templates\\backOffice\\default'), 'HookNavigation');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\templates\\frontOffice\\default'), 'HookNewsletter');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\templates\\frontOffice\\default'), 'HookSocial');
        $instance->addTemplateDirectory(2, 'default', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\templates\\backOffice\\default'), 'HookSocial');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookProductsNew\\templates\\frontOffice\\default'), 'HookProductsNew');
        $instance->addTemplateDirectory(1, 'default', ($this->targetDirs[2].'\\local\\modules\\HookProductsOffer\\templates\\frontOffice\\default'), 'HookProductsOffer');
        $instance->addTemplateDirectory(2, 'default', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\templates\\backOffice\\default'), 'VirtualProductControl');
        $instance->addTemplateDirectory(2, 'default', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\templates\\backOffice\\default'), 'HookAdminHome');
        $instance->addTemplateDirectory(2, 'default', ($this->targetDirs[2].'\\local\\modules\\IntelliJ\\templates\\backOffice\\default'), 'IntelliJ');
        $instance->addPlugins($this->get('smarty.plugin.assets'));
        $instance->addPlugins($this->get('smarty.plugin.format'));
        $instance->addPlugins($this->get('smarty.plugin.thelialoop'));
        $instance->addPlugins($this->get('smarty.plugin.cartpostage'));
        $instance->addPlugins($this->get('smarty.plugin.type'));
        $instance->addPlugins($this->get('smarty.plugin.render'));
        $instance->addPlugins($this->get('smart.plugin.form'));
        $instance->addPlugins($this->get('smarty.plugin.translation'));
        $instance->addPlugins($this->get('smarty.plugin.module'));
        $instance->addPlugins($this->get('smarty.url.module'));
        $instance->addPlugins($this->get('smarty.plugin.security'));
        $instance->addPlugins($this->get('smarty.plugin.dataaccess'));
        $instance->addPlugins($this->get('smarty.plugin.adminutilities'));
        $instance->addPlugins($this->get('smarty.plugin.flashmessage'));
        $instance->addPlugins($this->get('smarty.plugin.esi'));
        $instance->addPlugins($this->get('smarty.plugin.hook'));
        $instance->addPlugins($this->get('smarty.plugin.cache'));
        $instance->registerPlugins();
        return $instance;
    }
    protected function getThelia_Parser_Asset_ResolverService()
    {
        return $this->services['thelia.parser.asset.resolver'] = new \TheliaSmarty\Template\Assets\SmartyAssetsResolver($this->get('assetic.asset.manager'));
    }
    protected function getThelia_Parser_ContextService()
    {
        return $this->services['thelia.parser.context'] = new \Thelia\Core\Template\ParserContext($this->get('request_stack'), $this->get('thelia.form_factory'), $this->get('thelia.form_validator'));
    }
    protected function getThelia_Parser_HelperService()
    {
        return $this->services['thelia.parser.helper'] = new \TheliaSmarty\Template\SmartyHelper();
    }
    protected function getThelia_SecuritycontextService()
    {
        return $this->services['thelia.securitycontext'] = new \Thelia\Core\Security\SecurityContext($this->get('request_stack'));
    }
    protected function getThelia_Serializer_CsvService()
    {
        return $this->services['thelia.serializer.csv'] = new \Thelia\Core\Serializer\Serializer\CSVSerializer();
    }
    protected function getThelia_Serializer_JsonService()
    {
        return $this->services['thelia.serializer.json'] = new \Thelia\Core\Serializer\Serializer\JSONSerializer();
    }
    protected function getThelia_Serializer_ManagerService()
    {
        $this->services['thelia.serializer.manager'] = $instance = new \Thelia\Core\Serializer\SerializerManager();
        $instance->add($this->get('thelia.serializer.csv'));
        $instance->add($this->get('thelia.serializer.xml'));
        $instance->add($this->get('thelia.serializer.json'));
        return $instance;
    }
    protected function getThelia_Serializer_XmlService()
    {
        return $this->services['thelia.serializer.xml'] = new \Thelia\Core\Serializer\Serializer\XMLSerializer();
    }
    protected function getThelia_TaxengineService()
    {
        return $this->services['thelia.taxengine'] = new \Thelia\TaxEngine\TaxEngine($this->get('request_stack'));
    }
    protected function getThelia_TemplateHelperService()
    {
        return $this->services['thelia.template_helper'] = new \Thelia\Core\Template\TheliaTemplateHelper();
    }
    protected function getThelia_TokenProviderService()
    {
        return $this->services['thelia.token_provider'] = new \Thelia\Tools\TokenProvider($this->get('request_stack'), $this->get('thelia.translator'), 'thelia.token_provider');
    }
    protected function getThelia_TranslatorService()
    {
        $a = $this->get('translation.loader.yml');
        $b = $this->get('translation.loader.xliff');
        $this->services['thelia.translator'] = $instance = new \Thelia\Core\Translation\Translator($this);
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\Front\\I18n\\de_DE.php'), 'de_DE', 'front');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\Front\\I18n\\en_US.php'), 'en_US', 'front');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\Front\\I18n\\fr_FR.php'), 'fr_FR', 'front');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\Front\\I18n\\it_IT.php'), 'it_IT', 'front');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\Front\\I18n\\tr_TR.php'), 'tr_TR', 'front');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSearch\\I18n\\frontOffice\\default\\de_DE.php'), 'de_DE', 'hooksearch.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSearch\\I18n\\frontOffice\\default\\en_US.php'), 'en_US', 'hooksearch.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSearch\\I18n\\frontOffice\\default\\fr_FR.php'), 'fr_FR', 'hooksearch.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSearch\\I18n\\frontOffice\\default\\it_IT.php'), 'it_IT', 'hooksearch.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSearch\\I18n\\frontOffice\\default\\tr_TR.php'), 'tr_TR', 'hooksearch.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookCustomer\\I18n\\frontOffice\\default\\de_DE.php'), 'de_DE', 'hookcustomer.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookCustomer\\I18n\\frontOffice\\default\\en_US.php'), 'en_US', 'hookcustomer.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookCustomer\\I18n\\frontOffice\\default\\fr_FR.php'), 'fr_FR', 'hookcustomer.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookCustomer\\I18n\\frontOffice\\default\\it_IT.php'), 'it_IT', 'hookcustomer.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookCustomer\\I18n\\frontOffice\\default\\tr_TR.php'), 'tr_TR', 'hookcustomer.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookCart\\I18n\\frontOffice\\default\\de_DE.php'), 'de_DE', 'hookcart.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookCart\\I18n\\frontOffice\\default\\en_US.php'), 'en_US', 'hookcart.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookCart\\I18n\\frontOffice\\default\\fr_FR.php'), 'fr_FR', 'hookcart.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookCart\\I18n\\frontOffice\\default\\it_IT.php'), 'it_IT', 'hookcart.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookCart\\I18n\\frontOffice\\default\\tr_TR.php'), 'tr_TR', 'hookcart.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\I18n\\de_DE.php'), 'de_DE', 'hookanalytics');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\I18n\\en_US.php'), 'en_US', 'hookanalytics');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\I18n\\fr_FR.php'), 'fr_FR', 'hookanalytics');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\I18n\\it_IT.php'), 'it_IT', 'hookanalytics');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\I18n\\tr_TR.php'), 'tr_TR', 'hookanalytics');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\I18n\\backOffice\\default\\de_DE.php'), 'de_DE', 'hookanalytics.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\I18n\\backOffice\\default\\en_US.php'), 'en_US', 'hookanalytics.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\I18n\\backOffice\\default\\fr_FR.php'), 'fr_FR', 'hookanalytics.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\I18n\\backOffice\\default\\it_IT.php'), 'it_IT', 'hookanalytics.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAnalytics\\I18n\\backOffice\\default\\tr_TR.php'), 'tr_TR', 'hookanalytics.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookContact\\I18n\\de_DE.php'), 'de_DE', 'hookcontact');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookContact\\I18n\\en_US.php'), 'en_US', 'hookcontact');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookContact\\I18n\\fr_FR.php'), 'fr_FR', 'hookcontact');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookContact\\I18n\\it_IT.php'), 'it_IT', 'hookcontact');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookContact\\I18n\\tr_TR.php'), 'tr_TR', 'hookcontact');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookContact\\I18n\\frontOffice\\default\\fr_FR.php'), 'fr_FR', 'hookcontact.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\I18n\\de_DE.php'), 'de_DE', 'hooklinks');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\I18n\\en_US.php'), 'en_US', 'hooklinks');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\I18n\\fr_FR.php'), 'fr_FR', 'hooklinks');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\I18n\\it_IT.php'), 'it_IT', 'hooklinks');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\I18n\\tr_TR.php'), 'tr_TR', 'hooklinks');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\I18n\\frontOffice\\default\\de_DE.php'), 'de_DE', 'hooklinks.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\I18n\\frontOffice\\default\\en_US.php'), 'en_US', 'hooklinks.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\I18n\\frontOffice\\default\\fr_FR.php'), 'fr_FR', 'hooklinks.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\I18n\\frontOffice\\default\\it_IT.php'), 'it_IT', 'hooklinks.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookLinks\\I18n\\frontOffice\\default\\tr_TR.php'), 'tr_TR', 'hooklinks.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\en_US.php'), 'en_US', 'hooknavigation');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\fr_FR.php'), 'fr_FR', 'hooknavigation');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\it_IT.php'), 'it_IT', 'hooknavigation');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\backOffice\\default\\de_DE.php'), 'de_DE', 'hooknavigation.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\backOffice\\default\\en_US.php'), 'en_US', 'hooknavigation.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\backOffice\\default\\fr_FR.php'), 'fr_FR', 'hooknavigation.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\backOffice\\default\\it_IT.php'), 'it_IT', 'hooknavigation.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\backOffice\\default\\tr_TR.php'), 'tr_TR', 'hooknavigation.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\frontOffice\\default\\de_DE.php'), 'de_DE', 'hooknavigation.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\frontOffice\\default\\en_US.php'), 'en_US', 'hooknavigation.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\frontOffice\\default\\fr_FR.php'), 'fr_FR', 'hooknavigation.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\frontOffice\\default\\it_IT.php'), 'it_IT', 'hooknavigation.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNavigation\\I18n\\frontOffice\\default\\tr_TR.php'), 'tr_TR', 'hooknavigation.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\I18n\\de_DE.php'), 'de_DE', 'hooknewsletter');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\I18n\\en_US.php'), 'en_US', 'hooknewsletter');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\I18n\\fr_FR.php'), 'fr_FR', 'hooknewsletter');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\I18n\\it_IT.php'), 'it_IT', 'hooknewsletter');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\I18n\\tr_TR.php'), 'tr_TR', 'hooknewsletter');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\I18n\\frontOffice\\default\\de_DE.php'), 'de_DE', 'hooknewsletter.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\I18n\\frontOffice\\default\\en_US.php'), 'en_US', 'hooknewsletter.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\I18n\\frontOffice\\default\\fr_FR.php'), 'fr_FR', 'hooknewsletter.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\I18n\\frontOffice\\default\\it_IT.php'), 'it_IT', 'hooknewsletter.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookNewsletter\\I18n\\frontOffice\\default\\tr_TR.php'), 'tr_TR', 'hooknewsletter.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\de_DE.php'), 'de_DE', 'hooksocial');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\en_US.php'), 'en_US', 'hooksocial');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\fr_FR.php'), 'fr_FR', 'hooksocial');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\it_IT.php'), 'it_IT', 'hooksocial');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\tr_TR.php'), 'tr_TR', 'hooksocial');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\backOffice\\default\\de_DE.php'), 'de_DE', 'hooksocial.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\backOffice\\default\\en_US.php'), 'en_US', 'hooksocial.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\backOffice\\default\\fr_FR.php'), 'fr_FR', 'hooksocial.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\backOffice\\default\\it_IT.php'), 'it_IT', 'hooksocial.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\backOffice\\default\\tr_TR.php'), 'tr_TR', 'hooksocial.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\frontOffice\\default\\de_DE.php'), 'de_DE', 'hooksocial.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\frontOffice\\default\\en_US.php'), 'en_US', 'hooksocial.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\frontOffice\\default\\fr_FR.php'), 'fr_FR', 'hooksocial.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\frontOffice\\default\\it_IT.php'), 'it_IT', 'hooksocial.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookSocial\\I18n\\frontOffice\\default\\tr_TR.php'), 'tr_TR', 'hooksocial.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookProductsNew\\I18n\\frontOffice\\default\\de_DE.php'), 'de_DE', 'hookproductsnew.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookProductsNew\\I18n\\frontOffice\\default\\en_US.php'), 'en_US', 'hookproductsnew.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookProductsNew\\I18n\\frontOffice\\default\\fr_FR.php'), 'fr_FR', 'hookproductsnew.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookProductsNew\\I18n\\frontOffice\\default\\it_IT.php'), 'it_IT', 'hookproductsnew.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookProductsNew\\I18n\\frontOffice\\default\\tr_TR.php'), 'tr_TR', 'hookproductsnew.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookProductsOffer\\I18n\\frontOffice\\default\\de_DE.php'), 'de_DE', 'hookproductsoffer.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookProductsOffer\\I18n\\frontOffice\\default\\en_US.php'), 'en_US', 'hookproductsoffer.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookProductsOffer\\I18n\\frontOffice\\default\\fr_FR.php'), 'fr_FR', 'hookproductsoffer.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookProductsOffer\\I18n\\frontOffice\\default\\it_IT.php'), 'it_IT', 'hookproductsoffer.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookProductsOffer\\I18n\\frontOffice\\default\\tr_TR.php'), 'tr_TR', 'hookproductsoffer.fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\TheliaSmarty\\I18n\\en_US.php'), 'en_US', 'theliasmarty');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\TheliaSmarty\\I18n\\fr_FR.php'), 'fr_FR', 'theliasmarty');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\TheliaSmarty\\I18n\\tr_TR.php'), 'tr_TR', 'theliasmarty');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\I18n\\de_DE.php'), 'de_DE', 'virtualproductcontrol');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\I18n\\en_US.php'), 'en_US', 'virtualproductcontrol');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\I18n\\fr_FR.php'), 'fr_FR', 'virtualproductcontrol');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\I18n\\it_IT.php'), 'it_IT', 'virtualproductcontrol');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\I18n\\tr_TR.php'), 'tr_TR', 'virtualproductcontrol');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\I18n\\backOffice\\default\\de_DE.php'), 'de_DE', 'virtualproductcontrol.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\I18n\\backOffice\\default\\en_US.php'), 'en_US', 'virtualproductcontrol.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\I18n\\backOffice\\default\\fr_FR.php'), 'fr_FR', 'virtualproductcontrol.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\I18n\\backOffice\\default\\it_IT.php'), 'it_IT', 'virtualproductcontrol.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\VirtualProductControl\\I18n\\backOffice\\default\\tr_TR.php'), 'tr_TR', 'virtualproductcontrol.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\ar_SA.php'), 'ar_SA', 'hookadminhome');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\cs_CZ.php'), 'cs_CZ', 'hookadminhome');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\de_DE.php'), 'de_DE', 'hookadminhome');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\en_US.php'), 'en_US', 'hookadminhome');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\es_ES.php'), 'es_ES', 'hookadminhome');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\fr_FR.php'), 'fr_FR', 'hookadminhome');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\id_ID.php'), 'id_ID', 'hookadminhome');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\it_IT.php'), 'it_IT', 'hookadminhome');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\ru_RU.php'), 'ru_RU', 'hookadminhome');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\tr_TR.php'), 'tr_TR', 'hookadminhome');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\backOffice\\default\\ar_SA.php'), 'ar_SA', 'hookadminhome.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\backOffice\\default\\cs_CZ.php'), 'cs_CZ', 'hookadminhome.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\backOffice\\default\\de_DE.php'), 'de_DE', 'hookadminhome.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\backOffice\\default\\en_US.php'), 'en_US', 'hookadminhome.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\backOffice\\default\\es_ES.php'), 'es_ES', 'hookadminhome.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\backOffice\\default\\fr_FR.php'), 'fr_FR', 'hookadminhome.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\backOffice\\default\\it_IT.php'), 'it_IT', 'hookadminhome.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\backOffice\\default\\pt_BR.php'), 'pt_BR', 'hookadminhome.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\backOffice\\default\\ru_RU.php'), 'ru_RU', 'hookadminhome.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\local\\modules\\HookAdminHome\\I18n\\backOffice\\default\\tr_TR.php'), 'tr_TR', 'hookadminhome.bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\ar_SA.php'), 'ar_SA', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\cs_CZ.php'), 'cs_CZ', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\de_DE.php'), 'de_DE', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\el_GR.php'), 'el_GR', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\en_US.php'), 'en_US', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\es_ES.php'), 'es_ES', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\fa_IR.php'), 'fa_IR', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\fr_FR.php'), 'fr_FR', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\he_IL.php'), 'he_IL', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\hu_HU.php'), 'hu_HU', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\id_ID.php'), 'id_ID', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\it_IT.php'), 'it_IT', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\nl_NL.php'), 'nl_NL', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\pl_PL.php'), 'pl_PL', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\pt_BR.php'), 'pt_BR', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\pt_PT.php'), 'pt_PT', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\ro_RO.php'), 'ro_RO', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\ru_RU.php'), 'ru_RU', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\sk_SK.php'), 'sk_SK', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\tr_TR.php'), 'tr_TR', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\uk_UA.php'), 'uk_UA', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\core\\lib\\Thelia\\Config\\I18n\\zh_CN.php'), 'zh_CN', 'core');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\ar_SA.php'), 'ar_SA', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\cs_CZ.php'), 'cs_CZ', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\de_DE.php'), 'de_DE', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\el_GR.php'), 'el_GR', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\en_US.php'), 'en_US', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\es_ES.php'), 'es_ES', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\fa_IR.php'), 'fa_IR', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\fr_FR.php'), 'fr_FR', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\hu_HU.php'), 'hu_HU', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\id_ID.php'), 'id_ID', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\it_IT.php'), 'it_IT', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\nl_NL.php'), 'nl_NL', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\pl_PL.php'), 'pl_PL', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\pt_BR.php'), 'pt_BR', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\pt_PT.php'), 'pt_PT', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\ru_RU.php'), 'ru_RU', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\sk_SK.php'), 'sk_SK', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\tr_TR.php'), 'tr_TR', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\frontOffice\\default\\I18n\\uk_UA.php'), 'uk_UA', 'fo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\ar_SA.php'), 'ar_SA', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\cs_CZ.php'), 'cs_CZ', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\de_DE.php'), 'de_DE', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\el_GR.php'), 'el_GR', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\en_US.php'), 'en_US', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\es_ES.php'), 'es_ES', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\fa_IR.php'), 'fa_IR', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\fr_FR.php'), 'fr_FR', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\he_IL.php'), 'he_IL', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\hu_HU.php'), 'hu_HU', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\id_ID.php'), 'id_ID', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\it_IT.php'), 'it_IT', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\nl_NL.php'), 'nl_NL', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\pl_PL.php'), 'pl_PL', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\pt_BR.php'), 'pt_BR', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\pt_PT.php'), 'pt_PT', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\ru_RU.php'), 'ru_RU', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\sk_SK.php'), 'sk_SK', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\tr_TR.php'), 'tr_TR', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\uk_UA.php'), 'uk_UA', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\backOffice\\default\\I18n\\zh_CN.php'), 'zh_CN', 'bo.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\ar_SA.php'), 'ar_SA', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\cs_CZ.php'), 'cs_CZ', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\de_DE.php'), 'de_DE', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\el_GR.php'), 'el_GR', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\en_US.php'), 'en_US', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\es_ES.php'), 'es_ES', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\fa_IR.php'), 'fa_IR', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\fr_FR.php'), 'fr_FR', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\hu_HU.php'), 'hu_HU', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\id_ID.php'), 'id_ID', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\it_IT.php'), 'it_IT', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\nl_NL.php'), 'nl_NL', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\pl_PL.php'), 'pl_PL', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\pt_BR.php'), 'pt_BR', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\pt_PT.php'), 'pt_PT', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\ru_RU.php'), 'ru_RU', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\sk_SK.php'), 'sk_SK', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\pdf\\default\\I18n\\tr_TR.php'), 'tr_TR', 'pdf.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\ar_SA.php'), 'ar_SA', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\cs_CZ.php'), 'cs_CZ', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\de_DE.php'), 'de_DE', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\el_GR.php'), 'el_GR', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\en_US.php'), 'en_US', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\es_ES.php'), 'es_ES', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\fa_IR.php'), 'fa_IR', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\fr_FR.php'), 'fr_FR', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\hu_HU.php'), 'hu_HU', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\id_ID.php'), 'id_ID', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\it_IT.php'), 'it_IT', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\pl_PL.php'), 'pl_PL', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\pt_BR.php'), 'pt_BR', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\pt_PT.php'), 'pt_PT', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\ru_RU.php'), 'ru_RU', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\sk_SK.php'), 'sk_SK', 'email.default');
        $instance->addResource('php', ($this->targetDirs[2].'\\templates\\email\\default\\I18n\\tr_TR.php'), 'tr_TR', 'email.default');
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $a);
        $instance->addLoader('yaml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        return $instance;
    }
    protected function getThelia_Url_ManagerService()
    {
        return $this->services['thelia.url.manager'] = new \Thelia\Tools\URL($this);
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getValidators_TranslatorService()
    {
        return $this->services['validators.translator'] = new \Thelia\Core\EventListener\RequestListener($this->get('thelia.translator'), $this->get('event_dispatcher'));
    }
    protected function getVirtualproductcontrol_HookService()
    {
        $this->services['virtualproductcontrol.hook'] = $instance = new \VirtualProductControl\Hook\VirtualProductHook($this->get('thelia.securitycontext'));
        $instance->module = $this->get('module.virtualproductcontrol');
        $instance->parser = $this->get('thelia.parser');
        $instance->translator = $this->get('thelia.translator');
        $instance->assetsResolver = $this->get('thelia.parser.asset.resolver');
        $instance->dispatcher = $this->get('event_dispatcher');
        return $instance;
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        $name = strtolower($name);
        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => ($this->targetDirs[2].'\\core\\lib\\Thelia\\Core'),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'Core',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'\\log'),
            'kernel.bundles' => array(
                'TheliaBundle' => 'Thelia\\Core\\Bundle\\TheliaBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'CoreProdProjectContainer',
            'thelia.root_dir' => ($this->targetDirs[2].'\\'),
            'thelia.core_dir' => ($this->targetDirs[2].'\\core\\lib\\Thelia'),
            'thelia.module_dir' => ($this->targetDirs[2].'\\local\\modules\\'),
            'thelia.parser.loops' => array(
                'accessory' => 'Thelia\\Core\\Template\\Loop\\Accessory',
                'address' => 'Thelia\\Core\\Template\\Loop\\Address',
                'admin' => 'Thelia\\Core\\Template\\Loop\\Admin',
                'area' => 'Thelia\\Core\\Template\\Loop\\Area',
                'associated_content' => 'Thelia\\Core\\Template\\Loop\\AssociatedContent',
                'attribute' => 'Thelia\\Core\\Template\\Loop\\Attribute',
                'attribute_availability' => 'Thelia\\Core\\Template\\Loop\\AttributeAvailability',
                'attribute_combination' => 'Thelia\\Core\\Template\\Loop\\AttributeCombination',
                'auth' => 'Thelia\\Core\\Template\\Loop\\Auth',
                'brand' => 'Thelia\\Core\\Template\\Loop\\Brand',
                'category' => 'Thelia\\Core\\Template\\Loop\\Category',
                'content' => 'Thelia\\Core\\Template\\Loop\\Content',
                'country' => 'Thelia\\Core\\Template\\Loop\\Country',
                'country-area' => 'Thelia\\Core\\Template\\Loop\\CountryArea',
                'state' => 'Thelia\\Core\\Template\\Loop\\State',
                'currency' => 'Thelia\\Core\\Template\\Loop\\Currency',
                'customer' => 'Thelia\\Core\\Template\\Loop\\Customer',
                'feature' => 'Thelia\\Core\\Template\\Loop\\Feature',
                'feature-availability' => 'Thelia\\Core\\Template\\Loop\\FeatureAvailability',
                'feature_value' => 'Thelia\\Core\\Template\\Loop\\FeatureValue',
                'folder' => 'Thelia\\Core\\Template\\Loop\\Folder',
                'folder-path' => 'Thelia\\Core\\Template\\Loop\\FolderPath',
                'module' => 'Thelia\\Core\\Template\\Loop\\Module',
                'hook' => 'Thelia\\Core\\Template\\Loop\\Hook',
                'module_hook' => 'Thelia\\Core\\Template\\Loop\\ModuleHook',
                'order' => 'Thelia\\Core\\Template\\Loop\\Order',
                'order_address' => 'Thelia\\Core\\Template\\Loop\\OrderAddress',
                'order_product' => 'Thelia\\Core\\Template\\Loop\\OrderProduct',
                'order_product_tax' => 'Thelia\\Core\\Template\\Loop\\OrderProductTax',
                'order_coupon' => 'Thelia\\Core\\Template\\Loop\\OrderCoupon',
                'order_product_attribute_combination' => 'Thelia\\Core\\Template\\Loop\\OrderProductAttributeCombination',
                'order-status' => 'Thelia\\Core\\Template\\Loop\\OrderStatus',
                'category-path' => 'Thelia\\Core\\Template\\Loop\\CategoryPath',
                'payment' => 'Thelia\\Core\\Template\\Loop\\Payment',
                'product' => 'Thelia\\Core\\Template\\Loop\\Product',
                'product_sale_elements' => 'Thelia\\Core\\Template\\Loop\\ProductSaleElements',
                'profile' => 'Thelia\\Core\\Template\\Loop\\Profile',
                'resource' => 'Thelia\\Core\\Template\\Loop\\Resource',
                'feed' => 'Thelia\\Core\\Template\\Loop\\Feed',
                'title' => 'Thelia\\Core\\Template\\Loop\\Title',
                'lang' => 'Thelia\\Core\\Template\\Loop\\Lang',
                'category-tree' => 'Thelia\\Core\\Template\\Loop\\CategoryTree',
                'folder-tree' => 'Thelia\\Core\\Template\\Loop\\FolderTree',
                'cart' => 'Thelia\\Core\\Template\\Loop\\Cart',
                'image' => 'Thelia\\Core\\Template\\Loop\\Image',
                'document' => 'Thelia\\Core\\Template\\Loop\\Document',
                'config' => 'Thelia\\Core\\Template\\Loop\\Config',
                'coupon' => 'Thelia\\Core\\Template\\Loop\\Coupon',
                'message' => 'Thelia\\Core\\Template\\Loop\\Message',
                'delivery' => 'Thelia\\Core\\Template\\Loop\\Delivery',
                'product-template' => 'Thelia\\Core\\Template\\Loop\\ProductTemplate',
                'template' => 'Thelia\\Core\\Template\\Loop\\Template',
                'tax' => 'Thelia\\Core\\Template\\Loop\\Tax',
                'tax-rule' => 'Thelia\\Core\\Template\\Loop\\TaxRule',
                'tax-rule-country' => 'Thelia\\Core\\Template\\Loop\\TaxRuleCountry',
                'serializer' => 'Thelia\\Core\\Template\\Loop\\Serializer',
                'archiver' => 'Thelia\\Core\\Template\\Loop\\Archiver',
                'import-category' => 'Thelia\\Core\\Template\\Loop\\ImportCategory',
                'export-category' => 'Thelia\\Core\\Template\\Loop\\ExportCategory',
                'import' => 'Thelia\\Core\\Template\\Loop\\Import',
                'export' => 'Thelia\\Core\\Template\\Loop\\Export',
                'sale' => 'Thelia\\Core\\Template\\Loop\\Sale',
                'module-config' => 'Thelia\\Core\\Template\\Loop\\ModuleConfig',
                'product-sale-elements-document' => 'Thelia\\Core\\Template\\Loop\\ProductSaleElementsDocument',
                'product-sale-elements-image' => 'Thelia\\Core\\Template\\Loop\\ProductSaleElementsImage',
            ),
            'thelia.parser.filters' => array(
            ),
            'thelia.parser.templatedirectives' => array(
            ),
            'command.definition' => array(
                0 => 'Thelia\\Command\\ClearImageCache',
                1 => 'Thelia\\Command\\CacheClear',
                2 => 'Thelia\\Command\\Install',
                3 => 'Thelia\\Command\\ModuleGenerateCommand',
                4 => 'Thelia\\Command\\ModuleGenerateModelCommand',
                5 => 'Thelia\\Command\\ModuleGenerateSqlCommand',
                6 => 'Thelia\\Command\\ModuleRefreshCommand',
                7 => 'Thelia\\Command\\ModuleActivateCommand',
                8 => 'Thelia\\Command\\ModuleDeactivateCommand',
                9 => 'Thelia\\Command\\ModuleListCommand',
                10 => 'Thelia\\Command\\ModulePositionCommand',
                11 => 'Thelia\\Command\\CreateAdminUser',
                12 => 'Thelia\\Command\\ReloadDatabaseCommand',
                13 => 'Thelia\\Command\\GenerateResources',
                14 => 'Thelia\\Command\\AdminUpdatePasswordCommand',
                15 => 'Thelia\\Command\\ConfigCommand',
                16 => 'Thelia\\Command\\SaleCheckActivationCommand',
                17 => 'Thelia\\Command\\GenerateSQLCommand',
                18 => 'Thelia\\Command\\HookCleanCommand',
                19 => 'Thelia\\Command\\ExportCommand',
                20 => 'Thelia\\Command\\ImportCommand',
            ),
            'thelia.parser.forms' => array(
                'thelia.api.empty' => 'Thelia\\Form\\Api\\ApiEmptyForm',
                'thelia.api.customer.create' => 'Thelia\\Form\\Api\\Customer\\CustomerCreateForm',
                'thelia.api.customer.update' => 'Thelia\\Form\\Api\\Customer\\CustomerUpdateForm',
                'thelia.api.customer.login' => 'Thelia\\Form\\Api\\Customer\\CustomerLogin',
                'thelia.api.category.create' => 'Thelia\\Form\\Api\\Category\\CategoryCreationForm',
                'thelia.api.category.update' => 'Thelia\\Form\\Api\\Category\\CategoryModificationForm',
                'thelia.api.product_sale_elements' => 'Thelia\\Form\\Api\\ProductSaleElements\\ProductSaleElementsForm',
                'thelia.api.product.creation' => 'Thelia\\Form\\Api\\Product\\ProductCreationForm',
                'thelia.api.product.modification' => 'Thelia\\Form\\Api\\Product\\ProductModificationForm',
                'thelia.front.customer.login' => 'Thelia\\Form\\CustomerLogin',
                'thelia.front.customer.lostpassword' => 'Thelia\\Form\\CustomerLostPasswordForm',
                'thelia.front.customer.create' => 'Thelia\\Form\\CustomerCreateForm',
                'thelia.front.customer.profile.update' => 'Thelia\\Form\\CustomerProfileUpdateForm',
                'thelia.front.customer.password.update' => 'Thelia\\Form\\CustomerPasswordUpdateForm',
                'thelia.front.address.create' => 'Thelia\\Form\\AddressCreateForm',
                'thelia.front.address.update' => 'Thelia\\Form\\AddressUpdateForm',
                'thelia.front.contact' => 'Thelia\\Form\\ContactForm',
                'thelia.front.newsletter' => 'Thelia\\Form\\NewsletterForm',
                'thelia.front.newsletter.unsubscribe' => 'Thelia\\Form\\NewsletterUnsubscribeForm',
                'thelia.admin.login' => 'Thelia\\Form\\AdminLogin',
                'thelia.admin.lostpassword' => 'Thelia\\Form\\AdminLostPassword',
                'thelia.admin.createpassword' => 'Thelia\\Form\\AdminCreatePassword',
                'thelia.admin.seo' => 'Thelia\\Form\\SeoForm',
                'thelia.admin.customer.create' => 'Thelia\\Form\\CustomerCreateForm',
                'thelia.admin.customer.update' => 'Thelia\\Form\\CustomerUpdateForm',
                'thelia.admin.address.create' => 'Thelia\\Form\\AddressCreateForm',
                'thelia.admin.address.update' => 'Thelia\\Form\\AddressUpdateForm',
                'thelia.admin.category.creation' => 'Thelia\\Form\\CategoryCreationForm',
                'thelia.admin.category.modification' => 'Thelia\\Form\\CategoryModificationForm',
                'thelia.admin.category.image.modification' => 'Thelia\\Form\\CategoryImageModification',
                'thelia.admin.category.document.modification' => 'Thelia\\Form\\CategoryDocumentModification',
                'thelia.admin.product.creation' => 'Thelia\\Form\\ProductCreationForm',
                'thelia.admin.product.clone' => 'Thelia\\Form\\ProductCloneForm',
                'thelia.admin.product.modification' => 'Thelia\\Form\\ProductModificationForm',
                'thelia.admin.product.details.modification' => 'Thelia\\Form\\ProductDetailsModificationForm',
                'thelia.admin.product.image.modification' => 'Thelia\\Form\\ProductImageModification',
                'thelia.admin.product.document.modification' => 'Thelia\\Form\\ProductDocumentModification',
                'thelia.admin.product_sale_element.update' => 'Thelia\\Form\\ProductSaleElementUpdateForm',
                'thelia.admin.product_default_sale_element.update' => 'Thelia\\Form\\ProductDefaultSaleElementUpdateForm',
                'thelia.admin.product_combination.build' => 'Thelia\\Form\\ProductCombinationGenerationForm',
                'thelia.admin.product.deletion' => 'Thelia\\Form\\ProductModificationForm',
                'thelia.admin.folder.creation' => 'Thelia\\Form\\FolderCreationForm',
                'thelia.admin.folder.modification' => 'Thelia\\Form\\FolderModificationForm',
                'thelia.admin.folder.image.modification' => 'Thelia\\Form\\FolderImageModification',
                'thelia.admin.folder.document.modification' => 'Thelia\\Form\\FolderDocumentModification',
                'thelia.admin.content.creation' => 'Thelia\\Form\\ContentCreationForm',
                'thelia.admin.content.modification' => 'Thelia\\Form\\ContentModificationForm',
                'thelia.admin.content.image.modification' => 'Thelia\\Form\\ContentImageModification',
                'thelia.admin.content.document.modification' => 'Thelia\\Form\\ContentDocumentModification',
                'thelia.admin.brand.creation' => 'Thelia\\Form\\Brand\\BrandCreationForm',
                'thelia.admin.brand.modification' => 'Thelia\\Form\\Brand\\BrandModificationForm',
                'thelia.admin.brand.image.modification' => 'Thelia\\Form\\Brand\\BrandImageModification',
                'thelia.admin.brand.document.modification' => 'Thelia\\Form\\Brand\\BrandDocumentModification',
                'thelia.cart.add' => 'Thelia\\Form\\CartAdd',
                'thelia.order.delivery' => 'Thelia\\Form\\OrderDelivery',
                'thelia.order.payment' => 'Thelia\\Form\\OrderPayment',
                'thelia.order.update.address' => 'Thelia\\Form\\OrderUpdateAddress',
                'thelia.order.coupon' => 'Thelia\\Form\\CouponCode',
                'thelia.admin.config.creation' => 'Thelia\\Form\\ConfigCreationForm',
                'thelia.admin.config.modification' => 'Thelia\\Form\\ConfigModificationForm',
                'thelia.admin.message.creation' => 'Thelia\\Form\\MessageCreationForm',
                'thelia.admin.message.modification' => 'Thelia\\Form\\MessageModificationForm',
                'thelia.admin.message.send-sample' => 'Thelia\\Form\\MessageSendSampleForm',
                'thelia.admin.currency.creation' => 'Thelia\\Form\\CurrencyCreationForm',
                'thelia.admin.currency.modification' => 'Thelia\\Form\\CurrencyModificationForm',
                'thelia.admin.coupon.creation' => 'Thelia\\Form\\CouponCreationForm',
                'thelia.admin.attribute.creation' => 'Thelia\\Form\\AttributeCreationForm',
                'thelia.admin.attribute.modification' => 'Thelia\\Form\\AttributeModificationForm',
                'thelia.admin.feature.creation' => 'Thelia\\Form\\FeatureCreationForm',
                'thelia.admin.feature.modification' => 'Thelia\\Form\\FeatureModificationForm',
                'thelia.admin.attributeav.creation' => 'Thelia\\Form\\AttributeAvCreationForm',
                'thelia.admin.attributeav.modification' => 'Thelia\\Form\\AttributeAvCreationForm',
                'thelia.admin.featureav.creation' => 'Thelia\\Form\\FeatureAvCreationForm',
                'thelia.admin.taxrule.modification' => 'Thelia\\Form\\TaxRuleModificationForm',
                'thelia.admin.taxrule.taxlistupdate' => 'Thelia\\Form\\TaxRuleTaxListUpdateForm',
                'thelia.admin.taxrule.add' => 'Thelia\\Form\\TaxRuleCreationForm',
                'thelia.admin.tax.modification' => 'Thelia\\Form\\TaxModificationForm',
                'thelia.admin.tax.taxlistupdate' => 'Thelia\\Form\\TaxTaxListUpdateForm',
                'thelia.admin.tax.add' => 'Thelia\\Form\\TaxCreationForm',
                'thelia.admin.profile.add' => 'Thelia\\Form\\ProfileCreationForm',
                'thelia.admin.profile.modification' => 'Thelia\\Form\\ProfileModificationForm',
                'thelia.admin.profile.resource-access.modification' => 'Thelia\\Form\\ProfileUpdateResourceAccessForm',
                'thelia.admin.profile.module-access.modification' => 'Thelia\\Form\\ProfileUpdateModuleAccessForm',
                'thelia.admin.administrator.add' => 'Thelia\\Form\\AdministratorCreationForm',
                'thelia.admin.administrator.update' => 'Thelia\\Form\\AdministratorModificationForm',
                'thelia.admin.mailing-system.update' => 'Thelia\\Form\\MailingSystemModificationForm',
                'thelia.admin.template.creation' => 'Thelia\\Form\\TemplateCreationForm',
                'thelia.admin.template.modification' => 'Thelia\\Form\\TemplateModificationForm',
                'thelia.admin.country.creation' => 'Thelia\\Form\\CountryCreationForm',
                'thelia.admin.country.modification' => 'Thelia\\Form\\CountryModificationForm',
                'thelia.admin.state.creation' => 'Thelia\\Form\\State\\StateCreationForm',
                'thelia.admin.state.modification' => 'Thelia\\Form\\State\\StateModificationForm',
                'thelia.admin.area.create' => 'Thelia\\Form\\Area\\AreaCreateForm',
                'thelia.admin.area.modification' => 'Thelia\\Form\\Area\\AreaModificationForm',
                'thelia.admin.area.country' => 'Thelia\\Form\\Area\\AreaCountryForm',
                'thelia.admin.area.delete.country' => 'Thelia\\Form\\Area\\AreaDeleteCountryForm',
                'thelia.admin.area.postage' => 'Thelia\\Form\\Area\\AreaPostageForm',
                'thelia.shopping_zone_area' => 'Thelia\\Form\\ShippingZone\\ShippingZoneAddArea',
                'thelia.shipping_zone_area' => 'Thelia\\Form\\ShippingZone\\ShippingZoneAddArea',
                'thelia.shopping_zone_remove_area' => 'Thelia\\Form\\ShippingZone\\ShippingZoneRemoveArea',
                'thelia.lang.update' => 'Thelia\\Form\\Lang\\LangUpdateForm',
                'thelia.lang.create' => 'Thelia\\Form\\Lang\\LangCreateForm',
                'thelia.lang.defaultBehavior' => 'Thelia\\Form\\Lang\\LangDefaultBehaviorForm',
                'thelia.lang.url' => 'Thelia\\Form\\Lang\\LangUrlForm',
                'thelia.configuration.store' => 'Thelia\\Form\\ConfigStoreForm',
                'thelia.system-logs.configuration' => 'Thelia\\Form\\SystemLogConfigurationForm',
                'thelia.admin.module.modification' => 'Thelia\\Form\\ModuleModificationForm',
                'thelia.admin.module.image.modification' => 'Thelia\\Form\\ModuleImageModification',
                'thelia.admin.module.install' => 'Thelia\\Form\\ModuleInstallForm',
                'thelia.admin.hook.creation' => 'Thelia\\Form\\HookCreationForm',
                'thelia.admin.hook.modification' => 'Thelia\\Form\\HookModificationForm',
                'thelia.admin.module-hook.creation' => 'Thelia\\Form\\ModuleHookCreationForm',
                'thelia.admin.module-hook.modification' => 'Thelia\\Form\\ModuleHookModificationForm',
                'thelia.cache.flush' => 'Thelia\\Form\\Cache\\CacheFlushForm',
                'thelia.assets.flush' => 'Thelia\\Form\\Cache\\AssetsFlushForm',
                'thelia.images-and-documents-cache.flush' => 'Thelia\\Form\\Cache\\ImagesAndDocumentsCacheFlushForm',
                'thelia.export' => 'Thelia\\Form\\ExportForm',
                'thelia.import' => 'Thelia\\Form\\ImportForm',
                'thelia.admin.sale.creation' => 'Thelia\\Form\\Sale\\SaleCreationForm',
                'thelia.admin.sale.modification' => 'Thelia\\Form\\Sale\\SaleModificationForm',
                'thelia.empty' => 'Thelia\\Form\\EmptyForm',
                'thelia_api_create' => 'Thelia\\Form\\Api\\ApiCreateForm',
                'thelia_api_update' => 'Thelia\\Form\\Api\\ApiUpdateForm',
                'thelia.admin.order-status.creation' => 'Thelia\\Form\\OrderStatus\\OrderStatusCreationForm',
                'thelia.admin.order-status.modification' => 'Thelia\\Form\\OrderStatus\\OrderStatusModificationForm',
                'hookanalytics.configuration.form' => 'HookAnalytics\\Form\\Configuration',
                'hooknavigation.configuration' => 'HookNavigation\\Form\\HookNavigationConfigForm',
                'hooksocial.configuration.form' => 'HookSocial\\Form\\Configuration',
            ),
            'esi.class' => 'Symfony\\Component\\HttpKernel\\HttpCache\\Esi',
            'esi_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\EsiListener',
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.renderer.inline.class' => 'Thelia\\Core\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'file_model.classes' => array(
                'document.product' => 'Thelia\\Model\\ProductDocument',
                'image.product' => 'Thelia\\Model\\ProductImage',
                'document.category' => 'Thelia\\Model\\CategoryDocument',
                'image.category' => 'Thelia\\Model\\CategoryImage',
                'document.content' => 'Thelia\\Model\\ContentDocument',
                'image.content' => 'Thelia\\Model\\ContentImage',
                'document.folder' => 'Thelia\\Model\\FolderDocument',
                'image.folder' => 'Thelia\\Model\\FolderImage',
                'document.brand' => 'Thelia\\Model\\BrandDocument',
                'image.brand' => 'Thelia\\Model\\BrandImage',
                'image.module' => 'Thelia\\Model\\ModuleImage',
            ),
            'admin.resources' => array(
                'thelia' => array(
                    'SUPERADMINISTRATOR' => 'SUPERADMINISTRATOR',
                    'ADDRESS' => 'admin.address',
                    'ADMINISTRATOR' => 'admin.configuration.administrator',
                    'ADVANCED_CONFIGURATION' => 'admin.configuration.advanced',
                    'AREA' => 'admin.configuration.area',
                    'ATTRIBUTE' => 'admin.configuration.attribute',
                    'BRAND' => 'admin.brand',
                    'CATEGORY' => 'admin.category',
                    'CONFIG' => 'admin.configuration"',
                    'CONTENT' => 'admin.content',
                    'COUNTRY' => 'admin.configuration.country',
                    'STATE' => 'admin.configuration.state',
                    'COUPON' => 'admin.coupon',
                    'CURRENCY' => 'admin.configuration.currency',
                    'CUSTOMER' => 'admin.customer',
                    'FEATURE' => 'admin.configuration.feature',
                    'FOLDER' => 'admin.folder',
                    'HOME' => 'admin.home',
                    'LANGUAGE' => 'admin.configuration.language',
                    'MAILING_SYSTEM' => 'admin.configuration.mailing-system',
                    'MESSAGE' => 'admin.configuration.message',
                    'MODULE' => 'admin.module',
                    'HOOK' => 'admin.hook',
                    'MODULE_HOOK' => 'admin.module-hook',
                    'ORDER' => 'admin.order',
                    'ORDER_STATUS' => 'admin.configuration.order-status',
                    'PRODUCT' => 'admin.product',
                    'PROFILE' => 'admin.configuration.profile',
                    'SHIPPING_ZONE' => 'admin.configuration.shipping-zone',
                    'TAX' => 'admin.configuration.tax',
                    'TEMPLATE' => 'admin.configuration.template',
                    'SYSTEM_LOG' => 'admin.configuration.system-logs',
                    'ADMIN_LOG' => 'admin.configuration.admin-logs',
                    'STORE' => 'admin.configuration.store',
                    'TRANSLATIONS' => 'admin.configuration.translations',
                    'UPDATE' => 'admin.configuration.update',
                    'EXPORT' => 'admin.export',
                    'IMPORT' => 'admin.import',
                    'TOOLS' => 'admin.tools',
                    'SALES' => 'admin.sales',
                    'API' => 'admin.configuration.api',
                    'TITLE' => 'admin.customer.title',
                ),
            ),
            'import.base_url' => '/admin/import',
            'export.base_url' => '/admin/export',
            'thelia.token_id' => 'thelia.token_provider',
            'thelia.validator.translation_domain' => 'validators',
            'thelia.logger.class' => 'Thelia\\Log\\Tlog',
            'thelia.cache.namespace' => 'thelia_cache',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'router.null_generator.class' => 'Thelia\\Routing\\NullUrlGenerator',
            'router.dynamicrouter.class' => 'Symfony\\Cmf\\Component\\Routing\\DynamicRouter',
            'router.chainrouter.class' => 'Symfony\\Cmf\\Component\\Routing\\ChainRouter',
            'router.class' => 'Symfony\\Component\\Routing\\Router',
            'router.xmlfilename' => 'routing.xml',
            'test.client.class' => 'Thelia\\Core\\HttpKernel\\Client',
            'test.client.parameters' => array(
            ),
            'test.client.history.class' => 'Symfony\\Component\\BrowserKit\\History',
            'test.client.cookiejar.class' => 'Symfony\\Component\\BrowserKit\\CookieJar',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
        );
    }
}
