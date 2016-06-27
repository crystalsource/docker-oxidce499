<?php
/**
 * An helper file for OXID, to provide autocomplete information to your IDE
 * Generated with PhpStorm / PS-145.1616 / OXID Plugin 0.4 on 2016-06-27 10:43:00.
 *
 * @author Daniel Espendiller <daniel@espendiller.net>
 * @see https://github.com/Haehnchen/idea-php-oxid-plugin
 */

namespace {
 exit("This file should not be included, only analyzed by your IDE");

 class oePayPalDeliverySet_Main_parent extends DeliverySet_Main
 {
 }

 class oeThemeSwitcherVendorList_parent extends VendorList
 {
 }

 class oeThemeSwitcherContent_parent extends Content
 {
 }

 class OxpsPaymorrowOxUser_parent extends oxUser
 {
  use \oePayPalOxUserTrait;
 }

 class oePayPalOxUser_parent extends oxUser
 {
  use \OxpsPaymorrowOxUserTrait;
 }

 class oeThemeSwitcherViewConfig_parent extends oxViewConfig
 {
  use \OxpsPaymorrowOxViewConfigTrait, \oePayPalOxViewConfigTrait;
 }

 class OxpsPaymorrowOxViewConfig_parent extends oxViewConfig
 {
  use \oeThemeSwitcherViewConfigTrait, \oePayPalOxViewConfigTrait;
 }

 class oePayPalOxViewConfig_parent extends oxViewConfig
 {
  use \OxpsPaymorrowOxViewConfigTrait, \oeThemeSwitcherViewConfigTrait;
 }

 class oePayPalOxwArticleDetails_parent extends oxwArticleDetails
 {
 }

 class oeThemeSwitcherRss_parent extends Rss
 {
 }

 class oeThemeSwitcherReview_parent extends Review
 {
 }

 class OxpsPaymorrowOxBasketItem_parent extends oxBasketItem
 {
 }

 class OxpsPaymorrowPayment_parent extends Payment
 {
  use \oePayPalPaymentTrait;
 }

 class oePayPalPayment_parent extends Payment
 {
  use \OxpsPaymorrowPaymentTrait;
 }

 class oeThemeSwitcherDetails_parent extends Details
 {
 }

 class oeThemeSwitcherTag_parent extends Tag
 {
 }

 class InvoicepdfOrder_Overview_parent extends Order_Overview
 {
 }

 class oePayPalOrder_parent extends order
 {
  use \OxpsPaymorrowOrderTrait;
 }

 class OxpsPaymorrowOrder_parent extends order
 {
  use \oePayPalOrderTrait;
 }

 class oeThemeSwitcherLang_parent extends oxLang
 {
 }

 class OxpsPaymorrowOxPaymentGateway_parent extends oxPaymentGateway
 {
  use \oePayPalOxPaymentGatewayTrait;
 }

 class oePayPalOxPaymentGateway_parent extends oxPaymentGateway
 {
  use \OxpsPaymorrowOxPaymentGatewayTrait;
 }

 class oeThemeSwitcherConfig_parent extends oxConfig
 {
 }

 class oeThemeSwitcherManufacturerList_parent extends ManufacturerList
 {
 }

 class oeThemeSwitcherStart_parent extends Start
 {
 }

 class OxpsPaymorrowOxPayment_parent extends oxPayment
 {
 }

 class OxpsPaymorrowOxUserPayment_parent extends oxUserPayment
 {
 }

 class oePayPalWrapping_parent extends Wrapping
 {
 }

 class oeThemeSwitcherTheme_parent extends oxTheme
 {
 }

 class oePayPalOxOrder_parent extends oxOrder
 {
  use \InvoicepdfOxOrderTrait, \OxpsPaymorrowOxOrderTrait;
 }

 class OxpsPaymorrowOxOrder_parent extends oxOrder
 {
  use \InvoicepdfOxOrderTrait, \oePayPalOxOrderTrait;
 }

 class InvoicepdfOxOrder_parent extends oxOrder
 {
  use \oePayPalOxOrderTrait, \OxpsPaymorrowOxOrderTrait;
 }

 class oeThemeSwitcherAList_parent extends aList
 {
 }

 class oePayPalOxcmp_Basket_parent extends oxcmp_basket
 {
 }

 class OxpsPaymorrowOxBasket_parent extends oxBasket
 {
  use \oePayPalOxBasketTrait;
 }

 class oePayPalOxBasket_parent extends oxBasket
 {
  use \OxpsPaymorrowOxBasketTrait;
 }

 class oePayPalOxAddress_parent extends oxAddress
 {
 }

 class oePayPalOxArticle_parent extends oxArticle
 {
 }

 class oePayPalOrder_List_parent extends Order_List
 {
 }

 trait oeThemeSwitcherAListTrait
 {
  /**
   * Check if filter was selected
   *
   * @return bool
   * @see \oeThemeSwitcherAList::getShowFilter
   */
  public function getShowFilter()
  {
  }

  /**
   * Returns view ID (for template engine caching).
   *
   * @return string   $this->_sViewId view id
   * @see \oeThemeSwitcherAList::getViewId
   */
  public function getViewId()
  {
  }

  /**
   * If filter should be displayed
   *
   * @var bool
   * @see \oeThemeSwitcherAList::_blShowFilter
   */
  protected $_blShowFilter;
 }

 trait oePayPalOxBasketTrait
 {
  /**
   * Checks if products in basket ar virtual and does not require real delivery.
   * Returns TRUE if virtual
   *
   * @return bool
   * @see \oePayPalOxBasket::isVirtualPayPalBasket
   */
  public function isVirtualPayPalBasket()
  {
  }

  /**
   * Checks if fraction quantity items (with 1.3 amount) exists in basket.
   *
   * @return bool
   * @see \oePayPalOxBasket::isFractionQuantityItemsPresent
   */
  public function isFractionQuantityItemsPresent()
  {
  }

  /**
   * Returns wrapping cost value
   *
   * @return double
   * @see \oePayPalOxBasket::getPayPalWrappingCosts
   */
  public function getPayPalWrappingCosts()
  {
  }

  /**
   * Returns greeting card cost value
   *
   * @return double
   * @see \oePayPalOxBasket::getPayPalGiftCardCosts
   */
  public function getPayPalGiftCardCosts()
  {
  }

  /**
   * Returns payment costs netto or brutto value.
   *
   * @return double
   * @see \oePayPalOxBasket::getPayPalPaymentCosts
   */
  public function getPayPalPaymentCosts()
  {
  }

  /**
   * Returns Trusted shops costs netto or brutto value.
   *
   * @return double
   * @see \oePayPalOxBasket::getPayPalTsProtectionCosts
   */
  public function getPayPalTsProtectionCosts()
  {
  }

  /**
   * Collects all basket discounts (basket, payment and vouchers)
   * and returns sum of collected discounts.
   *
   * @return double
   * @see \oePayPalOxBasket::getDiscountSumPayPalBasket
   */
  public function getDiscountSumPayPalBasket()
  {
  }

  /**
   * Calculates basket costs (payment, GiftCard and gift card)
   * and returns sum of all costs.
   *
   * @return double
   * @see \oePayPalOxBasket::getSumOfCostOfAllItemsPayPalBasket
   */
  public function getSumOfCostOfAllItemsPayPalBasket()
  {
  }

  /**
   * Returns absolute VAT value.
   *
   * @return float
   * @see \oePayPalOxBasket::getPayPalBasketVatValue
   */
  public function getPayPalBasketVatValue()
  {
  }

  /**
   * Return products VAT.
   *
   * @return double
   * @see \oePayPalOxBasket::getPayPalProductVat
   */
  public function getPayPalProductVat()
  {
  }

  /**
   * Return wrapping VAT.
   *
   * @return double
   * @see \oePayPalOxBasket::getPayPalWrappingVat
   */
  public function getPayPalWrappingVat()
  {
  }

  /**
   * Return gift card VAT.
   *
   * @return double
   * @see \oePayPalOxBasket::getPayPalGiftCardVat
   */
  public function getPayPalGiftCardVat()
  {
  }

  /**
   * Return payment VAT.
   *
   * @return double
   * @see \oePayPalOxBasket::getPayPalPayCostVat
   */
  public function getPayPalPayCostVat()
  {
  }

  /**
   * Return payment VAT.
   *
   * @return double
   * @see \oePayPalOxBasket::getPayPalTsProtectionCostVat
   */
  public function getPayPalTsProtectionCostVat()
  {
  }

 }

 trait OxpsPaymorrowOxPaymentGatewayTrait
 {
  /**
   * Overridden function calls Paymorrow services: confirmOrder
   *
   * @param                              $dAmount
   * @param oxOrder|OxpsPaymorrowOxOrder $oOrder
   *
   * @return bool|mixed
   * @see \OxpsPaymorrowOxPaymentGateway::executePayment
   */
  public function executePayment($dAmount, & $oOrder)
  {
  }

  /**
   * Saves Paymorrow User Payment data to oxUserPayments table
   *
   * @param oxOrder $oOrder
   * @param OxpsPaymorrowResponseHandler $oPmResponseHandler
   *
   * @return bool|string
   * @see \OxpsPaymorrowOxPaymentGateway::_savePaymorrowUserPaymentData
   */
  protected function _savePaymorrowUserPaymentData(oxOrder $oOrder, $oPmResponseHandler)
  {
  }

