<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Buttons\Github;
use App\Buttons\GithubButton;
class QmGlobalStudiesGithubButton extends GithubButton {
	public $image = 'https://avatars3.githubusercontent.com/u/2808553?v=4';
	public $fontAwesome = 'fab fa-github';
	public $action = 'https://api.github.com/repos/mikepsinn/qm-global-studies';
	public $id = 'github-button';
	public $link = 'https://api.github.com/repos/mikepsinn/qm-global-studies';
	public $text = 'Qm Global Studies';
	public $title = 'Qm Global Studies';
	public $menus = [];
}
