<?php
/**
 * EECS 448 Lab 4
 *
 * @author Dylan Egnoske
 * @date March 2, 2015
 */

// Array of Questions
$questions = [
	'q1' => [
		'question' => '1. Who will win the presidential campaign?',
		'possible_answers' => [
			'a' => 'Bernie Sanders',
			'b' => 'Hillary Clinton',
			'c' => 'Donald Trump',
			'd' => 'Dylan Egnoske'
		],
		'answer' => 'd'
	],
	'q2' => [
		'question' => '2. How many roommates do I live with?',
		'possible_answers' => [
			'a' => '1',
			'b' => '4',
			'c' => '12',
			'd'=> '23'
		],
		'answer' => 'b'
	],
	'q3' => [
		'question' => '3. What is my last name ? ',
		'possible_answers' => [
			'a' => 'Sanders',
			'b' => 'Clinton',
			'c' => 'Egnoske',
			'd'=> 'Foot'
		],
		'answer' => 'c'
	],

	'q4' => [
		'question' => '4. Who will win the presidential campaign?',
		'possible_answers' => [
			'a' => 'PHP',
			'b' => 'Java',
			'c' => 'ASM',
			'd'=> 'LUA'
		],
		'answer' => 'a'
	],
	'q5' => [
		'question' => '5. How many questions have I asked in this quiz?',
		'possible_answers' => [
			'a' => '5',
			'b' => '5!',
			'c' => '5++',
			'd' => 'count(big_foots_toes)'
		],
		'answer' => 'a'
	]

];

// Used to hold the score value
$score = 0;

// Iterate over the possible questions
foreach($questions as $number => $q) {
	// Output information regarding question
	echo 'Question ' . $q['question'] . '<br />';
	echo 'You answered: ' . $q['possible_answers'][$_GET[$number]] . '<br />';
	echo 'Correct answer: ' . $q['possible_answers'][$q['answer']] . '<br />';
	echo '<br />';

	// Check if we should increment the score
	if($_GET[$number] == $q['answer']) {
		$score++;
	}
}

// Output the score as a ratio and a percentage
echo 'You answered ' . $score . ' of 5 correctly. <br />';
echo 'You scored an ' . $score * 20 . '%<br />';

?>

