<?php
namespace Org\Impavidly\Backup\Observers;

class MysqlDump extends Common {
    public function update(\SplSubject $subject) {
        $command = "{$subject->mysqlDumpPath} -h {$subject->mysqlHost} -u {$subject->mysqlUser} --password={$subject->mysqlPassword} {$subject->mysqlDatabase} > {$subject->outputPath}/{$subject->mysqlHost}_{$subject->mysqlDatabase}.sql";
        $status = $this->execute($subject, $command);

        return $status;
    }
}