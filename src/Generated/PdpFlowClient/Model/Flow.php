<?php

namespace PdpLibre\Generated\PdpFlowClient\Model;

class Flow extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The flow submission date and time (the date ant time the flow was created on the system)
     *
     * @var \DateTime
     */
    protected $submittedAt;
    /**
    * The last update date and time of the flow. When the flow is submitted updatedAt is equal to submittedAt.
    When the flow acknowledgment status is changed updatedAt date and time si updated.
    
    *
    * @var \DateTime
    */
    protected $updatedAt;
    /**
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @var string
     */
    protected $flowId;
    /**
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @var string
     */
    protected $trackingId;
    /**
    * >- CustomerInvoice: an invoice that has been received by the system
    >- SupplierInvoice: an invoice that has been emitted by the system
    >- CustomerInvoiceLC: A lifecycle (CDAR) related to a customer invoice
    >- SupplierInvoiceLC: A lifecycle (CDAR) related to supplier invoice
    >- TransactionReport: a e-reporting related to a transactyion
    >- PaymentReport: a e-reporting related to a payment
    
    *
    * @var string
    */
    protected $flowType;
    /**
    * Direction of the flow:
    >- In:  Incoming flow, from the PDP to the OD
    >- Out: Outgoing flow, from the OD to the PDP
    
    *
    * @var string
    */
    protected $flowDirection;
    /**
     * Syntax of the original file belonging to a flow
     *
     * @var string
     */
    protected $flowSyntax;
    /**
     * 
     *
     * @var string
     */
    protected $flowProfile;
    /**
     * 
     *
     * @var int
     */
    protected $attachmentNumber;
    /**
     * 
     *
     * @var Acknowledgement
     */
    protected $acknowledgement;
    /**
     * The flow submission date and time (the date ant time the flow was created on the system)
     *
     * @return \DateTime
     */
    public function getSubmittedAt(): \DateTime
    {
        return $this->submittedAt;
    }
    /**
     * The flow submission date and time (the date ant time the flow was created on the system)
     *
     * @param \DateTime $submittedAt
     *
     * @return self
     */
    public function setSubmittedAt(\DateTime $submittedAt): self
    {
        $this->initialized['submittedAt'] = true;
        $this->submittedAt = $submittedAt;
        return $this;
    }
    /**
    * The last update date and time of the flow. When the flow is submitted updatedAt is equal to submittedAt.
    When the flow acknowledgment status is changed updatedAt date and time si updated.
    
    *
    * @return \DateTime
    */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
    * The last update date and time of the flow. When the flow is submitted updatedAt is equal to submittedAt.
    When the flow acknowledgment status is changed updatedAt date and time si updated.
    
    *
    * @param \DateTime $updatedAt
    *
    * @return self
    */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @return string
     */
    public function getFlowId(): string
    {
        return $this->flowId;
    }
    /**
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @param string $flowId
     *
     * @return self
     */
    public function setFlowId(string $flowId): self
    {
        $this->initialized['flowId'] = true;
        $this->flowId = $flowId;
        return $this;
    }
    /**
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @return string
     */
    public function getTrackingId(): string
    {
        return $this->trackingId;
    }
    /**
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @param string $trackingId
     *
     * @return self
     */
    public function setTrackingId(string $trackingId): self
    {
        $this->initialized['trackingId'] = true;
        $this->trackingId = $trackingId;
        return $this;
    }
    /**
    * >- CustomerInvoice: an invoice that has been received by the system
    >- SupplierInvoice: an invoice that has been emitted by the system
    >- CustomerInvoiceLC: A lifecycle (CDAR) related to a customer invoice
    >- SupplierInvoiceLC: A lifecycle (CDAR) related to supplier invoice
    >- TransactionReport: a e-reporting related to a transactyion
    >- PaymentReport: a e-reporting related to a payment
    
    *
    * @return string
    */
    public function getFlowType(): string
    {
        return $this->flowType;
    }
    /**
    * >- CustomerInvoice: an invoice that has been received by the system
    >- SupplierInvoice: an invoice that has been emitted by the system
    >- CustomerInvoiceLC: A lifecycle (CDAR) related to a customer invoice
    >- SupplierInvoiceLC: A lifecycle (CDAR) related to supplier invoice
    >- TransactionReport: a e-reporting related to a transactyion
    >- PaymentReport: a e-reporting related to a payment
    
    *
    * @param string $flowType
    *
    * @return self
    */
    public function setFlowType(string $flowType): self
    {
        $this->initialized['flowType'] = true;
        $this->flowType = $flowType;
        return $this;
    }
    /**
    * Direction of the flow:
    >- In:  Incoming flow, from the PDP to the OD
    >- Out: Outgoing flow, from the OD to the PDP
    
    *
    * @return string
    */
    public function getFlowDirection(): string
    {
        return $this->flowDirection;
    }
    /**
    * Direction of the flow:
    >- In:  Incoming flow, from the PDP to the OD
    >- Out: Outgoing flow, from the OD to the PDP
    
    *
    * @param string $flowDirection
    *
    * @return self
    */
    public function setFlowDirection(string $flowDirection): self
    {
        $this->initialized['flowDirection'] = true;
        $this->flowDirection = $flowDirection;
        return $this;
    }
    /**
     * Syntax of the original file belonging to a flow
     *
     * @return string
     */
    public function getFlowSyntax(): string
    {
        return $this->flowSyntax;
    }
    /**
     * Syntax of the original file belonging to a flow
     *
     * @param string $flowSyntax
     *
     * @return self
     */
    public function setFlowSyntax(string $flowSyntax): self
    {
        $this->initialized['flowSyntax'] = true;
        $this->flowSyntax = $flowSyntax;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFlowProfile(): string
    {
        return $this->flowProfile;
    }
    /**
     * 
     *
     * @param string $flowProfile
     *
     * @return self
     */
    public function setFlowProfile(string $flowProfile): self
    {
        $this->initialized['flowProfile'] = true;
        $this->flowProfile = $flowProfile;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAttachmentNumber(): int
    {
        return $this->attachmentNumber;
    }
    /**
     * 
     *
     * @param int $attachmentNumber
     *
     * @return self
     */
    public function setAttachmentNumber(int $attachmentNumber): self
    {
        $this->initialized['attachmentNumber'] = true;
        $this->attachmentNumber = $attachmentNumber;
        return $this;
    }
    /**
     * 
     *
     * @return Acknowledgement
     */
    public function getAcknowledgement(): Acknowledgement
    {
        return $this->acknowledgement;
    }
    /**
     * 
     *
     * @param Acknowledgement $acknowledgement
     *
     * @return self
     */
    public function setAcknowledgement(Acknowledgement $acknowledgement): self
    {
        $this->initialized['acknowledgement'] = true;
        $this->acknowledgement = $acknowledgement;
        return $this;
    }
}