  /**
   * Check order response for declination status and fields and error fields.
   * Set all relevant fields to session.
   * The session data is used to go with redirection to payment step and used to initialize payment forms.
   *
   * @param OxpsPaymorrowResponseHandler $oPmResponseHandler
   * @see \OxpsPaymorrowOxPaymentGateway::_handleOrderResponseErrors
   */
  protected function _handleOrderResponseErrors($oPmResponseHandler)
  {
  }

  /**
   * Set array to session for payment form initialization.
   * This data is used to check if redirection to payment step is needed and also used to initialize payment forms.
   *
   * @codeCoverageIgnore
   *
   * @param array $aData
   * @see \OxpsPaymorrowOxPaymentGateway::_setSessionInitData
   */
  protected function _setSessionInitData($aData)
  {
  }

  /**
   * Call parent executePayment function
   *
   * @codeCoverageIgnore
   *
   * @param $dAmount
   * @param $oOrder
   *
   * @return mixed
   * @see \OxpsPaymorrowOxPaymentGateway::_OxpsPaymorrowOxPaymentGateway_executePayment_parent
   */
  protected function _OxpsPaymorrowOxPaymentGateway_executePayment_parent($dAmount, & $oOrder)
  {
  }

 }

 trait oePayPalDeliverySet_MainTrait
 {
  /**
   * Add default PayPal mobile payment.
   *
   * @return string
   * @see \oePayPalDeliverySet_Main::render
   */
  public function render()
  {
  }

  /**
   * Saves default PayPal mobile payment.
   * @see \oePayPalDeliverySet_Main::save
   */
  public function save()
  {
  }

  /**
   * Save default shipping id.
   *
   * @param oxConfig $oConfig Config object to save.
   * @param string $sShippingId Shipping id.
   * @param oePayPalConfig $oPayPalConfig PayPal config.
   * @see \oePayPalDeliverySet_Main::_saveECDefaultShippingId
   */
  protected function _saveECDefaultShippingId($oConfig, $sShippingId, $oPayPalConfig)
  {
  }

 }

 trait oePayPalOxcmp_BasketTrait
 {
  /**
   * Method returns URL to checkout products OR to show popup.
   *
   * @return string
   * @see \oePayPalOxcmp_Basket::actionExpressCheckoutFromDetailsPage
   */
  public function actionExpressCheckoutFromDetailsPage()
  {
  }

  /**
   * Returns whether ECS popup should be shown
   *
   * @return bool
   * @see \oePayPalOxcmp_Basket::shopECSPopUp
   */
  public function shopECSPopUp()
  {
  }

  /**
   * Action method to add product to basket and return checkout URL.
   *
   * @return string
   * @see \oePayPalOxcmp_Basket::actionAddToBasketAndGoToCheckout
   */
  public function actionAddToBasketAndGoToCheckout()
  {
  }

  /**
   * Action method to return checkout URL.
   *
   * @return string
   * @see \oePayPalOxcmp_Basket::actionNotAddToBasketAndGoToCheckout
   */
  public function actionNotAddToBasketAndGoToCheckout()
  {
  }

  /**
   * Returns express checkout URL
   *
   * @return string
   * @see \oePayPalOxcmp_Basket::_getExpressCheckoutUrl
   */
  protected function _getExpressCheckoutUrl()
  {
  }

  /**
   * Method returns serialized current article params.
   *
   * @return string
   * @see \oePayPalOxcmp_Basket::getCurrentArticleInfo
   */
  public function getCurrentArticleInfo()
  {
  }

  /**
   * Method sets params for article and returns it's object.
   *
   * @return oePayPalArticleToExpressCheckoutCurrentItem
   * @see \oePayPalOxcmp_Basket::_getCurrentArticle
   */
  protected function _getCurrentArticle()
  {
  }

  /**
   * Method returns request object.
   *
   * @return oePayPalRequest
   * @see \oePayPalOxcmp_Basket::_getRequest
   */
  protected function _getRequest()
  {
  }

  /**
   * Method sets params for validator and returns it's object.
   *
   * @return oePayPalArticleToExpressCheckoutValidator
   * @see \oePayPalOxcmp_Basket::_getValidator
   */
  protected function _getValidator()
  {
  }

  /**
   * Changes oePayPalCancelURL by changing popup showing parameter.
   *
   * @return string
   * @see \oePayPalOxcmp_Basket::getPayPalCancelURL
   */
  public function getPayPalCancelURL()
  {
  }

  /**
   * Formats Redirect URL to normal url
   *
   * @param string $sUnformedUrl
   *
   * @return string
   * @see \oePayPalOxcmp_Basket::_formatUrl
   */
  protected function _formatUrl($sUnformedUrl)
  {
  }

  /**
   * Show ECS PopUp
   *
   * @var bool
   * @see \oePayPalOxcmp_Basket::_blShopPopUp
   */
  protected $_blShopPopUp;
 }

 trait oeThemeSwitcherContentTrait
 {
  /**
   * Returns view ID (for template engine caching).
   *
   * @return string   $this->_sViewId view id
   * @see \oeThemeSwitcherContent::getViewId
   */
  public function getViewId()
  {
  }

 }

 trait oePayPalPaymentTrait
 {
  /**
   * Detects is current payment must be processed by PayPal and instead of standard validation
   * redirects to standard PayPal dispatcher
   *
   * @return bool
   * @see \oePayPalPayment::validatePayment
   */
  public function validatePayment()
  {
  }

  /**
   * Detects if current payment was already successfully processed by PayPal
   *
   * @param oxBasket $oBasket basket object
   *
   * @return bool
   * @see \oePayPalPayment::isConfirmedByPayPal
   */
  public function isConfirmedByPayPal($oBasket)
  {
  }

 }

 trait oeThemeSwitcherRssTrait
 {
  /**
   * Returns view ID (for template engine caching).
   *
   * @return string   $this->_sViewId view id
   * @see \oeThemeSwitcherRss::getViewId
   */
  public function getViewId()
  {
  }

 }

 trait oePayPalOxwArticleDetailsTrait
 {
  /**
   * Returns products amount to .tpl pages.
   *
   * @return int
   * @see \oePayPalOxwArticleDetails::oePayPalGetArticleAmount
   */
  public function oePayPalGetArticleAmount()
  {
  }

  /**
   * Returns persistent parameter.
   *
   * @return string
   * @see \oePayPalOxwArticleDetails::oePayPalGetPersistentParam
   */
  public function oePayPalGetPersistentParam()
  {
  }

  /**
   * Returns selections array.
   *
   * @return array
   * @see \oePayPalOxwArticleDetails::oePayPalGetSelection
   */
  public function oePayPalGetSelection()
  {
  }

  /**
   * Checks if showECSPopup parameter was passed.
   *
   * @return bool
   * @see \oePayPalOxwArticleDetails::oePayPalShowECSPopup
   */
  public function oePayPalShowECSPopup()
  {
  }

  /**
   * Checks if showECSPopup parameter was passed.
   *
   * @return bool
   * @see \oePayPalOxwArticleDetails::oePayPalGetCancelUrl
   */
  public function oePayPalGetCancelUrl()
  {
  }

  /**
   * Checks if displayCartInPayPal parameter was passed.
   *
   * @return bool
   * @see \oePayPalOxwArticleDetails::oePayPalDisplayCartInPayPal
   */
  public function oePayPalDisplayCartInPayPal()
  {
  }

  /**
   * Method returns request object.
   *
   * @return oePayPalRequest
   * @see \oePayPalOxwArticleDetails::_oePayPalGetRequest
   */
  protected function _oePayPalGetRequest()
  {
  }

  /**
   * Gets ECSArticle, unserializes and returns it.
   *
   * @return array
   * @see \oePayPalOxwArticleDetails::_oePayPalGetECSArticle
   */
  protected function _oePayPalGetECSArticle()
  {
  }

 }

 trait oeThemeSwitcherThemeTrait
 {
  /**
   * Get theme info item
   *
   * @param string $sName name of info item to retrieve
   *
   * @return mixed
   * @see \oeThemeSwitcherTheme::getInfo
   */
  public function getInfo($sName)
  {
  }

 }

 trait oePayPalOxViewConfigTrait
 {
  /**
   * Set oePayPalPaymentValidator.
   *
   * @param oePayPalPaymentValidator $oPaymentValidator
   * @see \oePayPalOxViewConfig::setPaymentValidator
   */
  public function setPaymentValidator($oPaymentValidator)
  {
  }

  /**
   * Get oePayPalPaymentValidator. Create new if does not exist.
   *
   * @return oePayPalPaymentValidator
   * @see \oePayPalOxViewConfig::getPaymentValidator
   */
  public function getPaymentValidator()
  {
  }

  /**
   * Returns TRUE if express checkout is enabled.
   * Does payment amount or user country/group check.
   *
   * @return bool
   * @see \oePayPalOxViewConfig::isExpressCheckoutEnabled
   */
  public function isExpressCheckoutEnabled()
  {
  }

