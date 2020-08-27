<?php
namespace ATWS;

use \ATWS\AutotaskObjects;

class Client extends \SoapClient
{
    protected $version;
    protected $integrationCode;

    public static $classMap = array(
        'Account'                           => 'ATWS\AutotaskObjects\Account',
        'AccountAlert'                      => 'ATWS\AutotaskObjects\AccountAlert',
        'AccountLocation'                   => 'ATWS\AutotaskObjects\AccountLocation',
        'AccountNote'                       => 'ATWS\AutotaskObjects\AccountNote',
        'AccountPhysicalLocation'           => 'ATWS\AutotaskObjects\AccountPhysicalLocation',
        'AccountTeam'                       => 'ATWS\AutotaskObjects\AccountTeam',
        'AccountToDo'                       => 'ATWS\AutotaskObjects\AccountToDo',
        'ActionType'                        => 'ATWS\AutotaskObjects\ActionType',
        'AdditionalInvoiceFieldValue'       => 'ATWS\AutotaskObjects\AdditionalInvoiceFieldValue',
        'AllocationCode'                    => 'ATWS\AutotaskObjects\AllocationCode',
        'Appointment'                       => 'ATWS\AutotaskObjects\Appointment',
        'ArrayOfATWSError'                  => 'ATWS\AutotaskObjects\ArrayOfATWSError',
        'ArrayOfEntity'                     => 'ATWS\AutotaskObjects\ArrayOfEntity',
        'ArrayOfEntityInfo'                 => 'ATWS\AutotaskObjects\ArrayOfEntityInfo',
        'ArrayOfEntityReturnInfo'           => 'ATWS\AutotaskObjects\ArrayOfEntityReturnInfo',
        'ArrayOfField'                      => 'ATWS\AutotaskObjects\ArrayOfField',
        'ArrayOfPickListValue'              => 'ATWS\AutotaskObjects\ArrayOfPickListValue',
        'ArrayOfUserDefinedField'           => 'ATWS\AutotaskObjects\ArrayOfUserDefinedField',
        'Attachment'                        => 'ATWS\AutotaskObjects\Attachment',
        'AttachmentInfo'                    => 'ATWS\AutotaskObjects\AttachmentInfo',
        'ATWSError'                         => 'ATWS\AutotaskObjects\ATWSError',
        'ATWSResponse'                      => 'ATWS\AutotaskObjects\ATWSResponse',
        'ATWSZoneInfo'                      => 'ATWS\AutotaskObjects\ATWSZoneInfo',
        'AutotaskIntegrations'              => 'ATWS\AutotaskObjects\AutotaskIntegrations',
        'BillingItem'                       => 'ATWS\AutotaskObjects\BillingItem',
        'BillingItemApprovalLevel'          => 'ATWS\AutotaskObjects\BillingItemApprovalLevel',
        'BusinessDivision'                  => 'ATWS\AutotaskObjects\BusinessDivision',
        'BusinessDivisionSubdivision'       => 'ATWS\AutotaskObjects\BusinessDivisionSubdivision',
        'BusinessDivisionSubdivisionResource' => 'ATWS\AutotaskObjects\BusinessDivisionSubdivisionResource',
        'BusinessLocation'                  => 'ATWS\AutotaskObjects\BusinessLocation',
        'BusinessSubdivision'               => 'ATWS\AutotaskObjects\BusinessSubdivision',
        'ChangeRequestLink'                 => 'ATWS\AutotaskObjects\ChangeRequestLink',
        'ChecklistLibrary'                  => 'ATWS\AutotaskObjects\ChecklistLibrary',
        'ChecklistLibraryChecklistItem'     => 'ATWS\AutotaskObjects\ChecklistLibraryChecklistItem',
        'ClassificationIcon'                => 'ATWS\AutotaskObjects\ClassificationIcon',
        'ClientPortalUser'                  => 'ATWS\AutotaskObjects\ClientPortalUser',
        'Contact'                           => 'ATWS\AutotaskObjects\Contact',
        'Contract'                          => 'ATWS\AutotaskObjects\Contract',
        'ContractBlock'                     => 'ATWS\AutotaskObjects\ContractBlock',
        'ContractCost'                      => 'ATWS\AutotaskObjects\ContractCost',
        'ContractExclusionAllocationCode'   => 'ATWS\AutotaskObjects\ContractExclusionAllocationCode',
        'ContractFactor'                    => 'ATWS\AutotaskObjects\ContractFactor',
        'ContactGroup'                      => 'ATWS\AutotaskObjects\ContactGroup',
        'ContactGroupContact'               => 'ATWS\AutotaskObjects\ContactGroupContact',
        'ContractMilestone'                 => 'ATWS\AutotaskObjects\ContractMilestone',
        'ContractNote'                      => 'ATWS\AutotaskObjects\ContractNote',
        'ContractRate'                      => 'ATWS\AutotaskObjects\ContractRate',
        'ContractRetainer'                  => 'ATWS\AutotaskObjects\ContractRetainer',
        'ContractRoleCost'                  => 'ATWS\AutotaskObjects\ContractRoleCost',
        'ContractService'                   => 'ATWS\AutotaskObjects\ContractService',
        'ContractServiceAdjustment'         => 'ATWS\AutotaskObjects\ContractServiceAdjustment',
        'ContractServiceBundle'             => 'ATWS\AutotaskObjects\ContractServiceBundle',
        'ContractServiceBundleAdjustment'   => 'ATWS\AutotaskObjects\ContractServiceBundleAdjustment',
        'ContractServiceBundleUnit'         => 'ATWS\AutotaskObjects\ContractServiceBundleUnit',
        'ContractServiceUnit'               => 'ATWS\AutotaskObjects\ContractServiceUnit',
        'ContractTicketPurchase'            => 'ATWS\AutotaskObjects\ContractTicketPurchase',
        'Country'                           => 'ATWS\AutotaskObjects\Country',
        'CreateAttachment'                  => 'ATWS\AutotaskObjects\CreateAttachment',
        'CreateAttachmentResponse'          => 'ATWS\AutotaskObjects\CreateAttachmentResponse',
        'Currency'                          => 'ATWS\AutotaskObjects\Currency',
        'createResponse'                    => 'ATWS\AutotaskObjects\CreateResponse',
        'deleteResponse'                    => 'ATWS\AutotaskObjects\DeleteResponse',
        'Department'                        => 'ATWS\AutotaskObjects\Department',
        'Entity'                            => 'ATWS\AutotaskObjects\Entity',
        'EntityDuplicateStatus'             => 'ATWS\AutotaskObjects\EntityDuplicateStatus',
        'EntityInfo'                        => 'ATWS\AutotaskObjects\EntityInfo',
        'EntityReturnInfo'                  => 'ATWS\AutotaskObjects\EntityReturnInfo',
        'EntityReturnInfoDatabaseAction'    => 'ATWS\AutotaskObjects\EntityReturnInfoDatabaseAction',
        'ExpenseItem'                       => 'ATWS\AutotaskObjects\ExpenseItem',
        'ExpenseReport'                     => 'ATWS\AutotaskObjects\ExpenseReport',
        'Field'                             => 'ATWS\AutotaskObjects\Field',
        'GetAttachment'                     => 'ATWS\AutotaskObjects\GetAttachment',
        'GetAttachmentResponse'             => 'ATWS\AutotaskObjects\GetAttachmentResponse',
        'getUDFInfo'                        => 'ATWS\AutotaskObjects\UDFParam',
        'getUDFInfoResponse'                => 'ATWS\AutotaskObjects\UDFInfoResponse',
        'Holiday'                           => 'ATWS\AutotaskObjects\Holiday',
        'HolidaySet'                        => 'ATWS\AutotaskObjects\HolidaySet',
        'InstalledProduct'                  => 'ATWS\AutotaskObjects\InstalledProduct',
        'InstalledProductType'              => 'ATWS\AutotaskObjects\InstalledProductType',
        'InstalledProductTypeUdfAssociation'=> 'ATWS\AutotaskObjects\InstalledProductTypeUdfAssociation',
        'InternalLocation'                  => 'ATWS\AutotaskObjects\InternalLocation',
        'InventoryItem'                     => 'ATWS\AutotaskObjects\InventoryItem',
        'InventoryItemSerialNumber'         => 'ATWS\AutotaskObjects\InventoryItemSerialNumber',
        'InventoryLocation'                 => 'ATWS\AutotaskObjects\InventoryLocation',
        'InventoryTransfer'                 => 'ATWS\AutotaskObjects\InventoryTransfer',
        'Invoice'                           => 'ATWS\AutotaskObjects\Invoice',
        'InvoiceMarkup'                     => 'ATWS\AutotaskObjects\InvoiceMarkup',
        'InvoiceTemplate'                   => 'ATWS\AutotaskObjects\InvoiceTemplate',
        'NotificationHistory'               => 'ATWS\AutotaskObjects\NotificationHistory',
        'Opportunity'                       => 'ATWS\AutotaskObjects\Opportunity',
        'PaymentTerm'                       => 'ATWS\AutotaskObjects\PaymentTerm',
        'Phase'                             => 'ATWS\AutotaskObjects\Phase',
        'PickListValue'                     => 'ATWS\AutotaskObjects\PickListValue',
        'PriceListMaterialCode'             => 'ATWS\AutotaskObjects\PriceListMaterialCode',
        'PriceListProduct'                  => 'ATWS\AutotaskObjects\PriceListProduct',
        'PriceListRole'                     => 'ATWS\AutotaskObjects\PriceListRole',
        'PriceListService'                  => 'ATWS\AutotaskObjects\PriceListService',
        'PriceListServiceBundle'            => 'ATWS\AutotaskObjects\PriceListServiceBundle',
        'PriceListWorkTypeModifierEntity'   => 'ATWS\AutotaskObjects\PriceListWorkTypeModifierEntity',
        'Product'                           => 'ATWS\AutotaskObjects\Product',
        'ProductVendor'                     => 'ATWS\AutotaskObjects\ProductVendor',
        'Project'                           => 'ATWS\AutotaskObjects\Project',
        'ProjectCost'                       => 'ATWS\AutotaskObjects\ProjectCost',
        'ProjectNote'                       => 'ATWS\AutotaskObjects\ProjectNote',
        'PurchaseApproval'                  => 'ATWS\AutotaskObjects\PurchaseApproval',
        'PurchaseOrder'                     => 'ATWS\AutotaskObjects\PurchaseOrder',
        'PurchaseOrderItem'                 => 'ATWS\AutotaskObjects\PurchaseOrderItem',
        'PurchaseOrderReceive'              => 'ATWS\AutotaskObjects\PurchaseOrderReceive',
        'queryResponse'                     => 'ATWS\AutotaskObjects\QueryResponse',
        'Quote'                             => 'ATWS\AutotaskObjects\Quote',
        'QuoteItem'                         => 'ATWS\AutotaskObjects\QuoteItem',
        'QuoteLocation'                     => 'ATWS\AutotaskObjects\QuoteLocation',
        'QuoteTemplate'                     => 'ATWS\AutotaskObjects\QuoteTemplate',
        'Resource'                          => 'ATWS\AutotaskObjects\Resource',
        'ResourceRole'                      => 'ATWS\AutotaskObjects\ResourceRole',
        'ResourceRoleDepartment'            => 'ATWS\AutotaskObjects\ResourceRoleDepartment',
        'ResourceRoleQueue'                 => 'ATWS\AutotaskObjects\ResourceRoleQueue',
        'ResourceServiceDeskRole'           => 'ATWS\AutotaskObjects\ResourceServiceDeskRole',
        'ResourceSkill'                     => 'ATWS\AutotaskObjects\ResourceSkill',
        'Role'                              => 'ATWS\AutotaskObjects\Role',
        'SalesOrder'                        => 'ATWS\AutotaskObjects\SalesOrder',
        'Service'                           => 'ATWS\AutotaskObjects\Service',
        'ServiceBundle'                     => 'ATWS\AutotaskObjects\ServiceBundle',
        'ServiceBundleService'              => 'ATWS\AutotaskObjects\ServiceBundleService',
        'ServiceCall'                       => 'ATWS\AutotaskObjects\ServiceCall',
        'ServiceCallTask'                   => 'ATWS\AutotaskObjects\ServiceCallTask',
        'ServiceCallTaskResource'           => 'ATWS\AutotaskObjects\ServiceCallTaskResource',
        'ServiceCallTicket'                 => 'ATWS\AutotaskObjects\ServiceCallTicket',
        'ServiceCallTicketResource'         => 'ATWS\AutotaskObjects\ServiceCallTicketResource',
        'ServiceLevelAgreementResults'      => 'ATWS\AutotaskObjects\ServiceLevelAgreementResults',
        'ShippingType'                      => 'ATWS\AutotaskObjects\ShippingType',
        'Skill'                             => 'ATWS\AutotaskObjects\Skill',
        'Subscription'                      => 'ATWS\AutotaskObjects\Subscription',
        'SubscriptionPeriod'                => 'ATWS\AutotaskObjects\SubscriptionPeriod',
        'Survey'                            => 'ATWS\AutotaskObjects\Survey',
        'SurveyResults'                     => 'ATWS\AutotaskObjects\SurveyResults',
        'Task'                              => 'ATWS\AutotaskObjects\Task',
        'TaskNote'                          => 'ATWS\AutotaskObjects\TaskNote',
        'TaskPredecessor'                   => 'ATWS\AutotaskObjects\TaskPredecessor',
        'TaskSecondaryResource'             => 'ATWS\AutotaskObjects\TaskSecondaryResource',
        'Tax'                               => 'ATWS\AutotaskObjects\Tax',
        'TaxCategory'                       => 'ATWS\AutotaskObjects\TaxCategory',
        'TaxRegion'                         => 'ATWS\AutotaskObjects\TaxRegion',
        'Ticket'                            => 'ATWS\AutotaskObjects\Ticket',
        'TicketAdditionalContact'           => 'ATWS\AutotaskObjects\TicketAdditionalContact',
        'TicketAdditionalInstalledProduct'  => 'ATWS\AutotaskObjects\TicketAdditionalInstalledProduct',
        'TicketCategory'                    => 'ATWS\AutotaskObjects\TicketCategory',
        'TicketCategoryFieldDefaults'       => 'ATWS\AutotaskObjects\TicketCategoryFieldDefaults',
        'TicketChangeRequestApproval'       => 'ATWS\AutotaskObjects\TicketChangeRequestApproval',
        'TicketChecklistItem'               => 'ATWS\AutotaskObjects\TicketChecklistItem',
        'TicketChecklistLibrary'            => 'ATWS\AutotaskObjects\TicketChecklistLibrary',
        'TicketCost'                        => 'ATWS\AutotaskObjects\TicketCost',
        'TicketHistory'                     => 'ATWS\AutotaskObjects\TicketHistory',
        'TicketNote'                        => 'ATWS\AutotaskObjects\TicketNote',
        'TicketSecondaryResource'           => 'ATWS\AutotaskObjects\TicketSecondaryResource',
        'TimeEntry'                         => 'ATWS\AutotaskObjects\TimeEntry',
        'UserDefinedField'                  => 'ATWS\AutotaskObjects\UserDefinedField',
        'UserDefinedFieldDefinition'        => 'ATWS\AutotaskObjects\UserDefinedFieldDefinition',
        'UserDefinedFieldListItem'          => 'ATWS\AutotaskObjects\UserDefinedFieldListItem',
        'WorkTypeModifier'                  => 'ATWS\AutotaskObjects\WorkTypeModifier',
    );

