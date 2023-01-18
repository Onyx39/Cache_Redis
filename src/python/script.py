import redis
import sys

id = str(sys.argv[1])

bd_redis = redis.StrictRedis(password="redismaster", db=1)
if bd_redis.get("exists " + id) == 1 :
    compteur = bd_redis.get("get " + id)
    timeout = bd_redis.get("ttl " + id)
    print(compteur, timeout)
    if compteur <= 10 and timeout > 0 :
        bd_redis.execute_command("incr " + id)
        exit(1)
    else : exit(0)

else :
    bd_redis.execute_command("set " + id + " 1")
    bd_redis.execute_command("expire " + id + " 600")
    exit(1)