  /**
   * Returns TRUE if express checkout and displaying it in mini basket is enabled.
   *
   * @return bool
   * @see \oePayPalOxViewConfig::isExpressCheckoutEnabledInMiniBasket
   */
  public function isExpressCheckoutEnabledInMiniBasket()
  {
  }

  /**
   * Returns TRUE if express checkout is enabled.
   * Does payment amount or user country/group check.
   *
   * @return bool
   * @see \oePayPalOxViewConfig::isExpressCheckoutEnabledInDetails
   */
  public function isExpressCheckoutEnabledInDetails()
  {
  }

  /**
   * Returns TRUE if standard checkout is enabled.
   * Does payment amount or user country/group check.
   *
   * @return bool
   * @see \oePayPalOxViewConfig::isStandardCheckoutEnabled
   */
  public function isStandardCheckoutEnabled()
  {
  }

  /**
   * Checks if PayPal standard or express checkout is enabled.
   * Does not do payment amount or user country/group check.
   *
   * @return bool
   * @see \oePayPalOxViewConfig::isPayPalActive
   */
  public function isPayPalActive()
  {
  }

  /**
   * Returns PayPal payment description text.
   *
   * @return string
   * @see \oePayPalOxViewConfig::getPayPalPaymentDescription
   */
  public function getPayPalPaymentDescription()
  {
  }

  /**
   * Returns PayPal payment object.
   *
   * @return oxPayment
   * @see \oePayPalOxViewConfig::getPayPalPayment
   */
  public function getPayPalPayment()
  {
  }

  /**
   * Returns state if order info should be send to PayPal.
   *
   * @return bool
   * @see \oePayPalOxViewConfig::sendOrderInfoToPayPal
   */
  public function sendOrderInfoToPayPal()
  {
  }

  /**
   * Returns default (on/off) state if order info should be send to PayPal.
   *
   * @return bool
   * @see \oePayPalOxViewConfig::sendOrderInfoToPayPalDefault
   */
  public function sendOrderInfoToPayPalDefault()
  {
  }

  /**
   * Returns PayPal config.
   *
   * @return oePayPalConfig
   * @see \oePayPalOxViewConfig::_getPayPalConfig
   */
  protected function _getPayPalConfig()
  {
  }

  /**
   * Returns current URL.
   *
   * @return string
   * @see \oePayPalOxViewConfig::getCurrentUrl
   */
  public function getCurrentUrl()
  {
  }

  /**
   * PayPal Payment Validator object.
   *
   * @var oePayPalPaymentValidator
   * @see \oePayPalOxViewConfig::_oPaymentValidator
   */
  protected $_oPaymentValidator;
  /**
   * PayPal payment object.
   *
   * @var bool
   * @see \oePayPalOxViewConfig::_oPayPalPayment
   */
  protected $_oPayPalPayment;
  /**
   * Status if Express checkout is ON.
   *
   * @var bool
   * @see \oePayPalOxViewConfig::_blExpressCheckoutEnabled
   */
  protected $_blExpressCheckoutEnabled;
  /**
   * Status if PayPal is ON.
   *
   * @var bool
   * @see \oePayPalOxViewConfig::_blPayPalEnabled
   */
  protected $_blPayPalEnabled;
  /**
   * Status if Standard checkout is ON.
   *
   * @var bool
   * @see \oePayPalOxViewConfig::_blStandardCheckoutEnabled
   */
  protected $_blStandardCheckoutEnabled;
  /** @var null oePayPalConfig * @see \oePayPalOxViewConfig::_oPayPalConfig
   */
  protected $_oPayPalConfig;
 }

 trait oeThemeSwitcherStartTrait
 {
  /**
   * Returns view ID (for template engine caching).
   *
   * @return string   $this->_sViewId view id
   * @see \oeThemeSwitcherStart::getViewId
   */
  public function getViewId()
  {
  }

 }

 trait oeThemeSwitcherReviewTrait
 {
  /**
   * Returns view ID (for template engine caching).
   *
   * @return string   $this->_sViewId view id
   * @see \oeThemeSwitcherReview::getViewId
   */
  public function getViewId()
  {
  }

 }

 trait OxpsPaymorrowOxBasketTrait
 {
  /**
   * Get line items array - summary of bought products, costs and vouchers.
   *
   * @for: OxpsPaymorrowEshopDataProvider
   *
   * @return array
   * @see \OxpsPaymorrowOxBasket::getPaymorrowBasketLineItems
   */
  public function getPaymorrowBasketLineItems()
  {
  }

  /**
   * Get basket currency name.
   *
   * @return string
   * @see \OxpsPaymorrowOxBasket::getPaymorrowBasketCurrency
   */
  public function getPaymorrowBasketCurrency()
  {
  }

  /**
   * Get basket total amount.
   * Also adds surcharge amount if it is needed.
   *
   * @return float
   * @see \OxpsPaymorrowOxBasket::getPaymorrowTotalAmount
   */
  public function getPaymorrowTotalAmount()
  {
  }

  /**
   * Get sum of all VATs: all products and all costs.
   *
   * @return float
   * @see \OxpsPaymorrowOxBasket::getPaymorrowTotalVatAmount
   */
  public function getPaymorrowTotalVatAmount()
  {
  }

  /**
   * Get VAT value for valid price object.
   * IF price is invalid returns zero.
   *
   * @param mixed|oxPrice $mPrice
   *
   * @return float
   * @see \OxpsPaymorrowOxBasket::_getVatForValidPrice
   */
  protected function _getVatForValidPrice($mPrice)
  {
  }

  /**
   * Checks if there are any additional costs and returns Line Items array as summary.
   *
   * @param int $iLineItemCount
   *
   * @return array
   * @see \OxpsPaymorrowOxBasket::_getPaymorrowAdditionalCostsSummary
   */
  protected function _getPaymorrowAdditionalCostsSummary($iLineItemCount)
  {
  }

  /**
   * Load default shop costs and extract lite items summary.
   *
   * @param int $iLineItem
   *
   * @return array Mixed array with line items array as first element and new line count as second element.
   * @see \OxpsPaymorrowOxBasket::_getDefaultCostsSummary
   */
  protected function _getDefaultCostsSummary($iLineItem)
  {
  }

  /**
   * Validate cost price and get cost line item data array for a valid cost.
   *
   * @param null|oxPrice $mPrice
   * @param int $iLineItem
   * @param string $sCost
   *
   * @return array
   * @see \OxpsPaymorrowOxBasket::_validateCostPriceAndGetItsData
   */
  protected function _validateCostPriceAndGetItsData($mPrice, $iLineItem, $sCost)
  {
  }

  /**
   * Get cost line item summary data as array.
   *
   * @param integer $iLineItem
   * @param string $sCostName
   * @param oxPrice $oPrice
   *
   * @return array
   * @see \OxpsPaymorrowOxBasket::_getCostSummary
   */
  protected function _getCostSummary($iLineItem, $sCostName, oxPrice $oPrice)
  {
  }

  /**
   * Get costs metadata values.
   *
   * @param string $sCostName
   *
   * @return array Cost metadata array: ID, Name, Type
   * @see \OxpsPaymorrowOxBasket::_getCostMetadata
   */
  protected function _getCostMetadata($sCostName)
  {
  }

  /**
   * Get shipping method ID.
   * Default value is "shippingCosts".
   *
   * @return string
   * @see \OxpsPaymorrowOxBasket::_getShippingId
   */
  protected function _getShippingId()
  {
  }

  /**
   * Get payment method ID.
   * Default value is "PaymentId".
   *
   * @return string
   * @see \OxpsPaymorrowOxBasket::_getPaymentId
   */
  protected function _getPaymentId()
  {
  }

  /**
   * Get TS protection ID.
   * Default value is "TsProtection".
   *
   * @return string
   * @see \OxpsPaymorrowOxBasket::_getTsProductId
   */
  protected function _getTsProductId()
  {
  }

  /**
   * Get payment method surcharge line item by loading it from posted Paymorrow payment form data.
   *
   * @param null|int $mLineItem If null, then surcharge price object is returned, else surcharge line item data array
   *
   * @return oxPrice|array
   * @see \OxpsPaymorrowOxBasket::_getPaymentMethodSurcharge
   */
  protected function _getPaymentMethodSurcharge($mLineItem = null)
  {
  }

  /**
   * If line item requested, then return line item data array, otherwise price object fdirectly.
   *
   * @param array|oxPrice $mPrice
   * @param null|int $mLineItem
   *
   * @return array|oxPrice
   * @see \OxpsPaymorrowOxBasket::_formatPriceItemResponse
   */
  protected function _formatPriceItemResponse($mPrice, $mLineItem)
  {
  }

  /**
   * Load payment method by ID and calculate its surcharge for the basket.
   *
   * @param string $sPaymentId
   *
   * @return array|oxPrice Empty array on failure, price object on success.
   * @see \OxpsPaymorrowOxBasket::_loadPaymentMethodSurcharge
   */
  protected function _loadPaymentMethodSurcharge($sPaymentId)
  {
  }

  /**
   * Get voucher discount summary.
   *
   * @param $iLineItem - Paymorrow line item must be passed in order to properly merge line items.
   *
   * @return array
   * @see \OxpsPaymorrowOxBasket::_getPaymorrowVouchersSummary
   */
  protected function _getPaymorrowVouchersSummary($iLineItem)
  {
  }

