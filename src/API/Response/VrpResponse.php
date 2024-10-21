<?php

namespace Stevro\GraphhopperClient\API\Response;

use Stevro\GraphhopperClient\Model\Solution;

class VrpResponse
{

    private $copyrights = [];
    /**
     * @var string
     */
    private $jobId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var int
     */
    private $waitingTimeInQueue;

    /**
     * @var int
     */
    private $processingTime;

    /**
     * @var Solution
     */
    private $solution;

    /**
     * @return array
     */
    public function getCopyrights(): array
    {
        return $this->copyrights;
    }

    /**
     * @param array $copyrights
     *
     * @return VrpResponse
     */
    public function setCopyrights(array $copyrights): VrpResponse
    {
        $this->copyrights = $copyrights;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobId(): string
    {
        return $this->jobId;
    }

    /**
     * @param string $jobId
     *
     * @return VrpResponse
     */
    public function setJobId(string $jobId): VrpResponse
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return VrpResponse
     */
    public function setStatus(string $status): VrpResponse
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return int
     */
    public function getWaitingTimeInQueue(): int
    {
        return $this->waitingTimeInQueue;
    }

    /**
     * @param int $waitingTimeInQueue
     *
     * @return VrpResponse
     */
    public function setWaitingTimeInQueue(int $waitingTimeInQueue): VrpResponse
    {
        $this->waitingTimeInQueue = $waitingTimeInQueue;

        return $this;
    }

    /**
     * @return int
     */
    public function getProcessingTime(): int
    {
        return $this->processingTime;
    }

    /**
     * @param int $processingTime
     *
     * @return VrpResponse
     */
    public function setProcessingTime(int $processingTime): VrpResponse
    {
        $this->processingTime = $processingTime;

        return $this;
    }

    /**
     * @return Solution
     */
    public function getSolution(): Solution
    {
        return $this->solution;
    }

    /**
     * @param Solution $solution
     *
     * @return VrpResponse
     */
    public function setSolution(Solution $solution): VrpResponse
    {
        $this->solution = $solution;

        return $this;
    }



}