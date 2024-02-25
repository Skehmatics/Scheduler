<?php

declare(strict_types=1);
// SPDX-FileCopyrightText: Derek Schmidt <im@skeh.site>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\Scheduler\Tests\Unit\Controller;

use OCA\Scheduler\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