    // @codeCoverageIgnoreStart
    public function __construct($wsdl, $soapOpts = array(), $integrationCode = null)
    {
        foreach (static::$classMap as $external => $internal) {
            if (!isset($soapOpts['classmap'][$external])) {
                $soapOpts['classmap'][$external] = $internal;
            }
        }

        $parts = explode('/', $wsdl);
        $this->version = $parts[4];

        $this->integrationCode = $integrationCode;
        if (!is_null($integrationCode)) {
            $this->setIntegrationCode($integrationCode);
        }
        parent::__construct($wsdl, $soapOpts);
    }

    public function setIntegrationCode($code)
    {
        $this->integrationCode = $code;
        $header = new \SOAPHeader(
            'http://autotask.net/ATWS/v' . str_replace('.', '_', $this->version) .'/',
            'AutotaskIntegrations',
            array(
                'IntegrationCode' => $code,
            )
        );

        $this->__setSoapHeaders($header);
    }

    public function setResourceImpersonation(String $resourceId)
    {
        if (is_null($this->integrationCode)) {
            throw new ATWSException('Integration code required when using resource impersonation.');
        }
        $header = new \SOAPHeader(
            'http://autotask.net/ATWS/v' . str_replace('.', '_', $this->version) .'/',
            'AutotaskIntegrations',
            array(
                'IntegrationCode' => $this->integrationCode,
                'ImpersonateAsResourceID' => $resourceId
            )
        );
        $this->__setSoapHeaders($header);
        return $this;
    }