  /**
   * Alias for encoding casting method.
   *
   * @codeCoverageIgnore
   * @see OxpsPaymorrowEshopDataProvider::toUtf
   *
   * @param string $sString
   *
   * @return string
   * @see \OxpsPaymorrowOxBasket::_toUtf
   */
  protected function _toUtf($sString)
  {
  }

 }

 trait oePayPalOxUserTrait
 {
  /**
   * Check if exist real user (with password) for passed email
   *
   * @param string $sUserEmail - email
   *
   * @return bool
   * @see \oePayPalOxUser::isRealPayPalUser
   */
  public function isRealPayPalUser($sUserEmail)
  {
  }

  /**
   * Check if the shop user is the same as PayPal user.
   * Fields: first name, last name, street, street nr, city - must be equal.
   *
   * @param oePayPalResponseGetExpressCheckoutDetails $oDetails - data returned from PayPal
   *
   * @return bool
   * @see \oePayPalOxUser::isSamePayPalUser
   */
  public function isSamePayPalUser($oDetails)
  {
  }

  /**
   * Check if the shop user address is the same in PayPal.
   * Fields: street, street nr, city - must be equal.
   *
   * @param oePayPalResponseGetExpressCheckoutDetails $oDetails - data returned from PayPal
   *
   * @return bool
   * @see \oePayPalOxUser::isSameAddressPayPalUser
   */
  public function isSameAddressPayPalUser($oDetails)
  {
  }

  /**
   * Check if the shop user address user name is the same in PayPal.
   * Fields: name, lname.
   *
   * @param oePayPalResponseGetExpressCheckoutDetails $oDetails - data returned from PayPal
   *
   * @return bool
   * @see \oePayPalOxUser::isSameAddressUserPayPalUser
   */
  public function isSameAddressUserPayPalUser($oDetails)
  {
  }

  /**
   * Returns user from session associated with current PayPal order.
   *
   * @return oxUser
   * @see \oePayPalOxUser::loadUserPayPalUser
   */
  public function loadUserPayPalUser()
  {
  }

  /**
   * Creates user from PayPal data.
   *
   * @param oePayPalResponseGetExpressCheckoutDetails $oPayPalData Data returned from PayPal.
   * @see \oePayPalOxUser::createPayPalUser
   */
  public function createPayPalUser($oPayPalData)
  {
  }

  /**
   * Prepare address data array from PayPal response data.
   *
   * @param oePayPalResponseGetExpressCheckoutDetails $oPayPalData PayPal data.
   *
   * @return array
   * @see \oePayPalOxUser::_prepareDataPayPalUser
   */
  protected function _prepareDataPayPalUser($oPayPalData)
  {
  }

  /**
   * Check required fields.
   *
   * @param array $aAddressData PayPal data.
   *
   * @return bool
   * @see \oePayPalOxUser::_checkRequiredFieldsPayPalUser
   */
  protected function _checkRequiredFieldsPayPalUser($aAddressData)
  {
  }

  /**
   * Split street nr from address.
   *
   * @param string $sShipToStreet Address string.
   *
   * @return array
   * @see \oePayPalOxUser::_splitShipToStreetPayPalUser
   */
  protected function _splitShipToStreetPayPalUser($sShipToStreet)
  {
  }

  /**
   * Returns true if user has callback state.
   *
   * @return bool
   * @see \oePayPalOxUser::isCallBackUserPayPalUser
   */
  public function isCallBackUserPayPalUser()
  {
  }

  /**
   * Returns user group list.
   *
   * @param string $sOxId oxId identifier.
   *
   * @return oxList
   * @see \oePayPalOxUser::getUserGroups
   */
  public function getUserGroups($sOxId = null)
  {
  }

  /**
   * Initializes call back user.
   *
   * @param array $aPayPalData Callback user data.
   *
   * @return null
   * @see \oePayPalOxUser::initializeUserForCallBackPayPalUser
   */
  public function initializeUserForCallBackPayPalUser($aPayPalData)
  {
  }

  /**
   * CallBack user mode
   *
   * @var bool
   * @see \oePayPalOxUser::_blCallBackUser
   */
  protected $_blCallBackUser;
 }

 trait OxpsPaymorrowOxBasketItemTrait
 {
  /**
   * Paymorrow Line Item prefix builder
   *
   * @param $iLineItemCount
   *
   * @return string
   * @see \OxpsPaymorrowOxBasketItem::getPaymorrowBasketSummaryLineItemPrefix
   */
  public static function getPaymorrowBasketSummaryLineItemPrefix($iLineItemCount)
  {
  }

  /**
   * Get related article number.
   *
   * @return string
   * @see \OxpsPaymorrowOxBasketItem::getProductNumber
   */
  public function getProductNumber()
  {
  }

  /**
   * Compiles summary data array of basket item for Paymorrow.
   *
   * @param int $iLineItemCount
   *
   * @return array
   * @see \OxpsPaymorrowOxBasketItem::getPaymorrowBasketItemSummary
   */
  public function getPaymorrowBasketItemSummary($iLineItemCount)
  {
  }

  /**
   * Alias for encoding casting method.
   *
   * @codeCoverageIgnore
   * @see OxpsPaymorrowEshopDataProvider::toUtf
   *
   * @param string $sString
   * @param null|int $mLimitLength
   *
   * @return string
   * @see \OxpsPaymorrowOxBasketItem::_toUtf
   */
  protected function _toUtf($sString, $mLimitLength = null)
  {
  }

 }

 trait oePayPalOxAddressTrait
 {
  /**
   * Creates user shipping address from PayPal data and set to session.
   *
   * @param oePayPalResponseGetExpressCheckoutDetails $oDetails PayPal data.
   * @param string $sUserId user id.
   * @see \oePayPalOxAddress::createPayPalAddress
   */
  public function createPayPalAddress($oDetails, $sUserId)
  {
  }

  /**
   * Prepare address data array from PayPal response data.
   *
   * @param oePayPalResponseGetExpressCheckoutDetails $oDetails - PayPal data
   *
   * @return array
   * @see \oePayPalOxAddress::_prepareDataPayPalAddress
   */
  protected function _prepareDataPayPalAddress($oDetails)
  {
  }

  /**
   * Check required fields.
   *
   * @param array $aAddressData - PayPal data.
   *
   * @return bool
   * @see \oePayPalOxAddress::_checkRequiredFieldsPayPalAddress
   */
  protected function _checkRequiredFieldsPayPalAddress($aAddressData)
  {
  }

  /**
   * Checks if exists PayPal address.
   *
   * @param array $aAddressData
   *
   * @return bool|string
   * @see \oePayPalOxAddress::_existPayPalAddress
   */
  protected function _existPayPalAddress($aAddressData)
  {
  }

  /**
   *  Split street nr from address
   *
   * @param string $sShipToStreet address string
   *
   * @return array
   * @see \oePayPalOxAddress::splitShipToStreetPayPalAddress
   */
  public function splitShipToStreetPayPalAddress($sShipToStreet)
  {
  }

 }

 trait oePayPalOrder_ListTrait
 {
  /**
   * Executes parent method parent::render() and returns name of template
   * file "order_list.tpl".
   *
   * @return string
   * @see \oePayPalOrder_List::render
   */
  public function render()
  {
  }

  /**
   * Builds and returns SQL query string. Adds additional order check.
   *
   * @param object $oListObject list main object.
   *
   * @return string
   * @see \oePayPalOrder_List::_buildSelectString
   */
  protected function _buildSelectString($oListObject = null)
  {
  }

  /**
   * Adding folder check.
   *
   * @param array $aWhere SQL condition array.
   * @param string $sqlFull SQL query string.
   *
   * @return string
   * @see \oePayPalOrder_List::_prepareWhereQuery
   */
  protected function _prepareWhereQuery($aWhere, $sqlFull)
  {
  }

 }

 trait oePayPalOxPaymentGatewayTrait
 {
  /**
   * Sets order.
   *
   * @param oxOrder $oOrder
   * @see \oePayPalOxPaymentGateway::setPayPalOxOrder
   */
  public function setPayPalOxOrder($oOrder)
  {
  }

  /**
   * Gets order.
   *
   * @return oxOrder
   * @see \oePayPalOxPaymentGateway::getPayPalOxOrder
   */
  public function getPayPalOxOrder()
  {
  }

  /**
   * Executes payment, returns true on success.
   *
   * @param double $dAmount Goods amount
   * @param object &$oOrder User ordering object
   *
   * @return bool
   * @see \oePayPalOxPaymentGateway::executePayment
   */
  public function executePayment($dAmount, & $oOrder)
  {
  }

  /**
   * Executes "DoExpressCheckoutPayment" to PayPal
   *
   * @return bool
   * @see \oePayPalOxPaymentGateway::doExpressCheckoutPayment
   */
  public function doExpressCheckoutPayment()
  {
  }

  /**
   * Returns transaction mode.
   *
   * @param object $oBasket
   *
   * @return string
   * @see \oePayPalOxPaymentGateway::_getTransactionMode
   */
  protected function _getTransactionMode($oBasket)
  {
  }

  /**
   * Return PayPal config
   *
   * @return oePayPalConfig
   * @see \oePayPalOxPaymentGateway::getPayPalConfig
   */
  public function getPayPalConfig()
  {
  }

