<?php namespace Tests\APIs;
use App\Properties\User\UserIdProperty;
use Tests\ApiTestTrait;
use Tests\UnitTestCase;
use Throwable;

class VoteApiTest extends UnitTestCase
{
    use ApiTestTrait;
    public function setUp(): void
    {
        $this->markTestSkipped('Not implemented yet.');
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /**
     * @throws Throwable
     */
    public function test_create_vote()
    {
        $this->deleteAllRecordsForClassBeingTested();
        $input = $this->getFakeDataForClassBeingTested();
        $this->createAndGetApiV6(UserIdProperty::USER_ID_TEST_USER, $input);
        $id = $this->getIdFromTestResponse();
        $newValue = -1;
        $modifiedAttribute = 'value';
        $this->updateAttributeApiV6([$newValue => $modifiedAttribute], $id);
        $this->deleteApiV6();

    }


}