    public function getZoneInfo($username)
    {
        $zoneInfoObject = new AutotaskObjects\ZoneInfo($username);
        return $this->_call('getZoneInfo', array($zoneInfoObject));
    }

    public function create(AutotaskObjects\Entity $obj)
    {
        $params = new AutotaskObjects\CreateParam($obj);
        return $this->_call('create', array($params));
    }

    public function bulkCreate(array $objs)
    {
        if (count($objs) > 200) {
            throw new \Exception('You can only execute a bulk create on a max of 200 objects per request');
        }
        $createObjs = null;
        foreach ($objs as $obj) {
            if (!$createObjs) {
                $createObjs = new AutotaskObjects\CreateParam($obj);
            } else {
                $createObjs->Entities[] = $obj;
            }
        }
        return $this->_call('create', array($createObjs));
    }

    public function update(AutotaskObjects\Entity $obj)
    {
        $params = new AutotaskObjects\UpdateParam($obj);
        return $this->_call('update', array($params));
    }

    public function bulkUpdate(array $objs)
    {
        if (count($objs) > 200) {
            throw new \Exception('You can only execute a bulk update on a max of 200 objects per request');
        }
        $updateObjs = null;
        $calls = array();
        foreach ($objs as $obj) {
            if (!$updateObjs) {
                $updateObjs = new AutotaskObjects\UpdateParam($obj);
            } else {
                $updateObjs->Entities[] = $obj;
            }
        }
        return $this->_call('update', array($updateObjs));
    }