  /**
   * Set PayPal config
   *
   * @param oePayPalConfig $oPayPalConfig config
   * @see \oePayPalOxPaymentGateway::setPayPalConfig
   */
  public function setPayPalConfig($oPayPalConfig)
  {
  }

  /**
   * Sets PayPal service
   *
   * @param oePayPalService $oCheckoutService
   * @see \oePayPalOxPaymentGateway::setPayPalCheckoutService
   */
  public function setPayPalCheckoutService($oCheckoutService)
  {
  }

  /**
   * Returns PayPal service
   *
   * @return oePayPalService
   * @see \oePayPalOxPaymentGateway::getPayPalCheckoutService
   */
  public function getPayPalCheckoutService()
  {
  }

  /**
   * Returns PayPal order object
   *
   * @return oxOrder
   * @see \oePayPalOxPaymentGateway::_getPayPalOrder
   */
  protected function _getPayPalOrder()
  {
  }

  /**
   * Returns PayPal user
   *
   * @return oxUser
   * @see \oePayPalOxPaymentGateway::_getPayPalUser
   */
  protected function _getPayPalUser()
  {
  }

  /**
   * PayPal config.
   *
   * @var null
   * @see \oePayPalOxPaymentGateway::_oCheckoutService
   */
  protected $_oCheckoutService;
  /**
   * Order.
   *
   * @var oxOrder
   * @see \oePayPalOxPaymentGateway::_oPayPalOxOrder
   */
  protected $_oPayPalOxOrder;
  /**
   * PayPal config.
   *
   * @var null
   * @see \oePayPalOxPaymentGateway::_oPayPalConfig
   */
  protected $_oPayPalConfig;
 }

 trait OxpsPaymorrowOxViewConfigTrait
 {
  /**
   * Get configured Paymorrow merchant ID for active mode.
   *
   * @return null|string
   * @see \OxpsPaymorrowOxViewConfig::getPaymorrowMerchantId
   */
  public function getPaymorrowMerchantId()
  {
  }

  /**
   * Get active admin interface language abbreviation.
   *
   * @return string
   * @see \OxpsPaymorrowOxViewConfig::getActiveInterfaceLanguageAbbr
   */
  public function getActiveInterfaceLanguageAbbr()
  {
  }

 }

 trait oeThemeSwitcherDetailsTrait
 {
  /**
   * Returns view ID (for template engine caching).
   *
   * @return string   $this->_sViewId view id
   * @see \oeThemeSwitcherDetails::getViewId
   */
  public function getViewId()
  {
  }

 }

 trait oePayPalOxOrderTrait
 {
  /**
   * Loads order associated with current PayPal order
   *
   * @return bool
   * @see \oePayPalOxOrder::loadPayPalOrder
   */
  public function loadPayPalOrder()
  {
  }

  /**
   * Updates order number.
   *
   * @return bool
   * @see \oePayPalOxOrder::oePayPalUpdateOrderNumber
   */
  public function oePayPalUpdateOrderNumber()
  {
  }

  /**
   * Delete order created by current PayPal ordering process
   *
   * @return bool
   * @see \oePayPalOxOrder::deletePayPalOrder
   */
  public function deletePayPalOrder()
  {
  }

  /**
   * Delete order together with PayPal order data.
   *
   * @param string $sOxId
   *
   * @return null
   * @see \oePayPalOxOrder::delete
   */
  public function delete($sOxId = null)
  {
  }

  /**
   * Updates order transaction status, ID and date.
   *
   * @param string $sTransactionId Order transaction ID
   * @param string $sDate Order transaction date
   * @see \oePayPalOxOrder::_setPaymentInfoPayPalOrder
   */
  protected function _setPaymentInfoPayPalOrder($sTransactionId)
  {
  }

  /**
   * Finalizes PayPal order.
   *
   * @param oePayPalResponseDoExpressCheckoutPayment $oResult PayPal results array.
   * @param oxBasket $oBasket Basket object.
   * @param string $sTransactionMode Transaction mode Sale|Authorization.
   * @see \oePayPalOxOrder::finalizePayPalOrder
   */
  public function finalizePayPalOrder($oResult, $oBasket, $sTransactionMode)
  {
  }

  /**
   * Paypal specific status checking.
   *
   * If status comes as OK, lets check real paypal payment state,
   * and if really ok, so lets set it, otherwise dont change status.
   *
   * @param string $sStatus order transaction status
   * @see \oePayPalOxOrder::_setOrderStatus
   */
  protected function _setOrderStatus($sStatus)
  {
  }

  /**
   * Update order oxpaid to current time.
   * @see \oePayPalOxOrder::markOrderPaid
   */
  public function markOrderPaid()
  {
  }

  /**
   * Checks if delivery set used for current order is available and active.
   * Throws exception if not available
   *
   * @param oxbasket $oBasket basket object
   *
   * @return int
   * @see \oePayPalOxOrder::validateDelivery
   */
  public function validateDelivery($oBasket)
  {
  }

  /**
   * Returns PayPal order object.
   *
   * @param string $sOxId
   *
   * @return oePayPalPayPalOrder|null
   * @see \oePayPalOxOrder::getPayPalOrder
   */
  public function getPayPalOrder($sOxId = null)
  {
  }

  /**
   * Get payment status
   *
   * @return string
   * @see \oePayPalOxOrder::getPayPalPaymentStatus
   */
  public function getPayPalPaymentStatus()
  {
  }

  /**
   * Returns PayPal Authorization id.
   *
   * @return string
   * @see \oePayPalOxOrder::getAuthorizationId
   */
  public function getAuthorizationId()
  {
  }

  /**
   * Checks whether PayPal payment is available.
   *
   * @param object $oUser
   * @param double $dBasketPrice
   * @param string $sShippingId
   *
   * @return bool
   * @see \oePayPalOxOrder::_isPayPalPaymentValid
   */
  protected function _isPayPalPaymentValid($oUser, $dBasketPrice, $sShippingId)
  {
  }

  /**
   * Checks whether Empty payment is available.
   *
   * @param object $oUser
   * @param double $dBasketPrice
   * @param string $sShippingId
   *
   * @return bool
   * @see \oePayPalOxOrder::_isEmptyPaymentValid
   */
  protected function _isEmptyPaymentValid($oUser, $dBasketPrice, $sShippingId)
  {
  }

  /**
   * PayPal order information
   *
   * @var oePayPalPayPalOrder
   * @see \oePayPalOxOrder::_oPayPalOrder
   */
  protected $_oPayPalOrder;
 }

 trait oePayPalOxArticleTrait
 {
  /**
   * Check if Product is virtual: is non material and is downloadable
   *
   * @return bool
   * @see \oePayPalOxArticle::isVirtualPayPalArticle
   */
  public function isVirtualPayPalArticle()
  {
  }

  /**
   * Gets stock amount for article
   *
   * @return float
   * @see \oePayPalOxArticle::getStockAmount
   */
  public function getStockAmount()
  {
  }

 }

 trait OxpsPaymorrowPaymentTrait
 {
  /**
   * Overridden parent method.
   * Additionally checks if Paymorrow request was successful.
   * It is needed for detecting cases, when JavaScript is disabled in user browser and no requests were sent.
   *
   * @return mixed
   * @see \OxpsPaymorrowPayment::validatePayment
   */
  public function validatePayment()
  {
  }

  /**
   * Delete session key with Paymorrow init data.
   * It is set on order confirmation errors, used to redirect user to the payment spe and passed to forms init.
   *
   * @codeCoverageIgnore
   * @see \OxpsPaymorrowPayment::_unsetSessionInitData
   */
  protected function _unsetSessionInitData()
  {
  }

  /**
   * Load payment method by ID and check if it is mapped as active Paymorrow method.
   *
   * @param string $iId
   *
   * @return bool
   * @see \OxpsPaymorrowPayment::_isPaymorrowPayment
   */
  protected function _isPaymorrowPayment($iId)
  {
  }

  /**
   * Check payment response in session fot errors.
   *
   * @return bool True is response is invalid, false otherwise.
   * @see \OxpsPaymorrowPayment::_isPaymentResponseSessionInvalid
   */
  protected function _isPaymentResponseSessionInvalid()
  {
  }

  /**
   * Parent `validatePayment` call.
   *
   * @codeCoverageIgnore
   *
   * @return mixed
   * @see \OxpsPaymorrowPayment::_OxpsPaymorrowPayment_validatePayment_parent
   */
  protected function _OxpsPaymorrowPayment_validatePayment_parent()
  {
  }

 }

 trait oeThemeSwitcherTagTrait
 {
  /**
   * Returns view ID (for template engine caching).
   *
   * @return string   $this->_sViewId view id
   * @see \oeThemeSwitcherTag::getViewId
   */
  public function getViewId()
  {
  }

 }

 trait oeThemeSwitcherLangTrait
 {
  /**
   * Returns array with paths where frontend language files are stored
   *
   * @param int $iLang active language
   *
   * @return array
   * @see \oeThemeSwitcherLang::_getLangFilesPathArray
   */
  protected function _getLangFilesPathArray($iLang)
  {
  }

