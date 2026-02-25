-- 8.0.12 or newer
ALTER TABLE your_table_name 
ADD COLUMN new_column_name DATATYPE DEFAULT NULL,
ALGORITHM=INSTANT,LOCK=NONE;

-- 5.6 or higher
ALTER TABLE your_table_name 
CHANGE COLUMN old_name new_name DATATYPE,
ALGORITHM=INPLACE, 
LOCK=NONE;
-- Percona Online Schema Change (pt-osc)
pt-online-schema-change --execute --alter "MODIFY COLUMN status VARCHAR(50)" D=your_db,t=your_table

-- Pro-Tip: The "Metadata Lock" Trap
SET lock_wait_timeout = 5; -- Fail if we can't get the lock in 5 seconds
ALTER TABLE ... ALGORITHM=INSTANT;