    public function delete(AutotaskObjects\Entity $obj)
    {
        $params = new AutotaskObjects\DeleteParam($obj);
        return $this->_call('delete', array($params));
    }

    public function bulkDelete(array $objs)
    {
        if (count($objs) > 200) {
            throw new \Exception('You can only execute a bulk delete on a max of 200 objects per request');
        }
        $deleteObjs = null;
        $calls = array();
        foreach ($objs as $obj) {
            if (!$deleteObjs) {
                $deleteObjs = new AutotaskObjects\DeleteParam($obj);
            } else {
                $deleteObjs->Entities[] = $obj;
            }
        }
        return $this->_call('delete', array($deleteObjs));
    }

    public function GetAttachment(AutotaskObjects\Entity $obj)
    {
        $params = new AutotaskObjects\GetAttachment($obj);
        return $this->_call('GetAttachment', array($params));
    }

    public function CreateAttachment(AutotaskObjects\Entity $obj)
    {
        $params = new AutotaskObjects\CreateAttachment($obj);
        return $this->_call('CreateAttachment', array($params));
    }

    public function query(AutotaskObjects\Query $obj)
    {
        $obj->asXml();
        return $this->_call('query', array($obj));
    }

    public function getUDFInfo($type)
    {
        $param = new AutotaskObjects\UDFParam($type);
        return $this->_call('getUDFInfo', array($param));
    }

    public function getFieldInfo($type)
    {
        $fieldInfo = new AutotaskObjects\FieldInfo($type);
        return $this->_call('getFieldInfo', array($fieldInfo));
    }

    public function getEntityInfo()
    {
        return $this->_call('getEntityInfo');
    }

    public function getThresholdAndUsageInfo()
    {
        return $this->_call('getThresholdAndUsageInfo');
    }

    public function getInvoiceMarkup($invoiceId, $type)
    {
        $invoiceMarkup = new AutotaskObjects\InvoiceMarkup();
        $invoiceMarkup->InvoiceId = (int)$invoiceId;
        $invoiceMarkup->Format = $type;
        return $this->_call('GetInvoiceMarkup', array($invoiceMarkup));
    }

    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        if (strpos($action, 'getZoneInfo') === false &&
            $this->version >= 1.6 &&
            empty($this->__default_headers[0]->data['IntegrationCode'])
        ) {
            throw new ATWSException('Integration code required with this version of the API.');
        }

        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }

    private function _call($method, $params = array())
    {
        return $this->__soapCall($method, $params);
    }
    // @codeCoerageIgnoreEnd
}
