<?php

namespace DB\Base;

use \Exception;
use \PDO;
use DB\Teacher as ChildTeacher;
use DB\TeacherQuery as ChildTeacherQuery;
use DB\Map\TeacherTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'teacher' table.
 *
 *
 *
 * @method     ChildTeacherQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildTeacherQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildTeacherQuery orderBycontactPerson($order = Criteria::ASC) Order by the contact_person_name column
 * @method     ChildTeacherQuery orderBydateOfBirth($order = Criteria::ASC) Order by the dob column
 * @method     ChildTeacherQuery orderByphotoURL($order = Criteria::ASC) Order by the photo_url column
 * @method     ChildTeacherQuery orderByprimaryPhone($order = Criteria::ASC) Order by the primary_phone column
 * @method     ChildTeacherQuery orderBywhatsappNumber($order = Criteria::ASC) Order by the whatsapp_number column
 * @method     ChildTeacherQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildTeacherQuery orderBypresentAddress($order = Criteria::ASC) Order by the present_address column
 *
 * @method     ChildTeacherQuery groupById() Group by the id column
 * @method     ChildTeacherQuery groupByName() Group by the name column
 * @method     ChildTeacherQuery groupBycontactPerson() Group by the contact_person_name column
 * @method     ChildTeacherQuery groupBydateOfBirth() Group by the dob column
 * @method     ChildTeacherQuery groupByphotoURL() Group by the photo_url column
 * @method     ChildTeacherQuery groupByprimaryPhone() Group by the primary_phone column
 * @method     ChildTeacherQuery groupBywhatsappNumber() Group by the whatsapp_number column
 * @method     ChildTeacherQuery groupByEmail() Group by the email column
 * @method     ChildTeacherQuery groupBypresentAddress() Group by the present_address column
 *
 * @method     ChildTeacherQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTeacherQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTeacherQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTeacherQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTeacherQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTeacherQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTeacherQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     ChildTeacherQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     ChildTeacherQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     ChildTeacherQuery joinWithUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the User relation
 *
 * @method     ChildTeacherQuery leftJoinWithUser() Adds a LEFT JOIN clause and with to the query using the User relation
 * @method     ChildTeacherQuery rightJoinWithUser() Adds a RIGHT JOIN clause and with to the query using the User relation
 * @method     ChildTeacherQuery innerJoinWithUser() Adds a INNER JOIN clause and with to the query using the User relation
 *
 * @method     \DB\UserQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildTeacher findOne(ConnectionInterface $con = null) Return the first ChildTeacher matching the query
 * @method     ChildTeacher findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTeacher matching the query, or a new ChildTeacher object populated from the query conditions when no match is found
 *
 * @method     ChildTeacher findOneById(int $id) Return the first ChildTeacher filtered by the id column
 * @method     ChildTeacher findOneByName(string $name) Return the first ChildTeacher filtered by the name column
 * @method     ChildTeacher findOneBycontactPerson(string $contact_person_name) Return the first ChildTeacher filtered by the contact_person_name column
 * @method     ChildTeacher findOneBydateOfBirth(string $dob) Return the first ChildTeacher filtered by the dob column
 * @method     ChildTeacher findOneByphotoURL(string $photo_url) Return the first ChildTeacher filtered by the photo_url column
 * @method     ChildTeacher findOneByprimaryPhone(string $primary_phone) Return the first ChildTeacher filtered by the primary_phone column
 * @method     ChildTeacher findOneBywhatsappNumber(string $whatsapp_number) Return the first ChildTeacher filtered by the whatsapp_number column
 * @method     ChildTeacher findOneByEmail(string $email) Return the first ChildTeacher filtered by the email column
 * @method     ChildTeacher findOneBypresentAddress(string $present_address) Return the first ChildTeacher filtered by the present_address column *

 * @method     ChildTeacher requirePk($key, ConnectionInterface $con = null) Return the ChildTeacher by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTeacher requireOne(ConnectionInterface $con = null) Return the first ChildTeacher matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTeacher requireOneById(int $id) Return the first ChildTeacher filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTeacher requireOneByName(string $name) Return the first ChildTeacher filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTeacher requireOneBycontactPerson(string $contact_person_name) Return the first ChildTeacher filtered by the contact_person_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTeacher requireOneBydateOfBirth(string $dob) Return the first ChildTeacher filtered by the dob column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTeacher requireOneByphotoURL(string $photo_url) Return the first ChildTeacher filtered by the photo_url column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTeacher requireOneByprimaryPhone(string $primary_phone) Return the first ChildTeacher filtered by the primary_phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTeacher requireOneBywhatsappNumber(string $whatsapp_number) Return the first ChildTeacher filtered by the whatsapp_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTeacher requireOneByEmail(string $email) Return the first ChildTeacher filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTeacher requireOneBypresentAddress(string $present_address) Return the first ChildTeacher filtered by the present_address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTeacher[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTeacher objects based on current ModelCriteria
 * @method     ChildTeacher[]|ObjectCollection findById(int $id) Return ChildTeacher objects filtered by the id column
 * @method     ChildTeacher[]|ObjectCollection findByName(string $name) Return ChildTeacher objects filtered by the name column
 * @method     ChildTeacher[]|ObjectCollection findBycontactPerson(string $contact_person_name) Return ChildTeacher objects filtered by the contact_person_name column
 * @method     ChildTeacher[]|ObjectCollection findBydateOfBirth(string $dob) Return ChildTeacher objects filtered by the dob column
 * @method     ChildTeacher[]|ObjectCollection findByphotoURL(string $photo_url) Return ChildTeacher objects filtered by the photo_url column
 * @method     ChildTeacher[]|ObjectCollection findByprimaryPhone(string $primary_phone) Return ChildTeacher objects filtered by the primary_phone column
 * @method     ChildTeacher[]|ObjectCollection findBywhatsappNumber(string $whatsapp_number) Return ChildTeacher objects filtered by the whatsapp_number column
 * @method     ChildTeacher[]|ObjectCollection findByEmail(string $email) Return ChildTeacher objects filtered by the email column
 * @method     ChildTeacher[]|ObjectCollection findBypresentAddress(string $present_address) Return ChildTeacher objects filtered by the present_address column
 * @method     ChildTeacher[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TeacherQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \DB\Base\TeacherQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\DB\\Teacher', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTeacherQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTeacherQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTeacherQuery) {
            return $criteria;
        }
        $query = new ChildTeacherQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildTeacher|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TeacherTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TeacherTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTeacher A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, name, contact_person_name, dob, photo_url, primary_phone, whatsapp_number, email, present_address FROM teacher WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildTeacher $obj */
            $obj = new ChildTeacher();
            $obj->hydrate($row);
            TeacherTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildTeacher|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TeacherTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TeacherTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TeacherTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TeacherTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TeacherTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TeacherTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the contact_person_name column
     *
     * Example usage:
     * <code>
     * $query->filterBycontactPerson('fooValue');   // WHERE contact_person_name = 'fooValue'
     * $query->filterBycontactPerson('%fooValue%', Criteria::LIKE); // WHERE contact_person_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contactPerson The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterBycontactPerson($contactPerson = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contactPerson)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TeacherTableMap::COL_CONTACT_PERSON_NAME, $contactPerson, $comparison);
    }

    /**
     * Filter the query on the dob column
     *
     * Example usage:
     * <code>
     * $query->filterBydateOfBirth('2011-03-14'); // WHERE dob = '2011-03-14'
     * $query->filterBydateOfBirth('now'); // WHERE dob = '2011-03-14'
     * $query->filterBydateOfBirth(array('max' => 'yesterday')); // WHERE dob > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateOfBirth The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterBydateOfBirth($dateOfBirth = null, $comparison = null)
    {
        if (is_array($dateOfBirth)) {
            $useMinMax = false;
            if (isset($dateOfBirth['min'])) {
                $this->addUsingAlias(TeacherTableMap::COL_DOB, $dateOfBirth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateOfBirth['max'])) {
                $this->addUsingAlias(TeacherTableMap::COL_DOB, $dateOfBirth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TeacherTableMap::COL_DOB, $dateOfBirth, $comparison);
    }

    /**
     * Filter the query on the photo_url column
     *
     * Example usage:
     * <code>
     * $query->filterByphotoURL('fooValue');   // WHERE photo_url = 'fooValue'
     * $query->filterByphotoURL('%fooValue%', Criteria::LIKE); // WHERE photo_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $photoURL The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterByphotoURL($photoURL = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($photoURL)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TeacherTableMap::COL_PHOTO_URL, $photoURL, $comparison);
    }

    /**
     * Filter the query on the primary_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByprimaryPhone('fooValue');   // WHERE primary_phone = 'fooValue'
     * $query->filterByprimaryPhone('%fooValue%', Criteria::LIKE); // WHERE primary_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $primaryPhone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterByprimaryPhone($primaryPhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($primaryPhone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TeacherTableMap::COL_PRIMARY_PHONE, $primaryPhone, $comparison);
    }

    /**
     * Filter the query on the whatsapp_number column
     *
     * Example usage:
     * <code>
     * $query->filterBywhatsappNumber('fooValue');   // WHERE whatsapp_number = 'fooValue'
     * $query->filterBywhatsappNumber('%fooValue%', Criteria::LIKE); // WHERE whatsapp_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $whatsappNumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterBywhatsappNumber($whatsappNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($whatsappNumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TeacherTableMap::COL_WHATSAPP_NUMBER, $whatsappNumber, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TeacherTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the present_address column
     *
     * Example usage:
     * <code>
     * $query->filterBypresentAddress('fooValue');   // WHERE present_address = 'fooValue'
     * $query->filterBypresentAddress('%fooValue%', Criteria::LIKE); // WHERE present_address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $presentAddress The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function filterBypresentAddress($presentAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($presentAddress)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TeacherTableMap::COL_PRESENT_ADDRESS, $presentAddress, $comparison);
    }

    /**
     * Filter the query by a related \DB\User object
     *
     * @param \DB\User|ObjectCollection $user The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTeacherQuery The current query, for fluid interface
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof \DB\User) {
            return $this
                ->addUsingAlias(TeacherTableMap::COL_ID, $user->getId(), $comparison);
        } elseif ($user instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TeacherTableMap::COL_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type \DB\User or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \DB\UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', '\DB\UserQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTeacher $teacher Object to remove from the list of results
     *
     * @return $this|ChildTeacherQuery The current query, for fluid interface
     */
    public function prune($teacher = null)
    {
        if ($teacher) {
            $this->addUsingAlias(TeacherTableMap::COL_ID, $teacher->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the teacher table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TeacherTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TeacherTableMap::clearInstancePool();
            TeacherTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TeacherTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TeacherTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TeacherTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TeacherTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TeacherQuery
