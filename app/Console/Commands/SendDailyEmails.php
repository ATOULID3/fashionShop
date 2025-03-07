<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Mail\DailyNewsletter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailyEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send-daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send daily emails to all clients';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Retrieve all client emails
        $clients = Client::all(); // or Subscriber::all()

        // Send email to each client
        foreach ($clients as $client) {
            Mail::to($client->email)->send(new DailyNewsletter());
        }

        $this->info('Daily emails sent successfully.');
    }
}
