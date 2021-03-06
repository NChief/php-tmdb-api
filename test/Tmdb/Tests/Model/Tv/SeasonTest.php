<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Tests\Model\Tv;

use Tmdb\Tests\Model\TestCase;
use Tmdb\Model\Tv\Season;

class SeasonTest extends TestCase
{
    /**
     * @test
     */
    public function shouldConstructTvSeason()
    {
        $season = new Season();

        $this->assertInstancesOf(
            $season,
            array(
                'getCredits'     => 'Tmdb\Model\Collection\CreditsCollection',
                'getExternalIds' => 'Tmdb\Model\Common\ExternalIds',
                'getImages'      => 'Tmdb\Model\Collection\Images',
                'getEpisodes'    => 'Tmdb\Model\Common\GenericCollection',
                'getVideos'      => 'Tmdb\Model\Collection\Videos',
            )
        );
    }

    /**
     * @test
     */
    public function shouldBeAbleToOverrideDefaultCollections()
    {
        $season = new Season();

        $class = new \stdClass();

        $season->setCredits($class);

        $this->assertInstanceOf('stdClass', $season->getCredits());
    }
}
