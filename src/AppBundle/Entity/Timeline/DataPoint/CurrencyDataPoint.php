<?php

namespace AppBundle\Entity\Timeline\DataPoint;

/**
 * SQL dump of data points
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Timeline\DataPoint\CurrencyDataPointRepository")
 */
class CurrencyDataPoint
{
    /**
     * @var int
     */
    private $time;

    /**
     * @var float
     */
    private $open;

    /**
     * @var float
     */
    private $close;

    /**
     * @var float
     */
    private $high;

    /**
     * @var float
     */
    private $low;

    /**
     * @var float
     */
    private $volumeFrom;

    /**
     * @var float
     */
    private $volumeTo;

    /**
     * @var int
     */
    private $totalSocialPoints;

    /**
     * @var int
     */
    private $cryptoCompareSocialPoints;

    /**
     * @var int
     */
    private $cryptoCompareFollowers;

    /**
     * @var int
     */
    private $cryptoComparePosts;

    /**
     * @var int
     */
    private $cryptoCompareComments;

    /**
     * @var int
     */
    private $cryptoComparePageViews;

    /**
     * @var int
     */
    private $twitterSocialPoints;

    /**
     * @var int
     */
    private $twitterLists;

    /**
     * @var int
     */
    private $twitterTweets;

    /**
     * @var int
     */
    private $twitterFollowers;

    /**
     * @var int
     */
    private $redditSocialPoints;

    /**
     * @var float
     */
    private $redditPostsPerHour;

    /**
     * @var float
     */
    private $redditCommentsPerHour;

    /**
     * @var float
     */
    private $redditPostsPerDay;

    /**
     * @var float
     */
    private $redditCommentsPerDay;

    /**
     * @var float
     */
    private $redditActiveUsers;

    /**
     * @var int
     */
    private $redditCommunityCreation;

    /**
     * @var int
     */
    private $redditSubscribers;

    /**
     * @var int
     */
    private $facebookSocialPoints;

    /**
     * @var int
     */
    private $facebookLikes;

    /**
     * @var int
     */
    private $facebookTalkingAbout;

