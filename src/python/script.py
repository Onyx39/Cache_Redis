import redis


bd_redis = redis.Redis(db=1)
#print(bd_redis.get_connection_kwargs)

bd_test = redis.StrictRedis(password="redismaster",db=2)
bd_test.mset({"Valentin" : 1, 'temps' : 20})
print(bd_test.get("Valentin"))




def test_connection_autorisé () :
    return True



def mettre_connection_en_cache () :
    return True