  /**
   * Returns language cache file name
   *
   * @param bool $blAdmin admin or not
   * @param int $iLang current language id
   * @param array $aLangFiles language files to load [optional]
   *
   * @return string
   * @see \oeThemeSwitcherLang::_getLangFileCacheName
   */
  protected function _getLangFileCacheName($blAdmin, $iLang, $aLangFiles = null)
  {
  }

  /**
   * Returns language map array
   *
   * @param int $iLang language index
   * @param bool $blAdmin admin mode [default NULL]
   *
   * @return array
   * @see \oeThemeSwitcherLang::_getLanguageMap
   */
  protected function _getLanguageMap($iLang, $blAdmin = null)
  {
  }

 }

 trait oeThemeSwitcherViewConfigTrait
 {
  /**
   * User Agent getter.
   *
   * @return oeThemeSwitcherUserAgent
   * @see \oeThemeSwitcherViewConfig::oeThemeSwitcherGetUserAgent
   */
  public function oeThemeSwitcherGetUserAgent()
  {
  }

  /**
   * User Agent.
   *
   * @var object
   * @see \oeThemeSwitcherViewConfig::_oUserAgent
   */
  protected $_oUserAgent;
 }

 trait OxpsPaymorrowOxUserPaymentTrait
 {
  /**
   * Set Paymorrow bank name.
   *
   * @param $sBankName
   * @see \OxpsPaymorrowOxUserPayment::setPaymorrowBankName
   */
  public function setPaymorrowBankName($sBankName)
  {
  }

  /**
   * Get Paymorrow bank name.
   *
   * @return string
   * @see \OxpsPaymorrowOxUserPayment::getPaymorrowBankName
   */
  public function getPaymorrowBankName()
  {
  }

  /**
   * Set Paymorrow transaction IBAN code.
   *
   * @param string $sIBAN
   * @see \OxpsPaymorrowOxUserPayment::setPaymorrowIBAN
   */
  public function setPaymorrowIBAN($sIBAN)
  {
  }

  /**
   * Get Paymorrow transaction IBAN code.
   *
   * @return string
   * @see \OxpsPaymorrowOxUserPayment::getPaymorrowIBAN
   */
  public function getPaymorrowIBAN()
  {
  }

  /**
   * Set Paymorrow transaction BIC code.
   *
   * @param string $sBIC
   * @see \OxpsPaymorrowOxUserPayment::setPaymorrowBIC
   */
  public function setPaymorrowBIC($sBIC)
  {
  }

  /**
   * Get Paymorrow transaction BIC code.
   *
   * @return string
   * @see \OxpsPaymorrowOxUserPayment::getPaymorrowBIC
   */
  public function getPaymorrowBIC()
  {
  }

  /**
   * Set Paymorrow order ID received after `confirmOrder`.
   *
   * @param string $sId
   * @see \OxpsPaymorrowOxUserPayment::setPaymorrowOrderId
   */
  public function setPaymorrowOrderId($sId)
  {
  }

  /**
   * Get Paymorrow order ID received after `confirmOrder`.
   *
   * @return string
   * @see \OxpsPaymorrowOxUserPayment::getPaymorrowOrderId
   */
  public function getPaymorrowOrderId()
  {
  }

  /**
   * Overridden `load` function - loads additional Paymorrow fields in oxUserPayments table.
   * Loads user payment object.
   *
   * @param string $sOxId
   *
   * @return mixed
   * @see \OxpsPaymorrowOxUserPayment::load
   */
  public function load($sOxId)
  {
  }

  /**
   * Check if user payment method is mapped to a Paymorrow payment method.
   *
   * @return bool
   * @see \OxpsPaymorrowOxUserPayment::isUserPaymentPaymorrowMethod
   */
  public function isUserPaymentPaymorrowMethod()
  {
  }

  /**
   * Get related payment method.
   * Used in custom paymorrow email templates.
   *
   * @return oxPayment
   * @see \OxpsPaymorrowOxUserPayment::getPaymorrowOxPayment
   */
  public function getPaymorrowOxPayment()
  {
  }

 }

 trait InvoicepdfOxOrderTrait
 {
  /**
   * Set language for pdf generation.
   *
   * @param integer $iLang Language id.
   * @see \InvoicepdfOxOrder::setSelectedLang
   */
  public function setSelectedLang($iLang)
  {
  }

  /**
   * Returns active shop object.
   *
   * @return oxshop $oUser
   * @see \InvoicepdfOxOrder::_getActShop
   */
  protected function _getActShop()
  {
  }

  /**
   * Returns translated string.
   *
   * @param string $sString string to translate
   *
   * @return string
   * @see \InvoicepdfOxOrder::translate
   */
  public function translate($sString)
  {
  }

  /**
   * Formats pdf page footer.
   *
   * @param object $oPdf pdf document object
   * @see \InvoicepdfOxOrder::pdfFooter
   */
  public function pdfFooter($oPdf)
  {
  }

  /**
   * Adds shop logo to page header. Returns position for next texts in pdf.
   *
   * @param object $oPdf pdf document object
   *
   * @return int
   * @see \InvoicepdfOxOrder::pdfHeaderPlus
   */
  public function pdfHeaderPlus($oPdf)
  {
  }

  /**
   * Creating new page with shop logo. Returning position to continue data writing.
   *
   * @param object $oPdf pdf document object
   *
   * @return int
   * @see \InvoicepdfOxOrder::pdfHeader
   */
  public function pdfHeader($oPdf)
  {
  }

  /**
   * Generates order pdf report file.
   *
   * @param string $sFilename name of report file
   * @param int $iSelLang active language
   * @see \InvoicepdfOxOrder::genPdf
   */
  public function genPdf($sFilename, $iSelLang = 0)
  {
  }

  /**
   * Set billing address info to pdf.
   *
   * @param object $oPdf pdf document object
   * @see \InvoicepdfOxOrder::_setBillingAddressToPdf
   */
  protected function _setBillingAddressToPdf($oPdf)
  {
  }

  /**
   * Set delivery address info to pdf.
   *
   * @param object $oPdf pdf document object
   * @see \InvoicepdfOxOrder::_setDeliveryAddressToPdf
   */
  protected function _setDeliveryAddressToPdf($oPdf)
  {
  }

  /**
   * Set order articles info and articles VAT's to pdf.
   *
   * @param object $oPdf pdf document object
   * @param int &$iStartPos text start position from top
   * @param bool $blShowPrice show articles prices / VAT info or not
   * @see \InvoicepdfOxOrder::_setOrderArticlesToPdf
   */
  protected function _setOrderArticlesToPdf($oPdf, &$iStartPos, $blShowPrice = true)
  {
  }

  /**
   * Exporting standard invoice pdf
   *
   * @param object $oPdf pdf document object
   * @see \InvoicepdfOxOrder::exportStandart
   */
  public function exportStandart($oPdf)
  {
  }

  /**
   * Generating delivery note pdf.
   *
   * @param object $oPdf pdf document object
   * @see \InvoicepdfOxOrder::exportDeliveryNote
   */
  public function exportDeliveryNote($oPdf)
  {
  }

  /**
   * Replaces some special characters to HTML compatible symbol codes.
   * SWITCHED OFF NOW ( 2.2 )
   *
   * @param string $sValue initial value
   * @param bool $blReverse (default false) if false - checks if we do have already htmlentities inside
   *
   * @return string
   * @see \InvoicepdfOxOrder::_replaceExtendedChars
   */
  protected function _replaceExtendedChars($sValue, $blReverse = false)
  {
  }

  /**
   * Returns order articles VATS's.
   *
   * @return array
   * @see \InvoicepdfOxOrder::getVats
   */
  public function getVats()
  {
  }

  /**
   * Returns order currency object.
   *
   * @return object
   * @see \InvoicepdfOxOrder::getCurrency
   */
  public function getCurrency()
  {
  }

  /**
   * Returns order currency object.
   *
   * @return object
   * @see \InvoicepdfOxOrder::getSelectedLang
   */
  public function getSelectedLang()
  {
  }

  /**
   * Method returns config param iPaymentTerm, default value is 7;
   *
   * @return int
   * @see \InvoicepdfOxOrder::getPaymentTerm
   */
  public function getPaymentTerm()
  {
  }

  /**
   * PDF language
   *
   * @var int
   * @see \InvoicepdfOxOrder::_iSelectedLang
   */
  protected $_iSelectedLang;
  /**
   * Order arctiles VAT's
   *
   * @var array
   * @see \InvoicepdfOxOrder::_aVATs
   */
  protected $_aVATs;
  /**
   * Cached active shop object
   *
   * @var object
   * @see \InvoicepdfOxOrder::_oActShop
   */
  protected $_oActShop;
  /**
   * Order currency object
   *
   * @var object
   * @see \InvoicepdfOxOrder::_oCur
   */
  protected $_oCur;
 }

 trait OxpsPaymorrowOxOrderTrait
 {
  /**
   * Save Paymorrow temporary order ID to session.
   *
   * @param string $sTempOrderId
   * @see \OxpsPaymorrowOxOrder::savePaymorrowTemporaryOrderIdToSession
   */
  public function savePaymorrowTemporaryOrderIdToSession($sTempOrderId)
  {
  }

  /**
   * Get Paymorrow temporary order ID from session.
   *
   * @return array
   * @see \OxpsPaymorrowOxOrder::getPaymorrowTemporaryOrderIdFromSession
   */
  public function getPaymorrowTemporaryOrderIdFromSession()
  {
  }

