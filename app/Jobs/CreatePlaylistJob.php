<?php

namespace App\Jobs;

use App\Actions\CreatePlaylistAction;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreatePlaylistJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public string $playlistId, public string $startingAt)
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(CreatePlaylistAction $action)
    {
        $action($this->playlistId, $this->startingAt);
    }
}