    /**
     * @var int
     */
    private $codeRepositorySocialPoints;

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return float
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * @param float $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }

    /**
     * @return float
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * @param float $close
     */
    public function setClose($close)
    {
        $this->close = $close;
    }

    /**
     * @return float
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param float $high
     */
    public function setHigh($high)
    {
        $this->high = $high;
    }

    /**
     * @return float
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @param float $low
     */
    public function setLow($low)
    {
        $this->low = $low;
    }

    /**
     * @return float
     */
    public function getVolumeFrom()
    {
        return $this->volumeFrom;
    }

    /**
     * @param float $volumeFrom
     */
    public function setVolumeFrom($volumeFrom)
    {
        $this->volumeFrom = $volumeFrom;
    }

    /**
     * @return float
     */
    public function getVolumeTo()
    {
        return $this->volumeTo;
    }

    /**
     * @param float $volumeTo
     */
    public function setVolumeTo($volumeTo)
    {
        $this->volumeTo = $volumeTo;
    }

    /**
     * @return int
     */
    public function getTotalSocialPoints()
    {
        return $this->totalSocialPoints;
    }

    /**
     * @param int $totalSocialPoints
     */
    public function setTotalSocialPoints($totalSocialPoints)
    {
        $this->totalSocialPoints = $totalSocialPoints;
    }

    /**
     * @return int
     */
    public function getCryptoCompareSocialPoints()
    {
        return $this->cryptoCompareSocialPoints;
    }

    /**
     * @param int $cryptoCompareSocialPoints
     */
    public function setCryptoCompareSocialPoints($cryptoCompareSocialPoints)
    {
        $this->cryptoCompareSocialPoints = $cryptoCompareSocialPoints;
    }

    /**
     * @return int
     */
    public function getCryptoCompareFollowers()
    {
        return $this->cryptoCompareFollowers;
    }

    /**
     * @param int $cryptoCompareFollowers
     */
    public function setCryptoCompareFollowers($cryptoCompareFollowers)
    {
        $this->cryptoCompareFollowers = $cryptoCompareFollowers;
    }

    /**
     * @return int
     */
    public function getCryptoCompareComments()
    {
        return $this->cryptoCompareComments;
    }

    /**
     * @param int $cryptoCompareComments
     */
    public function setCryptoCompareComments($cryptoCompareComments)
    {
        $this->cryptoCompareComments = $cryptoCompareComments;
    }

    /**
     * @return int
     */
    public function getCryptoComparePosts()
    {
        return $this->cryptoComparePosts;
    }

    /**
     * @param int $cryptoComparePosts
     */
    public function setCryptoComparePosts($cryptoComparePosts)
    {
        $this->cryptoComparePosts = $cryptoComparePosts;
    }

    /**
     * @return int
     */
    public function getCryptoComparePageViews()
    {
        return $this->cryptoComparePageViews;
    }

    /**
     * @param int $cryptoComparePageViews
     */
    public function setCryptoComparePageViews($cryptoComparePageViews)
    {
        $this->cryptoComparePageViews = $cryptoComparePageViews;
    }

    /**
     * @return int
     */
    public function getTwitterSocialPoints()
    {
        return $this->twitterSocialPoints;
    }

    /**
     * @param int $twitterSocialPoints
     */
    public function setTwitterSocialPoints($twitterSocialPoints)
    {
        $this->twitterSocialPoints = $twitterSocialPoints;
    }

    /**
     * @return int
     */
    public function getTwitterLists()
    {
        return $this->twitterLists;
    }

    /**
     * @param int $twitterLists
     */
    public function setTwitterLists($twitterLists)
    {
        $this->twitterLists = $twitterLists;
    }

    /**
     * @return int
     */
    public function getTwitterTweets()
    {
        return $this->twitterTweets;
    }

    /**
     * @param int $twitterTweets
     */
    public function setTwitterTweets($twitterTweets)
    {
        $this->twitterTweets = $twitterTweets;
    }

    /**
     * @return int
     */
    public function getTwitterFollowers()
    {
        return $this->twitterFollowers;
    }

    /**
     * @param int $twitterFollowers
     */
    public function setTwitterFollowers($twitterFollowers)
    {
        $this->twitterFollowers = $twitterFollowers;
    }

    /**
     * @return int
     */
    public function getRedditSocialPoints()
    {
        return $this->redditSocialPoints;
    }

    /**
     * @param int $redditSocialPoints
     */
    public function setRedditSocialPoints($redditSocialPoints)
    {
        $this->redditSocialPoints = $redditSocialPoints;
    }

    /**
     * @return float
     */
    public function getRedditPostsPerHour()
    {
        return $this->redditPostsPerHour;
    }

    /**
     * @param float $redditPostsPerHour
     */
    public function setRedditPostsPerHour($redditPostsPerHour)
    {
        $this->redditPostsPerHour = $redditPostsPerHour;
    }

    /**
     * @return float
     */
    public function getRedditCommentsPerHour()
    {
        return $this->redditCommentsPerHour;
    }

    /**
     * @param float $redditCommentsPerHour
     */
    public function setRedditCommentsPerHour($redditCommentsPerHour)
    {
        $this->redditCommentsPerHour = $redditCommentsPerHour;
    }

    /**
     * @return float
     */
    public function getRedditPostsPerDay()
    {
        return $this->redditPostsPerDay;
    }

    /**
     * @param float $redditPostsPerDay
     */
    public function setRedditPostsPerDay($redditPostsPerDay)
    {
        $this->redditPostsPerDay = $redditPostsPerDay;
    }

    /**
     * @return float
     */
    public function getRedditCommentsPerDay()
    {
        return $this->redditCommentsPerDay;
    }

    /**
     * @param float $redditCommentsPerDay
     */
    public function setRedditCommentsPerDay($redditCommentsPerDay)
    {
        $this->redditCommentsPerDay = $redditCommentsPerDay;
    }

    /**
     * @return float
     */
    public function getRedditActiveUsers()
    {
        return $this->redditActiveUsers;
    }

    /**
     * @param float $redditActiveUsers
     */
    public function setRedditActiveUsers($redditActiveUsers)
    {
        $this->redditActiveUsers = $redditActiveUsers;
    }

    /**
     * @return int
     */
    public function getRedditCommunityCreation()
    {
        return $this->redditCommunityCreation;
    }

    /**
     * @param int $redditCommunityCreation
     */
    public function setRedditCommunityCreation($redditCommunityCreation)
    {
        $this->redditCommunityCreation = $redditCommunityCreation;
    }

    /**
     * @return int
     */
    public function getRedditSubscribers()
    {
        return $this->redditSubscribers;
    }

    /**
     * @param int $redditSubscribers
     */
    public function setRedditSubscribers($redditSubscribers)
    {
        $this->redditSubscribers = $redditSubscribers;
    }

    /**
     * @return int
     */
    public function getFacebookSocialPoints()
    {
        return $this->facebookSocialPoints;
    }

    /**
     * @param int $facebookSocialPoints
     */
    public function setFacebookSocialPoints($facebookSocialPoints)
    {
        $this->facebookSocialPoints = $facebookSocialPoints;
    }

    /**
     * @return int
     */
    public function getFacebookLikes()
    {
        return $this->facebookLikes;
    }

    /**
     * @param int $facebookLikes
     */
    public function setFacebookLikes($facebookLikes)
    {
        $this->facebookLikes = $facebookLikes;
    }

    /**
     * @return int
     */
    public function getFacebookTalkingAbout()
    {
        return $this->facebookTalkingAbout;
    }

    /**
     * @param int $facebookTalkingAbout
     */
    public function setFacebookTalkingAbout($facebookTalkingAbout)
    {
        $this->facebookTalkingAbout = $facebookTalkingAbout;
    }

    /**
     * @return int
     */
    public function getCodeRepositorySocialPoints()
    {
        return $this->codeRepositorySocialPoints;
    }

    /**
     * @param int $codeRepositorySocialPoints
     */
    public function setCodeRepositorySocialPoints($codeRepositorySocialPoints)
    {
        $this->codeRepositorySocialPoints = $codeRepositorySocialPoints;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'time'                       => $this->time,
            'open'                       => $this->open,
            'close'                      => $this->close,
            'high'                       => $this->high,
            'low'                        => $this->low,
            'volumeFrom'                 => $this->volumeFrom,
            'volumeTo'                   => $this->volumeTo,
            'totalSocialPoints'          => $this->totalSocialPoints,
            'cryptoCompareSocialPoints'  => $this->cryptoCompareSocialPoints,
            'cryptoCompareFollowers'     => $this->cryptoCompareFollowers,
            'cryptoComparePosts'         => $this->cryptoComparePosts,
            'cryptoCompareComments'      => $this->cryptoCompareComments,
            'cryptoComparePageViews'     => $this->cryptoComparePageViews,
            'twitterSocialPoints'        => $this->twitterSocialPoints,
            'twitterLists'               => $this->twitterLists,
            'twitterTweets'              => $this->twitterTweets,
            'twitterFollowers'           => $this->twitterFollowers,
            'redditSocialPoints'         => $this->redditSocialPoints,
            'redditPostsPerHour'         => $this->redditPostsPerHour,
            'redditCommentsPerHour'      => $this->redditCommentsPerHour,
            'redditPostsPerDay'          => $this->redditPostsPerDay,
            'redditCommentsPerDay'       => $this->redditCommentsPerDay,
            'redditActiveUsers'          => $this->redditActiveUsers,
            'redditCommunityCreation'    => $this->redditCommunityCreation,
            'redditSubscribers'          => $this->redditSubscribers,
            'facebookSocialPoints'       => $this->facebookSocialPoints,
            'facebookLikes'              => $this->facebookLikes,
            'facebookTalkingAbout'       => $this->facebookTalkingAbout,
            'codeRepositorySocialPoints' => $this->codeRepositorySocialPoints,
        ];
    }
}