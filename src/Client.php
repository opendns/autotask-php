<?php
namespace ATWS;
use \ATWS\AutotaskObjects;

class Client extends \SoapClient
{
    public static $classMap = array(
        'Account'                           => 'ATWS\AutotaskObjects\Account',
        'AccountLocation'                   => 'ATWS\AutotaskObjects\AccountLocation',
        'AccountNote'                       => 'ATWS\AutotaskObjects\AccountNote',
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
        'ChangeRequestLink'                 => 'ATWS\AutotaskObjects\ChangeRequestLink',
        'ClientPortalUser'                  => 'ATWS\AutotaskObjects\ClientPortalUser',
        'Contact'                           => 'ATWS\AutotaskObjects\Contact',
        'Contract'                          => 'ATWS\AutotaskObjects\Contract',
        'ContractBlock'                     => 'ATWS\AutotaskObjects\ContractBlock',
        'ContractCost'                      => 'ATWS\AutotaskObjects\ContractCost',
        'ContractFactor'                    => 'ATWS\AutotaskObjects\ContractFactor',
        'ContractMilestone'                 => 'ATWS\AutotaskObjects\ContractMilestone',
        'ContractNote'                      => 'ATWS\AutotaskObjects\ContractNote',
        'ContractRate'                      => 'ATWS\AutotaskObjects\ContractRate',
        'ContractRetainer'                  => 'ATWS\AutotaskObjects\ContractRetainer',
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
        'getUDFInfo'                        => 'ATWS\AutotaskObjects\UDFParam',
        'getUDFInfoResponse'                => 'ATWS\AutotaskObjects\UDFInfoResponse',
        'InstalledProduct'                  => 'ATWS\AutotaskObjects\InstalledProduct',
        'InternalLocation'                  => 'ATWS\AutotaskObjects\InternalLocation',
        'InventoryItem'                     => 'ATWS\AutotaskObjects\InventoryItem',
        'InventoryItemSerialNumber'         => 'ATWS\AutotaskObjects\InventoryItemSerialNumber',
        'InventoryLocation'                 => 'ATWS\AutotaskObjects\InventoryLocation',
        'InventoryTransfer'                 => 'ATWS\AutotaskObjects\InventoryTransfer',
        'Invoice'                           => 'ATWS\AutotaskObjects\Invoice',
        'InvoiceTemplate'                   => 'ATWS\AutotaskObjects\InvoiceTemplate',
        'Opportunity'                       => 'ATWS\AutotaskObjects\Opportunity',
        'PaymentTerm'                       => 'ATWS\AutotaskObjects\PaymentTerm',
        'Phase'                             => 'ATWS\AutotaskObjects\Phase',
        'PickListValue'                     => 'ATWS\AutotaskObjects\PickListValue',
        'Product'                           => 'ATWS\AutotaskObjects\Product',
        'ProductVendor'                     => 'ATWS\AutotaskObjects\ProductVendor',
        'Project'                           => 'ATWS\AutotaskObjects\Project',
        'ProjectCost'                       => 'ATWS\AutotaskObjects\ProjectCost',
        'ProjectNote'                       => 'ATWS\AutotaskObjects\ProjectNote',
        'PurchaseOrder'                     => 'ATWS\AutotaskObjects\PurchaseOrder',
        'PurchaseOrderItem'                 => 'ATWS\AutotaskObjects\PurchaseOrderItem',
        'PurchaseOrderReceive'              => 'ATWS\AutotaskObjects\PurchaseOrderReceive',
        'queryResponse'                     => 'ATWS\AutotaskObjects\QueryResponse',
        'Quote'                             => 'ATWS\AutotaskObjects\Quote',
        'QuoteItem'                         => 'ATWS\AutotaskObjects\QuoteItem',
        'QuoteLocation'                     => 'ATWS\AutotaskObjects\QuoteLocation',
        'Resource'                          => 'ATWS\AutotaskObjects\Resource',
        'ResourceRole'                      => 'ATWS\AutotaskObjects\ResourceRole',
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
        'ShippingType'                      => 'ATWS\AutotaskObjects\ShippingType',
        'Task'                              => 'ATWS\AutotaskObjects\Task',
        'TaskNote'                          => 'ATWS\AutotaskObjects\TaskNote',
        'TaskPredecessor'                   => 'ATWS\AutotaskObjects\TaskPredecessor',
        'TaskSecondaryResource'             => 'ATWS\AutotaskObjects\TaskSecondaryResource',
        'Tax'                               => 'ATWS\AutotaskObjects\Tax',
        'TaxCategory'                       => 'ATWS\AutotaskObjects\TaxCategory',
        'TaxRegion'                         => 'ATWS\AutotaskObjects\TaxRegion',
        'Ticket'                            => 'ATWS\AutotaskObjects\Ticket',
        'TicketChangeRequestApproval'       => 'ATWS\AutotaskObjects\TicketChangeRequestApproval',
        'TicketCost'                        => 'ATWS\AutotaskObjects\TicketCost',
        'TicketNote'                        => 'ATWS\AutotaskObjects\TicketNote',
        'TicketSecondaryResource'           => 'ATWS\AutotaskObjects\TicketSecondaryResource',
        'TimeEntry'                         => 'ATWS\AutotaskObjects\TimeEntry',
        'UserDefinedField'                  => 'ATWS\AutotaskObjects\UserDefinedField',
        'UserDefinedFieldDefinition'        => 'ATWS\AutotaskObjects\UserDefinedFieldDefinition',
        'UserDefinedFieldListItem'          => 'ATWS\AutotaskObjects\UserDefinedFieldListItem',
    );

    // @codeCoverageIgnoreStart
    public function __construct($wsdl, $soapOpts = array())
    {
        foreach (static::$classMap as $external => $internal) {
            if (!isset($soapOpts['classmap'][$external])) {
                $soapOpts['classmap'][$external] = $internal;
            }
        }

        parent::__construct($wsdl, $soapOpts);
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
            if (!$createObjs){
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

    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }

    private function _call($method, $params = array())
    {
        return $this->__soapCall($method, $params);
    }
    // @codeCoerageIgnoreEnd
}