  /**
   * Overridden parent method.
   * Sends an update order Id call to set order number instead of order OXID.
   * Triggers for complete order payed with a Paymorrow payment method.
   *
   * @param oxBasket $oBasket
   * @param oxUser $oUser
   * @param bool $blRecalculatingOrder
   *
   * @return mixed
   * @see \OxpsPaymorrowOxOrder::finalizeOrder
   */
  public function finalizeOrder(oxBasket $oBasket, $oUser, $blRecalculatingOrder = false)
  {
  }

  /**
   * Get user payment instance related to the order.
   *
   * @return oxUserPayment
   * @see \OxpsPaymorrowOxOrder::getPaymorrowOxUserPaymentReloaded
   */
  public function getPaymorrowOxUserPaymentReloaded()
  {
  }

  /**
   * Get order number.
   *
   * @return string
   * @see \OxpsPaymorrowOxOrder::getPaymorrowOrderNumber
   */
  public function getPaymorrowOrderNumber()
  {
  }

  /**
   * Get order creation date.
   *
   * @return string
   * @see \OxpsPaymorrowOxOrder::getOrderDate
   */
  public function getOrderDate()
  {
  }

  /**
   * Get order payment method ID.
   *
   * @return string
   * @see \OxpsPaymorrowOxOrder::getPaymentMethodId
   */
  public function getPaymentMethodId()
  {
  }

  /**
   * Get order payment method title.
   *
   * @return string
   * @see \OxpsPaymorrowOxOrder::getPaymentMethodName
   */
  public function getPaymentMethodName()
  {
  }

  /**
   * Get order status.
   *
   * @return string
   * @see \OxpsPaymorrowOxOrder::getOrderStatus
   */
  public function getOrderStatus()
  {
  }

  /**
   * Check is valid Paymorrow payment method was used in the checkout ir not.
   *
   * @param oxBasket $oBasket
   *
   * @return bool
   * @see \OxpsPaymorrowOxOrder::_wasPaymorrowPaymentUsed
   */
  protected function _wasPaymorrowPaymentUsed(oxBasket $oBasket)
  {
  }

  /**
   * Parent `finalizeOrder` function call.
   *
   * @codeCoverageIgnore
   *
   * @param oxBasket $oBasket
   * @param oxUser $oUser
   * @param bool $blRecalculatingOrder
   *
   * @return mixed
   * @see \OxpsPaymorrowOxOrder::_OxpsPaymorrowOxOrder_finalizeOrder_parent
   */
  protected function _OxpsPaymorrowOxOrder_finalizeOrder_parent(
      oxBasket $oBasket, oxUser $oUser, $blRecalculatingOrder = false
  ) {
  }

 }

 trait OxpsPaymorrowOxUserTrait
 {
  /**
   * Return User mobile phone number if exist, else return phone number.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserTelephone
   */
  public function getUserTelephone()
  {
  }

  /**
   * Get user mobile phone number.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowMobilePhone
   */
  public function getUserPaymorrowMobilePhone()
  {
  }

  /**
   * Get user phone number.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowPhone
   */
  public function getUserPaymorrowPhone()
  {
  }

  /**
   * Get user birth date.
   *
   * @param bool $blSplit If true return array with year, month, day, if false the date as string (default)
   *
   * @return string|array
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowDateOfBirth
   */
  public function getUserPaymorrowDateOfBirth($blSplit = false)
  {
  }

  /**
   * Get a customer number of user.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getCustomerPaymorrowCustomerNumber
   */
  public function getCustomerPaymorrowCustomerNumber()
  {
  }

  /**
   * Get user gender basing on salutation.
   * NOTE: IT will not determine a gender in non English/German languages and non default salutations.
   *
   * @param bool $blLowercase Will return lowercase value if true, and UPPERCASE on false (default)
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowGender
   */
  public function getUserPaymorrowGender($blLowercase = false)
  {
  }

  /**
   * Get user salutation.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowSalutation
   */
  public function getUserPaymorrowSalutation()
  {
  }

  /**
   * Get user language used when browsing shop.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowRequestLanguage
   */
  public function getUserPaymorrowRequestLanguage()
  {
  }

  /**
   * Get client remote IP address.
   * For IPv6 got from utils, gets value from REMOTE_ADDR variable directly.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowIpAddress
   */
  public function getUserPaymorrowIpAddress()
  {
  }

  /**
   * Get a cookie value.
   *
   * @codeCoverageIgnore
   *
   * @param $sCookie - cookie to retrieve
   *
   * @return mixed
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowCookie
   */
  public function getUserPaymorrowCookie($sCookie)
  {
  }

  /**
   * Get first name.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowFirstName
   */
  public function getUserPaymorrowFirstName()
  {
  }

  /**
   * Get last name.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowLastName
   */
  public function getUserPaymorrowLastName()
  {
  }

  /**
   * Get user email (login name).
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowEmail
   */
  public function getUserPaymorrowEmail()
  {
  }

  /**
   * Get user billing address street name.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowStreet
   */
  public function getUserPaymorrowStreet()
  {
  }

  /**
   * Get user billing address street number.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowStreetNumber
   */
  public function getUserPaymorrowStreetNumber()
  {
  }

  /**
   * Get user billing address postal code.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowZipCode
   */
  public function getUserPaymorrowZipCode()
  {
  }

  /**
   * Get user session ID.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowSessionId
   */
  public function getUserPaymorrowSessionId()
  {
  }

  /**
   * Get oxBasket object loaded from Session.
   *
   * @return oxBasket|OxpsPaymorrowOxBasket
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowUserBasketFromSession
   */
  public function getUserPaymorrowUserBasketFromSession()
  {
  }

  /**
   * Get order ID from current basket in session.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowOrderIdFromBasket
   */
  public function getUserPaymorrowOrderIdFromBasket()
  {
  }

  /**
   * Get user billing address city.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowCity
   */
  public function getUserPaymorrowCity()
  {
  }

  /**
   * Get user billing address country code.
   *
   * @param string $sCountryId Optional country ID to load. If empty, default user billing country is loaded.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserPaymorrowCountry
   */
  public function getUserPaymorrowCountry($sCountryId = '')
  {
  }

  /**
   * Search data array for user profile fields and update the user with matching values if any.
   *
   * @param array $aData
   *
   * @return bool|null
   * @see \OxpsPaymorrowOxUser::mapToProfileDataAndUpdateUser
   */
  public function mapToProfileDataAndUpdateUser(array $aData)
  {
  }

  /**
   * Checks data address fields to update.
   *
   * @param array $aData
   * @param oxAddress $oAddress User active shipping address
   *
   * @return bool|null|string
   * @see \OxpsPaymorrowOxUser::mapShippingDataAndUpdateAddress
   */
  public function mapShippingDataAndUpdateAddress(array $aData, oxAddress $oAddress)
  {
  }

  /**
   * Get user group names as comma separated string.
   *
   * @return string
   * @see \OxpsPaymorrowOxUser::getUserGroupNames
   */
  public function getUserGroupNames()
  {
  }

  /**
   * Find and map object fields in data array, assign the values and save object.
   * Updates only with not empty values and if values duffer from existing ones.
   *
   * @param array $aData
   * @param array $aMap
   * @param object|null $oObject
   *
   * @return bool|null
   * @see \OxpsPaymorrowOxUser::mapDataAndSaveObject
   */
  public function mapDataAndSaveObject(array $aData, array $aMap, $oObject = null)
  {
  }

  /**
   * Get date component from an array by key as an integer.
   *
   * @param array $aDate Date components as array.
   * @param int $iKey Date component index.
   * @param string $sZeroString A zero representing string value, default is "00".
   *
   * @return int
   * @see \OxpsPaymorrowOxUser::_getDateComponentAsInteger
   */
  protected function _getDateComponentAsInteger($aDate, $iKey, $sZeroString = '00')
  {
  }

  /**
   * Check if group is active and has non-empty title.
   *
   * @param object $oGroup
   *
   * @return bool
   * @see \OxpsPaymorrowOxUser::_isGroupValid
   */
  protected function _isGroupValid($oGroup)
  {
  }

  /**
   * Check each data array field if it could be mapped to object and set the value if it is not empty and differ.
   *
   * @param array $aData
   * @param array $aMap
   * @param object $oObject
   *
   * @return bool True if at least one field updated, false otherwise.
   * @see \OxpsPaymorrowOxUser::_mapDataFieldsToObject
   */
  protected function _mapDataFieldsToObject(array $aData, array $aMap, $oObject)
  {
  }

  /**
   * Check if field is in the map array and value is nor blank, neither same as already set.
   *
   * @param string $sKey
   * @param string $sValue
   * @param array $aMap
   * @param object $oObject
   *
   * @return bool True if key is mapped with new non-blank value, false otherwise.
   * @see \OxpsPaymorrowOxUser::_isObjectFieldWithValidValue
   */
  protected function _isObjectFieldWithValidValue($sKey, $sValue, $aMap, $oObject)
  {
  }

 }

 trait oePayPalWrappingTrait
 {
  /**
   * Checks if payment action is processed by PayPal
   *
   * @return bool
   * @see \oePayPalWrapping::isPayPal
   */
  public function isPayPal()
  {
  }

