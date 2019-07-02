<?php

/**
 * Stripe Create Plan Request.
 */

namespace Omnipay\Stripe\Message;

/**
 * Stripe Create Plan Request
 *
 * @see \Omnipay\Stripe\Gateway
 * @link https://stripe.com/docs/api#create_plan
 */
class CreatePlanRequest extends AbstractRequest
{
    /**
     * Set the plan ID
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|CreatePlanRequest
     */
    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }

    /**
     * Get the plan ID
     *
     * @return string
     */
    public function getId()
    {
        return $this->getParameter('id');
    }

    /**
     * Set the plan interval
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|CreatePlanRequest
     */
    public function setInterval($value)
    {
        return $this->setParameter('interval', $value);
    }

    /**
     * Get the plan interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->getParameter('interval');
    }

    /**
     * Set the plan interval count
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|CreatePlanRequest
     */
    public function setIntervalCount($value)
    {
        return $this->setParameter('interval_count', $value);
    }

    /**
     * Get the plan interval count
     *
     * @return int
     */
    public function getIntervalCount()
    {
        return $this->getParameter('interval_count');
    }

    /**
     * Set the plan product
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|CreatePlanRequest
     */
    public function setProduct($value)
    {
        return $this->setParameter('product', $value);
    }

    /**
     * Get the plan product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->getParameter('product');
    }

    /**
     * Set the plan statement descriptor
     *
     * @param $planStatementDescriptor
     * @return \Omnipay\Common\Message\AbstractRequest|CreatePlanRequest
     */
    public function setStatementDescriptor($planStatementDescriptor)
    {
        return $this->setParameter('statement_descriptor', $planStatementDescriptor);
    }

    /**
     * Get the plan statement descriptor
     *
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->getParameter('statement_descriptor');
    }

    /**
     * Set the plan trial period days
     *
     * @param $planTrialPeriodDays
     * @return \Omnipay\Common\Message\AbstractRequest|CreatePlanRequest
     */
    public function setTrialPeriodDays($planTrialPeriodDays)
    {
        return $this->setParameter('trial_period_days', $planTrialPeriodDays);
    }

    /**
     * Get the plan trial period days
     *
     * @return int
     */
    public function getTrialPeriodDays()
    {
        return $this->getParameter('trial_period_days');
    }

    public function getData()
    {
        $this->validate('amount', 'currency', 'interval', 'product');

        $data = array(
            'amount' => $this->getAmountInteger(),
            'currency' => $this->getCurrency(),
            'interval' => $this->getInterval(),
            'product' => $this->getProduct(),
        );

	    $id = $this->getId();
        if ($id != null) {
            $data['id'] = $id;
        }

        $intervalCount = $this->getIntervalCount();
        if ($intervalCount != null) {
            $data['interval_count'] = $intervalCount;
        }

        $statementDescriptor = $this->getStatementDescriptor();
        if ($statementDescriptor != null) {
            $data['statement_descriptor'] = $statementDescriptor;
        }

        $trialPeriodDays = $this->getTrialPeriodDays();
        if ($trialPeriodDays != null) {
            $data['trial_period_days'] = $trialPeriodDays;
        }

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/plans';
    }
}
