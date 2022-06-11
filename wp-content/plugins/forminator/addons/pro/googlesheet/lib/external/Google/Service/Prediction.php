<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Prediction (v1.6).
 *
 * <p>
 * Lets you access a cloud hosted machine learning service that makes it easy to
 * build smart apps</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/prediction/docs/developer-guide" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Forminator_Google_Service_Prediction extends Forminator_Google_Service
{
  /** Manage your data and permissions in Google Cloud Storage. */
  const DEVSTORAGE_FULL_CONTROL =
      "https://www.googleapis.com/auth/devstorage.full_control";
  /** View your data in Google Cloud Storage. */
  const DEVSTORAGE_READ_ONLY =
      "https://www.googleapis.com/auth/devstorage.read_only";
  /** Manage your data in Google Cloud Storage. */
  const DEVSTORAGE_READ_WRITE =
      "https://www.googleapis.com/auth/devstorage.read_write";
  /** Manage your data in the Google Prediction API. */
  const PREDICTION =
      "https://www.googleapis.com/auth/prediction";

  public $hostedmodels;
  public $trainedmodels;
  

  /**
   * Constructs the internal representation of the Prediction service.
   *
   * @param Forminator_Google_Client $client
   */
  public function __construct(Forminator_Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'prediction/v1.6/projects/';
    $this->version = 'v1.6';
    $this->serviceName = 'prediction';

    $this->hostedmodels = new Forminator_Google_Service_Prediction_Hostedmodels_Resource(
        $this,
        $this->serviceName,
        'hostedmodels',
        array(
          'methods' => array(
            'predict' => array(
              'path' => '{project}/hostedmodels/{hostedModelName}/predict',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'hostedModelName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->trainedmodels = new Forminator_Google_Service_Prediction_Trainedmodels_Resource(
        $this,
        $this->serviceName,
        'trainedmodels',
        array(
          'methods' => array(
            'analyze' => array(
              'path' => '{project}/trainedmodels/{id}/analyze',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => '{project}/trainedmodels/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{project}/trainedmodels/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{project}/trainedmodels',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{project}/trainedmodels/list',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'predict' => array(
              'path' => '{project}/trainedmodels/{id}/predict',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => '{project}/trainedmodels/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "hostedmodels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $predictionService = new Forminator_Google_Service_Prediction(...);
 *   $hostedmodels = $predictionService->hostedmodels;
 *  </code>
 */
class Forminator_Google_Service_Prediction_Hostedmodels_Resource extends Forminator_Google_Service_Resource
{

  /**
   * Submit input and request an output against a hosted model.
   * (hostedmodels.predict)
   *
   * @param string $project The project associated with the model.
   * @param string $hostedModelName The name of a hosted model.
   * @param Forminator_Google_Input $postBody
   * @param array $optParams Optional parameters.
   * @return Forminator_Google_Service_Prediction_Output
   */
  public function predict($project, $hostedModelName, Forminator_Google_Service_Prediction_Input $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'hostedModelName' => $hostedModelName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('predict', array($params), "Forminator_Google_Service_Prediction_Output");
  }
}

/**
 * The "trainedmodels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $predictionService = new Forminator_Google_Service_Prediction(...);
 *   $trainedmodels = $predictionService->trainedmodels;
 *  </code>
 */
class Forminator_Google_Service_Prediction_Trainedmodels_Resource extends Forminator_Google_Service_Resource
{

  /**
   * Get analysis of the model and the data the model was trained on.
   * (trainedmodels.analyze)
   *
   * @param string $project The project associated with the model.
   * @param string $id The unique name for the predictive model.
   * @param array $optParams Optional parameters.
   * @return Forminator_Google_Service_Prediction_Analyze
   */
  public function analyze($project, $id, $optParams = array())
  {
    $params = array('project' => $project, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('analyze', array($params), "Forminator_Google_Service_Prediction_Analyze");
  }

  /**
   * Delete a trained model. (trainedmodels.delete)
   *
   * @param string $project The project associated with the model.
   * @param string $id The unique name for the predictive model.
   * @param array $optParams Optional parameters.
   */
  public function delete($project, $id, $optParams = array())
  {
    $params = array('project' => $project, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Check training status of your model. (trainedmodels.get)
   *
   * @param string $project The project associated with the model.
   * @param string $id The unique name for the predictive model.
   * @param array $optParams Optional parameters.
   * @return Forminator_Google_Service_Prediction_Insert2
   */
  public function get($project, $id, $optParams = array())
  {
    $params = array('project' => $project, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Forminator_Google_Service_Prediction_Insert2");
  }

  /**
   * Train a Prediction API model. (trainedmodels.insert)
   *
   * @param string $project The project associated with the model.
   * @param Forminator_Google_Insert $postBody
   * @param array $optParams Optional parameters.
   * @return Forminator_Google_Service_Prediction_Insert2
   */
  public function insert($project, Forminator_Google_Service_Prediction_Insert $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Forminator_Google_Service_Prediction_Insert2");
  }

  /**
   * List available models. (trainedmodels.listTrainedmodels)
   *
   * @param string $project The project associated with the model.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults Maximum number of results to return.
   * @opt_param string pageToken Pagination token.
   * @return Forminator_Google_Service_Prediction_PredictionList
   */
  public function listTrainedmodels($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Forminator_Google_Service_Prediction_PredictionList");
  }

  /**
   * Submit model id and request a prediction. (trainedmodels.predict)
   *
   * @param string $project The project associated with the model.
   * @param string $id The unique name for the predictive model.
   * @param Forminator_Google_Input $postBody
   * @param array $optParams Optional parameters.
   * @return Forminator_Google_Service_Prediction_Output
   */
  public function predict($project, $id, Forminator_Google_Service_Prediction_Input $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('predict', array($params), "Forminator_Google_Service_Prediction_Output");
  }

  /**
   * Add new data to a trained model. (trainedmodels.update)
   *
   * @param string $project The project associated with the model.
   * @param string $id The unique name for the predictive model.
   * @param Forminator_Google_Update $postBody
   * @param array $optParams Optional parameters.
   * @return Forminator_Google_Service_Prediction_Insert2
   */
  public function update($project, $id, Forminator_Google_Service_Prediction_Update $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Forminator_Google_Service_Prediction_Insert2");
  }
}




class Forminator_Google_Service_Prediction_Analyze extends Forminator_Google_Collection
{
  protected $collection_key = 'errors';
  protected $internal_gapi_mappings = array(
  );
  protected $dataDescriptionType = 'Forminator_Google_Service_Prediction_AnalyzeDataDescription';
  protected $dataDescriptionDataType = '';
  public $errors;
  public $id;
  public $kind;
  protected $modelDescriptionType = 'Forminator_Google_Service_Prediction_AnalyzeModelDescription';
  protected $modelDescriptionDataType = '';
  public $selfLink;


  public function setDataDescription(Forminator_Google_Service_Prediction_AnalyzeDataDescription $dataDescription)
  {
    $this->dataDescription = $dataDescription;
  }
  public function getDataDescription()
  {
    return $this->dataDescription;
  }
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setModelDescription(Forminator_Google_Service_Prediction_AnalyzeModelDescription $modelDescription)
  {
    $this->modelDescription = $modelDescription;
  }
  public function getModelDescription()
  {
    return $this->modelDescription;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
}

class Forminator_Google_Service_Prediction_AnalyzeDataDescription extends Forminator_Google_Collection
{
  protected $collection_key = 'features';
  protected $internal_gapi_mappings = array(
  );
  protected $featuresType = 'Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeatures';
  protected $featuresDataType = 'array';
  protected $outputFeatureType = 'Forminator_Google_Service_Prediction_AnalyzeDataDescriptionOutputFeature';
  protected $outputFeatureDataType = '';


  public function setFeatures($features)
  {
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  public function setOutputFeature(Forminator_Google_Service_Prediction_AnalyzeDataDescriptionOutputFeature $outputFeature)
  {
    $this->outputFeature = $outputFeature;
  }
  public function getOutputFeature()
  {
    return $this->outputFeature;
  }
}

class Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeatures extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $categoricalType = 'Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesCategorical';
  protected $categoricalDataType = '';
  public $index;
  protected $numericType = 'Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesNumeric';
  protected $numericDataType = '';
  protected $textType = 'Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesText';
  protected $textDataType = '';


  public function setCategorical(Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesCategorical $categorical)
  {
    $this->categorical = $categorical;
  }
  public function getCategorical()
  {
    return $this->categorical;
  }
  public function setIndex($index)
  {
    $this->index = $index;
  }
  public function getIndex()
  {
    return $this->index;
  }
  public function setNumeric(Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesNumeric $numeric)
  {
    $this->numeric = $numeric;
  }
  public function getNumeric()
  {
    return $this->numeric;
  }
  public function setText(Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesText $text)
  {
    $this->text = $text;
  }
  public function getText()
  {
    return $this->text;
  }
}

class Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesCategorical extends Forminator_Google_Collection
{
  protected $collection_key = 'values';
  protected $internal_gapi_mappings = array(
  );
  public $count;
  protected $valuesType = 'Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesCategoricalValues';
  protected $valuesDataType = 'array';


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setValues($values)
  {
    $this->values = $values;
  }
  public function getValues()
  {
    return $this->values;
  }
}

class Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesCategoricalValues extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $count;
  public $value;


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesNumeric extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $count;
  public $mean;
  public $variance;


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setMean($mean)
  {
    $this->mean = $mean;
  }
  public function getMean()
  {
    return $this->mean;
  }
  public function setVariance($variance)
  {
    $this->variance = $variance;
  }
  public function getVariance()
  {
    return $this->variance;
  }
}

class Forminator_Google_Service_Prediction_AnalyzeDataDescriptionFeaturesText extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $count;


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
}

class Forminator_Google_Service_Prediction_AnalyzeDataDescriptionOutputFeature extends Forminator_Google_Collection
{
  protected $collection_key = 'text';
  protected $internal_gapi_mappings = array(
  );
  protected $numericType = 'Forminator_Google_Service_Prediction_AnalyzeDataDescriptionOutputFeatureNumeric';
  protected $numericDataType = '';
  protected $textType = 'Forminator_Google_Service_Prediction_AnalyzeDataDescriptionOutputFeatureText';
  protected $textDataType = 'array';


  public function setNumeric(Forminator_Google_Service_Prediction_AnalyzeDataDescriptionOutputFeatureNumeric $numeric)
  {
    $this->numeric = $numeric;
  }
  public function getNumeric()
  {
    return $this->numeric;
  }
  public function setText($text)
  {
    $this->text = $text;
  }
  public function getText()
  {
    return $this->text;
  }
}

class Forminator_Google_Service_Prediction_AnalyzeDataDescriptionOutputFeatureNumeric extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $count;
  public $mean;
  public $variance;


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setMean($mean)
  {
    $this->mean = $mean;
  }
  public function getMean()
  {
    return $this->mean;
  }
  public function setVariance($variance)
  {
    $this->variance = $variance;
  }
  public function getVariance()
  {
    return $this->variance;
  }
}

class Forminator_Google_Service_Prediction_AnalyzeDataDescriptionOutputFeatureText extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $count;
  public $value;


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Forminator_Google_Service_Prediction_AnalyzeModelDescription extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $confusionMatrix;
  public $confusionMatrixRowTotals;
  protected $modelinfoType = 'Forminator_Google_Service_Prediction_Insert2';
  protected $modelinfoDataType = '';


  public function setConfusionMatrix($confusionMatrix)
  {
    $this->confusionMatrix = $confusionMatrix;
  }
  public function getConfusionMatrix()
  {
    return $this->confusionMatrix;
  }
  public function setConfusionMatrixRowTotals($confusionMatrixRowTotals)
  {
    $this->confusionMatrixRowTotals = $confusionMatrixRowTotals;
  }
  public function getConfusionMatrixRowTotals()
  {
    return $this->confusionMatrixRowTotals;
  }
  public function setModelinfo(Forminator_Google_Service_Prediction_Insert2 $modelinfo)
  {
    $this->modelinfo = $modelinfo;
  }
  public function getModelinfo()
  {
    return $this->modelinfo;
  }
}

class Forminator_Google_Service_Prediction_Input extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $inputType = 'Forminator_Google_Service_Prediction_InputInput';
  protected $inputDataType = '';


  public function setInput(Forminator_Google_Service_Prediction_InputInput $input)
  {
    $this->input = $input;
  }
  public function getInput()
  {
    return $this->input;
  }
}

class Forminator_Google_Service_Prediction_InputInput extends Forminator_Google_Collection
{
  protected $collection_key = 'csvInstance';
  protected $internal_gapi_mappings = array(
  );
  public $csvInstance;


  public function setCsvInstance($csvInstance)
  {
    $this->csvInstance = $csvInstance;
  }
  public function getCsvInstance()
  {
    return $this->csvInstance;
  }
}

class Forminator_Google_Service_Prediction_Insert extends Forminator_Google_Collection
{
  protected $collection_key = 'utility';
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $modelType;
  public $sourceModel;
  public $storageDataLocation;
  public $storagePMMLLocation;
  public $storagePMMLModelLocation;
  protected $trainingInstancesType = 'Forminator_Google_Service_Prediction_InsertTrainingInstances';
  protected $trainingInstancesDataType = 'array';
  public $utility;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }
  public function getModelType()
  {
    return $this->modelType;
  }
  public function setSourceModel($sourceModel)
  {
    $this->sourceModel = $sourceModel;
  }
  public function getSourceModel()
  {
    return $this->sourceModel;
  }
  public function setStorageDataLocation($storageDataLocation)
  {
    $this->storageDataLocation = $storageDataLocation;
  }
  public function getStorageDataLocation()
  {
    return $this->storageDataLocation;
  }
  public function setStoragePMMLLocation($storagePMMLLocation)
  {
    $this->storagePMMLLocation = $storagePMMLLocation;
  }
  public function getStoragePMMLLocation()
  {
    return $this->storagePMMLLocation;
  }
  public function setStoragePMMLModelLocation($storagePMMLModelLocation)
  {
    $this->storagePMMLModelLocation = $storagePMMLModelLocation;
  }
  public function getStoragePMMLModelLocation()
  {
    return $this->storagePMMLModelLocation;
  }
  public function setTrainingInstances($trainingInstances)
  {
    $this->trainingInstances = $trainingInstances;
  }
  public function getTrainingInstances()
  {
    return $this->trainingInstances;
  }
  public function setUtility($utility)
  {
    $this->utility = $utility;
  }
  public function getUtility()
  {
    return $this->utility;
  }
}

class Forminator_Google_Service_Prediction_Insert2 extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $created;
  public $id;
  public $kind;
  protected $modelInfoType = 'Forminator_Google_Service_Prediction_Insert2ModelInfo';
  protected $modelInfoDataType = '';
  public $modelType;
  public $selfLink;
  public $storageDataLocation;
  public $storagePMMLLocation;
  public $storagePMMLModelLocation;
  public $trainingComplete;
  public $trainingStatus;


  public function setCreated($created)
  {
    $this->created = $created;
  }
  public function getCreated()
  {
    return $this->created;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setModelInfo(Forminator_Google_Service_Prediction_Insert2ModelInfo $modelInfo)
  {
    $this->modelInfo = $modelInfo;
  }
  public function getModelInfo()
  {
    return $this->modelInfo;
  }
  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }
  public function getModelType()
  {
    return $this->modelType;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  public function setStorageDataLocation($storageDataLocation)
  {
    $this->storageDataLocation = $storageDataLocation;
  }
  public function getStorageDataLocation()
  {
    return $this->storageDataLocation;
  }
  public function setStoragePMMLLocation($storagePMMLLocation)
  {
    $this->storagePMMLLocation = $storagePMMLLocation;
  }
  public function getStoragePMMLLocation()
  {
    return $this->storagePMMLLocation;
  }
  public function setStoragePMMLModelLocation($storagePMMLModelLocation)
  {
    $this->storagePMMLModelLocation = $storagePMMLModelLocation;
  }
  public function getStoragePMMLModelLocation()
  {
    return $this->storagePMMLModelLocation;
  }
  public function setTrainingComplete($trainingComplete)
  {
    $this->trainingComplete = $trainingComplete;
  }
  public function getTrainingComplete()
  {
    return $this->trainingComplete;
  }
  public function setTrainingStatus($trainingStatus)
  {
    $this->trainingStatus = $trainingStatus;
  }
  public function getTrainingStatus()
  {
    return $this->trainingStatus;
  }
}

class Forminator_Google_Service_Prediction_Insert2ModelInfo extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $classWeightedAccuracy;
  public $classificationAccuracy;
  public $meanSquaredError;
  public $modelType;
  public $numberInstances;
  public $numberLabels;


  public function setClassWeightedAccuracy($classWeightedAccuracy)
  {
    $this->classWeightedAccuracy = $classWeightedAccuracy;
  }
  public function getClassWeightedAccuracy()
  {
    return $this->classWeightedAccuracy;
  }
  public function setClassificationAccuracy($classificationAccuracy)
  {
    $this->classificationAccuracy = $classificationAccuracy;
  }
  public function getClassificationAccuracy()
  {
    return $this->classificationAccuracy;
  }
  public function setMeanSquaredError($meanSquaredError)
  {
    $this->meanSquaredError = $meanSquaredError;
  }
  public function getMeanSquaredError()
  {
    return $this->meanSquaredError;
  }
  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }
  public function getModelType()
  {
    return $this->modelType;
  }
  public function setNumberInstances($numberInstances)
  {
    $this->numberInstances = $numberInstances;
  }
  public function getNumberInstances()
  {
    return $this->numberInstances;
  }
  public function setNumberLabels($numberLabels)
  {
    $this->numberLabels = $numberLabels;
  }
  public function getNumberLabels()
  {
    return $this->numberLabels;
  }
}

class Forminator_Google_Service_Prediction_InsertTrainingInstances extends Forminator_Google_Collection
{
  protected $collection_key = 'csvInstance';
  protected $internal_gapi_mappings = array(
  );
  public $csvInstance;
  public $output;


  public function setCsvInstance($csvInstance)
  {
    $this->csvInstance = $csvInstance;
  }
  public function getCsvInstance()
  {
    return $this->csvInstance;
  }
  public function setOutput($output)
  {
    $this->output = $output;
  }
  public function getOutput()
  {
    return $this->output;
  }
}

class Forminator_Google_Service_Prediction_Output extends Forminator_Google_Collection
{
  protected $collection_key = 'outputMulti';
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $kind;
  public $outputLabel;
  protected $outputMultiType = 'Forminator_Google_Service_Prediction_OutputOutputMulti';
  protected $outputMultiDataType = 'array';
  public $outputValue;
  public $selfLink;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOutputLabel($outputLabel)
  {
    $this->outputLabel = $outputLabel;
  }
  public function getOutputLabel()
  {
    return $this->outputLabel;
  }
  public function setOutputMulti($outputMulti)
  {
    $this->outputMulti = $outputMulti;
  }
  public function getOutputMulti()
  {
    return $this->outputMulti;
  }
  public function setOutputValue($outputValue)
  {
    $this->outputValue = $outputValue;
  }
  public function getOutputValue()
  {
    return $this->outputValue;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
}

class Forminator_Google_Service_Prediction_OutputOutputMulti extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $label;
  public $score;


  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setScore($score)
  {
    $this->score = $score;
  }
  public function getScore()
  {
    return $this->score;
  }
}

class Forminator_Google_Service_Prediction_PredictionList extends Forminator_Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Forminator_Google_Service_Prediction_Insert2';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $selfLink;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
}

class Forminator_Google_Service_Prediction_Update extends Forminator_Google_Collection
{
  protected $collection_key = 'csvInstance';
  protected $internal_gapi_mappings = array(
  );
  public $csvInstance;
  public $output;


  public function setCsvInstance($csvInstance)
  {
    $this->csvInstance = $csvInstance;
  }
  public function getCsvInstance()
  {
    return $this->csvInstance;
  }
  public function setOutput($output)
  {
    $this->output = $output;
  }
  public function getOutput()
  {
    return $this->output;
  }
}