  /**
   * Detects is current payment must be processed by PayPal and instead of standard validation
   * redirects to standard PayPal dispatcher
   *
   * @return bool
   * @see \oePayPalWrapping::changeWrapping
   */
  public function changeWrapping()
  {
  }

 }

 trait OxpsPaymorrowOrderTrait
 {
  /**
   * Overridden method - checks type of payment
   *
   * @return mixed
   * @see \OxpsPaymorrowOrder::render
   */
  public function render()
  {
  }

  /**
   * Overrides `oxpayments__oxdesc` in 4th Order step
   * under line "Type of Payment" and sets it to Paymorrow: Invoice/Direct Debit
   * @see \OxpsPaymorrowOrder::_setPaymorrowTypeOfPayment
   */
  protected function _setPaymorrowTypeOfPayment()
  {
  }

  /**
   * Overridden for Paymorrow Services validation
   *
   * @param $iSuccess
   *
   * @return string
   * @see \OxpsPaymorrowOrder::_getNextStep
   */
  protected function _getNextStep($iSuccess)
  {
  }

  /**
   * Check session for init error and redirect to payment step is any found.
   * The error or order declination entries are set during order confirmation.
   * This data is used on payment step ho inform user and handle payment forms and it is always unset there.
   *
   * @codeCoverageIgnore
   * @see \OxpsPaymorrowOrder::_checkForErrorsToRedirect
   */
  protected function _checkForErrorsToRedirect()
  {
  }

  /**
   * Calls parent _getNextStep method
   *
   * @codeCoverageIgnore
   *
   * @param integer $iSuccess
   * @see \OxpsPaymorrowOrder::_OxpsPaymorrowOrder_getNextStep_parent
   */
  protected function _OxpsPaymorrowOrder_getNextStep_parent($iSuccess)
  {
  }

  /**
   * Calls parent render() method
   *
   * @codeCoverageIgnore
   *
   * @return mixed
   * @see \OxpsPaymorrowOrder::_OxpsPaymorrowOrder_render_parent
   */
  protected function _OxpsPaymorrowOrder_render_parent()
  {
  }

 }

 trait InvoicepdfOrder_OverviewTrait
 {
  /**
   * Add Languages to parameters.
   *
   * @return string
   * @see \InvoicepdfOrder_Overview::render
   */
  public function render()
  {
  }

  /**
   * Performs PDF export to user (outputs file to save).
   * @see \InvoicepdfOrder_Overview::createPDF
   */
  public function createPDF()
  {
  }

 }

 trait oeThemeSwitcherVendorListTrait
 {
  /**
   * Returns view ID (for template engine caching).
   *
   * @return string   $this->_sViewId view id
   * @see \oeThemeSwitcherVendorList::getViewId
   */
  public function getViewId()
  {
  }

 }

 trait oeThemeSwitcherManufacturerListTrait
 {
  /**
   * Returns view ID (for template engine caching).
   *
   * @return string   $this->_sViewId view id
   * @see \oeThemeSwitcherManufacturerList::getViewId
   */
  public function getViewId()
  {
  }

 }

 trait oeThemeSwitcherConfigTrait
 {
  /**
   * Returns config parameter value if such parameter exists
   *
   * @param string $sName config parameter name
   *
   * @return mixed
   * @see \oeThemeSwitcherConfig::getConfigParam
   */
  public function getConfigParam($sName)
  {
  }

  /**
   * Return current active theme
   *
   * @return string
   * @see \oeThemeSwitcherConfig::oeThemeSwitcherGetActiveThemeId
   */
  public function oeThemeSwitcherGetActiveThemeId()
  {
  }

  /**
   * Return theme manager
   *
   * @return oeThemeSwitcherThemeManager
   * @see \oeThemeSwitcherConfig::oeThemeSwitcherGetThemeManager
   */
  public function oeThemeSwitcherGetThemeManager()
  {
  }

  /**
   * Theme manager object
   *
   * @var oeThemeSwitcherThemeManager
   * @see \oeThemeSwitcherConfig::_oThemeManager
   */
  protected $_oThemeManager;
  /**
   * Bool variable true if modules configs are loaded, otherwise false
   *
   * @var bool
   * @see \oeThemeSwitcherConfig::_blIsModuleConfigLoaded
   */
  protected $_blIsModuleConfigLoaded;
 }

 trait OxpsPaymorrowOxPaymentTrait
 {
  /**
   * Check if current payment method is mapped to Paymorrow payment method.
   *
   * @return bool
   * @see \OxpsPaymorrowOxPayment::isPaymentMappedToPaymorrowMethod
   */
  public function isPaymentMappedToPaymorrowMethod()
  {
  }

  /**
   * Check if current payment method, is active and mapped as Paymorrow payment method.
   * Also checks if merchant ID is configured.
   *
   * @return bool
   * @see \OxpsPaymorrowOxPayment::isPaymorrowActiveAndMapped
   */
  public function isPaymorrowActiveAndMapped()
  {
  }

  /**
   * Check if current payment method is active as Paymorrow payment method.
   *
   * @return bool
   * @see \OxpsPaymorrowOxPayment::isPaymorrowActive
   */
  public function isPaymorrowActive()
  {
  }

  /**
   * Set current payment method as disabled or active as Paymorrow payment method.
   *
   * @param integer $iActive - 0/1 | Disabled/Active
   * @see \OxpsPaymorrowOxPayment::setPaymorrowActive
   */
  public function setPaymorrowActive($iActive)
  {
  }

  /**
   * Get payment method disabled or active status for being set as Paymorrow payment method.
   *
   * @return integer
   * @see \OxpsPaymorrowOxPayment::getPaymorrowActive
   */
  public function getPaymorrowActive()
  {
  }

  /**
   * Get payment method type code as string for template injection.
   *
   * @return string 'pm_invoice' - Invoice, 'pm_sdd' - Direct Debit
   * @see \OxpsPaymorrowOxPayment::getPaymorrowPaymentType
   */
  public function getPaymorrowPaymentType()
  {
  }

  /**
   * Get Paymorrow payment method ID.
   *
   * @return integer 1 - Invoice, 2 - Direct Debit
   * @see \OxpsPaymorrowOxPayment::getPaymorrowPaymentMap
   */
  public function getPaymorrowPaymentMap()
  {
  }

  /**
   * Set Paymorrow payment method ID.
   *
   * 0 - Off / none
   * 1 - Paymorrow Invoice
   * 2 - Paymorrow Direct Debit
   * @see \OxpsPaymorrowOxPayment::setPaymorrowPaymentMap
   */
  public function setPaymorrowPaymentMap($iType)
  {
  }

  /**
   * Get payment method name.
   *
   * @return string
   * @see \OxpsPaymorrowOxPayment::getTitle
   */
  public function getTitle()
  {
  }

  /**
   * Overridden parent method.
   * Ignores default payment method form error in case method is converted to a Paymorrow payment method.
   *
   * @param $aDynValue
   * @param $sShopId
   * @param $oUser
   * @param $dBasketPrice
   * @param $sShipSetId
   *
   * @return bool
   * @see \OxpsPaymorrowOxPayment::isValidPayment
   */
  public function isValidPayment($aDynValue, $sShopId, $oUser, $dBasketPrice, $sShipSetId)
  {
  }

  /**
   * Load active, mapped and selected Paymorrow payment method.
   * If several are selected loads it by sorting and last updated.
   *
   * @codeCoverageIgnore
   *
   * @return mixed
   * @see \OxpsPaymorrowOxPayment::loadPaymorrowDefault
   */
  public function loadPaymorrowDefault()
  {
  }

  /**
   * Parent `isValidPayment` call.
   *
   * @codeCoverageIgnore
   *
   * @param $aDynValue
   * @param $sShopId
   * @param $oUser
   * @param $dBasketPrice
   * @param $sShipSetId
   *
   * @return mixed
   * @see \OxpsPaymorrowOxPayment::_OxpsPaymorrowOxPayment_isValidPayment_parent
   */
  protected function _OxpsPaymorrowOxPayment_isValidPayment_parent(
      $aDynValue, $sShopId, $oUser, $dBasketPrice, $sShipSetId
  ) {
  }

 }

 trait oePayPalOrderTrait
 {
  /**
   * Checks if payment action is processed by PayPal
   *
   * @return bool
   * @see \oePayPalOrder::isPayPal
   */
  public function isPayPal()
  {
  }

  /**
   * Returns PayPal user
   *
   * @return oxUser
   * @see \oePayPalOrder::getUser
   */
  public function getUser()
  {
  }

  /**
   * Returns PayPal payment object if PayPal is on, or returns parent::getPayment()
   *
   * @return oxPayment
   * @see \oePayPalOrder::getPayment
   */
  public function getPayment()
  {
  }

  /**
   * Returns current order object
   *
   * @return oxOrder
   * @see \oePayPalOrder::_getOrder
   */
  protected function _getOrder()
  {
  }

  /**
   * Checks if order payment is PayPal and redirects to payment processing part.
   *
   * @param int $iSuccess order state
   *
   * @return string
   * @see \oePayPalOrder::_getNextStep
   */
  protected function _getNextStep($iSuccess)
  {
  }

 }

}