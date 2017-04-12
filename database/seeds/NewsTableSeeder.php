<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$news = new News;
    	$news->category_id = 1;
    	$news->title = 'Helping or intruding: On patrol with India\'s anti-harassment squad';
    	$news->summary = 'In Uttar Pradesh, a special police squad has been set up to fight eve teasing - a local term for sexual harassment. But the move has led to allegations of moral policing. The BBC\'s Vikas Pandey spent a day with the squad in Allahabad city.';
    	$news->content = 'In Uttar Pradesh, a special police squad has been set up to fight eve teasing - a local term for sexual harassment. But the move has led to allegations of moral policing. The BBC\'s Vikas Pandey spent a day with the squad in Allahabad city.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 2;
    	$news->title = 'Aboriginal Australian rules players demand end to racial abuse';
    	$news->summary = 'boriginal players from Australian rules football\'s AFL have written an open letter to the sport\'s fans calling for an end to racial abuse.';
    	$news->content = 'It comes after Port Adelaide Power\'s Paddy Ryder and Adelaide Crows player Eddie Betts were racially abused during a match at Adelaide Oval on Saturday.

In the letter, the AFL players\' indigenous advisory board said it had "had enough".

"Racial vilification has been a part of our game for too long," it added.

"That both Eddie and Patrick were abused because of the colour of their skin is absolutely unacceptable."

The latest incident follows a Port Adelaide Power member being banned after she was filmed throwing a banana at Betts last year.

"These are more than just words and the impact these slurs have on the player, their family, their children and their community is profound," continued the statement.

"There\'s no room in our game for any form of vilification, whether it\'s based on race, gender, religion or sexual orientation.

"Anyone who thinks that this is an acceptable way to act is no football fan."';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();


    	$news = new News;
    	$news->category_id = 2;
    	$news->title = 'Atletico Madrid v Leicester: How do Foxes win Champions League quarter-final?';
    	$news->summary = 'Premier League champions Leicester City are aiming to prolong their fairytale as they head into this week\'s Champions League quarter-finals, but they are heavy underdogs against an in-form Atletico Madrid team who have reached the final twice in the past three years.';
    	$news->content = 'Premier League champions Leicester City are aiming to prolong their fairytale as they head into this week\'s Champions League quarter-finals, but they are heavy underdogs against an in-form Atletico Madrid team who have reached the final twice in the past three years.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 2;
    	$news->title = 'Wladimir Klitschko: Anthony Joshua will be \'facing Mount Everest\' for heavyweight title';
    	$news->summary = 'Wladimir Klitschko has warned Anthony Joshua that fighting him will be like "facing Mount Everest" when the two meet on 29 April.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 1;
    	$news->title = 'Uber PR boss Rachel Whetstone latest to quit company';
    	$news->summary = 'Uber’s head of communications has become the latest executive to leave the embattled ride-sharing firm.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 1;
    	$news->title = 'Brazil corruption: Eight cabinet ministers named in Petrobras probe';
    	$news->summary = 'All 108 people named on the list released by Supreme Court Judge Edson Fachin are suspected of involvement in a massive bribery and embezzlement operation that took money out of Petrobras and funnelled it into politicians\' pockets and political party slush funds.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 1;
    	$news->title = 'Brazil corruption: Eight cabinet ministers named in Petrobras probe';
    	$news->summary = 'All 108 people named on the list released by Supreme Court Judge Edson Fachin are suspected of involvement in a massive bribery and embezzlement operation that took money out of Petrobras and funnelled it into politicians\' pockets and political party slush funds.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 2;
    	$news->title = 'IAAF clears seven more Russians to compete as neutral athletes';
    	$news->summary = 'Seven more Russian athletes have been cleared to compete as neutrals while their country remains suspended from international athletics.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 2;
    	$news->title = 'How Borussia Dortmund showed their class';
    	$news->summary = 'BBC Sport looks at how Borussia Dortmund and their fans earned respect throughout the football world on a disturbing evening for the club.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 2;
    	$news->title = 'What is Arsenal\'s worst-case scenario?';
    	$news->summary = 'After Arsenal lost 3-0 at Crystal Palace on Monday, BBC Sport looks at how bad things could get for the Gunners as they approach the end of the season.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 2;
    	$news->title = 'Shakespeare dismisses talk of Ranieri row';
    	$news->summary = 'Leicester City manager Craig Shakespeare insists there has never been a problem between him and former manager Claudio Ranieri.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 2;
    	$news->title = 'Can Leicester City\'s European dream continue?';
    	$news->summary = 'Listen to live coverage of Atletico Madrid v Leicester on Wednesday, 12 April, 19:45 BST on BBC Radio 5 live and the BBC Sport website & app.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    	$news = new News;
    	$news->category_id = 2;
    	$news->title = 'Carney finishes off great Salford move';
    	$news->summary = 'Justin Carney finishes off a great move for Salford Red Devils during their comfortable 54-18 win away against Hull FC in the Super League.';
		$news->image = 'https://www.transit.dot.gov/sites/fta.dot.gov/files/635847974891062780-425303270_news.jpg';
        $news->save();

    }
}
