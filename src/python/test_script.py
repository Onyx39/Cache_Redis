import redis

id = str(4)

bd_redis = redis.StrictRedis(password="redismaster", db=1)
print(bd_redis.execute_command("exists " + id))
if bd_redis.execute_command("exists " + id) == 1 :
    compteur = bd_redis.execute_command("get " + id)
    timeout = bd_redis.execute_command("ttl " + id)
    print(compteur, timeout)
    if int(compteur) <= 10 and timeout > 0 :
        print("coucou")
        bd_redis.execute_command("incr " + id)
        print(1)
        exit(1)
    else : 
        print(0)
        exit(0)
else :
    print("not exist")
    bd_redis.execute_command("set " + id + " 1")
    bd_redis.execute_command("expire " + id + " 600")
    print(0)
    exit(1)

