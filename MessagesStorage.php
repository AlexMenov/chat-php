<?php

class MessagesStorage
{
    private array $messages;
    public function __construct () {
        $this->createMessagesFileIfIsNotExists();
        $this->parseFile();
    }
    private function createMessagesFileIfIsNotExists(): void
    {
        if (!file_exists(MESSAGES_PATH)) {
            file_put_contents(MESSAGES_PATH, '{}');
        }
    }

    private function parseFile(): void
    {
        $contents = file_get_contents(MESSAGES_PATH);
        $this->messages = json_decode($contents, true);
    }

    public function getMessages (): array
    {
        return $this->messages;
    }

    public function addMessage($message): void
    {
        $this->messages[] = $message;
    }

    public function saveMessages(): void
    {
        file_put_contents(MESSAGES_PATH, json_encode($this->messages));
    }

    public function __destruct ()
    {
        $this->saveMessages();
    }

}